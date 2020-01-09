<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/search.css') }}">
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
        <div class="search-result">
            <div class="sidebar">
                <div class="title">Filter</div>
                <div class="filter-item">
                    <div class="filter-item-child">
                        <div class="filter-item-subtitle">Wilayah</div>
                        <input type="checkbox" value="Jakarta">Jakarta<br>
                        <input type="checkbox" value="Tangerang">Tangerang<br>
                        <input type="checkbox" value="Tangerang Selatan">Tangerang Selatan<br>
                    </div>   
                    
                    <div class="filter-item-child">
                        <div class="filter-item-subtitle">Rating</div>
                        <input type="checkbox" value="">>=3<i class="fas fa-star"></i><br>
                        <input type="checkbox" value="">4<i class="fas fa-star"></i><br>
                        <input type="checkbox" value="">5<i class="fas fa-star"></i><br>
                    </div>     
                    
                    <div class="filter-item-child">
                        <div class="filter-item-subtitle">Tipe Penjahit</div>
                        <input type="checkbox" value="">Fashion Wanita<br>
                        <input type="checkbox" value="">Fashion Pria<br>
                        <input type="checkbox" value="">Fashion Anak<br>
                    </div>             
                </div>
            </div>  
            <div class="content">
                <div class="box">
                    <div class="circle-profile"></div>
                    <div class="company-name">Sewing House Carissa</div>    
                </div>
                <div class="box">
                    <div class="circle-profile"></div>
                    <div class="company-name">FAIZ International Tailor</div>                    
                </div>
                <div class="box">
                    <div class="circle-profile"></div>
                    <div class="company-name">Kebaya Boutique Vera</div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-div">JahitYuk | Copyright 2019 &copy</div>
    </footer>
</body>
</html>