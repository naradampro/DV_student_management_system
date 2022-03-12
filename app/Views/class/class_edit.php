<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Class Details</h1>
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form class="user" action="<?= base_url('class/update/'.$class['class_id']) ?>" method="post">
<?= csrf_field() ?>
    <div class="form-group row">
        <!--Class Name-->
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label>
                <strong>Class Name</strong>
            </label><br>
            <input type="text" class="form-control" id="class_name" placeholder="Class Name" name="class_name" value="<?=$class['class_name']?>">
        </div>
         <!--Teacher Name-->
        <div class="col-sm-6">
            <label>
                <strong>Teacher Name</strong> 
            </label><br>
            <div class="input-group mb-3">
                <select class="custom-select" id="teacher_id" name="teacher_id">
                    <?php foreach ($teachers_data as $item): ?>
                        <option value="<?=esc($item["teacher_id"])?>"><?=esc($item["first_name"])?> <?=esc($item["middle_name"])?> <?=esc($item["last_name"])?></option>
                    <?php endforeach ?>
                    
                </select> 
            </div>
        </div>
    </div>

    <div class="form-group row">
         <!--Number Of Students-->
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label>
                <strong>Number Of Students</strong>
            </label><br>
            <input type="text" class="form-control" id="number_of_students" placeholder="Number Of Students" name="number_of_students" value="<?=$class['number_of_students']?>">
        </div>  
        <!--Year-->
        <div class="col-sm-6">
            <label>
                <strong>Year</strong> 
            </label><br>
            <input type="date" class="form-control" id="year" name="year" value="<?=$class['year']?>">
        </div>
    </div>

    <input type="submit" name="submit"  class="btn btn-primary btn-block" value="Update Class" />
</form>



