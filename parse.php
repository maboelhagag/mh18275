<?php
$accessFile = $_POST['NW.accdb'];
$conn = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb, *.accdb)}; DBQ=$accessFile; Uid=; Pwd=;");
$stmt = $conn->query('SELECT * FROM Orders');
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($rows);
?>
