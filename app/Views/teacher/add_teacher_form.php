<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Teacher Registration Form</h1>
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form class="user" action="/teacher/add_teacher_form" method="post">
<?= csrf_field() ?>
    <!-- Name -->
    <label>
        <strong>Name</strong>
    </label><br>
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
        <!-- NIC -->
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label>
                <strong>NIC</strong>
            </label><br>
            <input type="text" class="form-control" id="nic" placeholder="NIC" name="nic">
        </div>
        <!-- Contact Number -->
        <div class="col-sm-6">
            <label>
                <strong>Contact Number</strong> 
            </label><br>
            <input type="tel" class="form-control" id="contact_number" placeholder="Contact Number" name="contact_number">
        </div>
    </div>

    <!-- Address -->
    <div class="form-group"> 
        <label>
            <strong>Address</strong>
        </label><br>
        <input type="test" class="form-control" id="address" placeholder="Address" name="address">
    </div>

    <div class="form-group row">
        <!-- Gender --> 
        <div class="col-sm-4 mb-4 mb-sm-0"> 
                <label><strong>Gender</strong></label><br>
                
                    <input type="radio" id="gender_male" name="gender_id" value="1">
                    <label for="male"> MALE</label>                
                
                    <input type="radio" id="gender_female" name="gender_id" value="1">
                    <label for="female"> FEMALE</label>                
        </div> 
        <!-- Date Of Birth -->
        <div class="col-sm-4"> 
            <label>
                <strong>Date of Birth</strong>
            </label><br>
            <input type="date" class="form-control" id="birthday" name="birthday">
        </div>
        <!-- Teacher Grade -->
        <div class="col-sm-4"> 
            <label>
                <strong>Teacher Grade</strong>
            </label><br>
            <div class="input-group mb-3">
                <select class="custom-select" id="teacher_grade_id" name="teacher_grade_id">
                    <option selected>Choose Teacher Grade</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select> 
            </div>
        </div>
    </div>
    <hr>

    <input type="submit" name="submit"  class="btn btn-primary btn-block" value="Add Teacher" />
</form>
