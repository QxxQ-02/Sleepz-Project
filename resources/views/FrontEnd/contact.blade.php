<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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

.caption {
    background-image: url("https://i.pinimg.com/originals/d6/5a/c2/d65ac25847667c1c0a19fccc0f12f792.jpg");
    background-position: 50%;
    background-repeat: no-repeat;
    background-size: cover;
    align-items: center;
    font-size: 200%;
    color: #fff;
    display: flex;
    min-height: 37.5rem;
    padding: 3.75rem 40%;
    position: relative;
    overflow: hidden;
    text-shadow: 0.1rem, 0.1rem, 0.8rem, rgb(233, 229, 229);
}

.container {
    align-items: center;
    display: block;
    display: flex;
    justify-content: center;
    height: 100%;
}

.grid {
    background-color: #fff;
    padding: 2.5rem 0;
    position: relative;
    z-index: 10;
    border: 3px solid #fff;
}

.grid-container {
    display: grid;
    grid-template-columns: auto auto;
    margin-left: auto;
    margin-right: auto;
    padding-left: 1.875rem;
    padding-right: 1.875rem;
    width: 80%;
}

.grid-item3 {
    grid-row: 1/3;
}

.question-content {
    margin: 5rem;
    align-items: left;
    width: 50%;
}

.contact-content {
    margin: 5rem;
    align-items: left;
    width: 50%;
}

.message-content > p {
    margin: 0 35%;
}

.message-content .input {
    align-items: center;
    margin: 45%;
}

.content {
    margin-left: auto;
    margin-right: auto;
}

h2 {
    text-align: center;
    font-weight: 400;
    line-height: 1.2;
    margin: 3rem 0;
}

h5 {
    font-weight: 600;
}

p {
    line-height: 1.6;
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}

.fill {
    padding-top: 5rem;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #fff;
    box-sizing: border-box;
    text-align: center;
}

.butt {
    background-color: #fff;
    color: linear-gradient(#2b1055, #7597de);
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    align-items: center;
    width: 100%;
}

.butt:hover {
    opacity: 0.8;
}

.social> button {
    background-color: #fff;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    width: 100%;
}

/* footer */
footer{
    background: linear-gradient(#2b1055, #7597de);
    position: absolute;
    color: #fff;
    position: relative;
    overflow: hidden;
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
        <a href="#" class="logo">Sleepz</a>
        <ul>
        <li><a href="home" class="active nav">Home</a></li>
            <li><a href="music" class="nav">Music</a></li>
            <li><a href="about" class="nav">About</a></li>
            <li><a href="contact" class="nav">Contact</a></li>
        </ul>
    </header>

    <main>
        <section class="caption">
            <div>
                <h1 id="title">CONTACT US</h1>
            </div>
        </section>

      <section class="grid">
          <div class="grid-container">
              <div class="content grid-item1">
                  <div class="question-content">
                      <h2>FAQs</h2>
                      <p>Here are the questions that we mostly received from our viewers.</p>
                      <button class="butt"><a href="faqs">VIEW</a></button>
                  </div>
              </div>
              <div class="content grid-item2">
                  <div class="contact-content">
                      <h2>Contact Us</h2>
                      <div>
                          <h5>Phone Number</h5>
                          <p>+885 123 456</p>
                          <h5>Working Hour</h5>
                          <p>Monday-Friday 7:00am-9:00pm</p>
                          <h5>Address</h5>
                          <p>Kyoto City, Japan</p>
                     </div>
                  </div>
              </div>
          </div>
          <div class="content grid-item3">
              <div class="message-content">
                  <h2>Send an Email to Us</h2>
                  <p>Fill in your information, and we will contact you back.</p>
                  <div class="fill">
                      <label class="input" for="ftname"><b>FIRST NAME</b></label>
                      <input type="text" placeholder="_______________" name="ftname" required>

                      <label class="input" for="ltname"><b>LAST NAME</b></label>
                      <input type="text" placeholder="_______________" name="ltname" required>

                      <label class="input" for="email"><b>EMAIL</b></label>
                      <input type="text" placeholder="_______________" name="email" required>

                      <label class="input" for="number"><b>PHONE NUMBER</b></label>
                      <input type="text" placeholder="_______________" name="number" required>

                      <label class="input" for="job"><b>OCCUPATION</b></label>
                      <input type="text" placeholder="_______________" name="job" required>

                      <label class="input" for="location"><b>INSTITUTE</b></label>
                      <input type="text" placeholder="_______________" name="location" required>

                      <label class="input" for="type"><b>QUESTION ABOUT</b></label>
                      <input type="text" placeholder="_______________" name="type" required>

                      <label class="input" for="mess"><b>MESSAGE</b></label>
                      <input type="text" placeholder="_______________" name="mess" required>
                  </div>
                  <button type="submit" class="butt"><a href="#">SUBMIT</a></button>
              </div>
          </div>
      </section>

      <div class="follow">
          <h2>FOLLOW US ON SOCIAL MEDIA</h2>
          <div class="social">
              <button><a href="https://www.facebook.com/profile.php?id=100091654406873"><i class="fa-brands fa-facebook"></i> Facebook</a></button>
              <button><a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a></button>
              <button><a href="https://www.youtube.com/@Sleep_z_/featured"><i class="fa-brands fa-youtube"></i> Youtube</a></button>
          </div>
      </div>
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
                    <a href="#music.html">Music</a>
                  </li>
                  <li>
                    <a href="#search.html">Search</a>
                  </li>
                  <li>
                    <a href="#contact.html">Contact</a>
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
