<?php
$title = "Traitement Contact";
$css ="../CSS/contact_style.css";
include "../Header and Footer/_header.php";?>



<section class="banner-contact">

    <div class="contact-banner-content-container">
        <h2>Feel free to contact us</h2>
        <p>You have any questions about our website, our games cotation or want to submit a game? Please feel free to send us a message, we'll do our best to answer your question as quick as possible.</p>
    </div>

</section>

<section>
        <article>

                <p><?php echo ' Merci ' . ' ' . $_POST['user_name'] . 'nous vous avons bien pris en compte votre adresse : ' . $_POST['user_mail'] . ' et nous vous remercions pour votre message : ' . $_POST['user_message'];?></p>

        </article>
</section>

<p><?php include "../Header and Footer/_footer.php"; ?></p>