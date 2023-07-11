<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Formation</title>
    
        <?php
        require('header.php')
        ?>
</head>
<body>

    <h2 class="ee">Nos Modules</h2>
<?php
        
    try
    {
    $db =new PDO('mysql:host=localhost;dbname=module','root','');
    }
    catch ( Exception $e)
    {
        die("Erreur:". $e->$getMessage('erreur'));
    }
    //        $req2=$db->query('select * From devform');
    //      //  echo"<option value=".$valeur['codelocalite'].">".$valeur['codelocalite']."</option>";
          
    //     //     }

    if(isset($_POST['ajout']))
{ 
    $image=$_POST["image"];
    $nom=$_POST["nom"];
    $des=$_POST["des"];
    $req=$db->prepare("INSERT into devform(image,nom,des) values(?,?,?)");
    $req->execute(array($image,$nom,$des));
}
    $req2=$db->query('select * From devform');
    foreach ($req2 as $champs=>$valeur){
        
        echo'
        <table border="1">
        <tr>
        <td scope="col">Module</td>
        <td scope="col">Nom</td>
        <td scope="col">Description</td>
        
        </tr>';
        echo"<tr scope='row'>
        <td>".$valeur['image']."</td>
        <td>".$valeur['nom']."</td>
        <td>".$valeur['des']."</td>
        
    </tr>";
    }
    ?>        
   
</body>
</html>