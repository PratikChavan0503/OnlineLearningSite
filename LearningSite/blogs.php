<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog Page</title>
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


    <!-- ========== Start blog Section ========== -->
    <div class="section-blog">
        <div class="container">
            <h2 class="section-common-heading">Explore Our Blog</h2>
            <p class="section-common-subheading">
                Explore our blog for insightful articles, tips, and updates on the
                world of education, skill development, and personal growth.
            </p>
        </div>

        <div class="container grid grid-four--cols">
            <div class="blog">
                <figure>
                    <img src="https://images.pexels.com/photos/1181373/pexels-photo-1181373.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="a guy writing code" />
                </figure>
                <div class="blog-content">
                    <div class="blog-date">
                        <p><i class="fa-calendar fa-solid"></i> Sept 22 2023</p>
                        <p><i class="fa-solid fa-arrow-right"></i></p>
                    </div>
                    <h3 class="section-common--title">
                        Code your first react app with us
                    </h3>
                </div>
            </div>

            <div class="blog">
                <figure>
                    <img src="https://images.pexels.com/photos/11035396/pexels-photo-11035396.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
                </figure>
                <div class="blog-content">
                    <div class="blog-date">
                        <p><i class="fa-calendar fa-solid"></i> Sept 22 2023</p>
                        <p><i class="fa-solid fa-arrow-right"></i></p>
                    </div>
                    <h3 class="section-common--title">
                        Code your first react app with us
                    </h3>
                </div>
            </div>

            <div class="blog">
                <figure>
                    <img src="https://images.pexels.com/photos/4389463/pexels-photo-4389463.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
                </figure>
                <div class="blog-content">
                    <div class="blog-date">
                        <p><i class="fa-calendar fa-solid"></i> Sept 22 2023</p>
                        <p><i class="fa-solid fa-arrow-right"></i></p>
                    </div>
                    <h3 class="section-common--title">
                        Code your first react app with us
                    </h3>
                </div>
            </div>

            <div class="blog">
                <figure>
                    <img src="https://images.pexels.com/photos/3861961/pexels-photo-3861961.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" />
                </figure>
                <div class="blog-content">
                    <div class="blog-date">
                        <p><i class="fa-calendar fa-solid"></i> Sept 22 2023</p>
                        <p><i class="fa-solid fa-arrow-right"></i></p>
                    </div>
                    <h3 class="section-common--title">
                        Code your first react app with us
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== End blog Section ========== -->



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