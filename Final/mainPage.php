<!DOCTYPE html>
<html>
<head>
    <title>Kool Katz Camping Club</title>
    <link rel="stylesheet" href="main.css"/>
</head>
<body>
    <header>
        <h1>Kool Katz Camping Club</h1>
    </header>
    <main>
        <!-- Make a login form -->
        <form action="action_page.php" method="post">
            <div class="imgcontainer">
                <img src="cat.png" alt="A Cat with sunglasses" class="avatar">
            </div>
            <div class="container">
             <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
        <p> Hello! We're the Kool Katz camping club. 
    </main>
</body>
</html>