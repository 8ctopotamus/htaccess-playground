<h1>Home</h1>

<?php

if (isset($_GET['path'])) {
  $path = $_GET['path'];
  $parts = explode('/', $path);
  foreach ($parts as $index => $part) {
    echo "Part $index: $part<br>";
  }
}

?>