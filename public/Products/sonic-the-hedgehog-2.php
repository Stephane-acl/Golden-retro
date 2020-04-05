
        <?php
        $title = "Sonic The Hedgehog 2";
        $css = "../CSS/produits_style.css";
        include "../_header.php";?>

  <main>
        <!--name of the game-->
        <h1 class="product-game-title"><a href="../index.php" title="Home">Home/</a><a href="../Platforms/genesis.php" title="Sega-Genesis">Sega-Genesis/</a>Sonic The Hedgehog 2</h1>
        <hr>
        <div class="product-img-and-description">
          <!--game picture-->
          <div class="product-img-container">
            <div class="product-image-cotation-bloc">
                <img src="../Images/games/sega-genesis/Sonic2_European_Box.jpg" class="game-image" alt="Sonic the hedgehog 2">
                <span class="product-cotation-box">+0%</span>
            </div>  
        </div>
          <!--info section (global)-->
          <div class="product-description-container">
            <!--game description-->
            <div class="product-game-description">
              <p>Sonic the Hedgehog 2 is a 2D side-scrolling platform game. The game stars Sonic the Hedgehog and his sidekick, Miles "Tails" Prower, who is described as having idolized Sonic as a child and wanting to keep up with him. ... A second player can join in at any time and control Tails separately.</p>
            </div>
            <!--info about platform, year, platform & price-->
            <div class="product-platform-price-container">
              <div class="product-platform-years">
                <h3>Platform: </h3>
                <p>Sega Genesis</p>
                <h3>Years: </h3>
                <p>1992</p>
              </div>
              <div class="product-cotation-price">
                <h3>Prices: </h3>
                <p>10€ (Loose)</p>
                <p>12€ (In box)</p>
                <p>18€ (Complet in box)</p>
                <div class="product-cotation-mobile">
                    <h3>Cotation: </h3>
                    <p class="cotation-positiv">+0%</p>
                </div>
              </div>
            </div>
          <!--
            <div class="product-game-ban">
                <img src="Images/games/sega-genesis/altered-beast-img.jpg">
              </div>
          -->
          </div>
        </div>
        <!--Viedo and link section-->
        <div class="product-video-and-links">
          <!--video section-->
          <div class="product-video-container">
            <h3>Watch a lets play!</h3>
            <iframe class="product-video" src="https://www.youtube.com/embed/8cr1rqVcIhA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <!--link section-->
          <div class="product-link-container">
            <h3>Buy one online:</h3>
            <label>Loose</label>
            <a href="https://www.ebay.fr/itm/SEGA-Mega-Drive-Sonic-The-Hedgehog-2-PAL/162719375616?hash=item25e2d4a100:g:jS4AAOSwteRdtTec">[Ebay] SEGA Mega Drive - Sonic The Hedgehog 2 - PAL (loose)</a>
            <label>In box</label>
            <a href="https://www.ebay.fr/itm/SONIC-THE-HEDGEHOG-2-COMPLET-BOITE-NOTICE-SEGA-MEGADRIVE-PAL-EURO-JEU/264559573929?hash=item3d98fabba9:g:W7IAAOSwihtd69xP">[Ebay] SONIC THE HEDGEHOG 2 COMPLET BOÎTE NOTICE SEGA MEGADRIVE PAL EURO JEU</a>
            <label>Complet in box</label>
            <a href="https://www.ebay.fr/itm/SONIC-THE-HEDGEHOG-2-SEGA-MEGA-DRIVE-MEGADRIVE-COMPLET-PAL/153811770121?hash=item23cfe55b09:g:QAcAAOSwkfReLyBs">[Ebay] SONIC THE HEDGEHOG 2 SEGA MEGA DRIVE MEGADRIVE COMPLET PAL</a>
          </div>
        </div>
  </main>

  <?php include "../_footer.php";?>

