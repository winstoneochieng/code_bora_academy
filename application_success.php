<?php
require 'config.php';
require 'header.php';
if(isset($_GET['msg_login'])){
    echo '
 <br> 
    <div class="alert-success">
      <p>Your application submitted successfully!</p>
    </div>
    ';
}
?>
