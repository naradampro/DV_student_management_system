<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Student Regitration Form</h1>

<form class="user">
    <label><strong>Student Name</strong></label><br>
        <div class="form-group row">
            <div class="col-sm-4 mb-4 mb-sm-0">
                <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name">
            </div>
            <div class="col-sm-4 mb-4 mb-sm-0">
                <input type="text" class="form-control" id="middle_name" placeholder="Middle Name" name="middle_name">
            </div>
            <div class="col-sm-4 mb-4 mb-sm-0">
                <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name">
            </div>
        </div>
        <hr>
        
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <label><strong>Student Addmission Number</strong></label><br>
                <input type="text" class="form-control" id="student_index_number" placeholder="Student Addmission Number" name="student_index_number">
            </div>
            <div class="col-sm-6">
            <label><strong>Date Of Addmission</strong> </label><br>
                <input type="date" class="form-control" id="date_of_addmission" placeholder="Date Of Addmission" name="date_of_addmission">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <label><strong>Student SURAKSHA Insurance Number</strong></label><br>
                <input type="text" class="form-control" id="student_insurance_number" placeholder="SURAKSHA Insurance Number" name="student_insurance_number">
            </div>
            <div class="col-sm-6">
            <label><strong>Student Identification Number</strong> </label><br>
                <input type="text" class="form-control" id="student_identification_number" placeholder="Student Identification Number" name="student_identification_number">
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <label><strong>Contact Number</strong></label><br>
                <input type="tel" class="form-control" id="contact_number" placeholder="Contact Number" name="contact_number">
            </div>
            <div class="col-sm-6">
            <label><strong>Date Of Birth</strong></label><br>
            <input type="date" class="form-control" id="birthday" name="birthday">
            </div>
        </div>
        <div class="form-group"> 
            <label><strong>Address</strong></label><br>
                <input type="test" class="form-control" id="address" placeholder="Address" name="address">
        </div> 
        <div class="form-group row"> 
            <div class="col-sm-4 mb-4 mb-sm-0"> 
                <label><strong>Gender</strong></label><br> 
                        <div class="input-group-text">
                         <input type="radio" id="gender_id" value="M" name="gender" class="col-sm-4 mb-4 mb-sm-0">
                         Male 
                         <input type="radio" id="gender_id" value="F" name="gender" class="col-sm-4 mb-4 mb-sm-0">
                         Female
                        </div> 
                     
            </div> 
            <div class="col-sm-4 mb-4 mb-sm-0"> 
                <label><strong>Race</strong></label><br>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="race_id" name="race_id">
                            <option selected>Choose Gender</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select> 
                    </div>
            </div>

            <div class="col-sm-4 mb-4 mb-sm-0"> 
                <label><strong>Religion</strong></label><br>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="religion_id" name="religion_id">
                            <option selected>Choose Religion</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select> 
                    </div>
            </div>
        </div>
        <div class="form-group row"> 
            <div class="col-sm-4 mb-4 mb-sm-0"> 
                <label><strong>Grama Niladhari Division</strong></label><br>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="gnd_id" name="gnd_id">
                            <option selected>Choose Grama Niladhari Division</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select> 
                    </div>
            </div>
            <div class="col-sm-4 mb-4 mb-sm-0"> 
                <label><strong>Class</strong></label><br>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="class_id" name="class_id">
                            <option selected>Choose Class</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select> 
                    </div>
            </div>
            <div class="col-sm-4 mb-4 mb-sm-0"> 
                <label><strong>Medium</strong></label><br>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="medium_id" name="medium_id">
                            <option selected>Choose Medium</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select> 
                    </div>
            </div>
        </div>
        <a href="login.html" class="btn btn-primary btn-block">
            Register Student
        </a>
    </form>

</div>
<!-- /.container-fluid -->