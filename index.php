<?php
    /* Written BY Alhasan Gamal*/
   $homepage="First Project";
?>
<!DOC HTML>
<html>
    <head>
        <META charset="UTF-8">
        <title><?php echo $homepage?></title>
    </head>
    <body>
        <form method="post" action="register.php">
            <h2>Name</h2>
            <input name="name" type="text">
            <h2>Phone</h2>
            <input name="Phone" type="text">
            <h2>E-mail</h2>
            <input name="e-mail" type="email">
            <input type="submit">
        </form>
    </body>
</html>
