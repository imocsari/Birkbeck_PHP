<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
    $data = $_POST['username'] . ',' . $_POST['password'] . ',' . $_POST['email'] . ',' . $_POST['title'] . ',' . $_POST['firstname'] .  ',' . $_POST['surname'] . "\n";
    $ret = file_put_contents('users.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "<h2>Thank you for the information!</h2>";
    }
}
else {
   die('no post data to process');
}
 ?>
