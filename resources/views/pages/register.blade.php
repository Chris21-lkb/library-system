<!DOCTYPE html>
<html>
<head>
 <title>Animated Register Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{asset('/css/register.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
 <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
 
    <div class="login-box">
        <h2>REGISTER</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="user-box">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus>
                <label>Username</label>
            </div>
            <div class="user-box">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                <label>Password</label>
            </div>
            <div class="user-box">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <label>Confirm Password</label>
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