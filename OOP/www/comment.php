<?php
  $date = $_POST["date"];
  $user_id = $_POST["user_id"];
  $text_comment = $_POST["text_comment"];
  $name = $_POST["name"];
  $articleId = $_POST["articleId"];
  $art_id = $_POST["art_id"];
        $text_comment = htmlspecialchars($text_comment);
        $name = htmlspecialchars($name); 


        $date = date("d.m.Y в H:i:s");

  $mysqli = new mysqli("localhost","root","12345","base");
  $mysqli->query("INSERT INTO `comments` (`date`, `user_id`, `text_comment`, `name`, `articleId`, `art_id`) VALUES (NOW(), '$user_id', '$text_comment', '$name', '$articleId', '$art_id'')");
  header("Location: ".$_SERVER["HTTP_REFERER"]);
?>