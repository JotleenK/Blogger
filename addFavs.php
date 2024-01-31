<?php

$id = $_REQUEST['id'];
$conn = new mysqli("localhost", "root", "", "Blog");
    
            $query = $conn->prepare("INSERT INTO Favourites(UserID, BlogID) VALUES(1, ?)");
            $query->bind_param("i", $id);
            $query->execute();
            $result = $query->get_result();
?>