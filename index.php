<?php
// Esta linea indica que inicia el código PHP
// ##########################################
// Se crea un array llamado $posts que contiene varios arrays 

$posts = [
    [
        "id" => 1,
        "titulo" => "Bienvenido a mi blog",
        "Autor" => "Sebastian",
        "fecha" => "2023-10-01",
        "contenido" => "Este es el primer post de mi blog"
    ],
// Cada array representa una publicación
    [
        "id" => 2,
        "titulo" => "Segundo articulo",
        "Autor" => "Sebastian",
        "fecha" => "2023-10-02",
        "contenido" => "Usando arrays en PHP"
    ]
];
//Aqui se incluye el encabezado
// Este bloque inicia un bucle para recorrer cada post dentro del array $posts
include("includes/header.php");
?>
<h2> ultimas publicaciones </h2>
<?php foreach ($posts as $post): ?>
    <div style= "border:1px solid #ccc; padding: 10px; margin-bottom: 10px;">
     <h3><?php echo $post["titulo"]; ?></h3>
        <small><strong><?php echo $post["Autor"]; ?></strong> - <?php echo $post["fecha"]; ?></small>
        <p><?php echo $post["contenido"]; ?></p>
    </div>
<?php endforeach; ?>
<?php
// Incluir pie de página
include("includes/footer.php");
?>