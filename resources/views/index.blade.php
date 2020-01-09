<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slide.css') }}">
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
         <!-- Slideshow container -->
<div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="{{ asset('img/1572673226428.png') }}" style="width:100%">
          <div class="text">Caption Text</div>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="{{ asset('img/1572673230154.jpg' ) }}" style="width:100%">
          <div class="text">Caption Two</div>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="{{ asset('img/1572673228519.jpg') }}" style="width:100%">
          <div class="text">Caption Three</div>
        </div>
      
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      
      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div> 
    </div>
    <footer>
        <div class="footer-div">JahitYuk | Copyright 2019 &copy</div>
    </footer>
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
        } 
    </script>
</body>
</html>