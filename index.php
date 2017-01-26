
<!DOCTYPE html>
<html>
    <head>
        <title>Projekteintragung</title>
        <link rel = "stylesheet" href="main.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class ="container centered">
            <div class = "header">
                <h1>Projektwoche 2017: Eintragung</h1>
                <p>
                    Hier kannst du dich für die Projektwoche 2017 eintragen. Bitte wähle eines der folgenden Projekte,
                    <br>
                    um dich einzutragen. Fülle dazu einfach das auftauchende Formular aus und folge weiteren Anweisungen!
                </p>
            </div>
            <div class="projects centered">
                <?php

                include ("config.php");

                $sql = "SELECT * FROM projects;";
                $db_erg = mysqli_query( $db_link, $sql );

                if ( ! $db_erg )
                {
                    die ("FALSCHE ABFRAGE: " . mysqli_error());
                }

                while ($zeile = mysqli_fetch_array( $db_erg ))
                {
                    echo ('<div class = "article"><p><a href="project.php?id=' . $zeile['id'] . "&pname=" . utf8_encode($zeile['pname']) . "&lehrer=" . utf8_encode($zeile['lehrer']) .
                        "&tmax=" . $zeile['tmax'] . '">Projekt ' . $zeile['id'] . ": " . utf8_encode($zeile['pname']) . "</a>: " . utf8_encode($zeile['lehrer']) .
                        " ( " . $zeile['tcur'] . " / " . $zeile['tmax'] . ")" . "</p></div>");
                }
                ?>
            </div>
            <form action="dbedit.php">
                <button>DB_EDIT</button>
            </form>
        </div>
    </body>
</html>

<!-- pitcodec -->