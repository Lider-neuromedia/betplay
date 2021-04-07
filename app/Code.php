<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use League\Csv\Reader;
use Carbon\Carbon;
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

    public function client()
    {
        return $this->hasOne('App\Client');
    }

    public static function asignCodeToClient(Client $client)
    {
        $code = Code::whereDoesntHave('client')
            ->orderBy('consecutive', 'asc')
            ->first();

        if ($code == null) {

            throw new \Exception("No hay códigos disponibles", 1);

        }

        $client->code()->associate($code);
        $client->save();
    }

    public static function loadCodesFromCSV()
    {
        $csv = Reader::createFromPath(storage_path('app/codes.csv'), 'r')->setHeaderOffset(0);

        foreach ($csv as $record) {

            $record['Valor'] = trim($record['Valor']);
            $record['Valor'] = str_replace('.','', $record['Valor']);
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
}
