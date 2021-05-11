<?php
    require ('Person.php');
    
    if(isset($_GET)) 
    {
        $person = new Person();
        $person->delete($_GET['id']);
        header('Location: index.php');
        exit;  
    }  
?>