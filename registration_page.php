
<?
require 'config.php';
require 'header.php';

//EMPTY VARIABLES TO STORE DATA
$firstname = $lastname = $gender = $age = $email = $address = $education = $parent = $course = $class = $message =  '';

//EMPTY VARIABLES TO STORE ERROR
$firstnameErr = $lastnameErr = $genderErr = $ageErr = $emailErr = $addressErr = $educationErr = $parentErr = $courseErr = $classErr = $messageErr =  '';



if(isset($_POST['btn_enroll'])){

    if(isset($_POST['firstname'])){
        $firstname = $_POST['firstname'];
    }else{
        $firstnameErr = "Fill this field";
    }

    if(isset($_POST['lastname'])){
        $lastname = $_POST['lastname'];
    }else{
        $lastnameErr = "Fill this field";
    }

    if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
    }

    if(isset($_POST['age'])){
        $age = $_POST['age'];
    }else{
        $ageErr = "Fill this field";
    }

    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }else{
        $emailErr = "Fill this field";
    }

    if(isset($_POST['address'])){
        $address = $_POST['address'];
    }else{
        $addressErr = "Fill this field";
    }

    if(isset($_POST['education'])){
        $education = $_POST['education'];
    }else{
        $educationErr = "Fill this field";
    }

    if(isset($_POST['parent'])){
        $parent = $_POST['parent'];
    }else{
        $parentErr = "Fill this field";
    }

    if(isset($_POST['course'])){
        $course = $_POST['course'];
    }

    if(isset($_POST['class'])){
        $class = $_POST['class'];
    }

    if(isset($_POST['message'])){
        $message = $_POST['message'];
    }else{
        $messageErr = "Fill this field";
    }

//        CHECK IF STUDENT IS ALREADY ENROLLED

//        $sql = "SELECT * FROM `students` WHERE email = '$email'";
//        $results = mysqli_query($conn, $sql);
//
//        if(mysqli_num_rows($results) >0){
//            echo ("Student Already Registered");
//        }else{
//            header("location:students.php");
//            exit();
//        }

//        ADD STUDENT
        $sql = "INSERT INTO `Students`(`id`, `first_name`, `last_name`, `age`, `gender`, `email`, `address`, `education`, `parent`, `course`, `class`, `message`) VALUES (NULL,'$firstname','$lastname','$age','$gender','$email','$address','$education','$parent','$course','$class','$message')";

        if(mysqli_query($conn, $sql)){
//            TAKE USER TO INDEX PAGE
            header('location:index.php');
            exit();
        }else{
            echo "Error:".mysqli_error($conn);
        }
}




?>

<form action="<? echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <fieldset>
        <h3>FILL FORM TO ENROLL</h3>

        <div class="form-row">

            <div class="form-group col-sm-5 col-md-5 col-lg-5 col-xl-5">
                <label>First Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="Enter First Name">
                <br>
                <label>Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name">
            </div>
            <div class="form-group col-sm-5 col-md-5 col-lg-5 col-xl-5">
                <label for="">Select Picture To Upload</label><br>
                <input type="file" name="uploadFile">

            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-sm-5 col-md-5 col-lg-5 col-xl-5">
                <label for="">Gender</label><br>
                <input type="radio" name="gender" value="male">
                <label for="">Male</label><br>
                <input type="radio" name="gender" value="female">
                <label for="">Female</label><br>
                <input type="radio" name="gender" value="other">
                <label for="">Other</label>
            </div>
            <div class="form-group col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <label>Age</label>
                <input type="number" class="form-control" name="age" placeholder="">
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-sm-5 col-md-5 col-lg-5 col-xl-5">
                <label>Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Your Email">
            </div>
            <div class="form-group col-sm-5 col-md-5 col-lg-5 col-xl-5">
                <label>Physical Address</label>
                <input type="text" class="form-control" name="address" placeholder="Enter Your Address">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-sm-5 col-md-5 col-lg-5 col-xl-5">
                <label>Level Of Education</label>
                <input type="text" class="form-control" name="education" placeholder="Enter Education Level">
            </div>
        </div>

        <div class="form-group col-sm-5 col-md-5 col-lg-5 col-xl-5">
            <label>Parent/Guardian</label>
            <input type="text" class="form-control" name="parent" placeholder="Enter Parent/ Guardian Name">
        </div>

        <div class="form-row">
            <div class="form-group col-sm-5 col-md-5 col-lg-5 col-xl-5">
                <label>Course</label>
                <select id="" class="form-control" name="course">
                    <option selected>Choose...</option>
                    <option>Data Science</option>
                    <option>Software Development</option>
                    <option>Cloud Computing</option>
                </select>
            </div>
            <div class="form-group col-sm-5 col-md-5 col-lg-5 col-xl-5">
                <label>Prefered Class</label><br>
                <input type="checkbox" name="class" value="morning">
                <label> Morning</label>
                <input type="checkbox" name="class" value="afternoon">
                <label for=""> Afternoon</label>
                <input type="checkbox" name="class" value="evening">
                <label for=""> Evening</label>
            </div>

        </div>
        <div class="form-group col-sm-8 col-md-8 col-lg-8 col-xl-8">
            <label for=""> Why Code Bora Academy</label><br>
        <textarea name="message" style="width:800px; height:200px;" placeholder="Enter Your Text Here">

        </textarea>
        </div>


        <button type="submit" name="btn_enroll" class="btn btn-primary btn-block">Enroll</button>

    </fieldset>
</form>


<?
require 'footer.php';
?>





