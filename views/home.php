<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Graphics and Web Design Portfolio</title>
        <link rel="icon" type="image/x-icon" href="/dezygner/favicon.png">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>

            body { margin: 0; display: flex; flex-direction: column; background-color: #fc970d; font-family: Source Sans Pro, Arial, Helvetica, Sans-serif; letter-spacing: 0.5px }

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
            .menu { display: none; background: transparent; color: #fc970d; border: none; font-size: 24px; font-weight: bolder; cursor: pointer; width: 52px }
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
                .nav-logo span { font-size: 30px; color: #fc970d; font-weight: bold; margin-top: 17px }
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
            aside a:hover { color: white; background-color: #fc970d; transition: 0.1s }
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

            .section-1 { background-image: url("/dezygner/preview/background.jpg"); background-repeat: no-repeat; background-position: center; background-size: cover; box-shadow: 0 10px 20px 0 rgba(0,0,0,0.3) }
            .section-1 .sub { background: rgba(0,0,0,0.1); height: 600px; padding: 20px 50px; padding-top: 60px }
            .section-1 h1 { color: white; margin-top: 27px }
            .intro { background: rgba(0,0,0,0.5); color: #fff; font-weight: bold; width: 40%; min-width: 300px; padding: 20px; padding-bottom: 35px; border-radius: 3px; letter-spacing: 0.5px }
            .dp { display: flex; margin-bottom: 12px; width: 100% }
            .dp img { width: 80px; padding: 5px; background-color: white; border-radius: 50% }
            .dp img:hover { background-color: #fc970d; }
            .dp a { margin-left: 47% }

            @media screen and (max-width: 1123px) {
                .dp a { margin-left: 45% }
            }

            @media screen and (max-width: 1087px) {
                .dp a { margin-left: 43% }
            }

            @media screen and (max-width: 1053px) {
                .dp a { margin-left: 41% }
            }

            @media screen and (max-width: 1021px) {
                .dp a { margin-left: 39% }
            }

            @media screen and (max-width: 990px) {
                .dp a { margin-left: 37% }
            }

            @media screen and (max-width: 961px) {
                .dp a { margin-left: 35% }
            }

            @media screen and (max-width: 935px) {
                .dp a { margin-left: 33% }
            }

            @media screen and (max-width: 910px) {
                .dp a { margin-left: 30% }
            }

            @media screen and (max-width: 876px) {
                .dp a { margin-left: 27% }
            }

            @media screen and (max-width: 750px) {
                .intro { background: rgba(0,0,0,0.7) }
            }

            @media screen and (max-width: 450px) {
                .section-1 .sub { padding: 30px; padding-top: 50px }
                .intro { min-width: 260px }
                .dp a { margin-left: 15% }
            }

            .section-2 { background: transparent; padding: 20px 50px; padding-top: 50px }
            .section-2 h1 { text-align: center; text-decoration: underline; text-decoration-color: white; color: black }
            .section-2 span { margin-bottom: 15px }
            .part-1 { display: grid; background: rgb(255,255,255); width: 75%; padding: 20px; border-radius: 3px; letter-spacing: 0.5px; margin-bottom: 50px; color: #1d1d1d; box-shadow: 0 5px 7px 0 rgba(0,0,0,0.2); line-height: 1.2 }
            .part-2 { display: grid; background: rgb(255,255,255); width: 75%; padding: 20px; border-radius: 3px; letter-spacing: 0.5px; margin-bottom: 50px; color: #1d1d1d; float: right; box-shadow: 0 5px 7px 0 rgba(0,0,0,0.2); line-height: 1.2 }
            .part-2 a { color: #fc970d; text-decoration: none }
            .part-2 a:hover { text-decoration: underline; transition: 0.2s }

            @media screen and (max-width: 800px) {
                .section-2 { display: grid; padding-left: 20px; padding-right: 20px}
                .part-1 { width: unset; margin-top: 25px }
                .part-2 { float: unset; width: unset }
            }

            @media screen and (max-width: 450px) {
                .section-2 { padding-top: 45px }
                .section-2 h2 { text-align: center }
            }

            .section-3 { background-color: black; color: #fc970d; padding: 20px 50px; padding-top: 40px; box-shadow: 0 15px 30px 0 rgba(0,0,0,0.3) }
            .section-3 h1 { color: #fc970d; text-decoration: underline; text-decoration-color: white }
            .section-3 .sub { border-radius: 3px; margin-bottom: 50px }
            .section-3 h2 { color: white }
            .gd { display: flex; flex-wrap: wrap; width: 100%; padding-left: 2px }
            .gd a { width: 32.45%; text-decoration: none; margin: 5px }
            .gd img { width: 100%; border-radius: 3px; box-shadow: 0 2px 3px 0 rgba(255,255,255,0.3) }
            .gd img:hover { filter: brightness(75%); transition: 0.2s }
            .see-more { text-decoration: none; font-weight: bold; background-color: #fc970d; color: white; padding: 8px 15px; border-radius: 20px }
            .see-more:hover { color: #fc970d; background-color: white; transition: 0.2s }
            .also { font-size: 17px; font-weight: bold }
            .also a { text-decoration: none; color: white }
            .also a:hover { text-decoration: underline; text-decoration-color: #fc970d; transition: 0.2s }

            @media screen and (max-width: 1230px) {
                .gd a { width: 32.3% }
            }

            @media screen and (max-width: 1066px) {
                .gd a { width: 32.15% }
            }

            @media screen and (max-width: 942px) {
                .gd a { width: 32.05% }
            }

            @media screen and (max-width: 876px) {
                .gd a { width: 31.95% }
            }

            @media screen and (max-width: 820px) {
                .gd a { width: 31.85% }
            }

            @media screen and (max-width: 800px) {
                .section-3 { padding: 20px }
            }

            @media screen and (max-width: 772px) {
                .gd a { width: 31.7% }
            }

            @media screen and (max-width: 710px) {
                .gd a { width: 48.2% }
            }

            @media screen and (max-width: 654px) {
                .gd a { width: 48% }
            }

            @media screen and (max-width: 598px) {
                .gd a { width: 47.8% }
                .also { font-size: 16px }
            }

            @media screen and (max-width: 552px) {
                .gd a { width: 47.6% }
            }

            @media screen and (max-width: 514px) {
                .gd a { width: 47.4% }
            }

            @media screen and (max-width: 482px) {
                .gd a { width: 47.2% }
            }

            @media screen and (max-width: 456px) {
                .gd a { width: 47% }
            }

            @media screen and (max-width: 432px) {
                .gd a { width: 46.8% }
            }

            .section-4 { background: transparent; padding: 20px 50px; padding-top: 50px }
            .section-4 h1 { text-align: center; text-decoration: underline; text-decoration-color: white }
            .section-4 .sub { display: flex }
            .rate { height: 350px; background-color: black; color: #fc970d; width: 48%; margin: 1%; border: solid 2px #fff; border-radius: 5px; box-shadow: 0px 5px 7px 0 rgba(0,0,0,0.2) }
            .rate h2 { text-align: center }
            .rate ul { line-height: 2.0; color: white; font-size: 17px; font-weight: bold }

            @media screen and (max-width: 850px) {
                .section-4 .sub { display: grid }
                .rate { width: 98% }
            }

            @media screen and (max-width: 550px) {
                .section-4 { padding: 20px; padding-top: 50px }
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

        <div class="section-1">
            <div class="sub">
                <div class="intro">
                    <div class="dp">
                        <h1>Hi there,</h1>
                        <a href="https://about.me/demiladeoyeyele" target="_blank"><img src="/dezygner/preview/dp.jpg"/></a>
                    </div>
                    I'm Michael and welcome to Dezygner.com, My personal online portfolio website.
                    This website contains an exhaustive catalog of my works in graphics and web design
                    and a list of the services I offer.
                    Also on this website are my resume (CV), contact info and social media handles.
                </div>
            </div>
        </div>

        <div class="section-2">
            <h1>What I do</h1><br>
                <div class="part-1">
                    <h2>Graphics Design and Illustration</h2>
                    <span>
                        I've had several years of experience working as a graphics designer and illustrator.
                        Most of my work experience has been as a Freelancer, however, I've also been hired full-time by a handful of companies
                        as a graphics designer or another kind of digital artist.
                        Below are more details of my skills as and qualifications as a graphics designer.
                    </span>
                    <span>
                        <b>Software:&nbsp;</b>
                        Adobe Premiere, Adobe Photoshop, Adobe Illustrator, Corel Draw and GIMP.
                    </span>
                    <span>
                        <b>Design Products:&nbsp;</b>
                        Logos (2D and 3D), Logo Animations, Advertising Materials (Banners, Flyers, Posters, Social Media Posts etc),
                        Album Cover Art, Logo Grey Scale, Corporate Branding (Letter Heads, Envelope Jackets, ID Cards and Business Cards) and Matte Paintings.
                    </span>
                    <span>
                        <b>Skills:&nbsp;</b>
                        Animation, Character Design, Hand Drawing, Shading and Shadow Detailing, Color Formatting,
                        Converting 2D images to 3D, Logo/Design Recreation and Converting scaler images to vector.
                    </span>
                    <span style="font-size: 14px; font-weight: bold; margin-top: 15px">
                        Please, kindly note that I only make animations for logos and that this is without exception.
                        Thanks a bunch &lt;3.
                    </span>
                </div>

                <div class="part-2">
                    <h2>Website Design and Web App Development</h2>
                    <span>
                        Aside from graphics design, I also have strong skills and reliable experience with designing and developing websites
                        and web applications both as a freelancer and a full-time company employee. My web development experience is in Full-Stack (Frontend and Backend).
                        Skills and methodologies are as follows.
                    </span>
                    <span>
                        <b>Programming Languages:&nbsp;</b>
                        HTML, CSS, JavaScript, PHP, SQL, Markdown, Python and Java.
                    </span>
                    <span>
                        <b>Frameworks and Libraries:&nbsp;</b>
                        Bootstrap, Tailwind, jQuery, Ajax, React, Angular, Vue, Vite, Express, Laravel and Django.
                    </span>
                    <br>
                    <span style="font-size: 14px; font-weight: bold; margin-top: 15px">For more details on my services, click <a href="/services/">here</a>.</span>
                </div>
        </div>

        <div align="center" class="section-3">
            <h1>Resume and Portfolio</h1>
            <span style="letter-spacing: 0.5px">Here's a brief preview of some of my works.</span>
            <br><br>
            <div class="sub">
                <h2>Graphics Design</h2>
                <div class="gd">
                    <a href="/dezygner/preview/island.jpg" target="_blank"><img src="/dezygner/preview/island.jpg"/></a>
                    <a href="/dezygner/preview/jaf.jpg" target="_blank"><img src="/dezygner/preview/jaf.jpg"/></a>
                    <a href="/dezygner/preview/cream.jpg" target="_blank"><img src="/dezygner/preview/cream.jpg"/></a>
                    <a href="/dezygner/preview/fortune.jpg" target="_blank"><img src="/dezygner/preview/fortune.jpg"/></a>
                    <a href="/dezygner/preview/house.jpg" target="_blank"><img src="/dezygner/preview/house.jpg"/></a>
                    <a href="/dezygner/preview/fish.jpg" target="_blank"><img src="/dezygner/preview/fish.jpg"/></a>
                </div>
                <br><br>
                <a class="see-more" href="/portfolio/graphics-design/">See More</a>
            </div>
            <br>
            <div class="sub">
                <h2>Website Design</h2>
                <div class="gd">
                    <a href="/dezygner/preview/gazelle1.jpeg" target="_blank"><img src="/dezygner/preview/gazelle1.jpeg"/></a>
                    <a href="/dezygner/preview/gazelle2.png" target="_blank"><img src="/dezygner/preview/gazelle2.png"/></a>
                    <a href="/dezygner/preview/jaflogic1.jpeg" target="_blank"><img src="/dezygner/preview/jaflogic1.jpeg"/></a>
                    <a href="/dezygner/preview/jaflogic2.jpeg" target="_blank"><img src="/dezygner/preview/jaflogic2.jpeg"/></a>
                    <a href="/dezygner/preview/koko1.png" target="_blank"><img src="/dezygner/preview/koko1.png"/></a>
                    <a href="/dezygner/preview/koko2.png" target="_blank"><img src="/dezygner/preview/koko2.png"/></a>
                </div>
                <br><br>
                <a class="see-more" href="/portfolio/website-design/">See More</a>
            </div>
            <br>
            <span class="also">Also, click <a href="">here</a> to take a look at my resume (CV).</span>
            <br><br>
        </div>

        <div class="section-4">
            <h1>My Rates</h1>
            <br><br>
            <div class="sub">
                <div class="rate">
                    <h2>Graphics Design</h2>
                    <ul>
                        <li>Brand/Company Logo Design</li>
                        <li>Logo Animation</li>
                        <li>Logo Greyscale</li>
                        <li>Ad Content</li>
                        <li>Album Art Cover</li>
                        <li>Company Branding</li>
                        <li>Product Labels</li>
                    </ul>
                </div>
                <div class="rate">
                    <h2>Illustration</h2>
                    <ul>
                        <li>Character Design</li>
                        <li>Scalar to Vector Conversion</li>
                        <li>2D to 3D Conversion</li>
                        <li>Matte Painting</li>
                        <li>Abstract Art (Digital)</li>
                    </ul>
                </div>
            </div>
            <div class="sub">
                <div class="rate">
                    <h2>Website Design</h2>
                    <ul>
                        <li>Online Blog</li>
                        <li>Company Website</li>
                        <li>Business Website</li>
                        <li>Search Engine Optimization (SEO)</li>
                        <li>Web Template Design</li>
                    </ul>
                </div>
                <div class="rate">
                    <h2>Web App Development</h2>
                    <ul>
                        <li>API Development & Implementation</li>
                        <li>E-Commerce Platform</li>
                        <li>User Portal/Dashboard</li>
                        <li>Administrator Dashboard</li>
                    </ul>
                </div>
            </div>
            <br><br><br>
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