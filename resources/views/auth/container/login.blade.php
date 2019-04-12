<div class="">
    <div class="card ">
        <div class="card-header primary-color-dark white-text text-center p-2">
        <h4>Iniciar Sesion</h4>
        </div>
        <div class="d-flex justify-content-center pt-2">
            <div class="w-50">
                <div class="text-center">
                    <a><i class="fas fa-user-circle fa-7x green-text"></i></a>
                </div>
                <form class="text-center" style="color: #757575;" method="POST" action="{{ url('login') }}"> 
                    {{ csrf_field() }}
                    <div class="md-form" {{ $errors->has('codSis') ? 'has-error' : ''}}>
                    <input type="number" id="materialLoginFormEmail" class="form-control" name="codSis">
                    <label for="materialLoginFormEmail">root</label>
                    {!! $errors->first('codSis','<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="md-form" {{ $errors->has('ciUsr') ? 'has-error': ''}}>
                    <input type="password" id="materialLoginFormPassword" class="form-control" name="password">
                    <label for="materialLoginFormPassword">password</label>
                    {!! $errors->first('ciUsr','<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="d-flex justify-content-around">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                            <label class="form-check-label" for="materialLoginFormRemember">Recuerdame</label>
                        </div>
                    </div>
                    <button class="btn btn-outline-info btn-rounded my-4 waves-effect z-depth-0" type="submit">Iniciar Sesion</button>
                </form>
            </div>
        </div>
    </div>
</div>
