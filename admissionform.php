<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="refresh" content="url=admissionform.php">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  <style media="">
  fieldset.fsStyle {
    border: 1px solid #999999;
    padding: 4px;
    margin: 5px;

}
  legend.legendStyle {
    font-size: 90%;
    color: #888888;
    background-color: transparent;
    font-weight: bold;
}

  legend {
    width: auto;
    border-bottom: 0px;
}

tr{
  align: center;
}
  </style>

  </head>

  <body>
  <div class="container">

    <div class="row">
    <div class="col-sm-12">

      <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Brand/logo -->
      <a class="navbar-brand" href="#">University Admission System</a>

      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Notice</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
      </ul>

    <ul class="nav navbar-nav ml-auto">
    <li class="nav-item">
      <a href="#" class="nav-link">
          Admin
        </span>
      </a>
    </li>
    </ul>
    </nav>
    </div>
    </div>

    <div class="formBorder" style="border:1px solid black;">
      <div class="row formheading">
        <div class="col-sm-12">
          <h5>Undergraduate Admission Application Form</h5>
          <p style="color:blue;">Star mark(*) indicates the required field</p>
        </div>
      </div>
      <div class="container">
        <fieldset class="fsStyle">
          <legend class= "legendStyle">General Information</legend>
          <div class="row">
            <div class="table-responsive col-sm-6">
        <table>
          <tr>
            <td>
              <label for="">Name*</label>
            </td>
            <td>
              <input type="text" class="form-control" name="" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Mother's Name*</label>
            </td>
            <td>
              <input type="text" class="form-control" name="" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Gender*</label>
            </td>
            <td>
            <select class="form-control">
              <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Phone No*</label>
            </td>
            <td>
              <input type="text" class="form-control" name="" value="">
            </td>
          </tr>
        </table>
      </div>
      <div class="table-responsive col-sm-6">
        <table>
          <tr>
            <td>
              <label for="">Date-Of-Birth*</label>
            </td>
            <td>
              <input type="date" class="form-control" name="" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Father's Name's*</label>
            </td>
            <td>
              <input type="text" class="form-control" name="" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Blood Group</label>
            </td>
            <td>
            <select class="form-control">
              <option value="O+">O(+)</option>
              <option value="O-">O(-)</option>
              <option value="AB+">AB(+)</option>
              <option value="AB-">AB(-)</option>
              <option value="B+">B(+)</option>
              <option value="B-">B(-)</option>
            </selected>
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Email</label>
            </td>
            <td>
              <input type="email" class="form-control" name="" value="">
            </td>
          </tr>
        </table>
      </div>
          </div>

          <fieldset class="fsStyle">
            <div class="row">
              <div class="table-responsive col-md-6">
                <table>
                  <tr>
                    <td>
                      <label for="">Are You Small <strong>Ethnic</strong></br><strong>Group</strong>/<strong>Tribal?</stron>*</label>
                    </td>
                    <td>
                      <select class="form-control">
                        <option value="">Select</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                      </selected>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="table-responsive col-md-6">
                <table>
                  <tr>
                    <td>
                      <label for="">Tribal District</label>
                    </td>
                    <td>
                      <select class="form-control">
                        <option value="">Select</option>
                      <option value="Chittagong">Chittagong</option>
                      <option value="Sylhet">Sylhet</option>
                      </selected>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </fieldset>
        </fieldset>

        <fieldset class="fsStyle">
          <legend class= "legendStyle">Address</legend>
          <h5 style="color:green;">Guardian Information</h5>
          <div class="row">

            <div class="table-responsive col-sm-6">
        <table>

          <tr>
            <td>
              <label for="">Guardian Name*</label>
            </td>
            <td>
              <input type="text" class="form-control" name="" value="">
            </td>
          </tr>
          <tr>

            <td>
              <label for="">Mobile*</label>
            </td>
            <td>
              <input type="text" class="form-control" name="" value="">
            </td>
          </tr>
        </table>
        <h5 style="color:green">Present Address</h5>
        <table>
          <tr>
            <td>
              <label for="">Division</label>
            </td>
            <td>
            <select class="form-control">
              <option value="">Select</option>
              <option value="">Dhaka</option>
              <option value="">Chittagong</option>
              <option value="">Rajshahi</option>
              <option value="">barishal</option>
              <option value="">Sylhet</option>
              <option value="">Rangpur</option>
            </selected>
            </td>
          </tr>
          <tr>
            <td>
              <label for="">District</label>
            </td>
            <td>
            <select class="form-control" name="">
              <option value="">Select</option>
              <option value="">Comilla</option>
              <option value="">Noakhali</option>
              <option value="">Bagura</option>
              <option value="">Chandpur</option>
              <option value="">Munshiganj</option>
              <option value="">Dhaka</option>
            </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Thana</label>
            </td>
            <td>
            <select class="form-control" name="">
              <option value="">Select</option>
              <option value="">Khilgaon</option>
              <option value="">Rampura</option>
              <option value="">Badda</option>
              <option value="">Tejgaon</option>
              <option value="">Dhanmondi</option>
              <option value="">Ramna</option>
            </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Address</label>
            </td>
            <td>
              <textarea name="name" class="form-control" rows="4" cols="40"></textarea>
            </td>
          </tr>
        </table>
      </div>
      <div class="table-responsive col-sm-6">
        <table>
          <tr>
            <td>
              <label for="">Relation*</label>
            </td>
            <td>
            <select class="form-control" name="">
              <option value="">Select</option>
              <option value="Father">Father</option>
              <option value="Mother">Mother</option>
              <option value="Brother">Brother</option>
              <option value="Sister">Sister</option>
              <option value="Uncle">Uncle</option>
              <option value="Aunt">Aunt</option>
            </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Email</label>
            </td>
            <td>
              <input type="email" class="form-control" name="" value="">
            </td>
          </tr>
        </table>
        <h5 style="color:green;">Parmanent Address</h5>

        <table>
          <tr>
          <td>
            <input type="checkbox" class="" name="" value="">
          </td>
          <td>
            <label for="" style="color:blue;">Same as Present Address?</label>
          </td>
          </tr>
          <tr>
            <td>
              <label for="">Division</label>
            </td>
            <td>
            <select class="form-control">
              <option value="">Select</option>
              <option value="">Dhaka</option>
              <option value="">Chittagong</option>
              <option value="">Rajshahi</option>
              <option value="">barishal</option>
              <option value="">Sylhet</option>
              <option value="">Rangpur</option>
            </selected>
            </td>
          </tr>
          <tr>
            <td>
              <label for="">District</label>
            </td>
            <td>
            <select class="form-control" name="">
              <option value="">Select</option>
              <option value="">Comilla</option>
              <option value="">Noakhali</option>
              <option value="">Bagura</option>
              <option value="">Chandpur</option>
              <option value="">Munshiganj</option>
              <option value="">Dhaka</option>
            </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Thana</label>
            </td>
            <td>
            <select class="form-control" name="">
              <option value="">Select</option>
              <option value="">Khilgaon</option>
              <option value="">Rampura</option>
              <option value="">Badda</option>
              <option value="">Tejgaon</option>
              <option value="">Dhanmondi</option>
              <option value="">Ramna</option>
            </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Address</label>
            </td>
            <td>
              <textarea name="name" class="form-control" rows="4" cols="40"></textarea>
            </td>
          </tr>

        </table>
      </div>
          </div>


        </fieldset>

        <fieldset class="fsStyle">
          <legend class= "legendStyle">Information For SSC Examination</legend>
          <div class="row">
            <div class="table-responsive col-sm-6">
        <table>
          <tr>
            <td>
              <label for="">Roll</label>
            </td>
            <td>
              <input type="text" class="form-control" name="" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Board</label>
            </td>
            <td>
              <select class="form-control" name="">
                <option value="">Dhaka</option>
                <option value="">Chittagong</option>
                <option value="">Rajshahi</option>
                <option value="">barishal</option>
                <option value="">Sylhet</option>
                <option value="">Rangpur</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Institute</label>
            </td>
            <td>
            <input type="text" class="form-control" name="" value="">
            </td>
          </tr>

        </table>
      </div>
      <div class="table-responsive col-sm-6">
        <table>
          <tr>
            <td>
              <label for="">Reg No(*)</label>
            </td>
            <td>
              <input type="text" class="form-control" name="" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Passing Year</label>
            </td>
            <td>
              <input type="text" class="form-control" name="" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="">GPA*</label>
            </td>
            <td>
              <input type="text" class="form-control" name="" value="">
            </td>
          </tr>

        </table>
      </div>
          </div>


        </fieldset>

        <fieldset class="fsStyle">
          <legend class= "legendStyle" style="color:blue;">Information For HSC Examination</legend>
          <div class="row">
            <div class="table-responsive col-sm-6">
        <table>
          <tr>
            <td>
              <label for="">Passing Year</label>
            </td>
            <td>
              <input type="text" class="form-control" name="" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Roll</label>
            </td>
            <td>
              <input type="text" class="form-control" name="" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Reg No *</label>
            </td>
            <td>
              <input type="text" class="form-control" name="" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Board</label>
            </td>
            <td>
              <select class="form-control" name="">
                <option value="">Dhaka</option>
                <option value="">Chittagong</option>
                <option value="">Rajshahi</option>
                <option value="">barishal</option>
                <option value="">Sylhet</option>
                <option value="">Rangpur</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="">GPA *</label>
            </td>
            <td>
            <input type="text" class="form-control" name="" value="">
            </td>
          </tr>

        </table>
      </div>
      <div class="table-responsive col-sm-6">
        <table class="table-success">
          <thead>
            <th>Subject</th>
            <th>GPA</th>
          </thead>
          <tr>
            <td>
              <label for="">Physics*</label>
            </td>
            <td>
              <input type="text" class="form-control" name="" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Chemistry*</label>
            </td>
            <td>
              <input type="text" class="form-control" name="" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Mathematics*</label>
            </td>
            <td>
              <input type="text" class="form-control" name="" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="">English*</label>
            </td>
            <td>
              <input type="text" class="form-control" name="" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="">Total</label>
            </td>
            <td>
              <input type="text" class="form-control" name="" value="">
            </td>
          </tr>

        </table>
      </div>
          </div>


        </fieldset>
        <fieldset class="fsStyle">
          <legend class= "legendStyle"><strong>Photo,Signature And Medium Of Question Paper</strong></legend>
          <div class="row">
            <div class="table-responsive col-sm-12">
        <table>
          <tr>
            <td>
              <label for="">(1) In which language you like to  get your question paper?</label>
            </td>
            <td>
            <select class="form-control" name="">
              <option value="">Select</option>
              <option value="Bangla">Bangla</option>
              <option value="Bangla">English</option>
            </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="">(2) The above Information is true and correct.I shall obey the rules and regulatioon of the university if i get admitted into this university</label>
            </td>
            <td>
              <input type="checkbox"  name="" value="">  <label for="">I Agree</label>

            </td>
            <td>

            </td>
          </tr>
          <tr>
            <td>
              <label for="">(3) Photo of the Cadidate</label>
            </td>
            <td>
          <input type="file" class="form-control" name="" value="">
            </td>
          </tr>
          <tr>
            <td>
              <label for="">(4) Signature of the Candidate</label>
            </td>
            <td>
              <input type="file" class="form-control" name="" value="">
            </td>
          </tr>
        </table>
      </div>

          </div>

          <div class="row">
            <div class="table-responsive col-md-6">

            </div>
            <div class="table-responsive col-md-6">
              <table>
                <tr>

                  <td>
                  <input type="submit" name="" class="btn btn-primary" value="Preview">
                  </td>
                  <td>
                    <input type="submit" name="" class="btn btn-primary" value="Cancel">
                  </td>
                </tr>
              </table>
            </div>
          </div>


        </fieldset>
      </div>
    </div>


<div class="row">
  <div class="container footer col-sm-12">
  <p class="text-muted">&copyRight AUST CSE3100 Project</p>
  </div>
</div>



</div>
  </body>
</html>