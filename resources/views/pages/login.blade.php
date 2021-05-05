<!DOCTYPE html>
<html>
<head>
 <title>Animated Login Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{asset('/css/register.css')}}">
 <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
 <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
 
    <div class="login-box">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="user-box">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" >
            <label>Username</label>
          </div>
          <div class="user-box">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <label>Password</label>
          </div>
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
        </form>
      </div> 
</body>
</html>