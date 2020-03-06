<?php
    require 'header.php';
    require 'config.php';

    $fullname=$gender=$email=$comments='';
    $fullname_err=$gender_err=$email_err=$comments_err='';
//steps
//1.grab user data from form
if (isset($_POST['btn_login'])){
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

    //5.1 hash password
//    $password = md5($password);--------for future adjustments-------------------

    //5.2 add user
    //use password & email to check if user exists

    $sql = "SELECT `id`, `fullname`, `gender`, `email`, `comments` FROM `students_application` WHERE email='$email'";
//        results from db
    $results = mysqli_query($conn, $sql);
    if (mysqli_num_rows($results) > 0) {
//        grab indv data about user from db
        while ($rows = mysqli_fetch_assoc($results)) {
            $id = $rows['id'];
            $email = $rows['email'];
//            $user_type = $rows['user_type'];
//                creat session for user
            session_start();
//            $_SESSION['Kipande'] = $id;
//            $_SESSION['loggedin'] = true;
//            $_SESSION['email'] = $email;


//            if($user_type == 'supplier'){
//                $_SESSION['aina_ya_mtumizi'] = true;
//            }else{
//                $_SESSION['aina_ya_mtumizi'] = false;
//            }
////            return to index page

            header("location:application_success.php?msg_login");
            exit();
        }
    } else {
//           wrong password or email
        header("location:student_reg.php");
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

                        <button class="btn btn-success btn-block" name="btn_login">Login</button>
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
