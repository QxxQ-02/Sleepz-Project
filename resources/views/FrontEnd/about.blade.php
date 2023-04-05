<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!--<link rel="stylesheet" type="text/css" href="css/style.css">-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
*{
    margin: 0px;
    padding: 0px;
    padding-top: 30px;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
/* header part */
header{
    background: linear-gradient(#2b1055, #7597de);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 30px 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* to put the header to the front */
    z-index: 1000;
}

/* logo in header part */
header .logo{
    color: white;
    text-decoration: none;
    font-size: 2em;
    text-transform: uppercase;
    letter-spacing: 2px;
}

/* ul in the header part */
header ul{
    display: flex;
    justify-content: center;
    align-items: center;
}

/* li in the ul of the header part */
header ul li{
    list-style: none;
    margin-left: 20px;
}

/* a in the li of the ul of the header part */
header ul li a{
    text-decoration: none;
    padding: 6px 15px;
    color: #fff;
    /* to shape the border of the a */
    border-radius: 20px;
}

/* for hover and active of the a */
header ul li a:hover, 
header ul li a.active{
    background: white;
    color: #2b1055;
}
.section{
    width: 100%;
    min-height: 100vh;
    background-color:white;
}
.container{
    width: 80%;
    display: block;
    margin: auto;
    padding-top: 100px;
}
.content-section{
    float: left;
    width: 55%;
}
.image-section{
    float: right;
    width: 40%;
}
image-section music{
    width: 100%;
    height: auto;
}
.content-section .title{
    text-transform: uppercase;
    font-size: 28px;
}
.content-section .content h3{
    margin-top: 20px;
    color: darkslategrey;
    font-size: 20px;
}
.content-section .content p{
    margin-top: 10px;
    font-family: sans-serif;
    font-size: 18px;
    line-height: 1.5;
}
.content-section .content .button{
    margin-top: 30px;
}
.content-section .content .button a{
    background-color: #3d3d3d;
    padding: 12px 40px;
    text-decoration: none;
    color: #fff;
    font-size: 25px;
    letter-spacing: 1.5px;
}
.content-section .content .button a:hover{
    background-color: purple;
    color: #fff;
}
.content-section .social{
    margin: 40px 10px;
}
.content-section .social i{
    color: #a52a2a;
    font-size: 30px;
    padding: 0px 10px;
}
.content-section .social i:hover{
    color:purple;
}
@media screen and (max-width: 768px){
    .container{
        width: 80%;
        display: block;
        margin: auto;
        padding-top: 50px;
    }
    .content-section{
        float: none;
        width: 100%;
        display: block;
        margin: auto;
    }
    .image-section{
        float: none;
        width: 100%;
    }
    .image-section music{
        width: 100%;
        height: auto;
        display: block;
        margin: auto;
    }
    .content-section .title{
        text-align: center;
        font-size: 19px;
    }
    .content-section .content .button{
        text-align: center;
    }
    .content-section .content .button a{
        padding: 9px 30px;
    }
    .content-section .social{
        text-align: center;
    }
}
/* footer */
footer{
    background: linear-gradient(#2b1055, #7597de);
   display: flex;
    position: absolute;
    color: #fff;
}
.flex-container{
    display: flex;
    margin: 20px 30px;
}

.flex-container > div{
    margin: 10px;
    padding: 40px;
    color:#fff;
    font-size: 1.1em;
}

.ftSleep .flex-container .logo a{
    font-size: 2em;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.ftSleep .flex-container .logo a,
.ftSleep .flex-container .terms ul li a{
    text-decoration: none;
    color:#fff;
}

.ftSleep .flex-container .image{
    padding: 25px;
}

.ftSleep .flex-container .copyright{
    margin: 20px;
    padding: 20px;
}
audio {
    align-items: center;
}
    </style>
</head>
<body>
<header class="nav">
        <a href="#" class="logo">Sleepz</a>
        <ul>
            <li><a href="home" class="active nav">Home</a></li>
            <li><a href="music" class="nav">Music</a></li>
            <li><a href="about" class="nav">About</a></li>
            <li><a href="contact" class="nav">Contact</a></li>
        </ul>
    </header>
    <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1>About Us</h1>
                </div>
                <div class="content">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, ullam. Quas, sapiente non odit similique odio laboriosam corporis ea aliquid inventore autem, doloribus ullam atque repellendus maxime doloremque impedit molestias.</p>
                    <div class="button">
                        <a href="">Read More</a>
                    </div>
                </div>
                <div class="social">
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-spotify"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                    <a href=""><i class="fab fa-telegram"></i></a>
                </div>
            </div>
            <div class="image-section">
                <img src="music.jpg" width="600px" height="600px" alt="not found">
            </div>
        </div>
    </div>
    <footer class="ftSleep">
            <div class="flex-container">
              <div class="logo">
                <a href="#">Sleep</a>
              </div>

              <div class="adress">
                <h5>Address</h5>
                <p>
                  Sleep Method Organization, Ine Town,
                  Kyoto City, Japan
                </p>
              </div>

              <div class="terms">
                <ul>
                  <li>
                    <a href="#">Music</a>
                  </li>
                  <li>
                    <a href="#">Search</a>
                  </li>
                  <li>
                    <a href="#">Contact</a>
                  </li>
                </ul>
              </div>

              <div class="image">
                <p>
                  <img
                    src="https://img.freepik.com/premium-vector/anime-city-night-background_24640-79212.jpg"
                    width="auto" height="300" style="border: 0" allowfullscreen="" loading="zzz"></img>
                </p>
              </div>
            </div>

            <div class="copyright">
              <p>© 2023 Company, Inc. All rights reserved.</p>
            </div>
          </footer>
    </div>

</body>
</html>