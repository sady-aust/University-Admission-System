<?php
session_start();
include "DatabaseHandler.php";
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
    <meta http-equiv="refresh" content="url=upload.php">
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
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<!-- Brand/logo -->
			<a class="navbar-brand" href="#">University Admission System</a>


			<ul class="nav navbar-nav ml-auto">
				<li class="nav-item">
                    <form action="logout.php" method="post">
                        <input type="submit" class="btn btn-primary" value="Log Out"> </input>
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

           <h3 style="margin-top: 10px; margin-left:15px;">Upload</h3>

           <!-- Nav tabs -->
           <ul class="nav nav-tabs">
              <li class="nav-item">
                 <a class="nav-link active" data-toggle = "tab" href="#admissionresult">Admission Result</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" data-toggle= "tab" href="#notice">Notice</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" data-toggle= "tab" href="#admitcard">Admit Card</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" data-toggle= "tab" href="#file">File</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" data-toggle= "tab" href="#transection">Transection</a>
             </li>
         </ul>

         <!-- Tab panes -->
         <div class="tab-content">
          <div class="tab-pane active " id="admissionresult">
             <h3>Upload Admission Result</h3>

             <div >
                <form>
                   <table>
                      <tr>
                         <td>
                            <label>Unit</label>
                        </td>
                        <td>
                            <select class="form-control" name="University">
                               <option value="">Select</option>
                               <option value="Enginnering">Engineering</option>
                               <option value="Architecture">Architecture</option>

                           </select>
                       </td>
                       <td>

                       </td>
                       <td>
                        <input type="file" class="form-control" name="result">
                    </td>
                    <td>
                        <input type="submit" class="form-control btn-info" name="upload" value="Upload">
                    </td>
                </tr>

            </table>
        </form>
    </div>

    <div>
        <h3>File</h3>
        <table class="table-bordered table-striped" style="width: 100%; text-align: center;">
           <thead>
              <th>Uploaded By</th>
              <th>File</th>
              <th>Date</th>
              <th>Action</th>
          </thead>
          <tbody>
              <tr>
                 <td>Toufiq</td>
                 <td>sdsdfsd</td>
                 <td>15-1-18</td>
                 <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
        </tbody>

    </table>
</div>
</div>
<div class="tab-pane fade-in" id="notice">
 <h3>Upload Notice</h3>
 <div >
    <form>
       <table>
          <tr>
             <td>
                <input type="file" class="form-control" name="result">
            </td>
            <td>
                <input type="submit" class="form-control btn-info" name="upload" value="Upload">
            </td>
        </tr>

    </table>
</form>
</div>

<div>
    <h3>File</h3>
    <table class="table-bordered table-striped" style="width: 100%; text-align: center;">
       <thead>
          <th>Uploaded By</th>
          <th>File</th>
          <th>Date</th>
          <th>Action</th>
      </thead>
      <tbody>
          <tr>
             <td>Toufiq</td>
             <td>sdsdfsd</td>
             <td>15-1-18</td>
             <td>
                <button class="btn btn-danger">Delete</button>
            </td>
        </tr>
    </tbody>

</table>
</div>
</div>
<div class="tab-pane " id="admitcard">
 <h3>Upload Admit Card</h3>
</div>
<div class="tab-pane " id="file">
 <h3>Upload File</h3>
 <div >
    <form action="uploadfile.php" method="post" enctype="multipart/form-data">
       <table>
          <tr>
             <td>
                <input type="file" class="form-control" name="uploadedFile">
            </td>
            <td>
              <input type="text" placeholder="Any Coment?" name="comment" class="form-control">
            </td>

            <td>
                <input type="submit" class="form-control btn-info" name="upload" value="Upload">
            </td>
        </tr>

    </table>
</form>
</div>

<div >
    <h3 >File</h3>
    <hr></hr>

    <table class="table-bordered table-striped"style="text-align: center;width:100% ">
       <thead>
          <th>Uploaded By</th>
          <th>File</th>
          <th>Date</th>
          <th>Comment</th>
          <th>Action</th>
      </thead>
      <tbody>
         <?php
            /*
             *Fetching data From Upload Table
              For Showing In the Table.
            */


            $connection = createConnection();
            $SEARCHINGTYPE = "FILE";
            $SELECTQUERYFROMUPLOADTABLE = "SELECT ".$ADMINTABLENAME.".".$ADMINNAME.",".$DATE.",".$FILENAME.",".$COMMENT." FROM ".$UPLOADTABLENAME.
                                          " INNER JOIN ".$ADMINTABLENAME." ON ".$UPLOADTABLENAME.".".$ADMINID." = ".$ADMINTABLENAME.".".$ADMINID.
                                          " WHERE ".$UPLOADSECTION."='".$SEARCHINGTYPE."'";

         $result = mysqli_query($connection,$SELECTQUERYFROMUPLOADTABLE);
          if(mysqli_num_rows($result)>0){
              while ($row = mysqli_fetch_assoc($result)){?>
                  <tr>
                      <td>
                          <?php
                          echo $row[$ADMINNAME];
                          ?>
                      </td>
                      <td>
                          <?php
                          echo $row[$FILENAME];
                          ?>
                      </td>

                      <td>
                          <?php
                          echo $row[$DATE];
                          ?>
                      </td>
                      <td>
                          <?php
                          echo $row[$COMMENT];
                          ?>
                      </td>
                      <td>
                          <form action="">
                              <input type="submit" class="btn btn-danger" value="Delete">
                          </form>
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
<div class="tab-pane " id="transection">
 <h3>Upload Transection</h3>

</div>
</div>

</div>
</div>

</body>
</html>