

<?php
$title = "public";
$css = "CSS/index_style.css";

$errors = [];
$user_firstName = $user_lastName = $user_email = $text = "";

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

    if (filter_var($user_email, FILTER_VALIDATE_EMAIL)== false) {
        $errors['user_email'] = "Ce champs est obligatoire";
    }


    if (empty($errors)) {

    require_once '../connec.php';

    $pdo = new \PDO(DSN, USER, PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO newsletter (firstname, lastname, email, request) VALUES (:firstname, :lastname, :email, :request) ";
    $statement = $pdo->prepare($query);

    $statement->bindValue(':firstname', $user_firstName, PDO::PARAM_STR);
    $statement->bindValue(':lastname', $user_lastName, PDO::PARAM_STR);
    $statement->bindValue(':email', $user_email, PDO::PARAM_STR);
    $statement->bindValue(':request', $text, PDO::PARAM_STR);

    $statement->execute();

        header('location: /traitement.php?firstname=' . $user_firstName . '&lastname=' . $user_lastName . '&email=' . $user_email . '&request=' . $text);
}
}

include "_header.php";?>

	<main>
		<section class="banner-homepage">

			<div class="homepage-banner-content-container">
				<h2>Play your favorite retro games</h2>
				<p>Retro Invader helps you to get your favorite retro games and to have all the informations about prices evolution.</p>
			</div>

		</section>

		<section class="pick-game-homepage">

			<div class="heading-with-background">
				<h2>Pick a game!</h2>
			</div>

			<section class="align-left super-mario-bg">
				<div class="game-content-container">
					<div class="game-name-picture super-mario-bros"></div>
					<div class="game-category">
						<span class="nintendo">NINTENDO</span>
						<span class="tiret">-</span>
						<span class="game-platform">NES</span>
						<span class="tiret">-</span>
						<span class="release-date">1993</span>
					</div>
					<p>Nintendo created platform games and got it at its best with Super Mario Bros. 2. Experience now one of the best platformers ever created!</p>
					<a href="Products/super-mario-bros.php" class="button">MORE INFO</a>
				</div>
			</section>

			<section class="align-right street-fighter-bg">
				<div class="game-content-container">
					<div class="game-name-picture street-fighter"></div>
					<div class="game-category">
						<span class="game-platform">ARCADE</span>
						<span class="tiret">-</span>
						<span class="release-date">1992</span>
					</div>
					<p>Ryu, CHun-Li, M. Bison... choose your favorite street fighter and battleyour friend!</p>
					<a href="Products/street-fighter-2.php" class="button">MORE INFO</a>
				</div>
			</section>

			<section class="align-left sonic-bg">
				<div class="game-content-container">
					<div class="game-name-picture sonic"></div>
					<div class="game-category">

                        <?php
                            $sonic = [

						"nintendo" => "SEGA",
						"tiret" => "-",
						"game-platform" => "MEGADRIVE",
						"tiret" => "-",
						"release-date" => "1992"
                        ];
                            foreach($sonic as $item => $info) {
                                echo "<span class= $item>$info</span>";
                            }
						?>
					</div>
					<p>With Sonic the Hedgehog, Sega became a real concurrent to Nintendo’s Mario.</p>
					<a href="Products/sonic-the-hedgehog-2.php" class="button">MORE INFO</a>
				</div>
			</section>

		</section>

		<section class="platforms-homepage">

			<div class="heading-with-background">
				<h2 class="platforms-title">Select your platform</h2>
			</div>

			<div class="products-container-homepage">

				<a href="Platforms/genesis.php">
					<div class="platform-container sega-megadrive">
						<span class="number-of-games">2 JEUX</span>
						<h3>Sega Genesis</h3>
					</div>
				</a>

				<a href="Platforms/nes-classic.php">
					<div class="platform-container nes-classic">
						<span class="number-of-games">1 JEUX</span>
						<h3>NES Classic</h3>
					</div>
				</a>

				<a href="Platforms/dreamcast.php">
					<div class="platform-container dreamcast">
						<span class="number-of-games">1 JEUX</span>
						<h3>Dreamcast</h3>
					</div>
				</a>

				<a href="Platforms/nintendo-64.php">
					<div class="platform-container nintendo-64">
						<span class="number-of-games">3 JEUX</span>
						<h3>Nintendo 64</h3>
					</div>
				</a>

				<a href="Platforms/arcade.php">
					<div class="platform-container arcade">
						<span class="number-of-games">2 JEUX</span>
						<h3>Arcade</h3>
					</div>
				</a>

				<a href="Platforms/super-nintendo.php">
					<div class="platform-container super-nintendo">
						<span class="number-of-games">4 JEUX</span>
						<h3>Super Nintendo</h3>
					</div>
				</a>
			</div>

				<a href="Platforms/plateformes.php" class="button">SEE ALL</a>

		</section>

		<section class="about-us-homepage">

			<div class="about-us-homepage-content-container">
				<h2>Let's meet</h2>
				<p>Video game is our passion since we were kids and we love to share it.</p>
				<a href="../About%20Us/about_us.php" class="button pink-button">KNOW MORE</a>
			</div>

		</section>


		<section class="contact-homepage">

			<div class="heading-with-background">
				<h2>Subscribe to our Newsletter</h2>
			</div>


            <form action="" method="POST" >

            <label for = "first_name"></label>
			<input class="first-form-element" type="text" placeholder="First name" id="first_name" name="user_firstName" value=<?php echo $user_firstName;?> >
                <?php if (isset($errors['user_firstName'])) { ?>
                <small class="color_errors"><?php echo $errors['user_firstName'];?></small>
                <?php } ?>

            <label for = "last_name"></label>
			<input type="text" placeholder="Last name" id="last_name" name="user_lastName" value= <?php echo $user_lastName;?> >
                <?php if (isset($errors['user_lastName'])) { ?>
                <small class = "color_errors"><?php echo $errors['user_lastName'];?></small>
                <?php } ?>

            <label for = "email"></label>
			<input type="email" placeholder="Email Address" id="email" name="user_email" maxlength="100" value= <?php echo $user_email;?> >
                <?php if (isset($errors['user_email'])) { ?>
                <small class="color_errors"><?php echo $errors['user_email'];?></small>
                <?php } ?>

            <label for = "text"></label>
			<textarea name="text" placeholder="You can leave a request here !" id="text" ></textarea>

                <button type="submit">SUBMIT</button>

            </form>

		</section>

		<?php include("_footer.php"); ?>
