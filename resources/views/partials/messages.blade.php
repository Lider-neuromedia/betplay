@if (session('message-success'))

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            Swal.fire({
                title: '¡Betplay te felicita!',
                text: @json(session('message-success')),
                icon: 'success',
                confirmButtonText: 'Aceptar',
                confirmButtonColor: '#1E3480',
            });

        });
    </script>

@endif

@if (session('message-warning'))

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            Swal.fire({
                title: '¡Lo sentimos!',
                text: @json(session('message-warning')),
                icon: 'info',
                confirmButtonText: 'Aceptar',
                confirmButtonColor: '#1E3480',
            });

        });
    </script>

@endif