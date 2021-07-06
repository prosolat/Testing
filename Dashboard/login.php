<?php
    if(isset($_POST['login'])) {
       
        if(empty($_POST['email'])) {
            echo 'Email is required <br>';
        }else{
            echo htmlspecialchars($_POST['email']);
        }
        if(empty($_POST['password'])) {
            echo 'Password is required <br>';
        }else{
            echo htmlspecialchars($_POST['password']);
        }
        session_start();
        $_SESSION = $_POST['name']; 
        header('Location: Dashboard.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        div form{
        text-align: center;
        color: tomato;
        font: italics;
        align-content: center;
        background-color: rgb(47, 198, 218);
        background-position: center;
        font-weight: lighter;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-display: center;

    }
    .field{
        max-width: 200px;
        align-content: center;
        margin: 20px 20px;
        display: inline;
        border-style: double;
        border-color: white;
        border-width: 3px;
        

    }
    .clearfix::after{
        display: block;
        clear: both;
    }
    </style>
</head>
<body>


        <div class="clearfix">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method= "POST">
                <fieldset class="field">
                    <legend>LOGIN FORM</legend>
                    <label for="name">Full Name:</label>
                             <input id="input_text" type="text" name= "name" placeholder="enter  Full Name">
                                        </p>       
                                <p>
                                    <label for="email address">Email address</label>
                                    <input type="email" name="email" id="input_email" placeholder="olagoke@gmail.com">
                                </p>
                                <p>
                                    <label for="pwd">Password:</label>
                                    <input type="password" name="password" id="input_password" placeholder="Enter password">
                                </p>
                                <input type="submit" value="Login" name="login">
                </fieldset>
            </form>
        </div>

</body>
</html>



