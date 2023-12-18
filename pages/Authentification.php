<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="../src/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <article class="wrapper">
    </article>

    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="../includes/LoginTraitement.php" method="post" class="login">
        <h3>Login</h3>

        <label for="username">Username</label>
        <input placeholder="Enter your email" autocomplete="off" class="input" name="email" type="text">

        <label for="password">Password</label>
        <input placeholder="Enter your password" autocomplete="off" class="input" name="password" type="password">

        <div class="btn">
            <button type="submit" name="submit" class="button">
                <span class="button_lg">
                    <span class="button_sl"></span>
                    <span class="button_text">Login Now</span>
                </span>
            </button>
        </div>

        <p>Need an account?<a style="cursor: pointer;" class="registerBtn"> Create an account</a></p>
    </form>

    <form action="../includes/RegisterTraitement.php" method="post" class="register hidden">
        <h3>Register</h3>

        <label for="username">Username</label>
        <input placeholder="Enter your username" autocomplete="off" class="input" name="username" type="text">

        <label for="username">Email</label>
        <input placeholder="Enter your email" autocomplete="off" class="input" name="email" type="text">

        <label for="username">Password</label>
        <input placeholder="Enter your password" autocomplete="off" class="input" name="password" type="password">

        <div class="btn">
            <button type="submit" name="submit" class="button">
                <span class="button_lg">
                    <span class="button_sl"></span>
                    <span class="button_text">Register Now</span>
                </span>
            </button>
        </div>

        <p>Alerady have an account? <a style="cursor: pointer;" class="loginBtn">Register Now</a></a></p>
    </form>

    <script src="../src/js/main.js">
    </script>

</body>

</html>