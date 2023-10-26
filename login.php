<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h2>Login</h2>
        </div>
        <form action="" method="post">
            <div class="mb-3">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="mb-3" id="div-btn">
                <h5>Register <a href="register.php">register</a></h5>
                <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
            </div>
        </form>
    </div>
</body>
</html>