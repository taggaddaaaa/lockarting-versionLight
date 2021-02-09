<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
    <div class="container">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="/index.php">
                <img style="width: 250px;" src="/assets/img/logo.png" alt="logo de lockarting">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/index.php" class="nav-link">
                        <i class="material-icons">home</i> Retour au site web
                    </a>
                </li>
                <li class="nav-item">
                    <a target="_blank" href="https://facebook.com/lockarting34" class="nav-link">
                        <i class="material-icons">face</i> Facebook
                    </a>
                </li>
                <li class="nav-item ">
                    <a target="_blank" href="https://www.instagram.com/lockarting34" class="nav-link">
                        <i class="material-icons">photo_camera</i> Instagram
                    </a>
                </li>
                <li class="nav-item ">
                    <a target="_blank" href="https://goo.gl/L92z91" class="nav-link">
                        <i class="material-icons">favorite</i> Votre avis
                    </a>
                </li>
                <?php if ($_SERVER[REQUEST_URI] != "/job/") { ?>
                <li class="nav-item ">
                    <a target="_blank" href="/index.php#contact" class="nav-link">
                        <i class="material-icons">mail</i> Contact
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
