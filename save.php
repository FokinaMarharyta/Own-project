<?php
require "db.php";

$stmt = $pdo->prepare(
  "INSERT INTO posts (title, author, content)
   VALUES (?, ?, ?)"
);

$stmt->execute([
  $_POST["title"],
  $_POST["author"],
  $_POST["content"]
]);

header("Location: /");