<?php

    require 'header.php';

    
    $servername = "localhost";
    $dBUsername = "root";
    $dBPassword = "root";
    $dBName = "royvan1q_websitedekas";


    $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

    

    $sql = "SELECT * FROM users";

    if ($result = mysqli_query($conn, $sql)) {

        /* fetch associative array */
        while ($row = mysqli_fetch_array($result)) {
            $voornaam = $row["firstName"];
            $achternaam = $row["lastName"];
            $emailadres = $row["emailUsers"];
            $gebruikersnaam = $row["usernameUsers"];
        }
    
        ?>

        <table class="profielpagTabel">
            <tr>
                <th class = "profpagTh">Voornaam</th>
                <th class = "profpagTh">Achternaam</th>
                <th class = "profpagTh">Emailadres</th>
                <th class = "profpagTh">Gebruikersnaam</th>
            </tr>
            <tr>
                <td class="profpagTd"><?php echo  $voornaam  ?></td>
                <td class="profpagTd"><?php echo  $achternaam  ?></td>
                <td class="profpagTd"><?php echo  $emailadres  ?></td>
                <td class="profpagTd"><?php echo  $gebruikersnaam  ?></td>
            </tr>
        </table>
        
        
        <?php


    }

    include('footer.php');
?>