<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Praktikum1</title>
        <style>
            *{
                margin:0;
                padding:0;
                font-family:sans-serif;
            }
            header{
                background-color: #CD1010;
                color: #FFFFFF;
                height: 100px;
                filter: opacity(0.94);
            }
            .header-edit{
                width:90%;
                margin:0 auto;
            }
            .header-edit ul li{
                position: relative;
                left:25px;
                padding: 17px 40px;
                display: inline-block;
            }
            .header-edit ul li a{
                padding: 25px 25px;
                display: inline-block;
            }
            .intro{
                height: 10em;
                position: relative
            }
            .intro h2 {
                margin: 0;
                color: #360606;
                position: absolute;
                top: 130%;
                left: 36%;
            }
            a{
                color:#FFF;
                font-weight: bold;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <header>
        <div class="header-edit">
            <ul>
                <li><a href="{{url('/home')}}">Home</a></li>
                <li><a href="{{url('/artikel')}}">Artikel</a></li>
                <li><a href="{{url('/contact')}}">Contact Us</a></li>
            </ul>
        </div>
        <section class="intro">
            <h2><font size="20"><b>Welcome to My Page</b></font></h2>
        </section>
    </body>
</html>
