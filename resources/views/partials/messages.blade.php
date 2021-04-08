@if (session('message-success'))
    <div class="alert alert-success rounded-0 py-5 text-center">
        {{ session('message-success') }}
    </div>
@endif

@if (session('message-warning'))
    <div class="alert alert-warning rounded-0 py-5 text-center">
        {{ session('message-warning') }}
    </div>
@endif