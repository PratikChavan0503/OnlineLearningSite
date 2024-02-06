<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>about Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- ========== Start Navbar Section ========== -->
    <section>
        <header class="section-navbar">
            <div class="container">
                <nav class="navbar">
                    <ul>
                        <li class="nav-item"><a class="nav-link" href="http://localhost/LearningSite/">home</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost/LearningSite/about.php">about</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost/LearningSite/services.php">services</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost/LearningSite/blogs.php">blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost/LearningSite/contact.php">contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    </section>
    <!-- ========== End Navbar Section ========== -->



    <!-- ========== Start About Section ========== -->
    <section class="section-about">
        <div class="container">
            <h2 class="section-common-heading">About Thapa EduHub</h2>
            <p class="section-common-subheading">
                Guiding Your Learning Journey Research, Design, and Development
                Excellence.
            </p>
            <div class="container grid grid-three--cols">
                <div class="about-div">
                    <div class="icon">
                        <img src="./images/research.png" alt="research image" />
                    </div>
                    <h3 class="section-common--title">Research</h3>
                    <p>
                        We start by learning what you need.We look at what's new and
                        exciting in learning and choose topics that match what you want to
                        learn.
                    </p>
                </div>
                <div class="about-div">
                    <div class="icon">
                        <img src="./images/design.png" alt="design image" />
                    </div>
                    <h3 class="section-common--title">Design</h3>
                    <p>
                        Next,we make the lessons.we make them fun and interesting for you.we make
                        sure they work for different ways people like to learn.
                    </p>
                </div>
                <div class="about-div">
                    <div class="icon">
                        <img src="./images/Coding.png" alt="development image" />
                    </div>
                    <h3 class="section-common--title">Development</h3>
                    <p>
                        After that,we turn the lessons into things you can use online.
                        we use the latest tools to make sure they work well and make you happy.
                    </p>
                </div>
            </div>
        </div>

    </section>
    <!-- ========== End About Section  ========== -->



    <!-- ========== Start contact home Section  ========== -->
    <div class="section-contact--homepage" id="section-contact--homepage">
        <div class="container grid grid-two--cols">
            <div class="contact-content">
                <h2 class="contact-title">Let's revolutionize the way you study</h2>
                <p>Join our free bootcamps to know us better</p>
                <div class="btn">
                    <a href="contact.html">
                        Start Now <i class="fa-solid fa-circle-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="contact-image">
                <img src="./images/main.png" alt="a guy doing html coding">
            </div>
        </div>
    </div>
    <!-- ========== End contact home Section  ========== -->



    <!-- ========== Start footer Section ========== -->
    <?php include("includes/footer.php"); ?>
    <!-- ========== End footer Section  ========== -->
</body>