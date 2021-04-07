<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Code;

class Client extends Model
{
    protected $fillable = [
        'name',
        'document',
        'email',
        'phone',
        'address',
        'of_legal_age',
        'accept_terms_and_conditions',
        'has_betplay_account'
    ];

    public function code()
    {
        return $this->belongsTo('App\Code');
    }

    public static function testCreateClients($count)
    {
        try {

            for ($i=0; $i < $count; $i++) {

                $client = factory(Client::class)->make();
                $clients_count = Client::where('email', $client->email)
                    ->orWhere('document', $client->document)
                    ->count();

                if ($clients_count === 0) {

                    $client->save();

                    if (!$client->has_betplay_account) {

                        Code::assignCodeToClient($client);

                    }
                }

            }

        } catch (\Exception $ex) {

            \Log::info($ex->getMessage());
            \Log::info($ex->getTraceAsString());

        }

        $count_clients = Client::count();
        $clients_with_code = Client::whereHas('code')->count();
        $clients_without_code = Client::whereDoesntHave('code')->count();
        $clients_code_with_betplay = Client::whereHas('code')->where('has_betplay_account', true)->count();
        $clients_code_without_betplay = Client::whereHas('code')->where('has_betplay_account', false)->count();

        return (Object) [
            'Total clientes' => $count_clients,
            'Clientes con código' => $clients_with_code,
            'Clientes sin código' => $clients_without_code,
            'Cliente con código con betplay' => $clients_code_with_betplay,
            'Cliente con código sin betplay' => $clients_code_without_betplay,
        ];
    }

}
