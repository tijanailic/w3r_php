
<?php 
if(isset($_POST['button'])) {
    $text = $_POST['text'];
    
    for ($i=0; $i <= strlen($text); $i++) { 
        if (substr_count($text, substr($text, $i, 1)) == 1) {
            echo substr($text, $i, 1);
            break;
        }
    }
}

?>

<form action="" method="post">
    <input type="text" name="text">
    <button type="submit" name="button">Submit</button>
</form>