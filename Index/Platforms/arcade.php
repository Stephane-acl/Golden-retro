
        <?php
        $title = "Arcade";
        $css = "../CSS/plateformes_style.css";
        include "../Header and Footer/_header.php";?>

        <main>

        <section class="banner-platforms">
            <h1>Pick a game</h1>
            <p>Select your favorite game and get ready to play!</p>
        </section>

        <section class="nav-and-bloc-container">


            <nav class="nav-platforms">
                <h2>Select your platform</h2>

                <div class="nav-platforms-links-container">

                    <h2><a href="genesis.php">Genesis</a></h2>
                    <h2><a href="nes-classic.php">NES Classic</a></h2>
                    <h2><a href="dreamcast.php">Dreamcast</a></h2>
                    <h2><a href="nintendo-64.php">Nintendo 64</a></h2>
                    <h2><a href="arcade.php">Arcade</a></h2>
                    <h2><a href="super-nintendo.php">Super Nintendo</a></h2>
                </div>

            </nav>

            </section>

                <div class="bloc-container">
                        <div class="bloc street-fighter-container"><span>Arcade</span><h3>Street Fighter 2</h3><a href="../Products/street-fighter-2.php" class="button button-on-hover">See More</a></div>
                        <div class="bloc metal-slug-container"><span>Arcade</span><h3>Metal Slug</h3><a href="../Products/metal-slug.php" class="button button-on-hover">See More</a></div>
                </div>



</main>

        <?php include "../Header and Footer/_footer.php";?>
