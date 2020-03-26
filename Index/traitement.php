<?php
$title = "Traitement du formulaire Index";
$css = "CSS/index_style.css";
include "Header and Footer/_header.php";?>


<section class="banner-homepage">

    <div class="homepage-banner-content-container">
        <h2>Play your favorite retro games</h2>
        <p>Retro Invader helps you to get your favorite retro games and to have all the informations about prices evolution.</p>
    </div>
</section>
<section>

    <article>

        <p><?php echo ' Merci ' . $_POST['user_name'] . ' nous vous contacterons à cette adresse : ' . $_POST['user_email'].'.<br/>' .
                      'Nous avons bien pris en compte votre demande ' . $_POST['help'] . ' Et ' . $_POST['text']; ?></p>
    </article>

</section>




<?php include "Header and Footer/_footer.php";?>
