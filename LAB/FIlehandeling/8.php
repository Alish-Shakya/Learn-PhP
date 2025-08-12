<form method="post">
    Name: <input type="text" name="name" id="name"> <br>
    Email: <input type="email" name="email" id="email">
    <input type="submit" value="Save">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entry = [
        "name" => $_POST['name'],
        "email" => $_POST['email']
    ];

    $data = [];
    if (file_exists("data.json")) {
        $data = json_decode(file_get_contents("data.json"), true);
    }

    $data[] = $entry;
    file_put_contents("data.json", json_encode($data, JSON_PRETTY_PRINT));

    echo "DATA SAVED";
}
?>
