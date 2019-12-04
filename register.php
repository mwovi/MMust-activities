<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="register.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/react.png" type="image/png">
    <title>Registration page</title>
    <style>
        table,
        tr {
            border: 2px solid #44ccaa;
        }
    </style>

</head>


<body>
    
    <form action="validation.php" method="post">

        <div class="regpage">
            <h1>Registration form</h1>
            <div class="textbox">
                <input type="text" name="user" placeholder="ENTER YOUR NAME" name="" value="">
            </div>

            <div class="textbox">
                <input type="text" name="reg" placeholder="REG NO" name="" value="">
            </div>

            <div class="textbox">
                <input type="text" name="email" placeholder="EMAIL" name="" value="">
            </div>

            <div class="textbox">
                <input type="text" name="year" placeholder="CLUB/SPORT" name="" value="">
            </div>

            <div class="textbox">
                <input type="password" name="password" placeholder="PASSWORD" name="" value="">
            </div>

            <div class="textbox">
                <input type="password" name="conf" placeholder="CONFIRM PASSWORD " name="" value="">
            </div>
            <input class="btn" type="submit" name="" value="submit">
            Already have an account? <a href="login.php">Login</a>

        </div>

    </form>
</body>

</html>