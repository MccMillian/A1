<?php
// Condicion para verificar si 'id' existe en la URL
if (!isset($_GET['id'])) {
    die("No se especificó el post.");
}

// Guarda el id que se recibe 
$id = $_GET['id'];

// Lee el archivo JSON
$json = file_get_contents("posts.json");
$posts = json_decode($json, true);

// Busca el post con el id especificado
$encontrado = null;
foreach ($posts as $post) {
    if ($post["id"] == $id) {
        $encontrado = $post;
        break;
    }
}

include("includes/header.php");

// En caso de que se encuentre el post, muestra su contenido
if ($encontrado):
?>
    <h2><?php echo $encontrado["titulo"]; ?></h2>
    <small><strong><?php echo $encontrado["autor"]; ?></strong> - <?php echo $encontrado["fecha"]; ?></small>
    <p><?php echo $encontrado["contenido"]; ?></p>

<?php else: ?>
    <p>Post no encontrado.</p>
<?php endif; ?>

<a href="index.php">← Volver al inicio</a>

<?php include("includes/footer.php"); ?>
