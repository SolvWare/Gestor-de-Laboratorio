@if(session('mensaje'))
    <div class="alert alert-success">
        <p>{{ session('mensaje') }}</p>
    </div>
@endif