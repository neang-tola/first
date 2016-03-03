<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Internal Web IT Solution</title>

    <!-- Bootstrap CSS -->    
    <link href="{{ URL::asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{ URL::asset('backend/css/bootstrap-theme.css') }}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{ URL::asset('backend/css/elegant-icons-style.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('backend/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="{{ URL::asset('backend/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('backend/css/style-responsive.css') }}" rel="stylesheet" />

</head>

  <body class="login-img3-body">

    <div class="container">

    {!! Form::Open(['url' => route('internal.checklogin'), 'class' => 'login-form', 'autocomplete'=>'off']) !!}       
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'User Name']) !!}
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) !!}
            </div>
            <div class="gap-error">
                <span class="error">{{ Session::get('message') }}</span>
            </div>
            {!! Form::submit('Login', ['class'=>'btn btn-primary btn-lg btn-block']) !!}
        </div>
    {!! Form::Close() !!}

    </div>


  </body>
</html>
