<?php

$users = [
   [
       'nom' => 'Boulhdir', 
       'prenom' => 'Abderr', 
       'age' => 30,
   ],
   [
       'nom' => 'uzumaki', 
       'prenom' => 'Naruto', 
       'age' => 29
],
[
       'nom' => 'uchiha',
       'prenom' => 'sasuke',
       'age' => 28
],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>age</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($users as $personne):
            ?> 
                <tr>
                    <td><?= $personne['nom']?></td>
                    <td><?= $personne['prenom']?></td>
                    <td><?= $personne['age']?></td>
                </tr>  
            <?php    
                endforeach;
            ?>
        </tbody>
    </table>
    <form action="formulaire" method="post" action = index.php>
    <div>
        <label for="firstname">Nom </label>
        <input type="text" id="firstname" name="firstname">
    </div>
    <div>
        <label for="lastname">Prénom </label>
        <input type="text" id="lastname" name="lastname">
    </div>
    <div>
    <label for="age">Age </label>
        <input type="number" id="age" name="age">
    </div>
    <input type="submit" value="Valider">
</form>
</body>
</html>



