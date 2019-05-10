@extends('layouts.app')

@section('navegacion')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0 m-0 pl-5">
            <li class="breadcrumb-item"><a class="black-text" href="/">Inicio</a></li>
            <li class="breadcrumb-item active">Iniciar Sesion</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="">
    <div class="card" style="height: 466px;">
        <div class="text-center primary-color-dark p-1">
            <h5>Iniciar Sesion</h5>
        </div>
        <div class="d-flex justify-content-center pt-2">
            <div class="w-50">
                <div class="text-center">
                    <i class="fas fa-user-circle fa-7x text-dark"></i>
                </div>
                <form class="text-center"  method="POST" action="{{ route('login') }}" style="color: #757575;">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">Codigo SIS</label>

                        <div class="">
                            <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">CI</label>

                        <div class="">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="d-flex justify-content-around">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                            </label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Ingresar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
