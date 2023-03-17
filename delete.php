<?php //parte visual
include ('header.html');
require ('cfg.php');
echo("<h2>Eliminar pedidos</h2>");
?>

<div class="card">
    <div class="card-header">
        <h2>Detalles del pedido</h2>
    </div>



<style>
    .card {
        border: 1px solid #ccc;
        border-radius: 5px;
        margin: 20px auto;
        max-width: 600px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .card-header {
        background-color: #f1f1f1;
        padding: 10px;
        border-bottom: 1px solid #ccc;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }

    .card-header h2 {
        margin: 0;
    }

    .card-body {
        padding: 10px;
    }
</style>
<?php


if (isset($_POST['id'])) {

        $stmt = $conn->prepare('DELETE FROM pedidos WHERE id = ?');
        $stmt->execute(array($_GET['id']));
        header('Location: consultar.php');

}elseif(isset($_POST['cancelar'])){
    header('Location: consultar.php');
} elseif (isset($_GET['id'])) {

        $stmt = $conn->prepare('SELECT * FROM pedidos WHERE id = ?');
        $stmt->execute(array($_GET['id']));
        $row = $stmt->fetch();

        echo "<p>ID: " . $row['id'] . "</p>";
        echo "<p>Fecha de Pedido: " . $row['fecha_pedido'] . "</p>";
        echo "<p>Producto: " . $row['producto'] . "</p>";
        echo "<p>Unidades: " . $row['unidades'] . "</p>";


        echo '<form action="" method="POST">';
        echo '<button type="submit" name="id">Confirmar eliminación</button>';
        echo '<button type="submit" name="cancelar">Cancelar</button>';
        echo '</form>';

} else {
    echo "<p>No se especificó un ID de pedido.</p>";
}


?>
</div>
<?php
include ('footer.html');
?>


