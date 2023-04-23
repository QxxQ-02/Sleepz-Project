<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
      
        /* font family outside of css library */
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        /* the whole page, I think XD */
        *{
            margin: 0;
            padding: 0;
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

        /* body */
        main{
            position: relative;
            width: 100%;
            height: 100vh;
            padding: 100px;
            display: flex;
            background-color: (rgba(89, 89, 133, 0.3),rgba(118, 78, 131, 0.543) );
        }

        .bg{
            background-size: cover;
            background-position: relative;
        }
        .img2{
            margin-top : 20%;
        }
        h1{
            text-align: center;
            opacity: 0.6;
            text-transform: uppercase;
        }
        .gallery{
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            justify-content: center;
            float: left;
            margin: 50px 0;
            margin-right: 50px;
            padding-right: 800px;
        }
        .content-left{
            width: 600px;
            margin: 50px;
            height: 400px;
            box-sizing: border-box;

            float: right;
            border-radius: 30px;
            cursor: pointer;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25),0 10px 10px rgba(0,0,0, 0.22);
            transition: .4s;
            background: #f2f2f2;

        }
        .content:hover{
            box-shadow: 0 3px 6px rgba(0,0,0, 0.16), 
            0 3px 6px rgba(0,0,0, 0.23);
            transform: translate(0px, -8px)
        }
        .pic1{
            width: 600px;
            height: 350px;
            border-radius: 5%;
            text-align: center;
            margin: 0 auto;
            display: block;
        }

        .audiplay{
            background: linear-gradient(#2b1055, #7597de);
        }

        audio {
            align-items: center;
        }

        /* footer */
        footer{
            background: linear-gradient(#2b1055, #7597de);
            position: absolute;
            width: 100%;
            left: 0;
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
    </style>
</head>
<body>
<header class="nav">
            <a href="home" class="logo">Sleepz</a>
            <ul>
                <li><a href="home" class="nav">Home</a></li>
                <li><a href="music" class="active nav">Music</a></li>
                <li><a href="about" class="nav">About</a></li>
                <li><a href="contact" class="nav">Contact</a></li>
            </ul>
        </header>
    <main>
        <h1>Nature</h1>
        <div class="gallery">
            <div class="content-left">
                <!--FIRST PRODUCT-->
                <img  class="pic1" src="https://i.pinimg.com/originals/1a/f6/89/1af689d42bdb7686df444f22925f9e89.gif">
                <audio controls class="audiplay"  style ="width:600px; padding-right: 10px; background: linear-gradient(#2b1055, #7597de);">
                    <source
                    src="record.mp3"
                    type="audio/mp3"/>
               </audio>
                <div class="content-right">

                </div>
            </div>
    </main>
    <script src="https://cdn.jsdelivr.net/gh/sh20raj/AudiPlay/audiplay.min.js"></script>

    <div>
            <footer class="ftSleep">
                <div class="flex-container">
                  <div class="logo">
                    <a href="home">Sleepz</a>
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
                        <a href="music">Music</a>
                      </li>
                      <li>
                        <a href="search">Search</a>
                      </li>
                      <li>
                        <a href="contact">Contact</a>
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