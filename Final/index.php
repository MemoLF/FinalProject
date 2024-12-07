<!DOCTYPE html>
<?php 
    $name = 'user';
    $value = '94';
    setcookie($name, $value, time() + (86400 * 30), "/");
?>
<html>
<head>
    <title>Kool Katz Camping Club</title>
    <link rel="stylesheet" href="main.css"/>
    <img src="images\cat.png" alt="A Cat with sunglasses" class="avatar">
    <p><a href="login.php">Login</a></p>
</head>
<body>
    <header>
        <h1>Kool Katz Camping Club</h1>
        <p><a href="index.php">Home</a></p> &nbsp; &nbsp;
        <p><a href="pictures.php">Pictures</a></p> &nbsp; &nbsp;
        <p><a href="members.php">Members</a></p> &nbsp; &nbsp;
        <p><a href="contact.php">Contact</a></p> &nbsp; &nbsp;
    </header>
    <main>
        <div>
            <p>Hello! We're glad you are visiting us/ If you're a member, please login, or go to our <a href="contact.php">Contact Page</a> to get more information about what we do.</p> 
        <div>
        <div>
            <p>Kool Katz Camping Club is dedicated to exploring the outdoors together and visiting lots of cool camping sits. We're always happpy to meet new people.</p>
        </div>
        <div>
            <p>You can see our <a href="contact.php">Contact Page</a> for more information about us. Our main hub is located in Caesar Park in Park City.</p>
        </div>
    </main>
</body>
</html>