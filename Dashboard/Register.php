<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        div form{
        text-align: center;
        color: tomato;
        font: italics;
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
                    <form action="Login.php" method= "POST">
                        <fieldset class="field">
                            <legend>SIGN-UP FORM</legend>
                            <p>
                                <label for="name">Full Name:</label>
                                            <input id="input_text" type="text" name= "name" placeholder="enter  Full Name">
                                        </p>
                                        <p>
                                            <label for="email address">Email address</label>
                                            <input type="email" name="email" id="input_email" placeholder="olagoke@gmail.com">
                                        </p>
                                        <p>
                                            <label for="pwd">Password:</label>
                                            <input type="password" name="password" id="input_password" placeholder="Choose password">
                                        </p>
                                        <input type="submit" value="Register" name="register">
                        </fieldset>
                    </form>
                </div>
</body>
</html>