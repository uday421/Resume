<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live Resume :: Portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=Mukta:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendors/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/css/live-resume.css">
</head>

<body>
    <header>
        <button class="btn btn-white btn-share ml-auto mr-3 ml-md-0 mr-md-auto"><img src="assets/images/share.svg" alt="share" class="btn-img">
            SHARE</button>
        <nav class="collapsible-nav" id="collapsible-nav">
            <a href="index.html" class="nav-link">HOME</a>
            <a href="resume.php" class="nav-link">RESUME</a>
            <a href="contact.php" class="nav-link active">CONTACT</a>
        </nav>
        <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav"
            data-target="collapsible-nav"><img src="assets/images/hamburger.svg" alt="hamburger"></button>
    </header>
    <div class="content-wrapper">
        <aside>
            <div class="profile-img-wrapper">
                <img src="assets/images/Profile.png" alt="profile">
            </div>
            <h1 class="profile-name">Uday Badgujar</h1>
            <div class="text-center">
                <span class="badge badge-white badge-pill profile-designation">UI / UX Designer</span>
            </div>
            <nav class="social-links">
                <a href="#!" class="social-link"><i class="fab fa-facebook-f"></i></a>
                <a href="#!" class="social-link"><i class="fab fa-twitter"></i></a>
                <a href="#!" class="social-link"><i class="fab fa-github"></i></a>
            </nav>
            <div class="widget">
                <h5 class="widget-title">personal information</h5>
                <div class="widget-content">
                    <p>BIRTHDAY : 16 OCT 2000</p>
                    <p>PHONE : +91 9325105880</p>
                    <p>MAIL : udaybadgujar63@gmail.com</p>
                    <p>Location : Pune ,India</p>
                    <button class="btn btn-download-cv btn-primary rounded-pill"> <img src="assets/images/download.svg" alt="download"
                        class="btn-img">DOWNLOAD CV </button>
                </div>
            </div>
            <div class="widget card">
                <div class="card-body">
                    <div class="widget-content">
                        <h5 class="widget-title card-title">SKILLS</h5>
                        <p>Java</p>
                        <p>ReactJs</p>
                        <p>Html</p>
                        <p>Css</p>
                        <p>SQL</p>
                        <p>Angular</p>
                        
                    </div>
                </div>
            </div>
        </aside>
        <main>
            <section class="contact-section">
                <h2 class="section-title">GET IN TOUCH</h2>
                <p class="mb-4">If you’d like to My Profile To Contact Us.</p>
                
                <div class="contact-cards-wrapper">
                    <div class="contact-card">
                        <h6 class="contact-card-title">CALL US</h6>
                        <p class="contact-card-content">+91 9325105880</p>
                    </div>
                    <div class="contact-card">
                        <h6 class="contact-card-title">Email Us</h6>
                        <p class="contact-card-content">udaybadgujar63@gmail.com</p>
                    </div>
                </div>

                <form action="" method="post" class="contact-form">
                    <div class="form-group form-group-name">
                      <label for="name" class="sr-only">Name</label>
                      <input style="font-size: 12px; font-weight: bold;" type="text" name="name" id="name" class="form-control" placeholder="NAME">
                    </div>
                    <div class="form-group form-group-email">
                        <label for="email" class="sr-only">Email</label>
                        <input style="font-size: 12px; font-weight: bold;" type="email" name="email" id="email" class="form-control" placeholder="EMAIL">
                    </div>
                    <div class="form-group">
                        <label for="message" class="sr-only">Message</label>
                        <textarea style="font-size: 12px; font-weight: bold;" name="message" id="message" class="form-control" placeholder="MESSAGE" rows="5"></textarea>
                    </div>
                    <input  type="submit" class="btn btn-primary form-submit-btn" id="button" value="SEND MESSAGE" name="send" />
                </form>

            </section>
            <footer>Uday Badgujar@ All Rights Reserved 2024</footer>
        </main>
    </div>
    <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendors/@popperjs/core/dist/umd/popper-base.min.js"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/vendors/entry/jq.entry.min.js"></script>
    <script src="assets/js/live-resume.js"></script>
</body>

</html>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';


  if(isset($_POST['send'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
   # $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.mail.yahoo.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'udaybadgujar63@yahoo.com';                     //SMTP username
    $mail->Password   = 'wwqfyxtggjtpmyjn';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    //Recipients
    $mail->setFrom('udaybadgujar63@yahoo.com', 'Contact Form');
    $mail->addAddress('udaybadgujar90@gmail.com', 'Testing1');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact Us Resume Message';
    $mail->Body    = "Sender Name - $name <br> Sender Email - $email <br> Sender Message - $message";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

  }
  }
  ?>