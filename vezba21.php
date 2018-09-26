<?php
if(isset($_POST['button'])) {
    $broj1 = $_POST['broj1'];
    $broj2 = $_POST['broj2'];
    $broj = $broj1 + $broj2;

    if ($broj > 30) {
        echo "Broj je veci od 30";
    } else if ($broj > 20) {
        echo "Broj je manji ili jednak 30 i veci od 20 ";
    } else if ($broj > 10) {
        echo "Broj je manji ili jednak 20 i veci od 10 ";
    } else {
        echo "Broj je manji ili jednak 10";
    }
}

?>

<form action="" method="post">
  <div>
    <label for="broj1">Prvi</label>
    <input type="text" name="broj1" />
  </div>
  <div>
    <label for="broj2">Drugi</label>
    <input type="text" name="broj2" />
  </div>
  <button type="submit" name="button">Pritisni</button>
</form>