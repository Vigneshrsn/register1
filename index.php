
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Form </title>
    <link rel="stylesheet" href="styles.css">
    <?php include('server.php');?>
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>
    <form method="POST" action="index.php">
        <?php require('errors.php');?>
        <div class="input">
            <label for="name">NAME</label>
            <input type="text" name="name" id="name"><br>
            <label for="username">USERNAME</label>
            <input type="username" id="username"><br>
            <label for="Email">EMAIL</label>
            <input type="email" id="email"><br>
            <label for="password">PASSWORD</label>
            <input type="password" id="password"><br>
          <label for="password">CONFIRM PASSWORD</label>
            <input type="password" id="cpassword"><br>            

        </div>
        <div class="input">
            <button type="submit" class="btn"name="Register">Register</button>
        </div>
        <p>
            Already a member?<a href="login.html">Sign in</a>
        </p>
    </form>
    
</body>
</html>