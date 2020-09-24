<!-- customized layout -->
<head>
    <title>Matembezi Adventures</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    
</head>
<!-- Header -->
<header id="header" class="alt" style ="background: #000;">
    <div class="logo"><a href="{{url('/')}}">Matembezi</a></div>
    <a href="{{url('/')}}">Home</a>
</header>

@yield('content')
<!-- Footer -->
<link rel="stylesheet" href="assets/css/main.css" />
<footer id="footer">
    <div class="container">
        <ul class="icons">
            <li><a href="https://twitter.com/login" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="https://web.facebook.com/?_rdc=1&_rdr" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="https://www.instagram.com/accounts/login/?hl=en" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="www.gmail.com" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
        </ul>
    </div>
    <div class="copyright">
        &copy; Matembezi Adventures. All rights reserved.
    </div>
</footer>
