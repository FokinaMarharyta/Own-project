<?php
require "db.php";

$id = (int)$_GET["id"];
$stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->execute([$id]);
$post = $stmt->fetch();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($post['title']) ?></title>
</head>
<body>

<h1><?= htmlspecialchars($post['title']) ?></h1>
<p><?= $post['author'] ?> | <?= $post['created_at'] ?></p>

<div>
  <?= $post['content'] ?>
</div>

<a href="/">← Back</a>

</body>
</html>