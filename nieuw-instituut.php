<?php

    session_start();
    if(isset($_SESSION["username"])) {
        echo "Welkom " . $_SESSION['username'];
    }else   {
        header("location:index.php");
    }

?>
<?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        require_once 'database.php';
        $db = new database();
            
        $sql = "INSERT INTO instituut VALUES (:id, :instituut, :telefoonnummer)";

        $placeholders = [
            'id'=>NULL,
            'instituut'=>$_POST['instituut'],
            'telefoonnummer'=>$_POST['tel']
        ];
        $db->insert($sql, $placeholders, 'instituut');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nieuw Instituut</title>
</head>
<body>
    <form action="nieuw-instituut.php" method="post">
        <label for="instituut">Instituut</label><br>
        <input type="text" name="instituut" required><br><br>
        <label for="tel">Telefoon nummer</label><br>
        <input type="text" name="tel" required><br><br>
        <input type="submit" value="Voeg instituut toe">
    </form>
</body>
</html>