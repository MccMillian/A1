<?php
$json = file_get_contents("posts.json"); 

$posts = json_decode($json, true); 


include("includes/header.php");
?>
<h2> ultimas publicaciones </h2>
<?php foreach ($posts as $post): ?>
    <div style= "border:1px solid #ccc; padding: 10px; margin-bottom: 10px;">
     <h3><?php echo $post["titulo"]; ?></h3>
        <small><strong><?php echo $post["autor"]; ?></strong> - <?php echo $post["fecha"]; ?></small>
        <p><?php echo $post["contenido"]; ?></p>
        <a href="post.php?id=<?php echo $post["id"]; ?>">Leer más</a>
    </div>
<?php endforeach; ?>
<?php
include("includes/footer.php");
?>