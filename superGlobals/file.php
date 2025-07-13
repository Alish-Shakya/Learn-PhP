<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>

<h1>File Method </h1>
          <form method="post" enctype="multipart/form-data">
                    Upload File: <input type="file" name="file1">
                    <input type="submit">

          </form>
</body>
</html>

<?php

echo $_FILES["file1"]["name"];   // OUtput uploaded file name

?>
