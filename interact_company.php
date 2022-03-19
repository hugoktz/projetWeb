<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Interact with a company account</h1>

    <div class="container">
    <form method = "GET" action="">
    <select>
        <option>Choose an option</option>
        <option name="create">Create</option>
        <option name="read">Read</option>
        <option name="update">Update</option>
        <option name="delete">Delete</option>
    </select>
    </form>
    </div>

    <form method = "GET">
        Company name <br> <input type="text" name="login"/>
        <br>
        Activity area <br> <input type="text" name="password"/>
        <br>
        Locality (-ies) <br> <input type = "text" name = "locality"/>
        <br>
        Number of student already taken: <br> <input type = "text" name = "already_taken"/>
        <br>
        Pilot trust rate: <br> <input type = "text" name = "trust"/>

        <input type="submit" name="save" value="submit"/>
    </form>
</body>
</html>