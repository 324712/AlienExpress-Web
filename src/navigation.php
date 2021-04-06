<div class="uk-alert-warning" uk-alert>
    <div class="uk-container uk-text-center">
        <p>Benieuwd naar de admin-mogelijkheden binnen AlienExpress? <a href="admin/index.php">Log in</a> met ons demoaccount</p>
        <p><strong>E-mail:</strong> demo@demo.nl - <strong>Wachtwoord</strong> demo<br/><br/></p>
        <p>
            <a class='btn btn-secondary btn-sm' href='https://github.com/MitchelMBO/AlienExpress-Web'>GitHub Repo</a>
        </p>
    </div>
</div>

<nav class="uk-navbar-container uk-margin">
    <div class="uk-container">
        <div class="uk-navbar">

            <div class="uk-navbar-center">

                <div class="uk-navbar-center-left">
                    <div>
                        <ul class="uk-navbar-nav">
                            <li><a href="./courses.php">Opleidingen</a></li>
                            <li><a href="./news.php">Nieuws</a></li>
                        </ul>
                    </div>
                </div>

                <a class="uk-navbar-item uk-logo" href="./index.php"><img src="./dist/img/branding/alienexpress_logo.png" alt="AlienExpress logo"></a>

                <div class="uk-navbar-center-right">
                    <div>
                        <ul class="uk-navbar-nav">
                            <li><a href="./game.php">Game</a></li>
                            <li><a href="./contact.php">Contact</a></li>

                            <?php if(isset($_SESSION['email'])) { ?>
                                <li><a href="admin/index.php">Beheeromgeving</a></li>
                            <?php } else { ?>

                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>