<?php
    class Parcel
    {
      private $length
      private $width
      private $height
      private $weight

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

      function getWidth($new_width)
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
