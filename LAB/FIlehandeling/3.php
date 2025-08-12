<form method="post" enctype="multipart/form-data">
    Select file: <input type="file" name="myfile">
    <input type="submit" value="Upload">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Make sure the uploads folder exists
    if (!is_dir("uploads")) {
        mkdir("uploads", 0777, true);
    }

    $target = "uploads/" . basename($_FILES["myfile"]["name"]);

    // Correct function name: move_uploaded_file (not move_upload_file)
    if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target)) {
        echo "File uploaded successfully";
    } else {
        echo "Upload Failed";
    }
}
?>
