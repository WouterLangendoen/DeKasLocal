<?php
    require 'header.php';
    ?>
        <link rel="stylesheet" href="css/RegisterStyle.css">
    <?php
    
    $servername = "localhost";
    $dBUsername = "royvan1q_user_dekas";
    $dBPassword = "Bossex123!";
    $dBName = "royvan1q_websitedekas";
    
    
    $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

    $id = $_SESSION['userId'];
            
    $sql = $conn->query("SELECT * FROM users WHERE idUsers='$id'") or die($conn->error);

    
        /* fetch associative array */
        while ($row = $sql->fetch_assoc()) {
            $voornaam = $row["firstName"];
            $achternaam = $row["lastName"];
            $emailadres = $row["emailUsers"];
            $gebruikersnaam = $row["usernameUsers"];
        }
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<p>Vul alle velden in!</p>';
            }
            else if ($_GET['error'] == "invaliduidmail") {
                echo '<p>Foutieve email en gebruikersnaam</p>';
            }
            else if ($_GET['error'] == "invaliduid") {
                echo 'Foutieve gebruikersnaam';
            }
            else if ($_GET['error'] == "invalidmail") {
                echo '<p>Foutieve email</p>';
            }
            else if ($_GET['error'] == "passwordcheck") {
                echo '<p>Uw wachtwoorden komen niet overeen</p>';
            }
            else if ($_GET['error'] == "usertaken") {
                echo '<p>Gebruikersnaam is al in gebruik</p>';
            }
        }
        else if ($_GET['update'] == "success") {
            echo '<p>Update is gelukt !</p>';
        }
    ?>

        
<div class="registerbox">
    <div class="ppform">
        <form action="includes/update.inc.php" method="post">
            <h1>Profiel pagina</h1>
            <p>Gebruikersnaam</p>
            <input type="text" name="uid" value="<?php echo $gebruikersnaam; ?>" required>
            <p>E-mail</p>
            <input type="text" name="mail" value="<?php echo $emailadres; ?>" required>
            <p>Voornaam</p>
            <input type="text" name="firstName" value="<?php echo $voornaam; ?>" required>
            <p>Achternaam</p>
            <input type="text" name="lastName" value="<?php echo $achternaam; ?>" required>
            <button class="ppbutton" type="submit" name="update-submit">Update</button>
        </form>
    </div>    
</div>
        
<?php
    include('footer.php');
?>