@extends('emails.wrapper')

@section('title', 'Código de ganador')

@section('content')

    <table width="100%" bgcolor="#f6f8f1" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td>Nombre</td>
            <td>{{ $client->name }}</td>
        </tr>
        <tr>
            <td>Documento</td>
            <td>{{ $client->document }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $client->email }}</td>
        </tr>
        <tr>
            <td>Teléfono</td>
            <td>{{ $client->phone }}</td>
        </tr>
        <tr>
            <td>Dirección</td>
            <td>{{ $client->address }}</td>
        </tr>
    </table>

    <br>
    <br>

    <table width="100%" bgcolor="#f6f8f1" border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td>Consecutivo</td>
            <td>{{ $code->consecutive }}</td>
        </tr>
        <tr>
            <td>Código</td>
            <td>{{ $code->coupon }}</td>
        </tr>
        <tr>
            <td>Valor</td>
            <td>${{ number_format($code->value, 0, '.', ',') }}</td>
        </tr>
        <tr>
            <td>Fecha de activación</td>
            <td>{{ $code->activation_date_start->format('d/m/Y h:i A') }}</td>
        </tr>
        <tr>
            <td>Vigencia</td>
            <td>{{ $code->life }} días</td>
        </tr>
        <tr>
            <td>Fecha final de vigencia</td>
            <td>{{ $code->activation_date_end->format('d/m/Y h:i A') }}</td>
        </tr>
    </table>

@endsection