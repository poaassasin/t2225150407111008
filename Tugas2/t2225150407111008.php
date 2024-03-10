<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>t2225150407111008</title>
</head>
<body>

<?php
$name = $gender = $country = "";

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = clean_input($_POST["name"]);

    if (isset($_POST["gender"])) {
        $gender = clean_input($_POST["gender"]);
    }

    $country = clean_input($_POST["country"]);
}
?>

<h2>Form Aplikasi PHP</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Nama: <input type="text" name="name" value="<?php echo $name;?>">
    <br><br>

    Jenis Kelamin:
    <input type="radio" name="gender" value="Laki-laki" <?php if ($gender == "Laki-laki") echo "checked";?>>Laki-laki
    <input type="radio" name="gender" value="Perempuan" <?php if ($gender == "Perempuan") echo "checked";?>>Perempuan
    <br><br>

    Negara:
    <select name="country">
        <option value="Indonesia" <?php if ($country == "Indonesia") echo "selected";?>>Indonesia</option>
        <option value="Malaysia" <?php if ($country == "Malaysia") echo "selected";?>>Malaysia</option>
        <option value="Singapura" <?php if ($country == "Singapura") echo "selected";?>>Singapura</option>
    </select>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
// Menampilkan hasil isian formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Hasil Isian Formulir:</h2>";
    echo "Nama: " . $name . "<br>";
    echo "Jenis Kelamin: " . $gender . "<br>";
    echo "Negara: " . $country . "<br>";
}
?>

</body>
</html>
