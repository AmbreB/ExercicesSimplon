<?php
session_start();
if(isset($_POST['msg'])){
    $_SESSION['msg'] = htmlspecialchars($_POST['msg']);
}
if(isset($_GET['logout'])){
    session_destroy();
}
function flashMsg(){
    if(isset($_SESSION['msg'])){
        $msg = $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    return $msg;
}
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/message.css">

    </head>
    <body>
        <?php if(isset($_SESSION['msg'])) : ?>
        <div class="ui message"><?= flashMsg() ?></div>
        <?php endif; ?>

        <h1>Session PHP</h1>
        <form action="?" method="post">
            <input type="text" name="msg">
            <button>Gogo</button>
        </form>
        <a href="?logout">Log Out</a>

        <hr>

        <h3>Session :</h3>
        <code>
            <pre><?php var_dump($_SESSION)?></pre>
        </code>
        <h3>Cookie :</h3>
        <code>
            <pre><?php var_dump($_COOKIE)?></pre>
        </code>
        <script src="cookie.js"></script>
    </body>
</html>
