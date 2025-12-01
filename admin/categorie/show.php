<?php 
require_once "../config/database.php";
$stmt = $pdo->query("SELECT* FROM categories ORDER BY name ASC ");
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <div class="container">
      <button type="button" class="btn btn-primary">Ajouter une categorie</button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Date de création</th>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach($categories as $categorie):?>
    <tr>
      <th scope="row"><?= $categorie["id"]?></th>
      <td><?= $categorie["name"]?></td>
      <td><?=date("d/m/Y",strtotime($categorie["created_at"]))?></td>
    </tr>
    <?php endforeach ;?>
    
    
  </tbody>
</table>

    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>