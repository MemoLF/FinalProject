<!DOCTYPE html>
<html>
<head>
    <title>Kool Katz Camping Club</title>
    <link rel="stylesheet" href="main.css"/>
    <img src="images\cat.png" alt="A Cat with sunglasses" class="avatar">
    <p><a href="login.php">Login</a></p>
</head>
<body>
    <header>
        <h1>Kool Katz Camping Club: Members</h1>
        <p><a href="home.php">Home</a></p> &nbsp; &nbsp;
        <p><a href="pictures.php">Pictures</a></p> &nbsp; &nbsp;
        <p><a href="members.php">Members</a></p> &nbsp; &nbsp;
        <p><a href="contact.php">Contact</a></p> &nbsp; &nbsp;
    </header>
    <main>
        <!-- part 1: the errors -->
        <?php if (is_array($errors) && count($errors) > 0) : ?>
        <h2>Errors</h2>
        <ul>
            <?php foreach($errors as $error) : ?>
                <li><?php echo htmlspecialchars($error); ?></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>

        <!-- part 2: the active members -->
        <h2>Active Members</h2>
        <p>A list of all active members who are currently involved in the club.</p>
        <?php
        $member_list= ['Jerry', 'Billy', 'Tom', 'Larry'];
         if (is_array($member_list) && count($member_list) > 0) : ?>
            <ul>
            <?php foreach( $member_list as $id => $member ) : ?>
                <li><?php echo $id + 1 . '. ' . 
                        htmlspecialchars($member); ?></li>
            <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>There are no members in the member list.</p>
        <?php endif; ?>
        <br>

        <!-- part 3: the inactive members -->
        <h2>Inactive Members</h2>
        <p> Current members who are taking a break or cannot participate. Please do not contact with current events</p>
        <?php
        $nonmember_list= ['Susanne', 'Jedediah', 'Tobias'];
         if (is_array($nonmember_list) && count($nonmember_list) > 0) : ?>
            <ul>
            <?php foreach( $nonmember_list as $id => $member ) : ?>
                <li><?php echo $id + 1 . '. ' . 
                        htmlspecialchars($member); ?></li>
            <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>There are no members in the member list.</p>
        <?php endif; ?>
        <br>
    </main>
</body>
</html>