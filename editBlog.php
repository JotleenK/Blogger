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
            <button onclick="document.location='editBlog.php'">Edit Posts</button>
        </div>

        <div id="c" class="grid-column">
          
            <div class = "blogPreview">
            
            <?php

                $conn = new mysqli("localhost", "root", "", "Blog");
                $result = $conn->query("SELECT id, title, author, `date`, imgName, content FROM blogContent");

                foreach ($result as $row) { ?>
                <div class = "article">
      
                            <h2><?php echo $row['title'] ?></h2>
                            <p class = "date"><?php echo $row['date'] ?></p>
                            <!-- <p><a href=?>Edit Blog Post</a></p> -->
                            <p><button class = "deleteBlogArticle" data-id=<?php echo $row['id'] ?> >Delete Blog Post</button></p>
                            <br><br>      
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