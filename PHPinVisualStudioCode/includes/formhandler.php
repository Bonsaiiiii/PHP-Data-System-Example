<?php

//var_dump($_SERVER["REQUEST_METHOD"]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $gender = htmlspecialchars($_POST["gender"]);

    if (empty($firstname)) {
        exit();
        header("Location: ../index.php");
    }

    echo "Submited Data:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $gender;

} else {
    header("Location: ../index.php");
}