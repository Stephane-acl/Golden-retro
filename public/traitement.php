<?php
$title = "Traitement du formulaire public";
$css = "CSS/index_style.css";
include "_header.php";?>


<section class="banner-homepage">

    <div class="homepage-banner-content-container">
        <h2>Thanks for subscribing !</h2>
        <p>Retro Invader is happy to have you as a new member.</p>
    </div>
</section>
<div class="heading-with-background">
    <h2>Congratulations !</h2>
</div>
<?php
require_once "../connec.php";

$pdo = new \PDO(DSN, USER, PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = 'SELECT id FROM newsletter WHERE id= :id';
$statement = $pdo->prepare($query);

$statement->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$statement->execute();
$infos = $statement->fetch(PDO::FETCH_ASSOC);
?>

<section class="img_content_form">
    <div class="message_content_form">


        <p><?php echo ' Hello ' . '<strong class="color_message">' . $_GET['firstname'] . ' ' . $_GET['lastname'] . '</strong>' . ' we are very happy to count you as member we\'ll contact you at this address : <em class="color_message"> ' . $_GET['email'] . '</em><br/>' .
                'We have got your request : ' . $_GET['request']; ?><br />
            If you have any questions don't hesitate to contact us !
            If you need to modify your informations you can click <a href="edit.php?id=<?= $infos['id']?>"><strong class="color_message">here</strong></a>
        </p>
    </div>
</section>





<?php include "_footer.php";?>
