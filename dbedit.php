<!DOCTYPE html>
<html>
    <head>
        <title>Projekt</title>
    </head>
    <body>
        <p> Willkommen, hier editieren Sie die Datenbank. </p> 
        <p> Hier kann man Projekte Hinzufügen, Ändern oder Löschen: </p> 
        
        <form action="dbplus.php">
        <button>Projekt Hinzufügen</button>
        </form>
        <form action="dbupdate.php">
        <button>Projekt Ändern</button>
        </form>
        <form action="dbminus.php">
        <button>Projekt Löschen</button>
        </form>
        
        <p> Hier kann man Schüler in ein anderes Projekt umtragen: </p>
        
        <form action="dbpupilupdate1.php">
        <button>Schüler umtragen</button>
        </form>
        
        <p> Hier kann man sich die Schülerliste sortiert ausgeben lassen:</p>
        
        <form action="dbausbypnum.php">
        <button>Nach Projekten ausgeben</button>
        </form>
        
        <form action="dbausbyklasse.php">
        <button>Nach Klassen ausgeben</button>
        </form>
        
        <p> <br>VORSICHT! KLICKEN SIE HIER, WIRD DIE GANZE DATENBANK GELEERT!
            <br>Folglich müssen Sie die Projektliste neu füllen und Schüler müssen sich neu eintragen.
        </p>
        <form action="dbwipe.php">
        <button>Datenbank leeren</button>
        </form>
        
        <p><a href="index.php">Zurück</a></p>
        
    </body>
</html>

<!-- pitcodec -->