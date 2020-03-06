<?php
require 'config.php';
require 'header.php';
if(isset($_GET['msg_login'])){
    echo '
    <div class="alert-sucess">
      <p>Your application submitted successfully!</p>
    </div>
    ';
}
?>
