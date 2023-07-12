<?php

$messageSent = false;
$invalidEmail = false;
$formSubmit = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $to = "armeeng@yahoo.com";

        $body = "From: " . $name . "\r\n";
        $body .= "Email: " . $email . "\r\n";
        $body .= "Message: " . $message . "\r\n";

        $senderEmail = $_POST['email'];
        $headers = "From: Armeen Ghoorkhanian <armeeng@yahoo.com>\r\n";
        $senderBody = "Thank you for your message! 
        I will get back to you as soon as possible!\r\n
        Below is a copy of your message:\r\n";
        $senderBody .= "From: " . $name . "\r\n";
        $senderBody .= "Email: " . $email . "\r\n";
        $senderBody .= "Message: " . $message . "\r\n";


        mail($to, $subject, $body);
        mail($senderEmail, $subject, $senderBody, $headers);




        $messageSent = true;
        $formSubmit = true;

    } else {
        $invalidEmail = true;
        $formSubmit = true;
    }

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" name="format-detection" content="telephone=no">
    <title>Contact Page</title>

    <link rel="stylesheet" href="contact.css">

    <script src="https://kit.fontawesome.com/44c3d7ec8c.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">

    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type="text/css" />

</head>

<?php
if (!$formSubmit):
?>

<body>
        <!-- Navigation Bar Section (Start) -->
        <nav class="navbar">
            <div class="navbar__container">
                <a href="/" id="navbar__logo"><i class="fa-regular fa-face-smile"></i></a>
                <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span> <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar__menu">
                    <li class="navbar__item">
                        <a href="index.html" class="navbar__links"> Return Home </a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <!-- Navigation Bar Section (End) -->

        <!-- Contact Page (Start) -->

        <section class="contact">
        <div class="background"></div>

        <div class="content">
            <h2>Contact Me</h2>
        </div>

        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p><a href="tel:+1-614-578-9275" class="phoneNumber">+1 614-578-9275</a></p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>ArmeenG@yahoo.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
            <form action="contact.php" method="POST">
                <h2>Send Message</h2>
                <div class="inputBox">
                    <input type="text" name="name" required="required">
                    <span>Full Name</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" required="required">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="subject" required="required">
                    <span>Subject</span>
                </div>
                <div class="inputBox">
                    <textarea name="message" required="required"></textarea>
                    <span>Type your message...</span>
                </div>
                <div class="inputBox">
                    <input type="submit" name="SubmitButton" value="Send">
                </div>
            </form>
        </div>
        </div>
    </section>
    <?php endif; ?>


        <?php
        if($messageSent):
        ?>
        <!-- Navigation Bar Section (Start) -->
        <nav class="navbar">
            <div class="navbar__container">
                <a href="/" id="navbar__logo"><i class="fa-regular fa-face-smile"></i></a>
                <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span> <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar__menu">
                    <li class="navbar__item">
                        <a href="index.html" class="navbar__links"> Return Home </a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <!-- Navigation Bar Section (End) -->

        <section class="contact">
            <div class="background"></div>

            <div class="content">
                <h2>Contact Me</h2>
            </div>

            <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p><a href="tel:+1-614-578-9275" class="phoneNumber">+1 614-578-9275</a></p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>ArmeenG@yahoo.com</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                <form action="contact.php" method="POST">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="subject" required="required">
                        <span>Subject</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="message" required="required"></textarea>
                        <span>Type your message...</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="SubmitButton" value="Send">
                    </div>
                </form>
                <div class="Success">Message Sent Successfully! Thank you!</div>
            </div>
            </div>
        </section>

    <?php endif; ?>

    <?php if ($invalidEmail): ?>

        <!-- Navigation Bar Section (Start) -->
                <nav class="navbar">
            <div class="navbar__container">
                <a href="/" id="navbar__logo"><i class="fa-regular fa-face-smile"></i></a>
                <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span> <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar__menu">
                    <li class="navbar__item">
                        <a href="index.html" class="navbar__links"> Return Home </a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <!-- Navigation Bar Section (End) -->

    <section class="contact">
        <div class="background"></div>

        <div class="content">
            <h2>Contact Me</h2>
        </div>

        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-phone"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p><a href="tel:+1-614-578-9275" class="phoneNumber">+1 614-578-9275</a></p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>ArmeenG@yahoo.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
            <form action="contact.php" method="POST">
                <h2>Send Message</h2>
                <div class="inputBox">
                    <input type="text" name="name" required="required" value="<?= $_POST['name'] ?? '' ?>">
                    <span>Full Name</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" required="required" value="<?= $_POST['email'] ?? '' ?>">
                    <span class="invalid-email">Please enter a valid email</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="subject" required="required" value="<?= $_POST['subject'] ?? '' ?>">
                    <span>Subject</span>
                </div>
                <div class="inputBox">
                <textarea name="message" required="required"><?= $_POST['message'] ?? '' ?></textarea>
                    <span>Type your message...</span>
                </div>
                <div class="inputBox">
                    <input type="submit" name="SubmitButton" value="Send">
                </div>
            </form>
        </div>
        </div>
    </section>

    <!-- Contact Page (End) -->

    <script src="script.js"></script>
    <?php endif; ?>
</body>
</html>