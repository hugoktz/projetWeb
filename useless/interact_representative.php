<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Interact with a student account</h1>

    <form method="GET">
        First name <br> <input type="text" name="login" />
        <br>
        Last name <br> <input type="text" name="password" />
        <br>
        Locality (-ies) <br> <input type="text" name="locality" />
        <br>
        Center: <br>
        <select>
            <option>Aix-en-Provence</option>
            <option>Angoulême</option>
            <option>Arras</option>
            <option>Bordeaux</option>
            <option>Brest</option>
            <option>Caen</option>
            <option>Dijon</option>
            <option>Grenoble</option>
            <option>La Rochelle</option>
            <option>Le Mans</option>
            <option>Lille</option>
            <option>Lyon</option>
            <option>Montpellier</option>
            <option>Nancy</option>
            <option>Nantes</option>
            <option>Nice</option>
            <option>Orléans</option>
            <option>Paris</option>
            <option>Pau</option>
            <option>Reims</option>
            <option>Rouen</option>
            <option>Saint-Nazaire</option>
            <option>Strasbourg</option>
            <option>Toulouse</option>
        </select>
        <br><br>

        Permissions <br>
        <div>
            <input type="radio" id="1" name="step" value="step1" checked>
            <label for="huey">Permission 1</label>
        </div>

        <div>
            <input type="radio" id="2" name="step" value="step1">
            <label for="dewey">Permission 2</label>
        </div>

        <div>
            <input type="radio" id="3" name="step" value="step1">
            <label for="louie">Permission 3</label>
        </div>

        <div>
            <input type="radio" id="4" name="step" value="step1">
            <label for="louie">Permission 4</label>
        </div>

        <div>
            <input type="radio" id="5" name="step" value="step1">
            <label for="louie">Permission 5</label>
        </div>


        <input type="submit" name="save" value="submit" />
    </form>
</body>

</html>