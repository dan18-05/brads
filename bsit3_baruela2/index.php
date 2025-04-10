<!-- filepath: c:\xampp\htdocs\bsit3_baruela2\index.php -->
<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Welcome to Our Website</h1>
    <p class="intro-text">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    </p>
    <div class="button-grid">
      <a href="about.php"><button>About Us</button></a>
      <a href="gallery.php"><button>Gallery</button></a>
      <a href="video.php"><button>My Video</button></a>
      <style>
        /* General Reset */
body {
  background-color: #000;
  color: #fff;
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}

/* Container with white glow */
.container {
  background-color: #111;
  padding: 40px;
  border-radius: 10px;
  width: 100%;
  max-width: 600px;
  text-align: center;
  box-shadow:
    0 0 25px rgba(255, 255, 255, 0.1),
    0 0 10px rgba(255, 255, 255, 0.05),
    0 0 5px rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.05);
}

/* Heading */
h1 {
  color: #fff;
  font-size: 28px;
  margin-bottom: 20px;
}

/* Intro Text */
.intro-text {
  font-size: 14px;
  line-height: 1.5;
  color: #ccc;
  margin-bottom: 30px;
}

/* Button Grid */
.button-grid {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

/* Buttons */
button {
  padding: 15px;
  font-size: 16px;
  border-radius: 6px;
  border: none;
  cursor: pointer;
  font-weight: bold;
  width: 100%;
  transition: 0.3s ease;
}

a:nth-child(1) button {
  background-color: #ff9900;
  color: #000;
}

a:nth-child(2) button {
  background-color: #333;
  color: #fff;
}

a:nth-child(3) button {
  background-color: #ff9900;
  color: #000;
}

button:hover {
  opacity: 0.9;
  transform: scale(1.02);
}

      </style>
    </div>
  </div>
</body>
</html>