<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Graphics and Web Design Portfolio</title>
        <link rel="icon" type="image/x-icon" href="/dezygner/favicon.png">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>

            body { margin: 0; background-color: white; display: flex; flex-direction: column; font-family: Source Sans Pro, Arial, Helvetica, Sans-serif; letter-spacing: 0.5px }

            nav { background-color: black; display: flex; align-content: center; width: 98%; padding-left: 2% }
            nav a { text-decoration: none; font-weight: bold; font-size: 16px; color: #fc970d; margin: 0px 5%; text-align: center; letter-spacing: 0.6px }
            nav a:hover { color: white; background-color: #fc970d; transition: 0.2s }
            .nav-logo { display: flex; background-color: black; padding: 3px 0px; margin-right: 44% }
            .nav-logo span { font-size: 35px; color: #fc970d; font-weight: bold; margin-top: 20px; cursor: default }
            .nav-logo img { width: 60px; margin-right: 5px }
            .nav-links { display: flex }
            .nav-portfolio { position: relative; font-weight: bold; font-size: 16px; color: #fc970d; cursor: pointer; margin: 0px 5%; text-align: center; letter-spacing: 0.6px }
            .nav-portfolio:hover { color: white; background-color: #fc970d; transition: 0.2s }
            .nav-portfolio .sub { display: none; position: absolute; background-color: #fc970d; width: 150px; margin-top: 5px; box-shadow: 0 2px 3px 0 rgba(0,0,0,0.5); border-radius: 2px }
            .nav-portfolio .sub a { color: black; padding: 12px 0px; transition: 0.2s }
            .nav-portfolio .sub a:hover { color: white }
            .menu { display: none; background: transparent; color: #fc970d; border: none; font-size: 24px; font-weight: bolder; cursor: pointer; width: 52px; transition: 0.2s }
            .menu i { padding-top: 2px }
            .menu:hover { background: #fc970d; color: white }

            @media screen and (max-width: 1220px) { 
                .nav-logo { margin-right: 42% }
            }

            @media screen and (max-width: 1180px) {
                .nav-logo { margin-right: 40% }
            }

            @media screen and (max-width: 1160px) {
                .nav-logo { margin-right: 38% }
            }

            @media screen and (max-width: 1120px) {
                .nav-logo { margin-right: 36% }
            }

            @media screen and (max-width: 1110px) {
                .nav-logo { margin-right: 34% }
            }

            @media screen and (max-width: 1050px) {
                .nav-logo { margin-right: 32% }
            }

            @media screen and (max-width: 1020px) {
                .nav-logo { margin-right: 30% }
            }

            @media screen and (max-width: 980px) {
                .nav-logo { margin-right: 28% }
            }

            @media screen and (max-width: 950px) {
                .nav-logo { margin-right: 26% }
            }

            @media screen and (max-width: 920px) {
                .nav-logo { margin-right: 24% }
            }

            @media screen and (max-width: 900px) {
                .nav-logo { margin-right: 22% }
            }

            @media screen and (max-width: 880px) {
                .nav-logo { margin-right: 20% }
            }

            @media screen and (max-width: 860px) {
                .nav-logo { margin-right: 18% }
            }

            @media screen and (max-width: 840px) {
                .nav-logo { margin-right: 62% }
                .nav-links { display: none }
                .menu { display: block }
            }

            @media screen and (max-width: 800px) {
                .nav-logo { margin-right: 57% }
            }

            @media screen and (max-width: 730px) {
                .nav-logo { margin-right: 54% }
            }

            @media screen and (max-width: 680px) {
                .nav-logo { margin-right: 52% }
            }

            @media screen and (max-width: 650px) {
                .nav-logo { margin-right: 50% }
            }

            @media screen and (max-width: 630px) {
                .nav-logo { margin-right: 49% }
            }

            @media screen and (max-width: 600px) {
                .nav-logo { margin-right: 47% }
            }

            @media screen and (max-width: 560px) {
                .nav-logo { margin-right: 44% }
            }

            @media screen and (max-width: 540px) {
                .nav-logo { margin-right: 42% }
            }

            @media screen and (max-width: 520px) {
                .nav-logo { margin-right: 40% }
            }

            @media screen and (max-width: 500px) {
                .nav-logo { margin-right: 38% }
            }

            @media screen and (max-width: 480px) {
                .nav-logo { margin-right: 36% }
            }

            @media screen and (max-width: 460px) {
                .nav-logo { margin-right: 38% }
                .nav-logo span { font-size: 30px; color: #fc970d; font-weight: bold; margin-top: 20px }
                .nav-logo img { width: 50px; margin-right: 5px }
                .menu { padding: 0px 10px }
            }
            
            @media screen and (max-width: 440px) {
                .nav-logo { margin-right: 37% }
            }

            @media screen and (max-width: 420px) {
                .nav-logo { margin-right: 34% }
            }

            @media screen and (max-width: 400px) {
                .nav-logo { margin-right: 31% }
            }

            @media screen and (max-width: 390px) {
                .nav-logo { margin-right: 27% }
            }

            .side-menu { position: fixed; left:-100%; background: rgba(255,151,13,0.8); width: 100%; height: 100%;  }
            aside { position: absolute; left:-100%; background-color: black; width: 60%; min-width: 300px; height: 100%; transition: 0.2s }
            aside a { font-size: 18px; text-align: center; padding: 15px 0px; font-weight: bold; text-decoration: none; color: #fc970d }
            aside a:hover { color: white; background-color: #fc970d; transition: 0.2s }
            .aside-logo { display: flex; padding: 10px ; margin-bottom: 20px }
            .aside-logo span { font-size: 35px; color: #fc970d; font-weight: bold; margin-top: 22px; margin-right: 49%; cursor: default }
            .aside-logo img { width: 64px; margin-right: 5px }
            .aside-logo button { position: relative; font-size: 19px; color: #fc970d; padding: 0px 5px; background: none; border: none; cursor: pointer }
            .aside-logo button i { position: absolute; margin-top: 5px; top: 0 }
            .aside-logo button:hover { color: white; transition: 0.2s }
            .aside-links { display: grid }
            .aside-portfolio { font-size: 18px; text-align: center; padding: 15px 0px; font-weight: bold; color: #fc970d; cursor: pointer }
            .aside-portfolio:hover { color: white; background-color: #fc970d; transition: 0.2s }
            .aside-portfolio .sub { display: none; background-color: #fc970d; border-radius: 2px; margin-top: 15px; margin-left: 10px; margin-right: 10px; box-shadow: 0 3px 5px 0.5px rgba(0,0,0,0.4) }
            .aside-portfolio .sub a { color: black; transition: 0.2s }
            .aside-portfolio .sub a:hover { background-color: black; color: #fc970d }

            @media screen and (max-width: 820px) {
                .aside-logo span { margin-right: 47% }
            }

            @media screen and (max-width: 800px) {
                .aside-logo span { margin-right: 45% }
            }

            @media screen and (max-width: 770px) {
                .aside-logo span { margin-right: 43% }
            }

            @media screen and (max-width: 750px) {
                .aside-logo span { margin-right: 41% }
            }

            @media screen and (max-width: 720px) {
                .aside-logo span { margin-right: 38% }
            }

            @media screen and (max-width: 690px) {
                .aside-logo span { margin-right: 36% }
            }

            @media screen and (max-width: 660px) {
                .aside-logo span { margin-right: 34% }
            }

            @media screen and (max-width: 640px) {
                .aside-logo span { margin-right: 32% }
            }

            @media screen and (max-width: 620px) {
                .aside-logo span { margin-right: 30% }
            }

            @media screen and (max-width: 600px) {
                .aside-logo span { margin-right: 28% }
            }

            @media screen and (max-width: 580px) {
                .aside-logo span { margin-right: 25% }
            }

            @media screen and (max-width: 560px) {
                .aside-logo span { margin-right: 22% }
            }

            @media screen and (max-width: 540px) {
                .aside-logo span { margin-right: 19% }
            }

            @media screen and (max-width: 520px) {
                .aside-logo span { margin-right: 16% }
            }

            @media screen and (max-width: 500px) {
                .aside-logo span { margin-right: 13% }
            }

            @media screen and (max-width: 460px) {
                aside a { font-size: 16px }
                .aside-portfolio { font-size: 16px }
                .aside-logo span { margin-right: 25% }
                .aside-logo span { font-size: 30px; color: #fc970d; font-weight: bold; margin-top: 17px }
                .aside-logo img { width: 50px; margin-right: 5px }
            }

            .banner { background-color: #fc970d; padding: 50px; box-shadow: 0 5px 15px 0 rgba(0,0,0,0.2) }
            .banner h1 { color: white }

            @media screen and (max-width: 900px) {
                .banner { padding: 30px 50px  }
                .banner h1 { font-size: 30px }
            }

            @media screen and (max-width: 482px) {
                .banner {padding: 5px 50px; line-height: 1.3 }
            }

            @media screen and (max-width: 400px) {
                .banner { padding: 5px 30px }
                .banner h1 { font-size: 28px }
            }

            .logos { background-color: transparent; padding: 40px 50px }
            .logos h2 { text-align: center; font-size: 30px; color: black; text-decoration: underline; text-decoration-color: #fc970d }
            .logos h3 { color: #fc970d }

            @media screen and (max-width: 400px) {
                .logos { padding: 40px 20px }
            }

            .company-branding { background-color: #fc970d; padding: 40px 50px; box-shadow: 0 5px 15px 0 rgba(0,0,0,0.2) }
            .company-branding h2 { text-align: center; font-size: 30px; color: black; text-decoration: underline; text-decoration-color: white }
            .company-branding h3 { color: white }
            
            @media screen and (max-width: 400px) {
                .company-branding { padding: 40px 20px }
            }

            .illustrations { background-color: transparent; padding: 40px 50px }
            .illustrations h2 { text-align: center; font-size: 30px; color: black; text-decoration: underline; text-decoration-color: #fc970d }
            .illustrations h3 { color: #fc970d }

            @media screen and (max-width: 400px) {
                .illustration { padding: 40px 20px }
            }

            .ad-content { background-color: #fc970d; padding: 40px 50px; box-shadow: 0 5px 15px 0 rgba(0,0,0,0.2) }
            .ad-content h2 { text-align: center; font-size: 30px; color: black; text-decoration: underline; text-decoration-color: white }
            .ad-content h3 { color: white }

            @media screen and (max-width: 400px) {
                .ad-content { padding: 40px 20px }
            }

            .matte-paintings { background-color: transparent; padding: 40px 50px }
            .matte-paintings h2 { text-align: center; font-size: 30px; color: black; text-decoration: underline; text-decoration-color: #fc970d }
            .matte-paintings h3 { color: #fc970d }

            @media screen and (max-width: 400px) {
                .matte-paintings { padding: 40px 20px }
            }

            .sub-item { display: flex; flex-wrap: wrap; width: 100% }
            .sub-item a { width: 32.45%; text-decoration: none; margin: 5px }
            .sub-item img { width: 100%; border-radius: 3px; box-shadow: 1px 2px 3px 1px rgba(0,0,0,0.3) }
            .sub-item img:hover { filter: brightness(75%); transition: 0.2s }

            @media screen and (max-width: 1230px) {
                .sub-item a { width: 32.3% }
            }

            @media screen and (max-width: 1066px) {
                .sub-item a { width: 32.15% }
            }

            @media screen and (max-width: 942px) {
                .sub-item a { width: 32.05% }
            }

            @media screen and (max-width: 876px) {
                .sub-item a { width: 31.95% }
            }

            @media screen and (max-width: 820px) {
                .sub-item a { width: 31.85% }
            }

            @media screen and (max-width: 772px) {
                .sub-item a { width: 31.7% }
            }

            @media screen and (max-width: 710px) {
                .sub-item a { width: 48.2% }
            }

            @media screen and (max-width: 654px) {
                .sub-item a { width: 48% }
            }

            @media screen and (max-width: 598px) {
                .sub-item a { width: 47.8% }
            }

            @media screen and (max-width: 552px) {
                .sub-item a { width: 47.6% }
            }

            @media screen and (max-width: 514px) {
                .sub-item a { width: 47.4% }
            }

            @media screen and (max-width: 482px) {
                .sub-item a { width: 47.2% }
            }

            @media screen and (max-width: 456px) {
                .sub-item a { width: 47% }
            }

            @media screen and (max-width: 432px) {
                .sub-item a { width: 46.8% }
            }

            @media screen and (max-width: 400px) {
                .sub-item a { width: 100%; margin: 5px 0px }

            }

            .section-5 { background-color: black; padding: 20px 50px; padding-top: 50px }
            .section-5 h1 { color: #fc970d; text-align: center; text-decoration: underline; text-decoration-color: white }
            .section-5 .sub { display: flex; width: 100% }
            .section-5 h3 { color: white }
            .one { display: grid; width: 50%; max-height: 270px }
            .one span { margin-bottom: 0px; font-size: 17px; font-weight: bold; color: #fc970d; letter-spacing: 0.5px }
            .two { width: 50% }
            .message-form { display: grid }
            .message-form label { color: #fc970d; font-weight: bold; letter-spacing: 0.5px; margin-bottom: 5px }
            .message-form input { margin-bottom: 15px; padding: 5px 7px; font-size: 16px }
            .message-form textarea { padding: 10px 7px; font-size: 16px; height: 100px }
            .socials { display: inline; cursor: default }
            .socials a { color: #fc970d; margin: 0px 6px; font-size: 23px; cursor: pointer }
            .socials a:hover { color: white; transition: 0.2s }
            .btn { height: 38px; background-color: #fc970d; color: white; font-weight: bold; letter-spacing: 1px; border: none; border-radius: 3px; margin-top: 15px; cursor: pointer }
            .btn:hover { background-color: white; color: #fc970d; transition: 0.2s }
            .copy { text-align: center; color: #fc970d; font-size: 17px; font-weight: bold }

            @media screen and (max-width: 900px) {
                .section-5 { padding: 20px; padding-top: 50px }
                .socials { max-width: 300px; line-height: 1.5 }
            }

            @media screen and (max-width: 750px ) {
                .section-5 .sub { display: grid }
                .one { width: 100%; margin-bottom: 50px }
                .one span { margin-bottom: 20px }
                .two { width: 100% }
                .socials { max-width: unset }
            }

        </style>
    </head>
    <body>
        
        <nav>
            <div class="nav-logo">
                <img src="/dezygner/Dezygner Logo/logo.png"/>
                <span>Dezygner</span>
            </div>
            <div class="nav-links">
                <a href="/" style="padding: 37px 15px">Home</a>
                <div id="portfolio" style="padding: 37px 6px" class="nav-portfolio">
                    Portfolio
                    <div id="portfolio-sub" class="sub">
                        <a href="/portfolio/graphics-design/">Graphics Design</a>
                        <a href="/portfolio/website-design/">Web Design</a>
                    </div>
                </div>
                <a href="/resume/" style="padding: 37px 7px">Resume</a>
                <a href="/services/" style="padding: 37px 5px">Services</a>
            </div>
            <button id="menu-btn" class="menu"><i class="fa fa-bars"></i></button>
        </nav>

        <div id="menu" class="side-menu">
            <aside id="aside">
                <div class="aside-logo">
                    <img src="/dezygner/Dezygner Logo/logo.png"/>
                    <span>Dezygner</span>
                    <button id="close-btn"><i class="fa fa-close"></i></button>
                </div>
                <div class="aside-links">
                    <a href="/">Home</a>
                    <div id="side-port" class="aside-portfolio">
                        Portfolio
                        <div id="side-port-sub" class="sub">
                            <a href="/portfolio/graphics-design/">Graphics Design</a>
                            <a href="/portfolio/website-design/">Web Design</a>
                        </div>
                    </div>
                    <a href="/resume/">Resume</a>
                    <a href="/services/">Services</a>
                </div>
                <div align="center" style="position: absolute; bottom: 0; width: 100%; padding: 10px 0px">
                    <span style="color: #fc970d; font-size: 15px; font-weight: bold">Copyright @ Dezygner.com</span>
                </div>
            </aside>
        </div>

        <div class="banner">
            <h1>Graphics Design Portfolio</h1>
        </div>

        <div class="logos">
            <h2>Logos</h2>
            <h3>2D Logos</h3>
            <div class="sub-item">
                <a href="/dezygner/Logos/dj.jpg" target="_blank"><img src="/dezygner/Logos/dj.jpg"/></a>
                <a href="/dezygner/Logos/jaf.jpg" target="_blank"><img src="/dezygner/Logos/jaf.jpg"/></a>
            </div>
            <br><br>
            <h3>3D Logos</h3>
            <div class="sub-item">
                <a href="/dezygner/Logos/dj2.jpg" target="_blank"><img src="/dezygner/Logos/dj2.jpg"/></a>
                <a href="/dezygner/Logos/xceed.jpg" target="_blank"><img src="/dezygner/Logos/xceed.jpg"/></a>
            </div>
        </div>

        <div class="company-branding">
            <h2>Company Branding</h2>
            <h3>Letter Heads</h3>
            <div class="sub-item">
                <a href="/dezygner/Company Branding/letter1.jpg" target="_blank"><img src="/dezygner/Company Branding/letter1.jpg"/></a>
                <a href="/dezygner/Company Branding/letter2.jpg" target="_blank"><img src="/dezygner/Company Branding/letter2.jpg"/></a>
            </div>
            <br><br>
            <h3>Envelope Jackets</h3>
            <div class="sub-item">
                <a href="/dezygner/Company Branding/envelope1.jpg" target="_blank"><img src="/dezygner/Company Branding/envelope1.jpg"/></a>
                <a href="/dezygner/Company Branding/envelope2.jpg" target="_blank"><img src="/dezygner/Company Branding/envelope2.jpg"/></a>
            </div>
            <br><br>
            <h3>ID Cards</h3>
            <div class="sub-item">
                <a href="/dezygner/Company Branding/id1.jpg" target="_blank"><img src="/dezygner/Company Branding/id1.jpg"/></a>
                <a href="/dezygner/Company Branding/id2.jpg" target="_blank"><img src="/dezygner/Company Branding/id2.jpg"/></a>
            </div>
            <br><br>
            <h3>Business Cards</h3>
            <div class="sub-item">
                <a href="/dezygner/Company Branding/card1.jpg" target="_blank"><img src="/dezygner/Company Branding/card1.jpg"/></a>
                <a href="/dezygner/Company Branding/card2.jpg" target="_blank"><img src="/dezygner/Company Branding/card2.jpg"/></a>
            </div>
        </div>

        <div class="illustrations">
            <h2>Illustrations</h2>
            <h3>Hand Drawn</h3>
            <div class="sub-item">
                <a href="/dezygner/Illustrations/fish.jpg" target="_blank"><img src="/dezygner/Illustrations/fish.jpg" /></a>
            </div>
            <br><br>
            <h3>Vector</h3>
            <div class="sub-item">
                <a href="/dezygner/Illustrations/lambo.jpg" target="_blank"><img src="/dezygner/Illustrations/lambo.jpg" /></a>
                <a href="/dezygner/Illustrations/dj.jpg" target="_blank"><img src="/dezygner/Illustrations/dj.jpg" /></a>
            </div>
        </div>

        <div class="ad-content">
            <h2>Ad Content</h2>
            <h3>Banners</h3>
            <div class="sub-item">
                <a href="/dezygner/Ads/banner1.jpg" target="_blank"><img src="/dezygner/Ads/banner1.jpg" /></a>
                <a href="/dezygner/Ads/banner2.jpg" target="_blank"><img src="/dezygner/Ads/banner2.jpg" /></a>
                <a href="/dezygner/Ads/banner3.jpg" target="_blank"><img src="/dezygner/Ads/banner3.jpg" /></a>
            </div>
            <br><br>
            <h3>Social Media</h3>
            <div class="sub-item">
                <a href="/dezygner/Ads/cadbury.jpg" target="_blank"><img src="/dezygner/Ads/cadbury.jpg" /></a>
                <a href="/dezygner/Ads/cream.jpg" target="_blank"><img src="/dezygner/Ads/cream.jpg" /></a>
                <a href="/dezygner/Ads/fortune.jpg" target="_blank"><img src="/dezygner/Ads/fortune.jpg" /></a>
                <a href="/dezygner/Ads/house.jpg" target="_blank"><img src="/dezygner/Ads/house.jpg" /></a>
            </div>
        </div>

        <div class="matte-paintings">
            <h2>Matte Paintings</h2>
            <h3>Landscape</h3>
            <div class="sub-item">
                <a href="/dezygner/Matte/island.jpg" target="_blank"><img src="/dezygner/Matte/island.jpg" /></a>
            </div>
            <br><br>
            <h3>Abstract</h3>
            <div class="sub-item">
                <a href="/dezygner/Matte/fish.jpg" target="_blank"><img src="/dezygner/Matte/fish.jpg" /></a>
            </div>
        </div>

        <div class="section-5">
            <h1>Contact Me</h1>
            <br>
            <div class="sub">
                <div class="one">
                <h3>Contact Info</h3>
                    <span><i class="fa fa-envelope"></i>&nbsp;&nbsp;mike@dezygner.com</span>
                    <span><i class="fa fa-phone"></i>&nbsp;&nbsp;(+234) 08090175928</span>
                    <h3>Socials and Online</h3>
                    <div class="socials">
                        <a href="https://www.facebook.com/profile.php?id=100013415673400" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/dezygnermike/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://twitter.com/Demilademike" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.pinterest.com/Dezygnermike/" target="_blank"><i class="fa fa-pinterest-p"></i></a>
                        <a href="https://www.tumblr.com/blog/dezygnermike" target="_blank"><i class="fa fa-tumblr"></i></a>
                        <a href="https://www.deviantart.com/dezygnermike" target="_blank"><i class="fa fa-deviantart"></i></a>
                        <a href="https://wa.me/2348090175928" target="_blank"><i class="fa fa-whatsapp"></i></a>
                        <a href="https://www.behance.net/dezygnermike" target="_blank"><i class="fa fa-behance"></i></a>
                        <a href="https://dribbble.com/dezygnermike" target="_blank"><i class="fa fa-dribbble"></i></a>
                        <a href="https://github.com/DemiOye" target="_blank"><i class="fa fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/demilade-oyeyele-2a91b6164/" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="two">
                    <h3>Send a Message</h3>
                    <form action="" method="POST">
                        <div class="message-form">
                            <label>Name</label>
                            <input type="text" id="name" name="name" disabled/>
                            <label>Email</label>
                            <input type="email" id="email" name="email" disabled/>
                            <label>Phone (Optional)</label>
                            <input type="tel" id="phone" name="phone" disabled/>
                            <label>Message</label>
                            <textarea id="message" name="message" placeholder="Type here..." disabled></textarea>
                            <input class="btn" type="submit" value="Submit" disabled/>
                        </div>
                    </form>
                </div>
            </div>
            <br><br><br><br>
            <div align="center">
                <span class="copy">Copyright @ Dezygner.com</span>
            </div>
        </div>

        <script>
            let menu = document.getElementById("menu");
            let menuBtn = document.getElementById("menu-btn");
            let closeBtn = document.getElementById("close-btn");
            let aside = document.getElementById("aside");
            let portfolio = document.getElementById("portfolio");
            let portSub = document.getElementById("portfolio-sub");
            let sidePort = document.getElementById("side-port");
            let sidePortSub = document.getElementById("side-port-sub");

            portfolio.onclick =()=> {

                if (portSub.style.display === "") {
                        portSub.style.display = "grid";
                }
                else if (portSub.style.display === "none") {
                        portSub.style.display = "grid";
                    } 
                else {
                        portSub.style.display = "none";
                    }

            }

            sidePort.onclick =()=> {

                if (sidePortSub.style.display === "") {
                        sidePortSub.style.display = "grid";
                }
                else if (sidePortSub.style.display === "none") {
                        sidePortSub.style.display = "grid";
                }
                else {
                        sidePortSub.style.display = "none";
                }

            }

            menuBtn.onclick =()=> {
                menu.style.left = "0";
                aside.style.left = "0";
            };

            closeBtn.onclick =()=> {
                menu.style.left = "-100%";
                aside.style.left = "-100%";
            };
            
        </script>
    </body>
</html>