<?php
    require ('Person.php');
    $person = new Person();
    $people = $person->getAll();
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
    <main>
        <div>
        
            <h1>Persone</h1>
            <a href="add.php">ADD</a>
    
        </div>

        <table>
            <thead>
                <tr>
                    <th>
                        nome    
                    </th>
                    <th>
                        Cognome    
                    </th>
                    <th>
                        Sesso 
                    </th>
                    <th>
                        Edit 
                    </th>
                    <th>
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($people as $person) 
                {?>
                <tr>
                    <th>
                        <?= $person['name']?>  
                    </th>
                    <th>
                        <?= $person['lastname']?>  
                        
                    </th>
                    <th>
                    <?= $person['genre']? 'Donna': 'Uomo'?> 
                
                    </th>
                    <th>
                        <?= "<a href='edit.php?id=$person[id]'>Edit" ?></a>
                    </th>
                    <th>
                    <?= "<a href='delete.php?id=$person[id]'>Delete";}?></a>
                    </th>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>