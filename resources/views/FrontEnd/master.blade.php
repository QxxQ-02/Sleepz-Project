<!DOCTYPE html>
<html>
    <head>
        <title>Parallex Scrolling</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
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

/* body part */
body{
    /* to fix the size of web page */
    min-height: 100vh;
    /* mix the color of background */
    background: linear-gradient(#2b1055, #7597de);
    /* to hide the things that out of the body part */
    overflow-x: hidden;
}

/* header part */
header{
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

/* background-image */
/* section part */
section{
    position: relative;
    width: 100%;
    height: 100vh;
    padding: 100px;
    /* put the things in the middle */
    display: flex;
    justify-content: center;
    align-items: center;
    /* hide the things that out of the section */
    overflow: hidden;
}

/* what will be seen before the section */
section::before{
    content: '';
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 100px;
    background: linear-gradient(to top, #1c0522, transparent);
    /* to put the section to the front */
    z-index: 1000;
}

/* img in the section */
section img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    /* to not change the pointer when the arrow touch the img */
    pointer-events: none;
}

/* the moon in the section */
section img#moon{
    mix-blend-mode: screen;
}

/* the mountain in the section */
section img#mountains_front{
    z-index: 10;
}

/* title in the section */
#title{
    position: absolute;
    color: #fff;
    white-space: nowrap;
    font-size: 5.5vw;
    z-index: 9;
    /* locate the size of the title to the right */
    right: -350px;
}

/* the btn in the section */
#btn{
    text-decoration: none;
    display: inline-block;
    padding: 8px 30px;
    border-radius: 40px;
    background: #fff;
    color: #2b1055;
    font-size: 1.5em;
    z-index: 9;
    /* to lower down the btn in the Y degree */
    transform: translateY(100px);
}

/* the paragraph in the div */
.para{
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    position: relative;
    padding: 100px;
    background: #1c0522;
}

/* the h2 in the paragraph */
.para h2{
    color: #fff;
    font-size: 3em;
    margin-bottom: 10px;
}

/* the p in the paragraph */
.para p{
    font-size: 1em;
    color: #fff;
}

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
 /* menu bar */

 html, body{
        height: 100%;
        background: linear-gradient(to top left,#2b1055, #7597de);
      }
      .side-bar{
        height: 100%;
        position: relative;
      }

 input[type = checkbox]{
        display: none;
      }

      .side-bar div{
        display: flex;
        height: 30%;
      }
      .side-bar div label{
        font-size: 2.3em;
        height: 100%;
        width: 60px;
        text-align: center;
        transition: .5s ease;
      }
.side-bar nav{
    position: absolute;
    top: 60px;
    bottom: 0;
    width: 250px;
    background: rgba(0,0,0,.1);
    box-shadow: 2px 5px 5px #000;

}
.side-bar nav ul li a{
    display: flex;
    algin-item: center;
    font-size: 1.2em;
    font-family: arial;
    color: #000;
    text-decoration: none;
    text-transform: capitalize;
    padding: 10px 30px;
    height: 50px;
}
        </style>
    </head>
    <body>
        <header class="nav">
            <a href="#" class="logo">Sleepz</a>
            <ul>
                <li><a href="home" class=" nav">Home</a></li>
                <li><a href="music" class="nav">Music</a></li>
                <li><a href="about" class="nav">About</a></li>
                <li><a href="contact" class="nav">Contact</a></li>
                <li><a href="menu" class ="nav"> <input type = "checkbox" id = "toggle"> </input>
                                                 <label for="toggle"> &#9776; </label>
        </header>

        <section>
            <img src="stars.png" id="stars">
            <img src="moon.png" id="moon">
            <img src="mountains_behind.png" id="mountains_behind">
            <h2 id="title">Dreamy Night</h2>
            <a href="#intro" id="btn">Explore</a>
            <img src="mountains_front.png" id="mountains_front">
        </section>

        <div class="para" id="intro">
            <h2>Falling asleep during night time</h2>
            <p>Night (also described as night time, unconventionally spelled as "nite") is the period of ambient darkness from sunset to sunrise during each 24-hour day, when the Sun is below the horizon.
                The exact time when night begins and ends depends on the location and varies throughout the year, based on factors such as season and latitude.
                <br><br>The word can be used in a different sense as the time between bedtime and morning.
                In common communication, the word night is used as a farewell ("good night", sometimes shortened to "night"), mainly when someone is going to sleep or leaving.
                <br><br>Astronomical night is the period between astronomical dusk and astronomical dawn when the Sun is between 18 and 90 degrees below the horizon and does not illuminate the sky.
                As seen from latitudes between about 48.56° and 65.73° north or south of the Equator, complete darkness does not occur around the summer solstice because, although the Sun sets, 
                it is never more than 18° below the horizon at lower culmination, &#8722;90° Sun angles occur at the Tropic of Cancer on the December solstice and Tropic of Capricorn on the June solstice, and at the equator on equinoxes. 
                And as seen from latitudes greater than 72° north or south of the equator, complete darkness does not occur both equinoxes because, although the Sun sets, it is never more than 18° below the horizon.
                <br><br>The opposite of night is day (or "daytime", to distinguish it from "day" referring to a 24-hour period). Twilight is the period of night after sunset or before sunrise when the Sun still illuminates the sky when it is below the horizon.
                At any given time, one side of Earth is bathed in sunlight (the daytime), while the other side is in darkness caused by Earth blocking the sunlight. The central part of the shadow is called the umbra, where the night is darkest.
                <br><br>Natural illumination at night is still provided by a combination of moonlight, planetary light, starlight, zodiacal light, gegenschein, and airglow. In some circumstances, aurorae, lightning, and bioluminescence can provide some illumination. 
                The glow provided by artificial lighting is sometimes referred to as light pollution because it can interfere with observational astronomy and ecosystems.
            </p>
        </div>

        <div>
            <footer class="ftSleep">
                <div class="flex-container">
                  <div class="logo">
                    <a href="#">Sleepz</a>
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

        <script>
            let stars = document.getElementById('star');
            let moon = document.getElementById('moon');
            let mountains_behind = document.getElementById('mountains_behind');
            let title = document.getElementById('title');
            let btn = document.getElementById('btn');
            let mountains_front = document.getElementById('mountains_front');
            let header = document.querySelector('header');

            window.addEventListener('scroll', function(){
                let value = window.scrollY;
                stars.style.left = value * 0.25 + 'px';
                moon.style.top = value * 1.05 + 'px';
                mountains_behind.style.top = value * 0.5 + 'px';
                mountains_front.style.top = value * 0 + 'px';
                title.style.marginRight = value * 4 + 'px';
                title.style.marginTop = value * 1.5 + 'px';
                btn.style.marginTop = value * 1.5 + 'px';
                header.style.top = value * 0.5 + 'px';
            })
        </script>
    </body>
</html>