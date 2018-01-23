<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <meta http-equiv="refresh" content="url=adminpannel.php">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Shrikhand' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  <style type="text/css">
  html,body {
    height: 100%;
  }
  .ag{
    color: green;
  }

</style>
</head>
<body>
	<div class=" h-100">
   <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">University Admission System</a>


    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item">
          <form action="logout.php" method="post">
              <input type="submit" class="btn btn-primary" value="Log Out"></input>
          </form>
     </li>
   </ul>
 </nav>

 <div class="row justify-content-center h-100">

  <div class="col-sm-2 hidden-md-down" id="sidebar">
    <div class="sidebar-header">
     <h5><i class="fa fa-user-circle  fa-2x ag" aria-hidden="true"></i>
      <small> Welcome </small><?php
      echo $_SESSION["adminName"];
      ?></h5>
      <hr>
    </div>
    <div class="sidebar-content">
     <ul class="sidebar-content-list">
      <li>
        <a href="adminpannel.php" class="active"><i class="fa fa-home" aria-hidden="true"></i>
        Overview</a>
      </li>
      <li>
       <a href="upload.php"><i class="fa fa-upload" aria-hidden="true"></i>
       Upload</a>
     </li>
     <li>
       <a href="adminprofile.php"><i class="fa fa-user" aria-hidden="true"></i>
       Profile</a>
     </li>

     <li>


       <a href="#"><i class="fa fa-cog" aria-hidden="true"></i>
       Settings</a>
     </li>

   </ul>
 </div>
</div>

<div class="col-sm-10" id="main-content">
 <div style="justify-content: center; margin-top: 40px; font-family: 'Shrikhand'; border: 1px solid black"  class="row">
  <h4 ><?php
       echo $_SESSION["adminName"]."'s Profile";
      ?></h4>
</div>
    <div style="border: 1px solid black; margin-top: 5px; padding: 30px;">
        <table >
            <tr>
                <td style="font-family: 'Arial Black'">Admin Id</td>
                <td></td>
                <td style="font-size: 25px;">
                    <?php echo $_SESSION["adminId"]?>
                </td>
            </tr>
            <tr>
                <td  style="font-family: 'Arial Black'"> Name </td>
                <td></td>
                <td style="font-size: 25px;">
                    <?php echo $_SESSION["adminName"]?>
                </td>
            </tr>
            <tr>
                <td  style="font-family: 'Arial Black'" > User Name </td>
                <td></td>
                <td style="font-size: 25px;">
                    <?php echo $_SESSION["username"]?>
                </td>
            </tr>
            <tr>
                <td  style="font-family: 'Arial Black'"> Email Address </td>
                <td></td>
                <td style="font-size: 25px;">
                    <?php echo $_SESSION["email"]?>
                </td>
            </tr>
        </table>
    </div>



</div>
</div>
</div>

</body>
</html>