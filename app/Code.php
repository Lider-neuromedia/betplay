<?php

namespace App;

use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use League\Csv\Reader;
use League\Csv\Writer;
use Carbon\Carbon;
use App\Mail\GoalAchieved;
use App\Client;

class Code extends Model
{
    protected $fillable = [
        'consecutive',
        'coupon',
        'value',
        'department',
        'activation_date_start',
        'life',
        'activation_date_end',
        'campaign',
        'observation',
    ];

    protected $dates = [
        'activation_date_start',
        'activation_date_end',
    ];

    public function client()
    {
        return $this->hasOne('App\Client');
    }

    public static function assignCodeToClient(Client $client)
    {
        $code = Code::whereDoesntHave('client')
            ->orderBy('consecutive', 'asc')
            ->first();

        if ($code == null) {

            throw new \Exception("Ya no hay códigos disponibles", 999);

        }

        $client->code()->associate($code);
        $client->save();

        self::generateReports();
    }

    public static function loadCodesFromCSV()
    {
        $csv = Reader::createFromPath(storage_path('app/codes.csv'), 'r')->setHeaderOffset(0);

        foreach ($csv as $record) {

            $record['Valor'] = trim($record['Valor']);
            $record['Valor'] = str_replace('.','', $record['Valor']);
            $record['Valor'] = str_replace(',','', $record['Valor']);
            $record['Fecha Activación'] = Carbon::createFromFormat('d/m/Y h:i:s A', $record['Fecha Activación']);
            $record['Fecha Final Vig'] = Carbon::createFromFormat('d/m/Y h:i:s A', $record['Fecha Final Vig']);

            Code::create([
                'consecutive' => $record['Consecutivo'],
                'coupon' => $record['Cupon'],
                'value' => $record['Valor'],
                'department' => $record['Departamento'],
                'activation_date_start' => $record['Fecha Activación'],
                'life' => $record['Vigencia'],
                'activation_date_end' => $record['Fecha Final Vig'],
                'campaign' => $record['Campaña'],
                'observation' => $record['Observaciones'],
            ]);

        }
    }

    public static function generateReports()
    {
        $count = Client::whereHas('code')->count();
        $goal = 500;

        do {

            $report_path = "reports/meta{$goal}.csv";
            $exists_report = \Storage::exists($report_path);

            if ($count >= $goal && $exists_report == false) {

                self::generate500GoalReport($report_path, $goal - 499);

                $emails = explode(',', env('MAILS_NEUROMEDIA', ''));
                Mail::to($emails)->send(new GoalAchieved($goal, $report_path));

            }

            $goal += 500;

        } while($goal <= $count);
    }

    private static function generate500GoalReport($path, $start)
    {
        $date = \Carbon\Carbon::now()->format('d/m/Y H:i');
        \Log::info("Creando Reporte: $start, $date");

        $clients = Client::select('id', 'name', 'document', 'email', 'phone', 'address', 'has_betplay_account', 'code_id')
            ->whereHas('code')
            ->with([
                'code' => function($query) {
                    return $query->select('id', 'coupon');
                }
            ])
            ->offset($start - 1)
            ->limit(500)
            ->get();

        $writer = Writer::createFromPath(storage_path("app/{$path}"), 'w+');
        $writer->setNewline("\r\n");

        $writer->insertOne([
            'Nombre',
            'Cédula',
            'Correo',
            'Celular',
            'Dirección',
            'Tiene BetPlay',
            'Cupón',
        ]);

        foreach ($clients as $client) {

            $writer->insertOne([
                $client->name,
                $client->document,
                $client->email,
                $client->phone,
                $client->address,
                $client->has_betplay_account ? 'Si' : 'No',
                $client->code->coupon,
            ]);

        }
    }
}
