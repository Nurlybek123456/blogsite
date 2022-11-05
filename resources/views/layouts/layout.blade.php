<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</head>
<body>
<style>
    * {box-sizing: border-box;}

    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .header {
        overflow: hidden;
        background-color: #f1f1f1;
        padding: 20px 10px;
    }
   .close{

   }

    .header a {
        float: left;
        color: black;
        text-align: center;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        line-height: 25px;
        border-radius: 4px;
    }

    .header a.logo {
        font-size: 25px;
        font-weight: bold;
    }

    .header a:hover {
        background-color: #ddd;
        color: black;
    }

    .header a.active {
        background-color: dodgerblue;
        color: white;
    }

    .header-right {
        float: right;
    }
    .header-right img:hover+.account_params {
        display: block;
    }

    @media screen and (max-width: 500px) {
        .header a {
            float: none;
            display: block;
            text-align: left;
        }

        .header-right {
            float: none;
        }
    }

    .account_params  {
        display:none;
        position: absolute;
        top:100px;
        right:20px;
        width:100px;
        border:1px solid black;
        border-radius: 5px;
    }

    .open_params {
        display: block;
        visibility: visible;
    }

    .card-item{
        display: none
    }

</style>

<div class="header">
    <a href="{{ route('homepage_index') }}" class="logo"> My Blog</a>
    <div class="header-right">
        <div style="display: flex;align-items: center">
            <div style="padding-right: 10px">
                Добро пожаловать,<strong>{{$user->name}}   </strong>
            </div>
            <img style="width:50px;height: 50px;border-radius: 50%;border:1px solid black;cursor:pointer"
                 src="{{ asset('storage/' . auth()->user()->image) }}" alt="" id="open_account_params">
            <div class="account_params">
                <form action="{{ route('logout') }}" style="text-align: center;display: flex;flex-direction: column;justify-content: space-around" method="POST">
                    @csrf
                    <button type="submit" style="border:none;background: linear-gradient(45deg, white, purple);cursor:pointer;text-align: center;">Выйти</button>
                    @if(auth()->user()->role == 'admin')
                        <a href="{{ route('admin_index') }}" style="text-decoration:none;font-size:15px;border-radius:0;color:black;border-top:1px solid black;padding: 5px">Управление</a>
                    @endif
                    <a style="text-decoration:none;font-size:15px;border-radius:0;color:black;border-top:1px solid black;padding: 5px" id="add-post">Добавить пост</a>

                </form>
            </div>

        </div>



    </div>

</div>



<br><br>

@yield('content')

<script>
    $('#open_account_params').click(function() {
        $('.account_params').toggleClass('open_params');
    })
    $('#add-post').click(function() {
        $('.card-body').removeClass('card-item');
    })
    $('#close_form').click(function() {
        $('.card-body').addClass('card-item');
    })
</script>

</body>
</html>

