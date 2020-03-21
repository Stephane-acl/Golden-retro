        <?php
        $title = "Platforms";
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

                <?php
                $platforms = [
                    "genesis.php" => "Genesis",
                    "nes-classic.php" => "NES Classic",
                    "dreamcast.php" => "Dreamcast",
                    "nintendo-64.php" => "Nintendo 64",
                    "arcade.php" => "Arcade",
                    "super-nintendo.php" => "Super Nintendo"
                ];

                foreach($platforms as $link => $platform) {
                     echo "<h2><a href=$link>$platform</a></h2>";
                }
                ?>

                </div>

            </nav>

            </section>

                <div class="bloc-container">

                        <div class="bloc super-mario-bros-2-container"><span>NES</span><h3>Super Mario Bros</h3><a href="../Products/super-mario-bros.php" class="button button-on-hover">See More</a></div>
                        <div class="bloc street-fighter-container"><span>Arcade</span><h3>Street Fighter</h3><a href="../Products/street-fighter-2.php" class="button button-on-hover">See More</a></div>
                        <div class="bloc sonic-the-hedgehog-2-container"><span>Genesis</span><h3>Sonic The Hedgehog 2</h3><a href="../Products/sonic-the-hedgehog-2.php" class="button button-on-hover">See More</a></div>
                        <div class="bloc tloz-alttp-container"><span>Super Nintendo</span><h3>TLoZ A Link To The Past</h3><a href="../Products/a-link-to-the-past.php" class="button button-on-hover">See More</a></div>
                        <div class="bloc tloz-oot-container"><span>Nintendo 64</span><h3>TLoZ Ocarina of Time</h3><a href="../Products/ocarina-of-time.php" class="button button-on-hover">See More</a></div>
                        <div class="bloc tloz-mm-container"><span>Nintendo 64</span><h3>TLoZ Majora's Mask</h3><a href="../Products/majora-mask.php" class="button button-on-hover">See More</a></div>
                        <div class="bloc aladdin-container"><span>Super Nintendo</span><h3>Disney's Aladdin</h3><a href="../Products/aladdin.php" class="button button-on-hover">See More</a></div>
                        <div class="bloc altered-beast-container"><span>Genesis</span><h3>Altered Beast</h3><a href="../Products/altered-beast.php" class="button button-on-hover">See More</a></div>
                        <div class="bloc kirby-dreamland-container"><span>Super Nintendo</span><h3>Kirby's Dreamland</h3><a href="../Products/kirby-dreamland.php" class="button button-on-hover">See More</a></div>
                        <div class="bloc lion-king-container"><span>Super Nintendo</span><h3>Disney's The Lion King</h3><a href="../Products/lion-king.php" class="button button-on-hover">See More</a></div>
                        <div class="bloc metal-slug-container"><span>Arcade</span><h3>Metal Slug</h3><a href="../Products/metal-slug.php" class="button button-on-hover">See More</a></div>
                        <div class="bloc super-mario-64-container"><span>Nintendo 64</span><h3>Super Mario 64</h3><a href="../Products/super-mario-64.php" class="button button-on-hover">See More</a></div>
                        <div class="bloc virtual-tennis-container"><span>Dreamcast</span><h3>Virtual Tennis</h3><a href="../Products/virtual-tennis.php" class="button button-on-hover">See More</a></div>

                </div>


        <?php include "../Header and Footer/_footer.php" ?>
