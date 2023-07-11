<?php
$db =new PDO('mysql:host=localhost;dbname=module','root','');

?>
     
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Enrégistrer</title>
        <?php
        require('header.php')
        ?>
</head>
<body>
     
    <form class="lol" action="Reading.php" method="POST">
    
    <div class="jj">
        <label class="aa" for="">Module</label>
        <input class="ab" type="file" name="image"></br></br></br>
        <label class="aa" for="">Nom</label>
        <input class="ab" type="text" name="nom" ></br></br></br>
        <label class="aa"for="">Description</label>
      <textarea class="ab" name="des" id="" cols="30" rows="10">Description </textarea></br></br></br>
       
        <input class="ac" type="submit" name="ajout" value="Ajouter">
      
    </form>
   



    </div>
</body>
</html>