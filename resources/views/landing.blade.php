<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=yes, width=device-width, initial-scale=1.0, minimum-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="Cali vive la experiencia BetPlay. Apuéstale a tu pasión y llévate una recarga de 5 mil pesos con Gane BetPlay">
    <meta name="google-site-verification" content="FOtzheHu5IARVjNLuJTp0oe4iOo_TPl8pk5Glq0_i-s" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <title>Llévate una recarga con Gane</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.15.2/dist/sweetalert2.all.min.js"></script>

    <link rel=StyleSheet href="{{ asset('css/style.css') }}" type="text/css">
    <!--<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/slider.js') }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-194297014-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-194297014-1');
    </script>
</head>
<body>

    @include('partials.messages')

    <div class="content-social-bar">
        <a class="hidden-xs hidden-sm redes fb" href="https://www.facebook.com/REDCOLSA" target="_blank">
        </a>
        <a class="hidden-xs hidden-sm redes ins" href="https://www.instagram.com/ganecali/" target="_blank">
        </a>
        <a class="hidden-xs hidden-sm redes twit" href="https://twitter.com/GaneCali" target="_blank">
        </a>
        <a class="hidden-xs hidden-sm redes youtub" href="https://www.youtube.com/user/ApuestasGane" target="_blank">
        </a>
    </div>
    <div class="logoGane">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="burbujaGane">
                        <img class="logo-burbuja" src="{{ asset('images/GANE.png') }}" alt="Logo">
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
	<div id="vive-experiencia" class="background-1 mt-5 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-7">
					<img class="img-fluid d-block mx-auto" src="{{ asset('images/CALIVIVE.png') }}" alt="Cali vive">
                    <div id="myCarousel" class="mt-4 mb-4 carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner w-100" role="listbox">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <img class="img-fluid mx-auto d-block" src="{{ asset('images/experiencia1.png') }}" alt="Experiencia 1">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <img class="img-fluid mx-auto d-block" src="{{ asset('images/experiencia2.png') }}" alt="Experiencia 2">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <img class="img-fluid mx-auto d-block" src="{{ asset('images/experiencia3.png') }}" alt="Experiencia 3">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--
                        <a class="carousel-control-prev w-auto" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next w-auto" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                        -->
                    </div>
                    <img class="img-fluid wow animate__animated animate__fadeInLeft" src="{{ asset('images/BETPLAYPNG.png') }}" alt="Betplay">
                    <img class="img-fluid wow animate__animated animate__fadeInUp" src="{{ asset('images/5mil.png') }}" alt="Llévate una recarga">
				</div>
				<div class="col-xs-12 col-md-5">
					<div class="topForm">
                        <p id="texto2">¡Regístrate ahora!</p>
                    </div>
					<div class="backgroundForm">
						<form action="{{ url('/betplay') }}" method="post" onsubmit="onSubmit()" id="formulario1" name="formulario1" class="mainForm">

                            @csrf

                            {{-- Nombre completo --}}
                            <label
                                for="name"
                                class="@error('name') text-warning @enderror">
                                Nombre Completo</label>
                                @error('name')
                                    <div class="text-warning font-weight-bold">
                                        <small>{{ $message }}</small>
                                    </div>
                                @enderror
                            <input
                                required
                                class="@error('name') border border-warning @enderror"
                                maxlength="50"
                                value="{{ old('name') }}"
                                type="text"
                                id="name"
                                name="name"><br>



                            {{-- Cédula --}}
                            <label
                                for="document"
                                class="@error('document') text-warning @enderror">
                                Cédula</label>
                            @error('document')
                                <div class="text-warning font-weight-bold">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                            <input
                                required
                                class="@error('document') border border-warning @enderror"
                                minlength="6"
                                maxlength="10"
                                value="{{ old('document') }}"
                                type="text"
                                id="document"
                                name="document"><br>



                            {{-- Correo electrónico --}}
                            <label
                                for="email"
                                class="@error('email') text-warning @enderror">
                                Correo electrónico</label>
                                @error('email')
                                    <div class="text-warning font-weight-bold">
                                        <small>{{ $message }}</small>
                                    </div>
                                @enderror
                            <input
                                required
                                class="@error('email') border border-warning @enderror"
                                maxlength="50"
                                value="{{ old('email') }}"
                                type="email"
                                id="email"
                                name="email"><br>



                            {{-- Celular --}}
                            <label
                                for="phone"
                                class="@error('phone') text-warning @enderror">
                                Celular</label>
                            @error('phone')
                                <div class="text-warning font-weight-bold">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                            <input
                                required
                                maxlength="30"
                                class="@error('phone') border border-warning @enderror"
                                value="{{ old('phone') }}"
                                type="text"
                                id="phone"
                                name="phone"><br>



                            {{-- Dirección --}}
                            <label
                                for="address"
                                class="@error('address') text-warning @enderror">
                                Dirección</label>
                            @error('address')
                                <div class="text-warning font-weight-bold">
                                    <small>{{ $message }}</small>
                                </div>
                            @enderror
                            <input
                                required
                                maxlength="100"
                                class="@error('address') border border-warning @enderror"
                                value="{{ old('address') }}"
                                type="text"
                                id="address"
                                name="address"><br>



                            {{-- Ya tengo cuenta en BetPlay --}}
                            <div class="has_betplay">
                                <input
                                    @if (old('has_betplay_account') == '1') checked @endif
                                    type="radio"
                                    name="has_betplay_account"
                                    id="has_betplay_account_1"
                                    value="1"
                                    required>
                                <label for="has_betplay_account_1">
                                    <span class="radio_checkbox"></span>
                                    Tengo cuenta en BetPlay
                                </label>

                                <input
                                    @if (old('has_betplay_account') == '0') checked @endif
                                    type="radio"
                                    name="has_betplay_account"
                                    id="has_betplay_account_0"
                                    value="0"
                                    required>
                                <label for="has_betplay_account_0">
                                    <span class="radio_checkbox"></span>
                                    No tengo cuenta en BetPlay
                                </label>
                            </div>



                            {{-- Conozco y acepto la política de datos de REDCOLSA. --}}
                            <label
                                class="@error('accept_terms_and_conditions') text-warning @enderror"
                                style="color: #fff;font-size: 14px; margin: 0.5rem 0; text-align: center; width: 100%;">
                                <input
                                    required
                                    @if (old('accept_terms_and_conditions')) checked @endif
                                    value="1"
                                    type="checkbox"
                                    name="accept_terms_and_conditions"
                                    id="terminos"
                                    style="width: 12px; margin-right: 5px;">
    						    Conozco y acepto la <a class="font-weight700 text-white" target="_blank" href="https://www.gane.com.co/aviso-de-privacidad/">política de datos de REDCOLSA.</a>
                                @error('accept_terms_and_conditions')
                                    <div class="text-warning mb-3">
                                        <small>{{ $message }}</small>
                                    </div>
                                @enderror
                            </label>



                            {{-- Soy mayor de edad --}}
                            <label
                                class="@error('of_legal_age') text-warning @enderror"
                                style="color: #fff;font-size: 14px; margin: 0.5rem 0; text-align: center; width: 100%;">
                                <input
                                    required
                                    @if (old('of_legal_age')) checked @endif
                                    value="1"
                                    type="checkbox"
                                    name="of_legal_age"
                                    id="edad"
                                    style="width: 12px; margin-right: 5px;">
                                Soy mayor de edad
                                @error('of_legal_age')
                                    <div class="text-warning mb-3">
                                        <small>{{ $message }}</small>
                                    </div>
                                @enderror
                            </label>



                            {{-- Submit --}}
						    <input
                                type="submit"
                                name="enviar"
                                id="registrar-usuario"
                                value="Enviar datos">

						</form>
					</div>
				</div>
			</div>
		</div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 columnas-blancas">
                <div class="columnas-blanca-insta">
                    <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/tv/CI9AiW5jeqr/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="13" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:100%; min-width:100%; padding:0; width:100%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/tv/CI9AiW5jeqr/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> Ver esta publicación en Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/tv/CI9AiW5jeqr/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Una publicación compartida de REDCOLSA (@ganecali)</a></p></div></blockquote> <script async defer src="https://platform.instagram.com/en_US/embeds.js"></script>
                </div>
            </div>
            <div class="col-md-6">
                <div class="columnas-blancas-terminos">
                    <h2 class="text-blue size22 font-weight700">Términos y condiciones de la campaña:</h2>
                    <ul class="condiciones wow animate__animated animate__fadeInRight">
                        <li>Los usuarios que al ingresar a www.gane.com.co registren sus datos en la landing BetPlay se llevan recarga de BetPlay de $5.000.</li>
                        <li>Aplica del 15 de abril al 31 de octubre del 2021.</li>
                        <li>Los usuarios que registren sus datos recibirán un correo electrónico con un código alfanumérico el cual deberán registrar en www.betplay.com.co para redimir la recarga de $5.000.</li>
                        <li>Aplica sólo para la ciudad de Cali.</li>
                        <li>Aplica únicamente para nuevos usuarios de BetPlay.</li>
                        <li>Válido para redimir hasta el 30 de noviembre del 2021.</li>
                        <li>Aplica únicamente para registros realizados a través de la página web <a href="https://www.gane.com.co/" target="_blank" rel="noopener">www.gane.com.co</a>.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

	<!--Inicio del footer-->
	<footer class="page-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img class="img-fluid" src="{{  asset('images/logo-sin-sombras.png') }}" alt="Logo footer">
				</div>
				<div class="col-md-4 info">
                    <h3>Oficina principal</h3>
                    <p>Calle 13 No.4-25 Edificio Carvajal<br>
                        PBX: (57)(2) 682 3434 / 884 3434<br>
                        Mail info@gane.com.co / pqrs@gane.com.co<br>
                        Cali – Valle del Cauca</p>
				</div>
				<div class="col-md-4 siguenos">
                    <h3>Síguenos:</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-3 col-md-3">
                                <a href="https://www.facebook.com/REDCOLSA" target="_blank">
                                    <img src="{{ asset('images/face_blanco.png') }}">
                                </a>
                            </div>
                            <div class="col-3 col-md-3">
                                <a href="https://www.instagram.com/ganecali/" target="_blank">
                                    <img src="{{ asset('images/insta_blanco.png') }}">
                                </a>
                            </div>
                            <div class="col-3 col-md-3">
                                <a href="https://twitter.com/GaneCali" target="_blank">
                                    <img src="{{ asset('images/twitter_blanco.png') }}">
                                </a>
                            </div>
                            <div class="col-3 col-md-3">
                                <a href="https://www.youtube.com/user/ApuestasGane" target="_blank">
                                    <img src="{{ asset('images/youtube_blanco.png') }}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="btn-yellow-footer" href="#vive-experiencia">Escríbenos</a>
				</div>
			</div>
		</div>
	</footer>
	<!--Cierre del footer-->

    <script>

        // Bloquear formulario al darle al botón de enviar.

        function onSubmit() {
            var button = document.getElementById('registrar-usuario');
            button.setAttribute('disabled', true);
            button.setAttribute('value', 'Enviando...');

            var count = 1;

            setInterval(function() {
                var dots = '';

                for (var index = 0; index < count; index++) {
                    dots += '.';
                }

                count++;

                if (count == 4) count = 1;

                button.setAttribute('value', 'Enviando' + dots);

            }, 500);

            return true;
        }

    </script>

</body>
</html>