<?php 
require_once "../config/database.php";
$erreurs = [];
if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $nom = trim($_POST["name"]);
    if (empty($nom)){
        $erreurs[]= "Le nom est obligatoire";
    }
    if (empty($erreurs)){
        try{
            $stmt=$pdo->prepare("INSERT INTO categories (name) VALUES (?)");
            $stmt->execute([$nom]);
            header("location:show.php");
            exit;
        }
        catch(PDOException $e){
          $erreurs[] = "Erreur lors de la création : " . $e->getMessage();  
        } 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class = "container"> 
        <?php if (!empty($erreurs)): ?>
            <div class="alert alert-error">
                <ul>
                    <?php foreach ($erreurs as $error): ?>
                        <li><?= htmlspecialchars($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <form method="POST">
            <input type="text" id="name" name="name" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>" >
            <button type="submit">Créer</button>
        </form>
    </div>
    
</body>
</html>