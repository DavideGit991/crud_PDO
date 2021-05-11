<?php
    // var_dump([$_POST]);
    require ('Person.php');

    if (isset($_POST) && sizeof($_POST)>0) {
        $person=new Person();
        $person -> addPerson($_POST);
        header('Location: index.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="add.php" method="POST" >
        <label for="name"> Nome:
            <input type="text" name="name">
        </label>
        <br>
        <label for="lastname"> Cognome:
            <input type="text" name="lastname">
        </label>
        <br>
        <select name="genre" >
            <option selected disabled value="">Sesso</option>
            <option value="1">Donna</option>
            <option value="0">Uomo</option>
        </select>

        <button type="submit">Salva</button>
    </form>
</body>
</html>