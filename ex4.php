<?php 
echo 'Please input your name:';
if(isset($_POST['button'])) {
    $username = $_POST['username'];
    echo "<h3>Hello $username</h3>";
}
?>

<form action="" method="post">
    <input type="text" name="username">
    <button type="submit" name="button">Submit name</button>
</form>