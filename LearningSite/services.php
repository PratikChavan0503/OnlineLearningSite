<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Service Page</title>
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



    <!-- ========== Start Course Section ========== -->
    <section class="section-course">
        <div class="container">
            <h2 class="section-common-heading">Explore Our Courses</h2>
            <p class="section-common-subheading">
                Discover a variety of courses across different categories.
            </p>
        </div>

        <div class="container grid grid-four--cols">
            <div class="course-div">
                <div class="icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3 class="section-common--title">JS Development</h3>
                <p>
                    creating dynamic interactive web applications for user engagement.
                </p>
            </div>
            <div class="course-div">
                <div class="icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3 class="section-common--title">Python Development</h3>
                <p>
                    Versatile language for problem-solving and application development.
                </p>
            </div>
            <div class="course-div">
                <div class="icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3 class="section-common--title">C++ Development</h3>
                <p>
                    Powerful,efficient coding language for software development.
                </p>
            </div>
            <div class="course-div">
                <div class="icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3 class="section-common--title">Java Development</h3>
                <p>
                    Cross-platform application development with java programming.
                </p>
            </div>
            <div class="course-div">
                <div class="icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3 class="section-common--title">SQL Development</h3>
                <p>
                    Effective data management and retrieval using SQL database language.
                </p>
            </div>
            <div class="course-div">
                <div class="icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3 class="section-common--title">HTML Development</h3>
                <p>
                    Web content structure with essential markup language.
                </p>
            </div>
            <div class="course-div">
                <div class="icon">
                    <i class="fa-solid fa-laptop-code"></i>
                </div>
                <h3 class="section-common--title">CSS Development</h3>
                <p>
                    Styling web element with visually appealing websites.
                </p>
            </div>
        </div>
    </section>
    <!-- ========== End Course Section ========== -->


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