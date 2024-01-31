<?php
$conn = new mysqli("localhost", "root", "", "Blog");


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $title = $_POST["title"];
    $author = $_POST["author"];
    $date = $_POST["date"];
    $content = $_POST["content"];
    
    $uploads_dir = "Images/";
        if ($_FILES["myfile"]["error"] == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["myfile"]["tmp_name"];
            $name = basename($_FILES["myfile"]["name"]);
            move_uploaded_file($tmp_name, "$uploads_dir/$name");
            
            $query = $conn->prepare("INSERT INTO blogContent(title, author, `date`, imgName, content) VALUES(?, ?, ?, ?, ?)");
            $query->bind_param("sssss", $title, $author, $date, $name, $content);
            $query->execute();
            $result = $query->get_result();
        }
        else {
            $query = $conn->prepare("INSERT INTO blogContent(title, author, `date`, content) VALUES(?, ?, ?, ?)");
            $query->bind_param("ssss", $title, $author, $date, $content);
            $query->execute();
            $result = $query->get_result();
        }
    }
 

header('Location: Home.php');
?>
