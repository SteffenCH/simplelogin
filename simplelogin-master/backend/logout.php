<?php
if (isset($_POST['logout'])) {
    session_destroy();
    die(header("Location: ./index.php"));
}
?>
<form action="" method="post" class="logout">
    <input type="submit" name="logout" id="submit" value="Log ud">
</form>
