document.addEventListener('DOMContentLoaded', function() {
  let deleteBlogButton = document.querySelectorAll('.deleteBlogArticle'); 
  deleteBlogButton.forEach(button => {
    button.addEventListener('click', function() {
        let x = this.dataset.id;
        console.log("Button clicked and id is " + x);
        
        const response = fetch("deleteBlog.php", {
          method: "POST", 
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
          redirect: "follow", 
          referrerPolicy: "no-referrer", 
          body: "id=" + x
          
        }); 
        window.location.href ="editBlog.php"; 
      });      
    });
    console.log("javascript for delete complete");
}); 

let addFavButton = document.getElementById('favouriteArticle'); 
addFavButton.addEventListener('click', function() {
    let y = this.dataset.id;
    
    const response = fetch("addFavs.php", {
        method: "POST", 
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        redirect: "follow", 
        referrerPolicy: "no-referrer", 
        body: "id=" + y
      });  
}) 



