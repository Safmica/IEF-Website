<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
</head>
<body>

    <div class="container-login">
        <input type="checkbox" id="check-login" aria-hidden="true">

        <div class="signup">
            <form action="">
                <label for="check-login" aria-hidden="true">Sign Up</label>
                <input class="input-signup" type="text" name="username" placeholder="Username" required>
                <input class="input-signup" type="email" name="email" placeholder="Email" required>
                <input class="input-signup" type="password" name="password" placeholder="Password" required>
                <button class="btn-signup">Sign Up</button>
            </form>
        </div>

        <div class="login">
            <form action="">
                <label for="check-login" aria-hidden="true">Login</label>
                <input class="input-login" type="email" name="email" placeholder="Email" required>
                <input class="input-login" type="password" name="password" placeholder="Password" required>
                <button class="btn-login">Login</button>
            </form>
        </div>

    </div>
    
</body>
</html>