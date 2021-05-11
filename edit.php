<?php
    // var_dump([$_POST]);
    require ('Person.php');
    
    if (isset($_GET)) 
    {
        $person=new Person();
        $onePerson = $person -> getID($_GET['id']);   
    }  

    if (isset($_POST) && sizeof($_POST)>0) 
    {
        $person=new Person();
        $person -> store($_POST);
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

    <form action="edit.php" method="POST" >
        <label for="name"> Nome:
            <input type="text" name="name" value="<?= $onePerson['name'] ?>">
        </label>
        <br>
        <label for="lastname"> Cognome:
            <input type="text" name="lastname" value="<?= $onePerson['lastname'] ?>">
        </label>
        <br>
        <select name="genre" >
            <label for="genre">Sesso</label>
            <option selected value="<?=$onePerson['genre']?>"><?= $onePerson['genre']?'Donna':'Uomo'?></option>
            <option value="<?=!$onePerson['genre']?>"><?= $onePerson['genre']?'Uomo':'Donna'?></option>
        </select>
        <input name="id" hidden value="<?= $onePerson['id']?>">
        <button type="submit">MODIFICA</button>
    </form>
</body>
</html>