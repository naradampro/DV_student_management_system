<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Add Teacher Form</h1>

<form class="user">
    <label><strong>Teacher</strong></label><br>
        <div class="form-group row">
            <div class="col-sm-4 mb-4 mb-sm-0">
                <input type="text" class="form-control" id="teacher_id" placeholder="Teacher Id" name="teacher_id">
            </div>
            <div class="col-sm-4 mb-4 mb-sm-0">
                <input type="text" class="form-control" id="teacher_number" placeholder="Teacher Number" name="teacher_number">
            </div>
            <div class="col-sm-4 mb-4 mb-sm-0">
                <input type="text" class="form-control" id="teacher_grade_id" placeholder="Teacher Grade Id" name="teacher_grade_id">
            </div>
        </div>
        <hr>
</form>

<form class="user">
    <label><strong>Teacher's Personal Details</strong></label><br>
        <div class="form-group row">
            <div class="col-sm-4 mb-4 mb-sm-0">
                <input type="text" class="form-control" id="teacher_name" placeholder="Teacher Name" name="teacher_name">
            </div>
            <div class="col-sm-4 mb-4 mb-sm-0">
                <input type="text" class="form-control" id="teacher_number" placeholder="Teacher Number" name="teacher_number">
            </div>
            <div class="col-sm-4 mb-4 mb-sm-0">
                <input type="text" class="form-control" id="teacher_grade_id" placeholder="Teacher Grade Id" name="teacher_grade_id">
            </div>
        </div>
        <hr>

        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <label><strong>Name</strong></label><br>
                <input type="text" class="form-control" id="teacher_name" placeholder="Name" name="teacher_name">
            </div>
            <div class="col-sm-6">
            <label><strong>NIC</strong> </label><br>
                <input type="text" class="form-control" id="nic" placeholder="NIC" name="nic">
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

         <hr>

         <div class="form-group"> 
            <label><strong>Address</strong></label><br>
                <input type="test" class="form-control" id="address" placeholder="Address" name="address">
        </div>
<hr>
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
            <br><br><br><br>
            <a href=".html" class="btn btn-primary btn-block">
            Add Teacher
        </a>
</form>
