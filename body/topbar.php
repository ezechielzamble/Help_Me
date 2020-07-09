
<header class="header trans_400">

    <div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
      
      <div class="logo"><a href="#"><span>Help</span>me !</a></div>

      <div class="container">

        <div class="row">
        
          <div class="col-lg-10 offset-lg-2">

            <nav class="main_nav">

              <ul class="d-flex flex-row align-items-center justify-content-start">

                <li class=""><a href="bim.php?page=home">Accueil</a></li>
                <li><a href="about.html">A propos de nous</a></li>
                <!-- <li><a href="services.html">Services</a></li> -->
                <!-- <li><a href="" data-toggle="modal" data-target="#myModal">Partager un doc</a></li> -->
                <!-- <li><a href="contact.html">Chat !</a></li> -->
              </ul>

            </nav>
          </div>
        </div>
      </div>

      <div class="header_right d-flex flex-row align-items-center justify-content-start">

        <!-- Header Links -->
        <div class="header_links">

          <ul class="d-flex flex-row align-items-center justify-content-start">
            <?php if(isset($_SESSION["id"])){ ?>
            <li><a href="bim.php?page=modal">Mes Quiz</a></li>
            <li><a href="contact.php">Nous Contactez</a></li>
            <li><a href="bim.php?page=tchat">Tchat</a></li>
            <li><a href="bim.php?page=deconnexion">Se deconnecter</a></li>
            <?php 

              }else{
                ?>
                    <li><a href="bim.php?page=register">S'inscrire</a></li>
                    <li><a href="bim.php?page=signin">Se connecter</a></li>
                <?php 
              }
            ?>
            
          </ul>
        </div>

        <!-- Phone -->
        <div class="phone d-flex flex-row align-items-center justify-content-start">
          <a><i class=" " aria-hidden="true"></i>

          <?php
                        if(isset($_SESSION["id"])){
                        ?>
                        <div><font color="white">Bienvenue - <?php echo $_SESSION['nom']; ?></font></div>
                        <?php
                        }
          ?>
        </div>

        <!-- Hamburger -->
        <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
      </div>  
    </div>

  </header>