<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Store Manager - v0.01</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body class="login">
    <div class="container">  
        <form action="/login" class="login-form" method="POST">
            @csrf
            <div class="login-header">
                <span class="title">Login</span>
            </div>
            
            <div class="login-body">
                <div class="login-input-group">
                    <input type="text" name="username" id="username" class="login-input {{ $errors->has('username') ? 'invalid-input' : '' }}" placeholder="Usuário" autocomplete="off">
                    <div class="invalid-msg">
                        @if ($errors->has('username'))
                        {{ $errors->first('username') }}
                        @endif
                    </div>
                </div>
                <div class="login-input-group">
                    <input type="password" name="password" id="password" class="login-input {{ $errors->has('password') ? 'invalid-input' : '' }}" placeholder="Senha">
                    <div class="invalid-msg">
                        @if ($errors->has('password'))
                        {{ $errors->first('password') }}
                        @endif
                        
                    </div>
                </div>
                @if (isset($wrong_credentials)) 
                    <div class="problem">
                    {{ $wrong_credentials }}
                    </div>
                    @endif
            </div>

            <div class="login-footer">
                <button class="login-button">Entrar</button>
            </div>
        </form>
    </div>
</body>
</html>