<?php
session_start();
include "DatabseConnection.php";
//table Name
$UPLOADTABLENAME = "Upload";
$ADMINTABLENAME = "Admin";

//Column Name
$ADMINID = "AdminId";
$ADMINNAME = "Name";
$DATE = "UploadDate";
$FILENAME = "Filename";
$COMMENT = "Comment";
$UPLOADSECTION = "UploadSection"

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">

	<meta http-equiv="refresh" content="url=adminpannel.php">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
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
		 <nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
          <!-- Brand/logo -->
          <a class="navbar-brand" href="#">University Admission System</a>

  
          <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <form action="logout.php" method="post">
                    <input type="submit" class="btn btn-primary" value="Log Out">
                </form>

            </li>
          </ul>
        </nav>

  <div class="row justify-content-center h-100">

    <div class="col-sm-2 hidden-md-down" id="sidebar">
      <div class="sidebar-header">
      	<h5><i class="fa fa-user-circle  fa-2x ag" aria-hidden="true"></i><small> Welcome </small><?php
            echo $_SESSION["adminName"];
            ?></h5>
      	<hr>
      </div>
      <div class="sidebar-content">
      	<ul class="sidebar-content-list">
      		<li>
      		<a href="adminpannel.php" class="active"><i class="fa fa-home" aria-hidden="true"></i>Overview</a>
      		</li>
      		<li>
      			<a href="upload.php"><i class="fa fa-upload" aria-hidden="true"></i>Upload</a>
      		</li>
      		<li>
      			<a href="adminprofile.php"><i class="fa fa-user" aria-hidden="true"></i>Profile</a>
      		</li>
      		
      		<li>
               <a href="#"><i class="fa fa-cog" aria-hidden="true"></i>Settings</a>
      		</li>
      		
      	</ul>
      </div>
    </div>

    <div class="col-sm-10" id="main-content">
    	<div class="row">
    		<h4>Overview</h4>
    	</div>
      <div class="row">
      	<div class="col-sm-2 " style="">
      		<div class="totalapply">
      		<h4 style="color: white; text-align: center;">Total Apply</h4>
      		<h5 style="color: white; text-align: center;">354589</h5>
      		</div>
      	</div>
      	<div class="col-sm-2">
      		<div class="engineeringapply">
            <h4 style="text-align: center;"><i class="fa fa-users fa-2x" aria-hidden="true" style="color: white ;"></i>
</h4>
                  		<h4 style="color: white; text-align: center;">Engineering Applicant</h4>
      		<h5 style="color: white; text-align: center;">174589</h5>
      	</div>
      	</div>
        <div class="col-sm-2">
      		<div class="architectureapply">
      		<h4 style="color: white; text-align: center;">Architecture Applicant</h4>
      		<h5 style="color: white; text-align: center;">174526</h5>
      	</div>
      	</div>
      	<div class="col-sm-2">
      		<div class="pendinga">
      		<h4 style="color: white; text-align: center;">Pending</h4>
      		<h5 style="color: white; text-align: center;">17</h5>
      	</div>
      	</div>
      	
        <div class="col-sm-2">
          <div class="pendinga">
          <h4 style="color: white; text-align: center;">Pending</h4>
          <h5 style="color: white; text-align: center;">17</h5>
        </div>
        </div>
      </div>
      <div class="row">
      	<h4 style="margin-top: 15px; margin-bottom: 15px;">Feeds</h4>
      </div>
      <div class="row">
      	<table class="table table-striped table-bordered" style="text-align: center">
      		<thead>
      			<th>Event</th>
      			<th>Time/Date</th>
      		</thead>
      		<tbody>
      			<?php

                $connection = createConnection();

                $SELECTQUERYFROMUPLOADTABLE = "SELECT ".$ADMINTABLENAME.".".$ADMINNAME.",".$DATE.",".$FILENAME.",".$COMMENT." FROM ".$UPLOADTABLENAME.
                    " INNER JOIN ".$ADMINTABLENAME." ON ".$UPLOADTABLENAME.".".$ADMINID." = ".$ADMINTABLENAME.".".$ADMINID;

                $result = mysqli_query($connection,$SELECTQUERYFROMUPLOADTABLE);
               if(mysqli_num_rows($result)>0){
                   while ($row = mysqli_fetch_assoc($result)){
                       ?>

                       <tr>
                           <td>
                               <?php
                                    echo $row[$ADMINNAME]." Uploaded ".$row[$FILENAME];
                               ?>
                           </td>
                           <td>
                               <?php
                               echo $row[$DATE];
                               ?>
                           </td>
                       </tr>

                       <?php
                   }
               }
                ?>
      		</tbody>
      	</table>
      </div>
    </div>
  </div>
</div>

</body>
</html>