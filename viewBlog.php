<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>

    <div class="grid-container">
        <div id="a" class="grid-column">
         <h1>My Blog</h1>
        </div>

        <div id="b" class="grid-column">
            <button onclick="document.location='Home.php'">Home</button>
            <button onclick="document.location='addBlog.php'">Add Blog Post</button>
        </div>

        <div id="c" class="grid-column">


        <?php
            $id = $_REQUEST['id'];
             $conn = new mysqli("localhost", "root", "", "Blog");

            $query = $conn->prepare("SELECT id, title, author, `date`, imgName, content FROM blogContent WHERE id = ?");
            $query->bind_param("i", $id);
            $query->execute();
            $result = $query->get_result();
       
        foreach($result as $row){        
        ?>     

        <button id = "favouriteArticle" data-id=<?php echo $id ?> >Add Article to Favourites</button>

            <article>

                <?php 
                    if ($row["imgName"] == "null") {
                ?>
                        <h3><?php echo $row['title'] ?></a></h3>
                        <p>Author: <?php echo  $row['author'] ?></p>
                        <p><?php echo $row['date'] ?></p><br>
                        <p class = "content"><?php echo $row['content'] ?></p><br>
                <?php
                    }
                    else {
                ?>
                        <h3><?php echo $row['title'] ?></a></h3>
                        <p>Author: <?php echo  $row['author'] ?></p>
                        <p><?php echo $row['date'] ?></p><br>
                        <img src="Images/<?php echo $row["imgName"] ?>">
                        <p class = "content"><?php echo $row['content'] ?></p><br>
                <?php
                    }
                ?>
            </article>
           <?php } ?>
        </div>

    </div>


    <script type="module" src="Blog.js"></script>
</body>

</html>