 <?php 
function salam($waktu = "datang", $nama = "Admin") {
    return "selamat $waktu,$nama!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- pengganti php echo -->
    <h1><?= salam ("pagi","farras"); ?></h1>

</body>
</html>