<?php
    include('header.php')
?>

    <h1>Signup</h1>
    <form action="includes/register.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Wachtwoord">
        <input type="password" name="pwdrepeat" placeholder="Herhaal wachtwoord">
        <button type="submit" name="signup-submit">Registreren</button>

    </form>

<?php
    include('footer.php')
?>