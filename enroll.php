<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <title></title>
    <?php
    $connection = mysql_connect("localhost", "root", "abc"); // Establishing Connection with Server
    $db = mysql_select_db("course_portal", $connection); // Selecting Database from Server
    if(isset($_POST['studentSignUpbtn'])){
      $course = $_POST['course'];
      $email = $_POST['emailid'];
      $username = $_POST['username'];
      $phonenumber = $_POST['userphoneno'];
      $cllg = $_POST['cllgName'];
      if($course !=''||$email !=''){
        $query = mysql_query("insert into $course(email, name, phoneno, college) values ('$email','$username','$phonenumber','$cllg')");
        echo "<script type='text/javascript'>alert('submitted successfully !')</script>";
        //echo "<script type='text/javascript'>alert('you are ready to be logged in now.. !')</script>";
        //header("Location:studentLogInPage.php");
      }
      else{
        echo "<script type='text/javascript'>alert('failed!')</script>";
      }
      }

    mysql_close($connection); // Closing Connection with Server
    ?>
  </head>
  <body>
    <h1 class="text-info text-center">Enroll Your Self :</h1>
    <h1 class="text-info text-center">Fill Up The Form</h1><hr><hr>
    <form class="form-horizantal" role="form" action="" method="post">
      <div class="form-group">
        <label for="branch" class="col-sm-2 control-label">Course::</label>
        <div class="col-sm-10">
          <select name="course">
          <option value="web_dev_full_course">Web Development Full Course</option>
          <option value="web_dev_front_end">Web Development(Front End Development)</option>
          <option value="big_data">Big Data (data science)</option>
          <option value="android_dev">Android App Development</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email Id:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Enter Email Id" required>
        </div>
      </div>
      <div class="form-group">
        <label for="userName" class="col-sm-2 control-label">User Name:</label>
        <div class="col-sm-10">
          <input type="name" class="form-control" id="username" name="username" placeholder="Enter User Name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="userPhoneNo" class="col-sm-2 control-label">Phone Number:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="userphoneno" name="userphoneno" placeholder="Enter Phone Number" required>
        </div>
      </div>
      <div class="form-group">
        <label for="cllgName" class="col-sm-2 control-label">College/University Name:</label>
        <div class="col-sm-10">
          <input type="name" class="form-control" id="cllgName" name="cllgName" placeholder="Enter College/University Name" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-2">
          <input type="submit" class="btn btn-info btn-lg btn-lg" name="studentSignUpbtn" value="Sign Up>>">
        </div>
      </div>
    </form>
  </body>
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" ></script>
</html>
