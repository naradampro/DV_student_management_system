<!-- Begin Page Content -->
<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Guardian Details Form</h1>
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form class="user" action="/guardian/add_guardian_form" method="post">
<?= csrf_field() ?>
    <!-- Student Addmission Number -->
    <div class="form-group row">
    <div class="col-sm-6"></div> 
    <div class="col-sm-3">  </div>
        <div class="col-sm-3"> 
                 <input type="text" class="form-control" id="student_index_number" placeholder="Student Addmission Number" name="student_index_number">
        </div>
         
    </div>
    <hr>
    <!-- Name --> 
    <div class="form-group"> 
    <label>
        <strong>Name</strong>
    </label><br>
            <input type="text" class="form-control" id="trustee_name" placeholder="Name" name="trustee_name">  
    </div> 

    <div class="form-group row">
        <!-- NIC -->
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label>
                <strong>NIC</strong>
            </label><br>
            <input type="text" class="form-control" id="trustee_nic" placeholder="NIC" name="trustee_nic">
        </div>
        <!-- Contact Number -->
        <div class="col-sm-6">
            <label>
                <strong>Personal Mobile Number</strong> 
            </label><br>
            <input type="tel" class="form-control" id="mobile_number" placeholder="Personal Mobile Number" name="mobile_number">
        </div>
    </div>

    <div class="form-group row">
        <!-- Contact Number -->
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label>
                <strong>Work Place Phone Number</strong>
            </label><br>
            <input type="text" class="form-control" id="work_place_phone_number" placeholder="Work Place Phone Number" name="work_place_phone_number">
        </div>
        <!-- Contact Number -->
        <div class="col-sm-6">
            <label>
                <strong>Resident Phone Number</strong> 
            </label><br>
            <input type="tel" class="form-control" id="resident_phone_number" placeholder="Resident Phone Number" name="resident_phone_number">
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
        <div class="col-sm-6 mb-3 mb-sm-0"> 
                <label><strong>Gender</strong></label><br>
                &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <input type="radio" id="gender_male" name="gender_id" value="1">
                    <label for="male"> MALE</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                   
                
                    <input type="radio" id="gender_female" name="gender_id" value="2">
                    <label for="female"> FEMALE</label>                
        </div> 
        <!-- Occupation -->
        <div class="col-sm-6 mb-3 mb-sm-0"> 
            <label>
                <strong>Occupation</strong>
            </label><br>
            <input type="test" class="form-control" id="occupation" placeholder="Occupation" name="occupation">
        </div>
    </div>
    <hr>

    <input type="submit" name="submit"  class="btn btn-primary btn-block" value="Add Guardian" />
</form>
