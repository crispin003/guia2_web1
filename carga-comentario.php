<?php

include 'dbh.php';
$nuevoContadorComentarios = $_POST['nuevoContadorComentarios'];
$sql = "SELECT * FROM COMENTARIOS LIMIT $nuevoContadorComentarios";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>";
        echo $row['autor'];
        echo "<br>";
        echo $row['mensaje'];
        echo "</p>";
    }
} else {
    echo "No hay comentarios";
}
?>

