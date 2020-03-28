<?php
$title = "Traitement du formulaire Index";
$css = "CSS/index_style.css";
include "Header and Footer/_header.php";?>


<section class="banner-homepage">

    <div class="homepage-banner-content-container">
        <h2>Thanks for subscribing !</h2>
        <p>Retro Invader is happy to have you as a new member.</p>
    </div>
</section>
<div class="heading-with-background">
    <h2>Congratulations !</h2>
</div>

<section class="img_content_form">
    <div class="message_content_form">


        <p><?php echo ' Hello ' . '<strong class="color_message">' . $_GET['user_firstName'] . ' ' . $_GET['user_lastName'] . '</strong>' . ' we are very happy to count you as member we\'ll contact you at this address : <em class="color_message"> ' . $_GET['user_email'] . '</em><br/>' .
                'We have got your request : ' . $_GET['text']; ?><br />
            If you have any questions don't hesitate to contact us !
        </p>
    </div>
</section>


<?php include "Header and Footer/_footer.php";?>
