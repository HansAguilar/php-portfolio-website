<?php
    // page 1
    $list = ['Home', 'Stacks', 'Projects'];
    $p1title = "Portfolio";
    $fbLink = "https://github.com/HansAguilar"; 
    $githubLink = "https://www.facebook.com/hansvincent.aguilar/"; 
    $instaLink = "https://www.instagram.com/kukisnotqt/"; 
    $letsConnect = "Let's Connect";
    $hello = "Hello!";
    $emoji = "👋";
    $im = "I'm";
    $a = "A";
    $name = "Hans Aguilar.";
    $arrCareer = ['full-stack web developer.', 'software engineer.', 'graphics designer.', 'freelancer.'];
    $imgOfMe = "./images/vincent.jpg";
    $welcome = "Welcome to my Portfolio";
    $desc = "My age is 21 years old and currently 3rd year Computer Science at STI College Caloocan. I am consistently learning new technologies and applying them to my projects to become a full-fledge Software Developer. My projects are the proof that I love building and creating softwares!";

    // page2
    $techStackTitle = "Tech Stack";
    $toolsTitle = "Tools";
    $techDesc = "Technologies I've been working with recently.";

    // page3
    $projectTitle = "Projects";
    $projecth3 = ['Tip Calculator', 'Movie Filtering', 'Accoung Registration', 'FAQ Design', 'Tic Tac Toe', 'LMS Design'];
    $projectDesc = ['I had fun doing this project. This project is about giving tips based on the service and sharing bills.',
                    'So far this is the most hardest project I created. This project is about searching and filtering movies.',
                    'I learned many things about this project. Designing and Typography is one of the important things in any website.',
                    'This project may be easy if you see it, but animating the containers and considering the size of every containers is tricky.',
                    'This project is also one of the best to practice your skills because it test what you have learned about logic and programming.',
                    'This project is inspired by my school\'s LMS. I created this project to test my designing skills especially the color combination.'
    ];
    $projectUsed = ['HTML', 'CSS', 'JavaScript'];

    // page4
    $contactTitle = "Let's have a coffee";
    $contactFname = "FirstName";
    $contactLname = "LastName";
    $contactEmail = "EmailAddress";
    $contactPhone = "PhoneNo.";
    $contactMessage = "Message";
    $submit = "Submit";

    $reserve = "Designed and Coded by Hans Aguilar with";
    $color = "Love & Coffee";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header id="page1">
        <h1 id="p1title"><?php echo $p1title; ?></h1>
        <div class="clickable">
            <ul>
                <li><a href="#page1" id="animation"><?php echo $list[0]; ?></a></li>
                <li><a href="#page2" id="animation"><?php echo $list[1]; ?></a></li>
                <li><a href="#page3" id="animation"><?php echo $list[2]; ?></a></li>
            </ul>
            <div class="socials">
                <a href=<?php echo $githubLink; ?>>
                    <iconify-icon id="animation" icon="akar-icons:github-outline-fill" width="38" height="38"></iconify-icon>
                </a>
                <a href=<?php echo $fbLink; ?>>
                    <iconify-icon id="animation" icon="et:facebook" width="38" height="38"></iconify-icon>
                </a>
                <a href=<?php echo $instaLink; ?>>
                    <iconify-icon id="animation" icon="simple-line-icons:social-instagram" width="38" height="38"></iconify-icon>
                </a>
            </div>
            <button id="connectBtn" id="animation"><a href="#page4"><?php echo $letsConnect; ?></a></button>
        </div>
    </header>

    <div class="page1" >
        <div class="info">
            <h1><?php echo $hello; ?><span class="wave"><?php echo $emoji; ?></span> <br> <?php echo $im; ?> <span id="nameColor"><?php echo $name; ?></span></h1>
            <div class="wrapper">
                <p><?php echo $a; ?></p>
                <div class="words">
                    <span id="span"><?php echo $arrCareer[0]; ?></span>
                    <span id="span"><?php echo $arrCareer[1]; ?></span>
                    <span id="span"><?php echo $arrCareer[2]; ?></span>
                    <span id="span"><?php echo $arrCareer[3]; ?></span>
                    <span id="span"><?php echo $arrCareer[0]; ?></span>
                </div>
            </div>
            <br>
            <p id="desc"><?php echo $desc; ?></p>
            <h2><?php echo $welcome; ?></h2>
        </div>
        <div class="img">
            <img src=<?php echo $imgOfMe; ?> alt="Picture of Me">
        </div>
    </div>

    <div class="page2" id="page2">
        <div>
            <h1 id="p2title"><?php echo $techStackTitle; ?></h1>
            <p><?php echo $techDesc; ?></p>
        </div>
        <div class="tech-stacks">
            <abbr title="HTML"><span class="iconify" id="animation" data-icon="icomoon-free:html-five" data-width="130" data-height="130"></span></abbr>
            <abbr title="CSS"><span class="iconify" id="animation" data-icon="fontisto:css3" data-width="130" data-height="130"></span></abbr>
            <abbr title="JavaScript"><span class="iconify" id="animation" data-icon="akar-icons:javascript-fill" data-width="130" data-height="130"></span></abbr>
            <abbr title="Python"><span class="iconify" id="animation" data-icon="akar-icons:python-fill" data-width="130" data-height="130"></span></abbr>
            <abbr title="Java"><span class="iconify" id="animation" data-icon="fontisto:java" data-width="130" data-height="130"></span></abbr>
            <abbr title="Node JS"><span class="iconify" id="animation" data-icon="la:node" data-width="130" data-height="130"></span></abbr>
            <abbr title="TypeScript"><span class="iconify" id="animation" data-icon="cib:typescript" data-width="130" data-height="130"></span></abbr>
            <abbr title="React"><span class="iconify" id="animation" data-icon="akar-icons:react-fill" data-width="130" data-height="130"></span></abbr>
            <abbr title="Tailwind"><span class="iconify" id="animation" data-icon="file-icons:tailwind" data-width="130" data-height="130"></span></abbr>
            <abbr title="BootStrap"><span class="iconify" id="animation" data-icon="akar-icons:bootstrap-fill" data-width="130" data-height="130"></span></abbr>
            <abbr title="REDUX"><span class="iconify" id="animation" data-icon="cib:redux" data-width="130" data-height="130"></span></abbr>
            <abbr title="Sass"><span class="iconify" id="animation" data-icon="fa-brands:sass" data-width="130" data-height="130"></span></abbr>
        </div>
        <div>
            <h1 id="p2title"><?php echo $toolsTitle; ?></h1>
        </div>
        <div class="tools">
            <abbr title="Visual Studio Code"><span class="iconify" id="animation" data-icon="cib:visual-studio-code" data-width="130" data-height="130"></span></abbr>
            <abbr title="Git"><span class="iconify" id="animation" data-icon="cib:git" data-width="130" data-height="130"></span></abbr>
            <abbr title="Github"><span class="iconify" id="animation" data-icon="akar-icons:github-fill" data-width="130" data-height="130"></span></abbr>
            <abbr title="Figma"><span class="iconify" id="animation" data-icon="akar-icons:figma-fill" data-width="130" data-height="130"></span></abbr>
            <abbr title="Npm"><span class="iconify" id="animation" data-icon="cib:npm" data-width="130" data-height="130"></span></abbr>
            <abbr title="Postman"><span class="iconify" id="animation" data-icon="cib:postman" data-width="130" data-height="130"></span></abbr>
        </div>
    </div>

    <div class="page3" id="page3">
        <h1 id="p2title"><?php echo $projectTitle; ?></h1>
        <div class="cards-wrapper">
            <div id="card">
                <img src="./images/calculator.png" width="340px" height="200px">
                <div id="card-info">
                    <h3 id="projectTitle"><?php echo $projecth3[0]; ?></h3> <br>
                    <p><?php echo $projectDesc[0]; ?></p><br>
                    <span id="html"><?php echo $projectUsed[0]; ?></span>
                    <span id="css"><?php echo $projectUsed[1]; ?></span>
                    <span id="javascript"><?php echo $projectUsed[2]; ?></span>
                </div>
            </div>
            <div id="card">
                <img src="./images/movie.png" width="340px" height="200px">
                <div id="card-info">
                    <h3 id="projectTitle"><?php echo $projecth3[1]; ?></h3> <br>
                    <p><?php echo $projectDesc[1]; ?></p><br>
                    <span id="html"><?php echo $projectUsed[0]; ?></span>
                    <span id="css"><?php echo $projectUsed[1]; ?></span>
                    <span id="javascript"><?php echo $projectUsed[2]; ?></span>
                </div>
            </div>
            <div id="card">
                <img src="./images/social.png" width="340px" height="200px">
                <div id="card-info">
                    <h3 id="projectTitle"><?php echo $projecth3[2]; ?></h3> <br>
                    <p><?php echo $projectDesc[2]; ?></p><br>
                    <span id="html"><?php echo $projectUsed[0]; ?></span>
                    <span id="css"><?php echo $projectUsed[1]; ?></span>
                    <span id="javascript"><?php echo $projectUsed[2]; ?></span>
                </div>
            </div>
            <div id="card">
                <img src="./images/faqs.png" width="340px" height="200px">
                <div id="card-info">
                    <h3 id="projectTitle"><?php echo $projecth3[3]; ?></h3> <br>
                    <p><?php echo $projectDesc[3]; ?></p><br>
                    <span id="html"><?php echo $projectUsed[0]; ?></span>
                    <span id="css"><?php echo $projectUsed[1]; ?></span>
                    <span id="javascript"><?php echo $projectUsed[2]; ?></span>
                </div>
            </div>
            <div id="card">
                <img src="./images/ttt.png" width="340px" height="200px">
                <div id="card-info">
                    <h3 id="projectTitle"><?php echo $projecth3[4]; ?></h3> <br>
                    <p><?php echo $projectDesc[4]; ?></p><br>
                    <span id="html"><?php echo $projectUsed[0]; ?></span>
                    <span id="css"><?php echo $projectUsed[1]; ?></span>
                    <span id="javascript"><?php echo $projectUsed[2]; ?></span>
                </div>
            </div>
            <div id="card">
                <img src="./images/elms.png" width="340px" height="200px">
                <div id="card-info">
                    <h3 id="projectTitle"><?php echo $projecth3[5]; ?></h3> <br>
                    <p><?php echo $projectDesc[5]; ?></p><br>
                    <span id="html"><?php echo $projectUsed[0]; ?></span>
                    <span id="css"><?php echo $projectUsed[1]; ?></span>
                    <span id="javascript"><?php echo $projectUsed[2]; ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="page4" id="page4">
        <div class="img">
            <img src="./images/contact-img.svg" width="400px" height="400px">
        </div>
        <div class="contact-wrapper">
            <h1><?php echo $contactTitle; ?></h1>
            <form>
                <input type="text" placeholder=<?php echo $contactFname; ?>>
                <input type="text" placeholder=<?php echo $contactLname; ?>>
                <input type="email" placeholder=<?php echo $contactEmail; ?>>
                <input type="tel" placeholder=<?php echo $contactPhone; ?>>
                <textarea cols="43" rows="10" placeholder=<?php echo $contactMessage; ?>></textarea> <br>
                <input type="submit" value=<?php echo $submit; ?> id="submit">
            </form>
        </div>
    </div>
    <div class="footer">
        <p id="last"><?php echo $reserve; ?> <span id="footer"><?php echo $color; ?></span></p>
    </div>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
</body>

</html>