<?php
require "db.php";
$posts = $pdo->query("SELECT * FROM posts ORDER BY id DESC")->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>My Blog</title>
</head>
<body>

<h1>My Blog</h1>
<a href="editor.php">➕ New post</a>

<?php foreach ($posts as $post): ?>
  <article>
    <h2>
      <a href="post.php?id=<?= $post['id'] ?>">
        <?= htmlspecialchars($post['title']) ?>
      </a>
    </h2>
    <p><?= $post['author'] ?> | <?= $post['created_at'] ?></p>
  </article>
<?php endforeach; ?>

</body>
</html>