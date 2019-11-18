<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Register</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/selectric/public/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/components.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                  {{ csrf_field() }}
                  
                  
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      <label for="name">Name</label>
                      <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                      @if ($errors->has('name'))
                        <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                        </span>
                      @endif
                    </div>

                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                      <label for="username">Username</label>
                      <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                      @if ($errors->has('username'))
                        <span class="help-block">
                          <strong>{{ $errors->first('username') }}</strong>
                        </span>
                      @endif
                    </div>

                    <div class="row">
                      <div class="form-group col-6">
                          <label class="control-label">Role</label>
                            <select class="form-control selectric" name="role" required>
                              <option value="" selected disabled>Please select</option>
                              <option value="user">User</option>
                              <option value="admin">Admin</option>
                            </select>
                      </div>
                      <div class="form-group col-6">
                        <label class="control-label"> Department </label>
                            <select name="department_id" id="department_id" required
                              class="form-control {{ $errors->has ('department_id') ? 'is - invalid':''}}">
                              <option value="">Please select</option>
                                @foreach ($departments as $deps)
                                  <option value="{{ $deps->department_id }}">{{ ucfirst($deps->department_name) }}</option>
                                @endforeach
                            </select>   
                      </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label for="email">Email</label>
                      <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                      @if ($errors->has('email'))
                        <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                        </span>
                      @endif
                    </div>

            <div class="row">
               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-6">
                    <label for="password" class="col-md-4 control-label">Password</label>
                        <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                </div>

                <div class="form-group col-6">
                    <label for="password-confirm" class="control-label">Confirm Password</label>    
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                </div>
            
            <div class="mt-5 text-center">
                Already have an account? <a href="{{ route('login') }}">Login</a>
            </div>

                </form>
              </div>
            </div>
            
            <div class="simple-footer">
              Copyright &copy;  2018
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="../node_modules/selectric/public/jquery.selectric.min.js"></script>

  <!-- Template JS File -->
  <script src="/js/scripts.js"></script>
  <script src="/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="/js/page/auth-register.js"></script>
</body>
</html>
