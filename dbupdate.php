<!DOCTYPE html>
<html>
    <head>
        <title>Projekt</title>
    </head>
    <body>
        <p> Um ein Projekt zu ändern, füllen Sie das Formular aus:  </p>
        <form action="dbprojectupdate.php" action="POST" autocomplete="off">
            Projektnummer: <br> <input type="number" name="id"><br> <br> 
            neuer Projektname: <br> <input type="text" name="pname"><br>
            neuer Lehrer: <br> <input type="text" name="lehrer"><br> 
            Maximale Teilnehmerzahl: <br> <input type="number" name="tmax"> <br> <br>
        <input type="submit" value="Ändern"/>
        </form>
        
        <p><a href="dbedit.php">Zurück</a></p>
        
    </body>
</html>

<!-- pitcodec -->