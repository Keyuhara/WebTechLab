<?php
    setcookie("username", "test", time() + 3600);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>"(APP NAME)"</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="styles.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"
    />
    <script src="post-modal.js"></script>
  </head>
  <body>
    <a href="index.html" class="w3-xxlarge home-icon"
      ><i class="fa fa-home"></i
    ></a>
    <a href="login.html" class="w3-xxlarge user-icon"
      ><i class="bi bi-person"></i>
    </a>
    <h1>Test Memes</h1>
    <p>
        <?php
            if (isset($_COOKIE["username"])) 
            {
                echo 'COOKIE!!!'
            }
            else
            {
                echo 'no cookie...'
            }
        ?> 
    </p>
    <div class="post-header">
      <h2>Posts</h2>
      <button class="w3-xlarge plus-icon" id="plusButton">
        <i class="fa fa-plus"></i>
      </button>
    </div>

    <!-- Modal for new post -->
    <div id="newPostModal" class="modal">
      <div class="modal-content">
          <button id="closeForm" class="close">&times;</button>
          <h1>Create a New Post</h1>
          <form id="newPostForm">
              <label for="postText">Post Text:</label>
              <textarea id="postText" name="postText" rows="4" cols="50" required></textarea>

              <label for="fileUploader">Upload File:</label>
              <input type="file" id="fileUploader" name="fileUploader">

              <label for="hyperlink">Hyperlink:</label>
              <input type="text" id="hyperlink" name="hyperlink">

              <button type="submit" class="submit-post-button">Submit</button>
          </form>
      </div>
    </div>
  </body>
</html>