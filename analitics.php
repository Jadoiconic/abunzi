<?php 
require_once "session.php";
require_once "./actions/conn.php";

$data = array();

$sql = "SELECT COUNT(ibirego.ubwoko) as ubwoko,ubwoko.name FROM ibirego RIGHT JOIN ubwoko ON ibirego.ubwoko=ubwoko.id GROUP BY ibirego.ubwoko";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}

// Close the connection
$conn->close();

echo json_encode($data);
?>
