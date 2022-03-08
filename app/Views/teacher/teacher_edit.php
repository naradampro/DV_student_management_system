<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Teacher Details</h1>
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form class="user" action="<?= base_url('teacher/update/'.$teacher['teacher_id']) ?>" method="post">
<?= csrf_field() ?>
    <!-- Name -->
    <label>
        <strong>Name</strong>
    </label><br>
    <div class="form-group row">
        <div class="col-sm-4 mb-4 mb-sm-0">
            <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name" value="<?=$teacher['first_name']?>">
        </div>
        <div class="col-sm-4 mb-4 mb-sm-0">
            <input type="text" class="form-control" id="middle_name" placeholder="Middle Name" name="middle_name" value="<?=$teacher['middle_name']?>">
        </div>
        <div class="col-sm-4 mb-4 mb-sm-0">
            <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name" value="<?=$teacher['last_name']?>">
        </div>
    </div>
    <hr>

    <div class="form-group row">
        <!-- NIC -->
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label>
                <strong>NIC</strong>
            </label><br>
            <input type="text" class="form-control" id="teacher_nic" placeholder="NIC" name="teacher_nic" value="<?=$teacher['teacher_nic']?>">
        </div>
        <!-- Contact Number -->
        <div class="col-sm-6">
            <label>
                <strong>Contact Number</strong> 
            </label><br>
            <input type="tel" class="form-control" id="contact_number" placeholder="Contact Number" name="contact_number" value="<?=$teacher['contact_number']?>">
        </div>
    </div>

    <!-- Address -->
    <div class="form-group"> 
        <label>
            <strong>Address</strong>
        </label><br>
        <input type="test" class="form-control" id="address" placeholder="Address" name="address" value="<?=$teacher['address']?>">
    </div>

    <div class="form-group row">
        <!-- Gender --> 
        <div class="col-sm-4 mb-4 mb-sm-0"> 
                <label><strong>Gender</strong></label><br>
                
                    <input type="radio" id="gender_male" name="gender_id" value="1" <?=$teacher['gender_id']=="1" ? "checked" : ""?>>
                    <label for="male"> MALE</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                
                
                    <input type="radio" id="gender_female" name="gender_id" value="2" <?=$teacher['gender_id']=="2" ? "checked" : ""?>>
                    <label for="female"> FEMALE</label>                
        </div> 
        <!-- Date Of Birth -->
        <div class="col-sm-4"> 
            
            <label>
                <strong>Date of Birth</strong>
            </label><br>
            <input type="date" class="form-control" id="birthday" name="birthday" value="<?=$teacher['birthday']?>">
        </div>
        <!-- Teacher Grade -->
        <div class="col-sm-4"> 
            <label>
                <strong>Teacher Grade</strong>
            </label><br>
            <div class="input-group mb-3">
                <select class="custom-select" id="teacher_grade_id" name="teacher_grade_id">
                    <?php foreach ($grades as $item): ?>
                    <option value="<?=$item["teacher_grade_id"]?>" <?=$item['teacher_grade_id'] == $item["teacher_grade_id"] ? "checked" : ""?>><?=$item["teacher_grade_name"]?></option>
                    <?php endforeach ?>
                </select> 
            </div>
        </div>
    </div>
    <hr>

    <input type="submit" name="submit"  class="btn btn-primary btn-block" value="Update Teacher" />
</form>
