<!DOCTYPE html>
<html>
    <head>
        <title>Projekt</title>
    </head>
    <body>
<?php
            include "config.php";

        
            $id = htmlspecialchars($_GET["id"]);
        
            if($id>0) 
            {
                $sql = "DELETE FROM projects WHERE id ='$id';";
                $austrag = mysqli_query($db_link, $sql);
                echo "LÖSCHEN ERFOLGREICH";
                echo '<p> <a href="dbedit.php"> zurück </a> </p>';
            }
            else
            {
                echo "ANGABEN FALSCH";
                echo '<p> <a href="dbedit.php"> zurück </a> </p>';
            }
        ?>
    </body>
</html>

<!-- pitcodec -->