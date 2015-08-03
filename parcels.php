<?php
    class Parcel
    {
      private $length;
      private $width;
      private $height;
      private $weight;

      function __construct($length, $width, $height, $weight)
      {
          $this->length = $length;
          $this->width = $width;
          $this->height = $height;
          $this->weight = $weight;
      }

      function setLength($new_length)
      {
          $this->length = $new_length;
      }

      function getLength()
      {
          return $this->length;
      }

      function setWidth($new_width)
      {
          $this->width = $new_width;
      }

      function getWidth()
      {
          return $this->width;
      }

      function setHeight($new_height)
      {
          $this->height = $new_height;
      }

      function getHeight()
      {
          return $this->height;
      }

      function setWeight($new_weight)
      {
          $this->weight = $new_weight;
      }

      function getWeight()
      {
          return $this->weight;
      }
    }

$user_parcel = new Parcel($_GET["length"], $_GET["width"], $_GET["height"], $_GET["weight"]);


?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <title>Parcel Results!</title>
</head>
<body>
  <h1>Here are the results of your parcel inqury</h1>
  <?php
      echo $user_parcel->getLength();
      echo $user_parcel->getWidth();
      echo $user_parcel->getHeight();
      echo $user_parcel->getWeight();
  ?>
</body>
</html>
