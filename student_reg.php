<?php
    require 'header.php';
    require 'config.php';

    $fullname=$gender=$email=$comments='';
    $fullname_err=$gender_err=$email_err=$comments_err='';
//steps
//1.grab user data from form
if (isset($_POST['btn_submit'])){
    //2.clean data

    if (isset($_POST['fullname'])){
        $fullname = $_POST['fullname'];
    }else{
        $fullname_err = "Fill this field";
    }

    if (isset($_POST['gender'])){
        $gender = $_POST['gender'];
    }else{
        $gender_err = "Fill this field";
    }
    if (isset($_POST['email'])){
        $email = $_POST['email'];
    }else{
        $email_err = "Fill this field";
    }
    if (isset($_POST['comments'])){
        $comments = $_POST['comments'];
    }else{
        $comments_err = "Fill this field";
    }

    //4.check if user exists
    $sql="SELECT * FROM `users` WHERE email='$email'";
//    results from db
    $results = mysqli_query($conn, $sql);
    if (mysqli_num_rows($results>0)){
        //user exists,go to login
        echo "User Exits";
        header("location:index.php");
        exit();
    }
    //5.1 hash password
//    $password = md5($password);--------for future adjustments-------------------
    

    $sql = "INSERT INTO `students_application`(`id`, `fullname`, `gender`, `email`, `comments`) VALUES (NULL,'$fullname','$gender','$email','$email')";
    if (mysqli_query($conn, $sql)){
        //6.take user to login page
        header("location:application_success.php");
        exit();
    }else{
        echo "Error:".mysqli_error($conn);
    }




}


?>
<!--Reg form-->
<br><br>
<!--<div class="container">-->
    <div class="row">
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col-md-6 col-lg-6 col-xl-6">
            <div id="form-section">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="">Full Name</label>
                            <input type="text" name="fullname" class="form-control" required>
                        </div>
                        <div class="form-group col-sm-5 col-md-5 col-lg-5 col-xl-5">
                            <label for="">Gender</label><br>
                                <input type="radio" name="gender" value="male">
                            <label for="">Male</label><br>
                                <input type="radio" name="gender" value="female">
                            <label for="">Female</label><br>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Mobile Phone Number</label>
                            <input type="number" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Home Address</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tell us briefly why you chose to learn coding</label>
                            <textarea name="comments" id="" cols="80" rows="5" placeholder="Reasons for interests in not more than 200 words"></textarea>
                        </div>

                        <button class="btn btn-success btn-block" name="btn_submit">Submit</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
    </div>
<!--</div>-->
<br> <br> <br>



<?php
require 'footer.php';


?>
