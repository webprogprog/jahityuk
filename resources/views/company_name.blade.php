<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
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
        <div class="content">
            <div class="company-profile">
                <div class="description-picture">
                
                </div>
                <div class="description-box">
                    <div class="description-item">
                        <div class="text">19k</div>
                        <div class="title">Product Sold</div>
                    </div>
                    <div class="description-item">
                        <div class="text">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="title">Rating</div>
                    </div>
                    <div class="description-item">
                        <div class="tailor-img"></div>
                        <div class="title"><br></div>
                        <div class="subtitle">Sewing House Carissa</div>
                    </div>
                    <div class="description-item">
                        <div class="text">Rp 500k - 3,750K</div>
                        <div class="title">Price</div>
                    </div>
                    <div class="description-item">
                        <button>Follow</button>
                        <a href="chat.html">
                            <button>Chat</button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- fill later -->
            <div class="company-content">
                <div class="company-item company-img"></div>
                <div class="company-item company-description">
                    <div><b>Address</b></div>
                    <div>
                        Perum Graha Indah 2 Pamulang Blok F 5 No 3,
                        RT.09/RW.03, Benda Baru, Kec. Pamulang, Kota Tangerang Selatan, Banten 15415
                    </div>
                    <div><br></div>
                    <div><b>Phone Number</b></div>
                    <div>
                        0812-8844-1953
                    </div>
                    <div><br></div>
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15862.009001889384!2d106.720024!3d-6.328905!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x73a44eb23a23820f!2sSewing%20house%20Carissa!5e0!3m2!1sen!2sid!4v1572635910569!5m2!1sen!2sid" width="610" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-div">JahitYuk | Copyright 2019 &copy</div>
    </footer>
</body>
</html>