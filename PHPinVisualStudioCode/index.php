<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widht=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>

<body>

    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="firstname">Firstname?</label>
            <input required id="firstname" type="text" name="firstname" placeholder="Firstname...">

            <label for="lastname">Lastname?</label>
            <input required id="lastname" type="text" name="lastname" placeholder="Lastname...">

            <label for="gender">Gender?</label>
            <select id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="none">None</option>
            </select>

            <button type="submit" name="submit">Submit</button>
        </form>
    </main>
</body>

</html>
