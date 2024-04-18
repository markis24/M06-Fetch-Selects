<?php
include("DBconfig.php");
 // Establece una conexión con la base de datos utilizando las constantes definidas
 $conn = mysqli_connect(DB_HOST, DB_USER, DB_PSW, DB_NAME, DB_PORT);

// Comprovar connexió
if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

// Consulta per obtenir les categories
$sql = "SELECT id, nom FROM categoria";
$result = $conn->query($sql);

// Afegir les opcions de categoria al selector
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["id"] . '">' . $row["nom"] . '</option>';
    }
} else {
    echo '<option value="">No hi ha categories disponibles</option>';
}

// Tancar connexió a la base de dades
$conn->close();
?>