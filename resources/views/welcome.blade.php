@extends('partials.wrapper')

@section('title', 'Gane')

@section('content')

    <div class="container">

        <div class="row align-center mt-5">
            <div class="col-xs-12 col-sm-8 mx-auto">

                @include('partials.messages')

            </div>
        </div>

        <div class="row align-center">
            <div class="col-xs-12 col-sm-8 mx-auto">

                <div class="card my-5">
                    <div class="card-header">
                        Registrate Ahora
                    </div>
                    <div class="card-body">

                        <form action="{{ url('/betplay') }}" method="post" onsubmit="onSubmit()">

                            @csrf

                            {{-- Nombre completo --}}
                            <div class="form-group">
                                <label
                                    for="name">
                                    <strong class="text-danger">*</strong>
                                    Nombre completo</label>
                                <input
                                    required
                                    maxlength="50"
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    id="name"
                                    name="name"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Cédula --}}
                            <div class="form-group">
                                <label
                                    for="document">
                                    <strong class="text-danger">*</strong>
                                    Cédula</label>
                                <input
                                    required
                                    minlength="8"
                                    maxlength="10"
                                    type="text"
                                    class="form-control @error('document') is-invalid @enderror"
                                    id="document"
                                    name="document"
                                    value="{{ old('document') }}">
                                @error('document')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Correo electrónico --}}
                            <div class="form-group">
                                <label
                                    for="email">
                                    <strong class="text-danger">*</strong>
                                    Correo electrónico</label>
                                <input
                                    required
                                    maxlength="50"
                                    type="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    id="email"
                                    name="email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Celular --}}
                            <div class="form-group">
                                <label
                                    for="phone">
                                    <strong class="text-danger">*</strong>
                                    Celular</label>
                                <input
                                    required
                                    maxlength="30"
                                    type="text"
                                    class="form-control @error('phone') is-invalid @enderror"
                                    id="phone"
                                    name="phone"
                                    value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Dirección --}}
                            <div class="form-group">
                                <label
                                    for="address">
                                    <strong class="text-danger">*</strong>
                                    Dirección</label>
                                <input
                                    required
                                    maxlength="100"
                                    type="text"
                                    class="form-control @error('address') is-invalid @enderror"
                                    id="address"
                                    name="address"
                                    value="{{ old('address') }}">
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Conozco y acepto la política de datos de REDCOLSA. --}}
                            <div class="form-group form-check">
                                <input
                                    @if (old('accept_terms_and_conditions')) checked @endif
                                    required
                                    type="checkbox"
                                    class="form-check-input @error('accept_terms_and_conditions') is-invalid @enderror"
                                    name="accept_terms_and_conditions"
                                    id="accept_terms_and_conditions"
                                    value="1">
                                <label
                                    class="form-check-label"
                                    for="accept_terms_and_conditions">
                                    <strong class="text-danger">*</strong>
                                    Conozco y acepto la política de datos de REDCOLSA.</label>
                                @error('accept_terms_and_conditions')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Soy mayor de edad --}}
                            <div class="form-group form-check">
                                <input
                                    @if (old('of_legal_age')) checked @endif
                                    required
                                    type="checkbox"
                                    class="form-check-input @error('of_legal_age') is-invalid @enderror"
                                    name="of_legal_age"
                                    id="of_legal_age"
                                    value="1">
                                <label
                                    class="form-check-label"
                                    for="of_legal_age">
                                    <strong class="text-danger">*</strong>
                                    Soy mayor de edad</label>
                                @error('of_legal_age')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Ya tengo cuenta en BetPlay --}}
                            <div class="form-group form-check">
                                <input
                                    @if (old('has_betplay_account')) checked @endif
                                    type="checkbox"
                                    class="form-check-input @error('has_betplay_account') is-invalid @enderror"
                                    name="has_betplay_account"
                                    id="has_betplay_account"
                                    value="1">
                                <label
                                    class="form-check-label"
                                    for="has_betplay_account">
                                    Ya tengo cuenta en BetPlay</label>
                                @error('has_betplay_account')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- Submit --}}
                            <div class="form-group text-right">
                                <button
                                    id="btn-submit"
                                    type="submit"
                                    class="btn btn-primary">
                                    Registrar</button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection

@section('footer-scripts')

    <script>

        function onSubmit() {
            var button = document.getElementById('btn-submit');
            button.setAttribute('disabled', true);
            button.innerText = 'Enviando...';

            var count = 1;

            setInterval(function() {
                let dots = '';

                for (let index = 0; index < count; index++) {
                    dots += '.';
                }

                count++;

                if (count == 4) count = 1;

                button.innerText = 'Enviando' + dots;

            }, 500);

            console.log('ok');

            return true;
        }

    </script>

@endsection