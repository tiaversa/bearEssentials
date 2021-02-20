<?php
//message sent variable default state is true unless the message is sent
$message_sent = false;
//validation process at least the email
if(isset($_POST['email']) && $_POST['email']!=''){
if ( filter_var($_POST['email'], FILTER-VALIDATE-EMAIL)){
//submit the form

$userName = $_POST['name'];
$userEmail = $_POST['email'];
$userPhone = $_POST['phone'];
$messageSubject = $_POST['subject'];
$message = $_POST['message'];

$to= "timnaaversa@gmail.com";
$body="";

$body.="From: ".$userName. "\r\n";
$body.="Email: ".$userEmail. "\r\n";
$body.="Phone Number: ".$userPhone. "\r\n";
$body.="Message: ".$message. "\r\n";

mail($to, $messageSubject,$body);

$message_sent = true;
}
}

?>

<html lang="en">
    <!--html code-->
<head>

    <title>Bear Essentials Academy</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styleContacts.css">
    <!--adding jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>
<body>
    <!--Navegation bar-->
    <nav>
        <div class="logo"><a href="./home.html">Bear Essentials Academy</a></div>
        <ul class="navLinks">
            <li class="item"><a href="./aboutUs.html">Our Daycare</a></li><!--need submenus for testemonials and teachers and covid-19 policy-->
                <li class="item"><a href="./classrooms.html">Classrooms</a></li><!--need submenus for services and rates-->
                <li class="item"><a href="#">Contact</a></li>
                <li class="item signUp"><a href="./tour.html">Schedule Tour!</a><!--they are displayes from right to left--></li>
        </ul>
    </nav>
    <!--Image-->
    <div class="image"><p></p></div>





    <!--if the message was sent than the form desapear and a thnaks message shows-->
    <?php
    if($message_sent);
    ?>
    <h3>Thank your for your time! We will be in tought as soon as possible.</h3>
    <?php
    else:
    ?>

    <!--Contact Form-->
        <div class="container">
            <form action="contact.php" method="POST" class="form">
                <!--Form name area-->
                <div class="form-group">
                    <!--remember the for attribute on the label need to mach the name atribute-->
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
                    <!--Don't forget the tabindex, it helps with acessibility-->
                </div>
                <!--Form email area-->
                <div class="form-group">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="abc@email.com" tabindex="2" required>
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Your Phone Number</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="(123)456-7890" tabindex="3">
                </div>
                <!--Form Subject of the email-->
                <div class="form-group">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello!" tabindex="4">
                </div>
                <!--Form Message Area-->
                <div class="form-group">
                    <label for="message" class="form-label">Message</label>
                    <textarea rows="5" class="form-control" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="5"></textarea>
                </div>
                <!--Form Submit Button-->
                <div><button type="submit" class="btn">Send Message</button></div>
            </form>
        </div>
        <!--closing the php statement-->
        <?php
        endif;
        ?>

        <!--adding a java scrip file-->
        <script src="../java/mainContants.js"></script>
    </body>
    </html>