<!DOCTYPE html>
<html lang="en>
<head>
	<!-- META -->
	<neta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
    <title>Contact Us</title>
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
        a{
            color:#FFF;
            font-weight: bold;
            text-decoration: none;
        }
        ul.a{
            list-style-type: square;
            margin: 40px 10px 10px 60px;
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
    <font color="black">
    <h2 align=center><font size="6"><b>Contact Us</b></font size><h2>
    <img src="image/profile.jpg" alt="" width="200"/>
    <ul class="a">
        <li>Kontak: 082372263901</li>
        <li>Gmail: imanuelsaragih07@gmail.com</li>
        <li>Facebook: <a href="https://www.facebook.com/imanuel.csaragih/" style="color: #48f542">Imanuel Saragih</a></li>
        <li>Instagram: <a href="https://www.instagram.com/nuelsr07/" style="color: #48f542">nuelsr07</a></li>
    </ul>
    </font color>
</body>
</html>