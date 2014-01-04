<?php
//INCLUDE CSS AND JAVASCRIPT DEPENDENCIES
require_once "$this->path/TEMPLATES/END-HEADER-START-BODY.php.inc";
?>
<form action="run" method="post">
    <label>Login</label><input type="text" name="username" /><br />
    <label>Password</label><input type="password" name="password" /><br />
    <input type="submit" value="Login" name="submit" />
</form>