<!Doctype html>
<html lang = "en">
    <head>
        <title>UJEI Wellness Contact</title>
        <link rel="stylesheet" type="text/css" href="UJEI_wellness_contact.css" />
        <div></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"
            type="text/javascript"></script>
        <script src="UJEI_wellness_contact.js"></script>
    </head>
    <body>
        <!-- Navigation Bar -->
        <nav class="navigation-bar" id = "about">
            <img class="logo" src="logo.png">
            <nobr class="logoname">UJei Wellness</nobr>
            <a href="#contact">CONTACT</a>
            <a href="UJEI_wellness_main.html#pricing">PRICING</a>
            <a href="UJEI_wellness_main.html#gallery">GALLERY</a>
            <a href="UJEI_wellness_about.html">ABOUT</a>
            <a href="UJEI_wellness_main.html">HOME</a>
        </nav>

        <iframe class = "calendar" src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%237986CB&ctz=America%2FNew_York&src=aGFlbWkwMTE1QGdtYWlsLmNvbQ&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=cDJ0OWNyMzc3cmxrMnU5dXI3NTFuZWNraDhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=N211bmVqYmpuZmNhcnFnMG5lcm5nb2pwNWtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=ZW4udXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%237986CB&color=%2333B679&color=%23C0CA33&color=%23E4C441&color=%230B8043" frameborder="0" scrolling="no"></iframe>

        <h1 class = "title">Contact Us!</h1>
            <div class = "Email">
                <form id="EmailUs" method="post" action="">
                    <label for="name">Name: </label>
                    <input type="text" id="name" name="name" pattern="[A-Za-z]{5,10}" title="5 to 10 upper or lowercase letters" required></input><br><br>
                    <label for="email">Email: </label>
                    <input type="email" id="email" name="email" required></input><br><br>
                    <label for="subject">Subject:</label><br>
                    <textarea type="text" id="subject" name="subject"></textarea> <br>
                    <label for="comment">How can we help?:</label><br>
                    <textarea type="text" id="comment" name="comment"></textarea><br><br>
                    <input type="button" value="send" class = "send">
                </form>
            </div>

            <?php
            $to = "hlee22@colby.edu";
            $subject = $_REQUEST["subject"];
            
            $message = "Email from: ".$_REQUEST["name"]. "\r\n\r\n\r\n";
            $message .= "\n\n". $_REQUEST["comment"];
            
            $header = "From: ".$_REQUEST["email"]. "\r\n";

            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";
            
            $retval = mail($to,$subject,$message,$header);
        ?>

            <footer> 
                <div class="footer_row">
                    <div class="footer_column left">
                        <img class="logof" src="logo.png">
                        <nobr class="logoname2">UJEI WELLNESS</nobr>
                        <br>
                        <!-- <label for="email">Email Address</label> -->
                        <div class = "subscribe">
                            <input class = "email" type="email" id="email" name="email" placeholder="Email Address">
                        <input class = "subscribeButtn" type="Submit" value="Subscribe">
                        </div>
                        <br>
                        <a href="https://www.instagram.com/ujeiwellness/"><img class="insta" src="instagram.png"></a>
                    <a href="https://www.instagram.com/ujeiwellness/"><nobr class="instafollow">Follow us on @UJeiWellness</nobr></a>
                    </div>
                    <div class="footer_column middle">
                      <p><a href="UJEI_wellness_main.html#home">HOME</a></p>
                      <p><a href="UJEI_wellness_about.html">ABOUT</a></p>
                      <P><a href="UJEI_wellness_main.html#gallery">GALLERY</a></P>
                      <P><a href="UJEI_wellness_main.html#pricing">PRICING</a></P>
                      <P><a href="UJEI_wellness_contact.html">CONTACT</a></P>
                    </div>
                    <div class="footer_column right">
                      <p>+1 293 374 9374</p>
                      <p>UJEIWELLNESS@GMAIL.COM</p> <br>
                      <p>UJEI WELLNESS</p>
                      <p>128 ENGLE ST UNIT B,</p>
                      <p>ENGLEWOOD, NJ 07631</p> <br>
                        <p>@UJEIWELLNESS</p>
                    </div>
                </div>
            </footer>

    </body>
</html>