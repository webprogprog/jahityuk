<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/payment.css') }}">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="navbar-child">
                <a href="{{ url('/') }}">
                    <div class="logo-div"></div>
                </a>
            </div>
            <div class="navbar-child">
                <div class="navbar-item-input">
                    <input type="text" name="" placeholder="Search here...">
                    <a href="{{ url('/search') }}" style="color:black;">
                        <i class="fas fa-search"></i>
                    </a>
                </div>
            </div>
            <div class="navbar-child">
                <a href="url('/payment')">
                    <div class="small-button">
                        <i class="fas fa-envelope"></i>
                    </div>
                </a>
                <a href="chat.html">
                    <div class="small-button">
                        <i class="fas fa-comment"></i>
                    </div>
                </a>
                <div class="account">
                    <div class="account-item account-circle">
                        
                    </div>
                    <div class="account-item account-text">
                        <span>Fritz Immanuel</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container">
        <div class="box">
            <div class="heading">SUMMARY</div>
            <div class="tailor-name">FAIZ International Tailor</div>
            <div class="box-h">
                <span class="box-item item-name">Item Name</span>
                <span class="box-item quantity">Quantity</span>
                <span class="box-item price">Price</span>
            </div>
            <div class="box-child">
                <span class="box-item item-name">Jas + Celana</span>
                <span class="box-item quantity">1</span>
                <span class="box-item price">Rp 2.500.000,-</span>
            </div>
            <div class="box-child">
                <span class="box-item"></span>
            </div>

            <div class="box-child total-p">
                <span class="box-item item-name"></span>
                <span class="box-item quantity total">Total</span>
                <span class="box-item price">Rp 2.500.000,-</span>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-div">JahitYuk | Copyright 2019 &copy</div>
    </footer>
</body>
</html>