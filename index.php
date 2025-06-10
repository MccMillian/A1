<?php
// Leer el contenido del archivo JSON
$json = file_get_contents("posts.json"); // Lee el archivo como un string

// Convertir el JSON a un array de PHP
$posts = json_decode($json, true); // true = convierte en array asociativo


include("includes/header.php");
?>
<h2> ultimas publicaciones </h2>
<?php foreach ($posts as $post): ?>
    <div style= "border:1px solid #ccc; padding: 10px; margin-bottom: 10px;">
     <h3><?php echo $post["titulo"]; ?></h3>
        <small><strong><?php echo $post["autor"]; ?></strong> - <?php echo $post["fecha"]; ?></small>
        <p><?php echo $post["contenido"]; ?></p>
    </div>
<?php endforeach; ?>
<?php
include("includes/footer.php");
?>