<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Requests\ContestantRequest;
use App\Mail\CodeAssigned;
use App\Client;
use App\Code;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function store(ContestantRequest $request)
    {
        try {

            \DB::beginTransaction();

            $data = $request->only('name', 'document', 'email', 'phone', 'address');
            $data['accept_terms_and_conditions'] = $request->get('accept_terms_and_conditions') == 1;
            $data['of_legal_age'] = $request->get('of_legal_age') == 1;
            $data['has_betplay_account'] = $request->get('has_betplay_account') == 1;

            $client = Client::create($data);

            if (!$client->has_betplay_account) {

                Code::assignCodeToClient($client);

                session()->flash('message-success', '
                    Recibirás un correo con un código alfanumérico,
                    el cual deberás registrar en www.betplay.com.co para redimir el cupón.
                    El código alfanumérico enviado al correo registrado sólo se activará en cuenta nueva de BetPlay, no aplica para usuarios antiguos.
                ');

            } else {

                session()->flash('message-warning', '
                    Ya eres usuario de BetPlay, el registro es solo para usuarios nuevos.
                    El código alfanumérico enviado al correo registrado sólo se activará en cuenta nueva de BetPlay, no aplica para usuarios antiguos.
                ');

            }

            Mail::to($client->email)->send(new CodeAssigned($client));

            \DB::commit();

            return redirect()->action('WelcomeController@index');

        } catch (\Exception $ex) {

            \Log::info($ex->getMessage());
            \Log::info($ex->getTraceAsString());

            \DB::rollBack();

            if ($ex->getCode() == 999) {

                session()->flash('message-warning', $ex->getMessage());

            } else {

                session()->flash('message-warning', 'Error interno. No se pudo guardar su información.');

            }

            return redirect()
                ->back()
                ->withInput($request->input());

        }
    }
}
