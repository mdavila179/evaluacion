<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Evaluación 360</title>
   
     <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body ng-app="shopping" style="font-size: 1.5rem;">

<br><br><br>
    <div class="container">        
       <div class="row">
        <div class="col-md-8 col-md-offset-2">   
        <div class="panel panel-primary">     
            <div class="form-group row">
                <h2 align="center" style="color: #666;"><img src="https://www.intravolucion.com/uploads/1484157394.png" style="max-width:100%;max-height:100px;margin:0 auto;display:block;" /> </h2>  
                              
            </div>
            

        <div class="panel-body">    
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}               
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">               
            <label for="email" class="col-md-4 control-label">E-Mail </label>       
              <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                <span class="help-block">
                   <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>         
            </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Contraseña</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>
                 @if ($errors->has('password'))
                <span class="help-block">
                   <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
                </div>
          </div>                              
         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                    </label>
                                </div>
                            </div>
            </div>
        
         <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Ingresar
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>
        </form>        
    </div>
    </div>
    </div>
    </div>
    </div>


</body>
</html>

