<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="shortcut icon" href="images/BrainFace.png" type="image/x-icon">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <span class="up"><i class="fa-solid fa-arrow-up-long"></i></span>
<!-- header section starts  -->

<header class="header" id="headerId">

    <a href="home.html" class="logo">
        <img src="images/BrainFace.png" alt="" class="image">
        <img src="images/BrainFaceSleep.png" alt="" class="image-hover">
    </a>

    <div id="menu-btn" class="fas fa-bars"></div>    
    <nav id="clickNavbar" class="navbar">
        <ul class="showNavbar">
            <li><a href="home.html">home</a></li>
            <li><a id="clickCourses">courses 
                <i class="fa-solid fa-angle-down"></i>
            </a>
                <ul class="showCourses">
                        
                    <li><a href="islamic.html">
                        <img src="images/Islamic.png" alt="">
                        Islamic</a>
                    </li>

                    <li><a href="Language.html">
                        <img src="images/Language.png" alt="">
                        Language</a>
                    </li>

                    <li><a href="Computer_Science.html">
                        <img src="images/ComputerScience.png" alt="">
                        Computer Science</a>
                    </li>
                </ul>
            </li>
            <li><a id="clickPages">pages 
                <i class="fa-solid fa-angle-down"></i>
            </a>
                <ul class="showPages">
                    <li><a href="teachers.html">teachers</a></li>
                    <li><a href="blog.html">blogs</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <a class="user-btn" href="system/index.php"><i class="fa-solid fa-user-large"></i></a>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

    <div class="image">
        <img src="images/home-img.png" alt="">
    </div>

    <div class="content">
        <h3>your course to success</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa cumque neque quam amet perferendis sed rem ut tenetur porro praesentium.</p>
        <a href="#" class="btn">get started</a>
    </div>

</section>

<!-- home section ends -->

<!-- categories section starts  -->

<section class="category">

    <a href="islamic.html" class="box">
        <img src="images/Islamic.png" alt="">
        <h3>Islamic</h3>
    </a>

    <a href="Language.html" class="box">
        <img src="images/Language.png" alt="">
        <h3>Language</h3>
    </a>

    <a href="Computer_Science.html" class="box">
        <img src="images/ComputerScience.png" alt="">
        <h3>computer science</h3>
    </a>

</section>

<!-- categories section ends -->


<!-- course-1 section starts  -->

<section class="courses">
    <div class="box">
        <img src="images/Quran.png" alt="">
        <h3>quran science</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, earum.</p>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="images/nabawi-mosque.png" alt="">
        <h3>hadith science</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, earum.</p>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="images/Arabic.png" alt="">
        <h3>arabic</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, earum.</p>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="images/english.png" alt="">
        <h3>english</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, earum.</p>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="images/japan.png" alt="">
        <h3>japan</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, earum.</p>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="images/coding.png" alt="">
        <h3>programming lang</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, earum.</p>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="images/web-development.png" alt="">
        <h3>web development</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, earum.</p>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="images/graphic-design.png" alt="">
        <h3>graphic design</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque, earum.</p>
        <a href="#" class="btn">read more</a>
    </div>

</section>









<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>explore</h3>
            <a href="home.html"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="islamic.html"> <i class="fas fa-arrow-right"></i> islamic </a>
            <a href="Language.html"> <i class="fas fa-arrow-right"></i>Language </a>
            <a href="Computer_Science.html"> <i class="fas fa-arrow-right"></i> computer science </a>
            <a href="teachers.html"> <i class="fas fa-arrow-right"></i> teachers </a>
            <a href="blog.html"> <i class="fas fa-arrow-right"></i> blog </a>
        </div>

        <div class="box">
            <h3>courses</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> quran science </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> hadith science </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> arabic </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> english </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> japanese </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> programming</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> web development</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> graphic design</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> my account </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> feedback </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> help center </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
            <a href="#"> <i class="fab fa-github"></i> github </a>
        </div>

    </div>

    <div class="credit"> <p>Copyright Made With <span class="fa-solid fa-heart"></span> For Graduation Project © 2022 </p> </div>


</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>