<?php
    include('header.php')
?>

<head>
    <title>Register Form</title>
    <link rel="stylesheet" type="text/css" href="css\RegisterStyle.css">
</head>
    <!-- Error berichten // later vervangen voor html ingebouwde messages -->
    <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<div class="registererror"><p>Vul alle velden in!</p></div>';
            }
            else if ($_GET['error'] == "invalidmailuid") {
                echo '<div class="registererror"><p>Foutieve email en gebruikersnaam</p></div>';
            }
            else if ($_GET['error'] == "invaliduid") {
                echo '<div class="registererror"><p>Foutieve gebruikersnaam</p></div>';
            }
            else if ($_GET['error'] == "invalidmail") {
                echo '<div class="registererror"><p>Foutieve email</p></div>';
            }
            else if ($_GET['error'] == "passwordcheck") {
                echo '<div class="registererror"><p>Uw wachtwoorden komen niet overeen</p></div>';
            }
            else if ($_GET['error'] == "usertaken") {
                echo '<div class="registererror"><p>Gebruikersnaam is al in gebruik</p></div>';
            }
        }
        else if ($_GET['signup'] == "success") {
            include('PHPMailer/sendmail.php');
        }
    ?>
    <div class="registerbox">
    <form class="registerform" action="includes/register.inc.php" method="post">
        <h1>Signup</h1>
        <p>Gebruikersnaam</p>
        <input type="text" name="uid" placeholder="Gebruikersnaam" required>
        <br>
        <p>E-mail</p>
        <input type="text" name="mail" placeholder="E-mail" required>
        <br>
        <p>Voornaam</p>
        <input type="text" name="firstName" placeholder="Voornaam" required>
        <br>
        <p>Achternaam</p>
        <input type="text" name="lastName" placeholder="Achternaam" required>
        <br>
        <!-- <p>Straatnaam</p>
        <input type="text" name="straatName" placeholder="Straatnaam" required>
        <br>
        <p>Nummer</p>
        <input type="text" name="nummer" placeholder="Nummer" required>
        <br>
        <p>Toevoeging</p>
        <input type="text" name="toevoeging" placeholder="Toevoeging" required>
        <br>
        <p>Postcode</p>
        <input type="text" name="postcode" placeholder="Postcode" required>
        <br> -->
        <p>Wachtwoord</p>
        <input type="password" name="pwd" placeholder="Wachtwoord" required>
        <br>
        <p>Herhaal wachtwoord</p>
        <input type="password" name="pwdrepeat" placeholder="Herhaal wachtwoord" required>
        <br>
        <button type="submit" name="signup-submit">Registreren</button>
        <br><br>
        <a href="loginpagina.php">Inloggen</a>
    </form>
    </div>
<?php
    include('footer.php')
?>