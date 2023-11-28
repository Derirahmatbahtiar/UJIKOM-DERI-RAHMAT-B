<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>

<style>
.menu{
        margin-top:10%;
        
    }

.menu a{
    color:white;
    margin-left:80px;
    font-size:20px;
    text-decoration:none;
}
.menu:hover{
    background-color:green;
}


</style>

<body style="margin:0;">
@include('layout.navbar')
    <div style="width:17%; height:100vh; background-color:black;">

    <img src="storage/image/gambar1.png" alt="">

    <div class="menu">
        <a href="">HOME</a>
    </div>

    <div class="menu">
        <a href="">STOK</a>
    </div>

    <div class="menu">
        <!-- <a href="{{url('login-admin')}}">LOGOUT</a> -->
    </div>
    


</div>
</body>
</html>