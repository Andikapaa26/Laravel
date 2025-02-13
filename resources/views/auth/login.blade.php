<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/docs/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - SIDAP</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>SIDAP</h1>
        <h3>Sistem Data Pegawai</h3>
      </div>
      <div class="login-box">
        <form class="login-form" method="POST" action="/login">
          {{ csrf_field() }}
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          
          <!-- Username / Email -->
          <div class="form-group">
            <label class="control-label">USERNAME/EMAIL</label>
            <input class="form-control" id="login" type="text" name="login" placeholder="Username" required autofocus value="{{ old('login') }}">
            @if ($errors->has('login'))
                <span class="help-block">
                <strong>{{ $errors->first('login') }}</strong>
                </span>
            @endif
          </div>
          
          <!-- Password -->
          <div class="form-group">
            <label class="control-label">PASSWORD</label>            
            <input class="form-control" id="password" type="password" placeholder="Password" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>
          
          <!-- Stay Signed In Checkbox -->
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox" name="remember"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
            </div>
          </div>

          <!-- Login Button -->
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>        
      </div>
    </section>

    <!-- JS Scripts -->
    <script src="{{ asset('template/docs/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('template/docs/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/docs/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/docs/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('template/docs/js/plugins/chart.js') }}"></script>

    <script type="text/javascript">
      $('.login-content [data-toggle="flip"]').click(function() {
        $('.login-box').toggleClass('flipped');
        return false;
      });
    </script>
  </body>
</html>
