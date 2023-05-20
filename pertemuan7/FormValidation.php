<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi</title>
</head>
<body>
    <FORM ACTION="" METHOD="POST" NAME="input">
        <h2>PHP Form Validation</h2>
        <p style="color:red;">* required field</p>
        Name: <input type="text" name="nama" required> <span style="color:red;">*</span><br>
        E-mail: <input type="email" name="email" required> <span style="color:red;">*</span><br>
        Website: <input type="text" name="website"><br>
        Comment: <textarea name="comment" cols="40" rows="5"></textarea><br>
        Gender: <input type="radio" name="gender" value="Female" required>Female
        <input type="radio" name="gender" value="Male" checked>Male <span style="color:red;" required>*</span><br>
        <input type="submit" name="Submit" value="Submit">
        <h2>Your Input:</h2>
    </FORM>
</body>
</html>
<?php
if(isset($_POST['Submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $comment = nl2br($_POST['comment']);
    $gender = $_POST['gender'];
        echo "$nama <br>";
        echo "$email <br>";
        echo "$website <br>";
        echo "$comment <br>";
        echo "$gender <br>";
}
?>