<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "music.css">
    <style> 
      
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
img{
    width: 600px;
    height: 350px;
    border-radius: 5%;
    text-align: center;
    margin: 0 auto;
    display: block;
}
/* footer */

footer{
    background: linear-gradient(#2b1055, #7597de);
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
.image{
    width:auto;
    height:300;
    style-border: 0; 
    allowfullscreen : ;
    loading: zzz;
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

  <main>
    <h1>Nature</h1>
    <div class="gallery">
        <div class="content-left">
            <!--FIRST PRODUCT-->
            <img src="https://i.pinimg.com/originals/7c/52/0d/7c520d69ba659d61af4ee3d533808895.gif">
            <audio controls class="audiplay"  style ="width:600px; padding-right: 10px; background: linear-gradient(#2b1055, #7597de);">
                <source
                src="record.mp3"
                type="audio/mp3"/>
           </audio>
            <div class="content-right">

            </div>
        </div>
</div>
</main>
<script src="https://cdn.jsdelivr.net/gh/sh20raj/AudiPlay/audiplay.min.js"></script>

</body>
</html>