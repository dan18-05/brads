<!-- filepath: c:\xampp\htdocs\bsit3_baruela2\gallery.php -->
<?php
// gallery.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gallery</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="container">
  <h2>Gallery</h2>

  <!-- Folder 1 -->
  <div class="folder">
    <h3>Folder 1: Nature</h3>
    <a href="html/1.jpg" target="_blank">
      <img src="html/1.jpg" alt="Image 1" class="clickable-image" />
    </a>
    <a href="html/2.jpg" target="_blank">
      <img src="html/2.jpg" alt="Image 2" class="clickable-image" />
    </a>
  </div>

  <!-- Folder 2 -->
  <div class="folder">
    <h3>Folder 2: Animals</h3>
    <a href="html/3.jpg" target="_blank">
      <img src="html/3.jpg" alt="Image 3" class="clickable-image" />
    </a>
    <a href="html/4.jpg" target="_blank">
      <img src="html/4.jpg" alt="Image 4" class="clickable-image" />
    </a>
  </div>

  <!-- Folder 3 -->
  <div class="folder">
    <h3>Folder 3: Architecture</h3>
    <a href="html/5.jpg" target="_blank">
      <img src="html/5.jpg" alt="Image 5" class="clickable-image" />
    </a>
  </div>

  <br />
  <a href="index.php"><button>Home</button></a>
  <style  type="text/css">
    /* Folder Styling */
.folder {
  margin-bottom: 20px;
  padding: 15px;
  background-color: #1a1a1a;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
  border: 1px solid #262626;
  display: inline-block;
  width: calc(33.33% - 20px); /* Make folders fit in a grid */
  vertical-align: top;
  text-align: center;
  margin-right: 10px;
}

/* Folder Title */
.folder h3 {
  color: #ff9900;
  margin-bottom: 15px;
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.6);
}

/* Clickable Images */
.clickable-image {
  width: 100px;
  height: auto;
  margin: 10px;
  border-radius: 5px;
  border: 2px solid #ff9900;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  cursor: pointer;
}

.clickable-image:hover {
  transform: scale(1.1);
  box-shadow: 0 0 10px rgba(255, 153, 0, 0.5);
}

/* Container Styling */
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  text-align: center;
}

/* Responsive Design */
@media (max-width: 768px) {
  .folder {
    width: calc(50% - 20px); /* Adjust folder width for smaller screens */
  }
}

@media (max-width: 480px) {
  .folder {
    width: 100%; /* Full width for very small screens */
    margin-right: 0;
  }
}
  </style>
</div>
</body>
</html>