<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/chat.css') }}">
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
                <a href="{{ url('/payment') }}">
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
        <div class="empty-box"></div>
        <div class="chat-box">
            <div class="left-box">
                <div class="left-head">
                    <div class="search">
                        <input type="text" name="" placeholder="Search here..">
                    </div>
                </div>
                
                <div class="left-item">
                    <div class="profile-pict"></div>
                    <div class="chat-text">
                        <div class="name">FAIZ International Tailor</div>
                        <div class="chat-inline">Oke makasih banyak ya.</div>
                    </div>
                </div>
                <div class="left-item">
                    <div class="profile-pict"></div>
                    <div class="chat-text">
                        <div class="name">Sewing House Carissa</div>
                        <div class="chat-inline">Ada kak..</div>
                    </div>
                </div>
                <div class="left-item">
                    <div class="profile-pict"></div>
                    <div class="chat-text">
                        <div class="name">Kebaya Boutique Vera</div>
                        <div class="chat-inline">50rb per pcs nya kak</div>
                    </div>
                </div>
            </div>
            <div class="right-box">
                <div class="right-head">
                    <div class="profile-pict"></div>
                    <div class="chat-text">
                        <div class="name">Faiz International Tailor</div>
                        <div class="status">Last Online 1hr ago</div>
                    </div>
                </div>
                <div class="right-content">
                    <div class="chat">
                        <div class="empty-chat"></div>
                        <div class="sender-chat">
                            <span>Selamat siang kak, kak di sini sedia pembuatan jas untuk pria tidak?</span>
                        </div>
                    </div>
                    <div class="chat">
                        <div class="receiver-chat">
                            <span>Siang kak, iyaa kami sedia jasa pembuatan jas. Ini ukurannya kak</span>
                        </div>
                        <div class="empty-chat"></div>
                    </div>
                    <div class="chat">
                        <div class="receiver-chat img">
                            <span><img src="{{ asset('img/ukuran.jpg') }}" alt=""></span>
                        </div>
                        <div class="empty-chat"></div>
                    </div>
                    <div class="chat">
                        <div class="empty-chat"></div>
                        <div class="sender-chat">
                            <span>Ukuran aku L kak, terus kira-kira model jasnya bisa seperti ini tidak?</span>
                        </div>
                    </div>
                    <div class="chat">
                        <div class="empty-chat"></div>
                        <div class="sender-chat img">
                            <span><img src="{{ asset('img/jas-suits.jpg') }}" alt=""></span>
                        </div>
                    </div>
                    <div class="chat">
                        <div class="receiver-chat">
                            <span>bisa kak, kakak bahannya mau yang mana? kami sedia Bahan Drill, Semi Wool, Silk Wool, dan Polyester.</span>
                        </div>
                        <div class="empty-chat"></div>
                    </div>
                    <div class="chat">
                        <div class="empty-chat"></div>
                        <div class="sender-chat">
                            <span>Semi wool aja kak, biar ga terlalu panas, hehehe...</span>
                        </div>
                    </div>
                    <div class="chat">
                        <div class="receiver-chat">
                            <span>Okee siap kak, ditunggu konfirmasi dari kami ya, kami akan kirimkan konfirmasi pembayaran ke inbox kakak</span>
                        </div>
                        <div class="empty-chat"></div>
                    </div>
                    <div class="chat">
                        <div class="empty-chat"></div>
                        <div class="sender-chat">
                            <span>Okee makasih banyak ya.</span>
                        </div>
                    </div>
                </div>
                <div class="right-tail">
                    <div class="add">
                        <span>+</span>
                    </div>
                    <div class="text-div">
                        <input type="text" placeholder="message here...">
                    </div>
                    <div class="send">
                        <button>SEND</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="empty-box"></div>
    </div>
    <footer>
        <div class="footer-div">JahitYuk | Copyright 2019 &copy</div>
    </footer>
    <script src="script/script.js"></script>
</body>
</html>