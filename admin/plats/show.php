<?php 
require_once "../config/database.php";
$stmt = $pdo->query("SELECT* FROM items ORDER BY name ASC ");
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET["action"]) && $_GET["action"] === "supprimer" && isset($_GET["id"]) ){
  $id = $_GET["id"];
  $stmt = $pdo->prepare("DELETE FROM categories WHERE id=?");
  $stmt->execute([$id]);
  header("Location:show.php?message=cette catégorie est supprimeée");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
  <?php include "../include/header.php"; ?>
    <div class="container py-5">
      <?php if (isset($_GET["message"])):?>
        <div class="alert alert-success"><?php if($_GET["message"]=== "cette catégorie est supprimeée") echo "cette catégorie est supprimeée"; ?>
        
        </div>
        <?php endif; ?>
<a href="../categorie/ajouter.php">
      <button type="button" class="btn btn-primary btn1">Ajouter une categorie</button></a>
      
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Prix</th>
      <th scope="col">Description</th>
      <th>Actions</th>

      
    </tr>
  </thead>
  <tbody>
    <?php foreach($items as $item):?>
    <tr>
      <th scope="row"><?= $item["id"]?></th>
      <td><?= $item["name"]?></td>
      <td><?= $item["description"]?></td>
      
      <td><a href="show.php?action=supprimer&id=<?= $item["id"]?>" onclick="return confirm('Voulez-vous supprimer cette catégorie?')"><Button>Supprimer</Button></a></td>
    </tr>
    <?php endforeach ;?>
    
    
  </tbody>
</table>

    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>