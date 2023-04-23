<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music</title>
    <link rel = "stylesheet" href = "style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.ap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/779ad521ad.js" crossorigin="anonymous"></script>
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
    margin: 50px;
    padding: 100px;
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
     align-items: center;
     margin: 10px 0;
 }
 .content{
     width: 400px;
     margin: 50px;
     height: auto;
     box-sizing: border-box;
    
     float: left;
     border-radius: 20px;
     cursor: pointer;
     box-shadow: 0 14px 28px rgba(0,0,0,0.25),0 10px 10px rgba(0,0,0, 0.22);
     transition: .4s;
     background: #f2f2f2;
 
 }
 .content:hover{
     box-shadow: 0 3px 6px rgba(0,0,0, 0.16), 
     0 3px 6px rgba(0,0,0, 0.23);
     transform: translate(0px, -8px);
 }
 img{
     width: 400px;
     height: 250px;
     border-radius: 5%;
     text-align: center;
     margin: 0 auto;
     display: block;
 }
 ul{
     list-style: none;
     display: flex;
     justify-content: center;
     align-items: center;
     padding-top: 0;
 
 }
 li{
     padding-top: 5px;
 
 }
 .search{
    width:115%;
    padding: 0%;
    display: flex;
    align-items: center;
    justify-conent: center;

 }
 .search-bar{
    width: 100%;
    max-width: 500%;
    background: rgba(255, 255, 255, 0.2);
    display: flex;
    align-items: center;
    border-radius: 60px;
    padding: 10px 20px;
 }
 .search-bar input{
    background: transparent;
    flex: 1;
    border: 0;
    outline: none;
    padding: 10px 8px;
    font-size: 20px;
    color: #cac7ff;
 }
 ::placeholder{
    color: #cac7ff;
 }
 .search-bar button {
   border: 0;
   border-radius: 50%;
   width: 50px;
   height: 50px;
   background: transparent;
   cursor: pointer;
 }
 .fa{
     font-size: 26px;
     transition: .4s;
     margin: 3px;
 }
 .checked{
     color: #ff9f43;
 }
 .fa:hover{
     transform: scale(1.3);
     transition: .6s;
 
 }
 @media(max-width:1000px){
     .content{
         width: 100%;
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
        <a href="home" class="logo">Sleepz</a>
        <ul> 
        <li>  <div class ="search" > 
                <form action="/search" method ="get" class= "search-bar">  
                    <input type = "text" placeholder ="Search for sound" name= "query" >
                    <button type = "submit" > 
                    <i class="fa-solid fa-magnifying-glass" style="font-size: 25px"></i>
                    </button>
                    
                </form>
                 </div>
            </li>

        </ul>
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
            <div class="content">
                <!--FIRST PRODUCT-->
                <ul>
                  <li> <a href="music2" > <img src="https://i.pinimg.com/originals/7c/52/0d/7c520d69ba659d61af4ee3d533808895.gif">
                </a></li>
                </ul>
            </div>
                <!--SECOND PRODUCT-->
            <div class="content">
            <ul>
                  <li> <a href="music3" > 
                <img src="https://i.pinimg.com/originals/0b/77/77/0b7777810ef74eb40f38ffbfe6738365.gif">
            </a></li>
                </ul>
            </div>

            <!--THIRD PRODUCT-->
            <div class="content">
            <ul>
                  <li> <a href="music4" > 
                <img src="https://i.pinimg.com/originals/38/ff/3c/38ff3c072ed6552324b1239785e6007a.gif">
            </a></li>
                </ul>
            </div>

            <div class="content">
            <ul>
                  <li> <a href="music4" > 
                <img src="https://i.pinimg.com/originals/71/e7/48/71e748cc6fedc700240795d96c564652.gif">
            </a></li>
                </ul>
            </div>

            <div class="content">
            <ul>
                  <li> <a href="music4" > 
                <img src="https://i.pinimg.com/originals/da/c2/75/dac275a8c01fabcc5f1fd4b62749402e.gif">
            </a></li>
                </ul>
            </div>

            <div class="content">
            <ul>
                  <li> <a href="music4" > 
                <img src="https://i.pinimg.com/originals/38/c4/a0/38c4a0b6bd425279a8f511b71c91dd49.gif">
            </a></li>
                </ul>
            </div>



        </div>

        <h1>Lo-Fi</h1>
            
        <div class="gallery">

            <div class="content">
                <!--FIRST PRODUCT-->
                <ul>
                  <li> <a href="music5" > 
                <img src="https://i.pinimg.com/originals/10/e1/a3/10e1a3615e04bfd6c264d6fcf9c50d33.gif">
                </a></li>
                </ul>
            </div>
                <!--SECOND PRODUCT-->
            <div class="content">
            <ul>
                  <li> <a href="music6" > 
                <img src="https://i.pinimg.com/originals/db/f0/1e/dbf01ebf3f34e47fd46b0fc72bf74b1d.gif">
                </a></li>
                </ul>
            </div>

            <!--THIRD PRODUCT-->
            <div class="content">
            <ul>
                  <li> <a href="music7" > 
                <img src="https://i.pinimg.com/originals/6c/e5/64/6ce56425ac57c137c1a8e333022a26be.gif">
                </a></li>
                </ul>
            </div>

            <div class="content">
            <ul>
                  <li> <a href="music4" > 
                <img src="https://i.pinimg.com/originals/7d/07/a2/7d07a255678962d30d8717dcf5dbd266.gif">
            </a></li>
                </ul>
            </div>

            <div class="content">
            <ul>
                  <li> <a href="music4" > 
                <img src="https://i.pinimg.com/originals/00/9e/ae/009eaeb601c07d6a15e3d6eeefe3d6b4.gif">
            </a></li>
                </ul>
            </div>

            <div class="content">
            <ul>
                  <li> <a href="music4" > 
                <img src="https://i.pinimg.com/originals/1a/f6/89/1af689d42bdb7686df444f22925f9e89.gif">
            </a></li>
                </ul>
            </div>



        </div>
            <!--END PRODUCT-->
    </main>
    <script> 
    $(document).ready(function(){
        $('#search').on('keyup', function(){
            var query = $(this).val();
            $.ajex({
                url:"search",
                type:"GET",
                data:{'search':query},
                success:function(data){
                    $('#search_list').html(data);
                }

            })
        });
    });
    </script>

    
    <div>
        <footer class="ftSleep">
            <div class="flex-container">
              <div class="logo">
                <a href="home">Sleep</a>
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
 <!--Database Connection-->  