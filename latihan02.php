<?php
    $usr = "";
    $ps = "";
    $euser = "";
    $eps = "";

    if(isset($_POST["txUSER"])){
        $usr = $_POST["txUSER"];
        $ps = $_POST["txPASSKY"];

        if($usr==""){
            $euser = "<div style='color:red;font-size: 10px;'>Field User Masih Kosong</div>";
        }
        if($ps==""){
            $eps = "<div style='color:red;font-size: 10px;'>Field Password Masih Kosong</div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form method POST</title>
</head>
<body>

    <form method="POST" action="latihan02.php">
        <div>
            User Name
            <input type="text" name="txUSER">
            <?=$euser;?>
        </div>

        <div>
            Password 
            <input type="password" name="txPASSKY">
            <?=$eps;?>
        </div>

        <div>
            <button>Login</button>
        </div>
    </form>
    <div>
        Isi dari form : <br>
            1. User Name: <?=$usr?><br>
            2. Password: <?=$ps?>
    </div>
</body>
</html>
