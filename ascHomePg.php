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
          
            <div class = "blogPreview">
                
            <button onclick="document.location='ascHomePg.php'" id = "dateButton">Filter by Ascending Date</button>
            <button onclick="document.location='dscHomePg.php'" id = "dateButton">Filter by Descending Date</button>
            <button onclick="document.location='viewFavs.php'" id = "favouriteButton">Favourites</button>

            <?php

                $conn = new mysqli("localhost", "root", "", "Blog");
                $result = $conn->query("SELECT id,title, author, `date`, imgName, content FROM blogContent ORDER BY date ASC");

                foreach ($result as $row) { ?>
                <div class = "article">

                    <?php 
                        if ($row["imgName"] == "null") {
                            ?>
                            <p class = "date"><?php echo $row['date'] ?></p>
                            <p>Author: <?php echo  $row['author'] ?></p>
                            <h2><?php echo $row['title'] ?></h2>
                            <p><a href="viewBlog.php?id=<?= $row['id'] ?>">Read More</a></p>
                            <br><br>
                            <?php
                        }
                        else {
                            ?>
                            <img src="Images/<?php echo $row["imgName"] ?>">
                            <p class = "date"><?php echo $row['date'] ?></p>
                            <p>Author: <?php echo  $row['author'] ?></p>
                            <h2><?php echo $row['title'] ?></h2>
                            <p><a href="viewBlog.php?id=<?= $row['id'] ?>">Read More</a></p>
                            <br><br>
                            <?php
                        }
                            ?>

                </div>
                    <?php
                }

            ?>

            </div>
       
        </div>
        
    </div>
    <script type="module" src="Blog.js"></script>
</body>

</html>