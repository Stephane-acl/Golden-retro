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

                    <?php

                        $cards = [

                        "<div class=\"bloc super-mario-bros-2-container\">" => [ "NES", "Super Mario Bros" , "<a href = \"../Products/super-mario-bros.php\" . class=\"button button-on-hover\">See More</a></div>"],
                        "<div class=\"bloc street-fighter-container\">" => ["Arcade", "Street Fighter", "<a href= \"../Products/street-fighter-2.php\" . class= \"button button-on-hover\">See More</a></div>"],
                        "<div class=\"bloc sonic-the-hedgehog-2-container\">" => ["Genesis", "Sonic The Hedgehog 2", "<a href=\"../Products/sonic-the-hedgehog-2.php\" . class=\"button button-on-hover\">See More</a></div>"],
                        "<div class=\"bloc tloz-alttp-container\">" => ["Super Nintendo", "TLoZ A Link To The Past", "<a href=\"../Products/a-link-to-the-past.php\" .  class=\"button button-on-hover\">See More</a></div>"],
                        "<div class=\"bloc tloz-oot-container\">" => ["Nintendo 64", "TLoZ Ocarina of Time", "<a href=\"../Products/ocarina-of-time.php\" class=\"button button-on-hover\">See More</a></div>"],
                        "<div class=\"bloc tloz-mm-container\">" => ["Nintendo 64", "TLoZ Majora's Mask", "<a href=\"../Products/majora-mask.php\" . class=\"button button-on-hover\">See More</a></div>"],
                        "<div class=\"bloc aladdin-container\">" => ["Super Nintendo", "Disney's Aladdin", "<a href=\"../Products/aladdin.php\" . class=\"button button-on-hover\">See More </a></div>"],
                        "<div class=\"bloc altered-beast-container\">" => ["Genesis", "Altered Beast", "<a href=\"../Products/altered-beast.php\" . class=\"button button-on-hover\">See More</a></div>"],
                        "<div class=\"bloc kirby-dreamland-container\">" => ["Super Nintendo", "Kirby's Dreamland", "<a href=\"../Products/kirby-dreamland.php\" . class=\"button button-on-hover\">See More</a></div>"],
                        "<div class=\"bloc lion-king-container\">" => ["Super Nintendo", "Disney's The Lion King", "<a href=\"../Products/lion-king.php\" . class=\"button button-on-hover\">See More</a></div>"],
                        "<div class=\"bloc metal-slug-container\">" => ["Arcade", "Metal Slug", "<a href=\"../Products/metal-slug.php\" . class=\"button button-on-hover\">See More</a></div>"],
                        "<div class=\"bloc super-mario-64-container\">" => ["Nintendo 64", "Super Mario 64", "<a href=\"../Products/super-mario-64.php\" . class=\"button button-on-hover\">See More</a></div>"],
                        "<div class=\"bloc virtual-tennis-container\">" => ["Dreamcast", "Virtual Tennis", "<a href=\"../Products/virtual-tennis.php\" . class=\"button button-on-hover\">See More</a></div>"]

                        ];
                            foreach($cards as $card => $element) {
                                echo "$card<span>$element[0]</span><h3>$element[1]</h3>$element[2]";
                            }
                    ?>

                </div>


        <?php include "../Header and Footer/_footer.php" ?>
