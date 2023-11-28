<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="title">
     LOGIN
    </div>
    <form action="login" method="POST">
@method("POST")
@csrf

    @if(session("error"))
      <div class="alert alert-danger">username atau password salah</div>
    @endif
        <div class="field">
            <label for="username"></label>
            <input type="text"  class="zocial-dribbble" placeholder="Enter your username" name="username">
        </div>

        <div class="field">
            <label for="password"></label>
            <input type="password" class="zocial-dribbble" placeholder="Enter your password" name="password">
        </div>

      <div class="field">
          <button style="margin-left:35%;" type="submit" class="btn btn-outline-success">login</button>
      </div>

      <p><a href="{{'daftar'}}" style="margin-left:50px;">belum punya akun? daftar</a></p>
</form>
</html>