<?php
session_start();
// print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="/phpcourses/elyas/receive.php" method='post'>

    
        <?php if(isset($_SESSION["error"]['credential'])): ?>
            <div style="color:red"><?php echo $_SESSION["error"]['credential'] ?></div>
        <?php endif ?>
         <br>
        
    
    
        <input type="text" name='email'><br>
        <?php if(isset($_SESSION["error"]['email'])): ?>
            <div style="color:red"><?php echo $_SESSION["error"]['email'] ?></div>
        <?php endif ?>
         <br>

        <input type="text" name=password ><br>
        <?php if(isset($_SESSION["error"]['password'])): ?>
            <div style="color:red"><?php echo $_SESSION["error"]['password'] ?></div>
        <?php endif ?>
        <br>

        <button>submit</button>
    </form>
</body>
</html>