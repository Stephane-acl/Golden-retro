

        <?php
        $title = "Genesis";
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

                    foreach($platforms as $platform => $item) {
                        echo "<h2><a href= $platform>$item</a></h2>";
                    }
                    ?>
                </div>

            </nav>

            </section>

                <div class="bloc-container">

                    <?php

                    $cards = [

                         "<div class= \"bloc sonic-the-hedgehog-2-container\">" => ["Genesis","Sonic The Hedgehog 2", "<a href = \"../Products/sonic-the-hedgehog-2.php\" . class = \"button button-on-hover\"> . See More . </a></div>"],
                         "<div class= \"bloc altered-beast-container\">" => ["Genesis","Altered Beast","<a href = \"../Products/altered-beast.php\" . class = \"button button-on-hover\"> . See More . </a></div>"]
                         ];
                            foreach ($cards as $card => $element) {
                                echo  "$card<span>$element[0]</span><h3>$element[1]</h3>$element[2]";
                            }
                    ?>

                </div>


    </main>

        <?php include "../Header and Footer/_footer.php";?>
        
