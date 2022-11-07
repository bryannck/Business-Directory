<?php
// Initialize the session
// session_start();
include_once ("../conn.php");
// if( $_SESSION["email"] !="")
// {

   if(isset($_POST["btn_insert"]))
   { 
      $name=$_POST["cat_name"];
      $desc=$_POST["cat_desc"];

      $sql_query ="insert into category values(0,'$name','$desc');";
      if($conn->query($sql_query))
      {
          echo '<script> alert("Record Added")</script>';
          header("location:category.php");
      }
      else 
      {
          echo $conn->error;
      }
          
    }


  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Arts Admin Panel</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<?php
include("Adminheader.php");
?>

<section class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h3 class="m-b-10">Add Category</h3>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="welcome.php"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="#!">Tables</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <form action="" method="post">
                            <div class="row">
                            <div class="col-xl-7">
                                <div class="form-group">
                                  <input type="text" class="form-control" name="cat_name" aria-describedby="helpId" placeholder="Enter Category Name">   
                                </div>

                                  <div class="form-group">
                                    <label for=""></label>
                                    <textarea class="form-control" name="cat_desc" rows="5" style="resize:none;" placeholder="Description"></textarea>
                                  </div>   
                                    <a class="btn btn-primary shadow-2 mb-4" href="category.php">Back</a>
                                  <button type="submit" class="btn btn-primary shadow-2 mb-4" name="btn_insert">Insert</button>
                            </div>
                            </form>
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

<?php

// }
// else
// {
//     header("location:login.php");
// }

?>
</body>
</html>