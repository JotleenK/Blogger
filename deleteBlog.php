<?php
error_log("Inside php");
$id = $_REQUEST['id'];
error_log("Received ID: " . $id);


$conn = new mysqli("localhost", "root", "", "Blog");
    
            $query = $conn->prepare("DELETE FROM blogContent WHERE id = ?");
            $query->bind_param("i", $id);
            $query->execute();
            // $result = $query->get_result();

            header('Location: Home.php');
            exit();
?>




