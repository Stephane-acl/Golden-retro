

        <?php
        $title = "Contact";
        $css ="../CSS/contact_style.css";
        include "../_header.php";?>


    <main>

        <section class="banner-contact">

            <div class="contact-banner-content-container">
                <h2>Feel free to contact us</h2>
                <p>You have any questions about our website, our games cotation or want to submit a game? Please feel free to send us a message, we'll do our best to answer your question as quick as possible.</p>
            </div>

        </section>
    <div class="middle">

        <div class="form">
            <h2>Get in Touch !</h2>


            <?php

            $errors = [];
            $user_name = $user_mail = $user_message = "";

            if (!empty($_POST)) {

                $user_name = trim($_POST['user_name']);
                $user_mail = trim($_POST['user_mail']);
                $user_message = trim($_POST['user_message']);

                if (empty($user_name)) {
                    $errors['user_nameErr'] = "Ce champ est obligatoire";
                }

                if (filter_var($user_mail, FILTER_VALIDATE_EMAIL)== false) {
                    $errors['user_mailErr'] = "Ce champ est obligatoire";
                }

                if (empty($user_message)) {
                    $errors['user_messageErr'] = "Ce champ est obligatoire";
                }

                if (empty($errors)) {
                    header('location: form.php?user_name=' . $_POST['user_name'] . '&user_mail=' . $_POST['user_mail'] . '&user_message=' . $_POST['user_message']);
                }

            }
            ?>


            <form action="" method="POST">

                <label for="name"></label>
                <input type="text" id="name" name="user_name" placeholder="Name" value=<?php echo $user_name;?> ><br />
                <?php if (isset($errors['user_nameErr'])) { ?>
                <small class="color_errors_contact"><?= $errors['user_nameErr'];?></small>
                <?php } ?>

                <label for="mail"></label>
                <input type="email" id="mail" name="user_mail" placeholder="Mail" value=<?= $user_mail;?> ><br />
                <?php if (isset($errors['user_mailErr'])) { ?>
                <small class="color_errors_contact"><?= $errors['user_mailErr'];?></small>
                <?php } ?>


                <label for="msg"></label>
                <textarea id="msg" name="user_message" placeholder="Message"></textarea><br />
                <?php if (isset($errors['user_messageErr'])) { ?>
                <small class="color_errors_contact"><?= $errors['user_messageErr'];?></small>
                <?php } ?>

                <button type="submit" class="button">Send</button>

            </form>


        </div>

        <div class="contact">
            <div class="mail">

                <h5>Mail</h5>
                <div>
                    <i class="fa fa-envelope" aria-hidden="true">
                        Contact@retro-golden.fr
                    </i>

                </div>
            </div>
            <div class="call-us">
                <h5>Call Us</h5>
                <div>
                    <i class="fa fa-phone" aria-hidden="true">
                        0800 00 00 00
                    </i>

                </div>
            </div>

            <div class="location">
                <h5>Location</h5>
                <div>
                    <i class="fa fa-map" aria-hidden="true">
                        Bowser Castle <i class="fa fa-heart" aria-hidden="true"></i>
                    </i>

                </div>
            </div>
            </div>
            </div>

    </main>
        <?php include "../_footer.php";?>

