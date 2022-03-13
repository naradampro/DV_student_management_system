<!-- Begin Page Content --> 
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Student Details</h1>
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form class="user" action="<?= base_url('/student/update/'.$student['student_index_number']) ?>" method="post">
<?= csrf_field() ?>
<label><strong>Student Name</strong></label><br>
        <div class="form-group row">
            <div class="col-sm-12 mb-12 mb-sm-0">
                <input type="text" class="form-control" id="full_name_en" placeholder="Full name in English capitals." name="full_name_en" value="<?=$student['full_name_en']?>" oninput="this.value = this.value.toUpperCase()">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12 mb-12 mb-sm-0">
                <input type="text" class="form-control" id="full_name_sin" placeholder="සම්පුර්ණ නම සිංහලෙන් (Unicode)" name="full_name_sin" value="<?=$student['full_name_sin']?>">
            </div>
        </div>  
        <div class="form-group row">
            <div class="col-sm-4 mb-4 mb-sm-0">
                <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name" value="<?=$student['first_name']?>">
            </div>            
            <div class="col-sm-4 mb-4 mb-sm-0">
                <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name" value="<?=$student['last_name']?>">
            </div>
            <div class="col-sm-4 mb-4 mb-sm-0">
                <input type="text" class="form-control" id="name_with_initials" placeholder="Name with initials" name="name_with_initials" oninput="this.value = this.value.toUpperCase()">
            </div>
        </div>
        <hr>
        
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <label><strong>Student Addmission Number</strong></label><br>
                <input type="text" class="form-control" id="student_index_number" placeholder="Student Addmission Number" name="student_index_number" value="<?=$student['student_index_number']?>">
            </div>
            <div class="col-sm-6">
            <label><strong>Date Of Addmission</strong> </label><br>
                <input type="date" class="form-control" id="date_of_addmission" placeholder="Date Of Addmission" name="date_of_addmission" value="<?=$student['date_of_addmission']?>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <label><strong>Student SURAKSHA Insurance Number</strong></label><br>
                <input type="text" class="form-control" id="student_insurance_number" placeholder="SURAKSHA Insurance Number" name="student_insurance_number" value="<?=$student['student_insurance_number']?>">
            </div>
            <div class="col-sm-6">
            <label><strong>Student Identification Number</strong> </label><br>
                <input type="text" class="form-control" id="student_identification_number" placeholder="Student Identification Number" name="student_identification_number" value="<?=$student['student_identification_number']?>">
            </div>
        </div>
        <hr>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            </div>
            <div class="col-sm-6">
            <label><strong>Date Of Birth</strong></label><br>
            <input type="date" class="form-control" id="birthday" name="birthday" value="<?=$student['birthday']?>">
            </div>
        </div>
        <div class="form-group"> 
            <label><strong>Address</strong></label><br>
                <input type="test" class="form-control" id="address" placeholder="Address" name="address" value="<?=$student['address']?>">
        </div> 
        <div class="form-group row"> 
            <div class="col-sm-4 mb-4 mb-sm-0"> 
                <label><strong>Gender</strong></label><br>
                
                    <input type="radio" id="gender_male" name="gender_id" value="1" <?=$student['gender_id']=="1" ? "checked" : ""?>>
                    <label for="male"> MALE</label>                
                
                    <input type="radio" id="gender_female" name="gender_id" value="2" <?=$student['gender_id']=="2" ? "checked" : ""?>>
                    <label for="female"> FEMALE</label>                
            </div> 
            <div class="col-sm-4 mb-4 mb-sm-0"> 
                <label><strong>Race</strong></label><br>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="race_id" name="race_id">                        
                            <?php foreach ($race_data as $item): ?>
                            <option value="<?=esc($item["race_id"])?>" <?=$item['race_id'] == $item["race_id"] ? "checked" : ""?>><?=$item["race_name"]?></option>
                            <?php endforeach ?>
                        </select> 
                    </div>
            </div>

            <div class="col-sm-4 mb-4 mb-sm-0"> 
                <label><strong>Religion</strong></label><br>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="religion_id" name="religion_id">
                            <?php foreach ($religion_data as $item): ?>
                            <option value="<?=esc($item["religion_id"])?>" <?=$item['religion_id'] == $item["religion_id"] ? "checked" : ""?>><?=$item["religion_name"]?></option>
                            <?php endforeach ?>
                        </select> 
                    </div>
            </div>
        </div>
        <div class="form-group row"> 
            <div class="col-sm-4 mb-4 mb-sm-0"> 
                <label><strong>Grama Niladhari Division</strong></label><br>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="gnd_id" name="gnd_id">
                            <?php foreach ($gnd_data as $item): ?>
                            <option value="<?=esc($item["gnd_id"])?>" <?=$item['gnd_id'] == $item["gnd_id"] ? "checked" : ""?>><?=$item["gnd_name"]?></option>
                            <?php endforeach ?>
                        </select> 
                    </div>
            </div>
            <div class="col-sm-4 mb-4 mb-sm-0"> 
                <label><strong>Class</strong></label><br>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="class_id" name="class_id">
                            <?php foreach ($class_data as $item): ?>
                            <option value="<?=esc($item["class_id"])?>" <?=$item['class_id'] == $item["class_id"] ? "checked" : ""?>><?=$item["class_name"]?></option>
                            <?php endforeach ?>
                        </select> 
                    </div>
            </div>
            <div class="col-sm-4 mb-4 mb-sm-0"> 
                <label><strong>Medium</strong></label><br>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="medium_id" name="medium_id">
                            <?php foreach ($medium_data as $item): ?>
                            <option value="<?=$item["medium_id"]?>" <?=$item['medium_id'] == $item["medium_id"] ? "checked" : ""?>><?=$item["medium_name"]?></option>
                            <?php endforeach ?>
                        </select> 
                    </div>
            </div>
        </div>
        <input type="submit" name="submit"  class="btn btn-primary btn-block" value="Update Student" />
         
    </form>

</div>
<!-- /.container-fluid -->