<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>New post</title>

  <script src="https://cdn.tiny.cloud/1/rrajzxpl9hifcbqllwpwrrcf8dfr0nvcfomrtillx5oalonm/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>
</head>
<body>

<h1>Create post</h1>

<form method="post" action="save.php">
  <input name="title" placeholder="Title" required>
  <input name="author" placeholder="Author" required>

  <textarea id="editor" name="content"></textarea>

  <button>Publish</button>
</form>

<script>
tinymce.init({
  selector: "#editor",
  height: 400,
  plugins: "lists link image wordcount code",
  toolbar:
    "undo redo | bold italic | h1 h2 | bullist numlist | link image | code"
});
</script>

</body>
</html>