<?php
   require 'config.php';
   require 'header.php';

$msg = '';
$msgClass = '';

if (isset($_POST['btn-submit'])){
//        get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
//        check required fields
    if (!empty($name) && !empty($email) && !empty($message)){
//            passed
        $toEmail = 'customersupport@codebora.com';
        $subject = 'Contact Request from'.$name;
        $body = '<h2>Contact request</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>
        
        ';

    }else{
        //failed
        $msg = 'Please fill this field';
        $msgClass = 'alert-danger';
    }
}

?>

<div class="container">
    <?php if ($msg !=''):?>
        <div class="alert alert-danger" <?php echo $msgClass?>><?php echo $msg?></div>
    <?php endif; ?>
    <fieldset>
        <br> <br>
        <h1>Contact Us</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" placeholder="Enter Your Full Name" class="form-control" value="<?php echo isset($_POST['name'])?$name:'';?>" name="name">
            </div>
            <div class="form-group">
                <label for="">Email Address</label>
                <input type="email" placeholder="Enter Your Email Address" class="form-control" value="<?php echo isset($_POST['email'])?$email:'';?>" name="email" required>
            </div>
            <div class="form-group">
                <label for="">Message</label> <br>
                <textarea name="message" id="" cols="137" rows="7" placeholder="Write a message" required><?php echo isset($_POST['message'])?$message:'';?></textarea>
            </div>
            <br>
            <button name="btn-submit" type="submit" class="btn btn-primary">Send</button>
        </form>
    </fieldset>
</div>
<br> <br> <br>
<?php
    require 'footer.php';
?>
