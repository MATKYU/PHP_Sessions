<?php

$loginName = null;

if(!empty($_COOKIE['utilisateur'])){
    $loginName = $_COOKIE['utilisateur'];
}

if(!empty($_POST['loginname'])){
    setcookie('utilisateur', $_POST['loginname']);
    $loginName = $_POST['loginname'];
}
?>

<?php if ($loginName) :?>
    <h1>Bonjour <?= htmlentities($loginName) ?></h1>
<?php else: ?>

    <!-- <form action=""></form> -->

<?php endif; ?>
