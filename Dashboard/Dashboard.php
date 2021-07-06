<?php
    session_start()
    $name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style type= "text/css">
        header{
            background: #ffd6d6;
        }
    </style>
</head>
<body>
    <header>
        <div class="upper">
             <h1>Welcome <?php echo htmlspecialchars($name); ?></h1>
    </div>
</header>
<p>You are logged in</p>
</body>
</html>