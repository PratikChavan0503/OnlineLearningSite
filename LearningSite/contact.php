<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
        footer {
            padding-top: 6.4rem;
        }
    </style>
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


    <!-- ========== Start Contact Section ========== -->
    <div class="section-contact">
        <div class="container">
            <h2 class="section-common-heading">Contact Us</h2>
            <p class="section-common-subheading">
                Get in touch with us, we are here to help you.
            </p>
        </div>

        <div class="container grid grid-two--cols">
            <div class="contact-content">
                <form action="https://formspree.io/f/mrgwdrvj" method="POST">
                    <div class="grid grid-two--cols mb-3">
                        <div>
                            <label for="username">username</label>
                            <input type="text" name="username" id="username" autocomplete="off" placeholder="Enter your username" required>
                        </div>
                        <div>
                            <label for="email">Enter your email</label>
                            <input type="email" name="email" id="email" required autocomplete="off" placeholder="abc@xyz.com">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="subject">subject</label>
                        <input type="text" name="subject" id="subject" placeholder="Your main title">
                    </div>
                    <div class="mb-3">
                        <label for="message">message</label>
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Enter your message"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-submit">send message</button>
                    </div>
                </form>
            </div>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3786.6114306136014!2d74.23224657756657!3d18.365003229321406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc31d6dc25f163b%3A0xb37bdf40f92af288!2sNAIGAON%20(SHRI%20SIDDHESHWAR!5e0!3m2!1sen!2sin!4v1700022891447!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- ========== End Contact Section ========== -->



    <!-- ========== Start footer Section ========== -->
    <?php include("includes/footer.php"); ?>
    <!-- ========== End footer Section  ========== -->
</body>