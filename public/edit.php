<?php
$title = 'Edit';
$css = "CSS/index_style.css";


require_once "../connec.php";

$pdo = new \PDO(DSN, USER, PASS);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = 'SELECT * FROM newsletter WHERE id= :id';
$statement = $pdo->prepare($query);

$statement->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$statement->execute();

$info = $statement->fetch(PDO::FETCH_ASSOC);

$errors = [];
$user_firstName = $user_lastName = $user_email = $text = " ";

if (!empty($_POST)) {



    $user_firstName = trim($_POST['user_firstName']);
    $user_lastName = trim($_POST['user_lastName']);
    $user_email = trim($_POST['user_email']);
    $text = trim($_POST['text']);

    if (empty($user_firstName)) {
        $errors['user_firstName'] = "Ce champ est obligatoire";
    }

    if (empty($user_lastName)) {
        $errors['user_lastName'] = "Ce champs est obligatoire";
    }

    if (filter_var($user_email, FILTER_VALIDATE_EMAIL) == false) {
        $errors['user_email'] = "Ce champs est obligatoire";
    } else {

        // Si form ok, on enregistre nos infos en base
        $query = "UPDATE newsletter SET firstname=:firstname, lastname=:lastname, email=:email, request=:request WHERE id=:id";
        $statement = $pdo->prepare($query);

        $statement->bindValue(':firstname', $user_firstName);
        $statement->bindValue(':lastname', $user_lastName);
        $statement->bindValue(':email', $user_email);
        $statement->bindValue(':request', $text);
        $statement->bindValue(':id', $_POST['id']);

        $statement->execute();

        header("Location: /index.php");

    }
}
    require_once "_header.php"; ?>


        <section class="img_content_edit"">

            <div class="message_content_edit">
                <h2>Play your favorite retro games</h2>
                <p>Retro Invader helps you to get your favorite retro games and to have all the informations about prices evolution.</p>
            </div>

        </section>




    <section class="contact-homepage">

        <div class="heading-with-background">
            <h2>Subscribe to our Newsletter</h2>
        </div>


        <form  method="POST" >

            <label for = "first_name"></label>
            <input class="first-form-element" type="text" placeholder="First name" id="first_name" name="user_firstName" value="<?= $info['firstname'];?>" >
            <?php if (isset($errors['user_firstName'])) { ?>
                <small class="color_errors"><?php echo $errors['user_firstName'];?></small>
            <?php } ?>

            <label for = "last_name"></label>
            <input type="text" placeholder="Last name" id="last_name" name="user_lastName" value="<?= $info['lastname'];?>" >
            <?php if (isset($errors['user_lastName'])) { ?>
                <small class = "color_errors"><?php echo $errors['user_lastName'];?></small>
            <?php } ?>

            <label for = "email"></label>
            <input type="email" placeholder="Email Address" id="email" name="user_email" maxlength="100" value= "<?= $info['email'];?>" >
            <?php if (isset($errors['user_email'])) { ?>
                <small class="color_errors"><?php echo $errors['user_email'];?></small>
            <?php } ?>

            <label for = "text"></label>
            <textarea name="text" placeholder="You can leave a request here !" id="text" ><?= $info['request'];?></textarea>

            <input type="hidden" value="<?=$info['id']; ?>" name="id" />
            <button type="submit">SUBMIT</button>

        </form>

    </section>

<?php require_once "_footer.php";?>