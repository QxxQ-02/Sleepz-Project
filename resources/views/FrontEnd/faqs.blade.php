<!DOCTYPE html>

<html>
<head>
    <title>Parallex Scrolling</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <style>
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

        .caption {
            background-image: url("https://i.pinimg.com/originals/d6/5a/c2/d65ac25847667c1c0a19fccc0f12f792.jpg");
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: cover;
            align-items: center;
            font-size: 125%;
            color: #fff;
            display: flex;
            min-height: 37.5rem;
            padding: 3.75rem 40%;
            position: relative;
            overflow: hidden;
        }

        /* body */
        #accordion {
            margin: 100px auto;
            width: 600px;
        }

        #accordion li {
            list-style: none;
            width: 100%;
            margin-bottom: 10px;
            background-color: #2b1055;
            padding: 10px;
            border-radius: 4px;
        }

        #accordion li label {
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 20px;
            font-weight: 500;
            cursor: pointer;
            color: #2b1055;
        }

        #accordion li label span {
            transform: rotate(90deg);
            font-size: 22px;
            color: black;
        }

        #accordion label + input[type="radio"] {
            display: none;
        }

        #accordion .content {
            padding: 0 10px;
            line-height: 26px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s;
        }

        #accordion label + input[type="radio"]:checked + .content {
            max-height: 400px;
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
            <li><a href="home" class=" nav">Home</a></li>
            <li><a href="music" class="nav">Music</a></li>
            <li><a href="about" class="nav">About</a></li>
            <li><a href="contact" class="nav">Contact</a></li>
            <li><a href="" class ="nav"> <input type = "checkbox" id = "toggle"> </input>
                    <label for="toggle"> &#9776; </label>
                </a>
            </li>
        </ul>
    </header>

    <main>
    <section class="caption">
        <div>
            <h1 id="title">FAQs</h1>
        </div>
    </section>

    <section>
        <ul id="accordion">
            <li>
                <label for="q1">How to get a good sleep?<span>&#x3e;</span></label>
                <input type="radio" name="accordion" id="q1" checked>
                <div class="content">
                    <p>Keep It Cool: Cool bodies sleep better, but most people keep their bedrooms too warm at night,
                        which can interfere with sleep. Taking a hot bath before bedtime.</p>
                </div>
            </li>

            <li>
                <label for="q2">How to get a good sleep?<span>&#x3e;</span></label>
                <input type="radio" name="accordion" id="q2">
                <div class="content">
                    <p>Keep It Cool: Cool bodies sleep better, but most people keep their bedrooms too warm at night,
                        which can interfere with sleep. Taking a hot bath before bedtime.</p>
                </div>
            </li>

            <li>
                <label for="q3">How to get a good sleep?<span>&#x3e;</span></label>
                <input type="radio" name="accordion" id="q3">
                <div class="content">
                    <p>Keep It Cool: Cool bodies sleep better, but most people keep their bedrooms too warm at night,
                        which can interfere with sleep. Taking a hot bath before bedtime.</p>
                </div>
            </li>

            <li>
                <label for="q4">How to get a good sleep?<span>&#x3e;</span></label>
                <input type="radio" name="accordion" id="q4">
                <div class="content">
                    <p>Keep It Cool: Cool bodies sleep better, but most people keep their bedrooms too warm at night,
                        which can interfere with sleep. Taking a hot bath before bedtime.</p>
                </div>
            </li>
        </ul>
    </section>
</main>

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
