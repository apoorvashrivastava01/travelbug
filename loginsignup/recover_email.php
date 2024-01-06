<?php 
session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php
session_start();

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Sign Up Travelbug</title>
  </head>
  <body style="background: linear-gradient(to right, #00467f, #a5cc82);">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<?php 
    include 'connection.php';
    if(isset($_POST['submit']))
    {
      $email = mysqli_real_escape_string($con, $_POST['email']);
      $emailquery = "select * from users where email='$email'";
      $query = mysqli_query($con, $emailquery);

      $emailcount = mysqli_num_rows($query);
      if($emailcount>0)
      {
        $subject = 'Email Activation';
        $body = "Hi, $username. Click here to activate your account http://localhost/"
      }
    
?>


    <!--  -->
    <div class="container mt-2">
      <div class="row justify-content-center align-items-center text-center" style="padding-top: 120px;">
        <div class="m-1 col-sm-8 col-md-6 col-lg-4 p-3 mb-5 bg-white rounded" style="background: linear-gradient(to right, #e96443, #904e95);box-shadow: 50px 4px 100px rgb(0 0 0 / 0.2);">
          <div class="pt-5 pb-5">
            <img class="rounded mx-auto d-block" src="https://freelogovector.net/wp-content/uploads/logo-images-13/microsoft-cortana-logo-vector-73233.png" alt="" width=70px height=70px>
            <p class="text-center text-uppercase mt-3 text-white">Forgot Password!</p>
            <form class="form text-center" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
              <div class="form-group input-group-md">
                <input type="email" class="form-control" aria-describedby="emailHelp" name="email" placeholder="Enter Email" required>
                <!--<div class="invalid-feedback">
                   Errors in email during form validation, also add .is-invalid class to the input fields
                </div> -->
              </div>
              <button class="btn btn-lg btn-block btn-primary mt-4" type="submit" name="submit">
                            Send Mail
              </button>
              <a href="login.php" class="float-left mt-2 text-white" >Login</a>
            </form>
          </div>
          
        </div>
      </div>
    </div>
    <!--  -->




  </body>
</html>