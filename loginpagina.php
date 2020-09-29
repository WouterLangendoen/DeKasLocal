<?php
    include('header.php')
?>



    <div class="container"> 
    <form action="#" method="post">
        <input type="text" name="mailId" placeholder="E-mailadres...">
        <input type="password" name="wachtwoord" placeholder="Wachtwoord...">
        <button type="submit" name="login-submit">Login</button>
    </form>
    <a href="register.php">Registreren</a>
    </div>


<?php
    require "footer.php";
?>