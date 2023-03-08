<?php
function procuraVeiculo($value){
    require 'connection.php';
    $sql = "SELECT * FROM veiculos WHERE id_veiculo = '$value'";
    $query = $mysqli->query($sql);
    $row = mysqli_fetch_assoc($query);
    $dado = $row['marca'] .' ' . $row['modelo'];
    return $dado;
}