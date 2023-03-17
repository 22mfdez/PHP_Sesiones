
<?php //parte visual
include ('header.html');
require ('cfg.php');

    echo "<h2>Listado de pedidos - consultar</h2>";

    ?>
<table class="table table-success table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Fecha Pedidos</th>
            <th scope="col">Producto</th>
            <th scope="col">Unidades</th>
            <th scope="col">Editar</th>
        </tr>
    </thead>

<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $password);
    foreach($dbh->query('SELECT * from pedidos') as $row) {
        // para mostrar los datos de la tabla creada en la db
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['fecha_pedido'] . "</td>";
        echo "<td>" . $row['producto'] . "</td>";
        echo "<td>" . $row['unidades'] . "</td>";
        echo '<td><a href="delete.php?id=' . $row['id'] . '"><ion-icon name="trash-bin-outline"></ion-icon></a></td></tr>';

    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>

</table>


<?php //codigo servidor
include ('footer.html');
?>

