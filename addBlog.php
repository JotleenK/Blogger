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
           <div id = "Form">

            <form action="Form.php" method = "post" enctype="multipart/form-data">

                <label for = "title">Title:</label>
                <input type = "text" id = "title" name = "title" required><br><br>

                <label for = "author">Author:</label>
                <input type = "text" id = "author" name = "author" required><br><br>

                <label for = "date">Date:</label>
                <input type = "date" id = "date" name = "date" required><br><br>

                <label for="myfile">Select an image:</label>
                <input type="file" id="myfile" name="myfile" ><br><br>

                <textarea id = "content" name = "content" rows = "30" cols = "70" required></textarea><br><br>


                <input type = "submit" value = "Submit">
            </form>


           </div>
        </div>

    </div>


    <script type="module" src="Blog.js"></script>
</body>

</html>