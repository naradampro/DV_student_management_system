<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Exam Details Form</h1>
<?= session()->getFlashdata('error')?>
<?= service('validation')->listErrors()?>

<form class="user" action="/exam/exam_details_form" method="post">
    <?=csrf_field()?>
    <div class="form-group row">
        <!-- Term -->
        <div class="col-sm-4 mb-3 mb-sm-0">
            <label>
                <strong>Term</strong>
            </label><br>
            <div class="input-group mb-3">
                <select class="custom-select" id="term" name="term">
                    <option selected>Choose Term</option>
                    <option value="1">First Term</option>
                    <option value="2">Second Term</option>
                    <option value="3">Third Term</option>
                </select> 
            </div>
        </div>

        <!-- Year -->
        <div class="col-sm-4">
            <label>
                <strong>Year</strong> 
            </label><br>
            <input type="date" class="form-control" id="year" placeholder="Year" name="year">
        </div>

        <!-- Grade -->
        <div class="col-sm-4">
            <label>
                <strong>Grade</strong> 
            </label><br>
            <div class="input-group mb-3">
                <select class="custom-select" id="grade" name="grade">
                    <option selected>Grade</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                </select> 
            </div>
        </div>
    </div>
    <hr>

    <div class="form-group row">
        <!-- Subject -->
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label>
                <strong>Subject</strong> 
            </label><br>
            <div class="input-group mb-3">
                <select class="custom-select" id="subject_id" name="subject_id">
                    <option selected>Choose Subject</option> 
                    <?php foreach ($subject_data as $item): ?>
                        <option value="<?=esc($item["subject_id"])?>"><?=esc($item["subject_name"])?></option>
                    <?php endforeach ?>
                </select>  
            </div>
        </div>
          
        <!-- Medium -->
        <div class="col-sm-6">
            <label>
                <strong>Medium</strong> 
            </label><br>
            <div class="input-group mb-3">
                <select class="custom-select" id="medium_id" name="medium_id">
                    <option selected>Choose Medium</option>
                    <?php foreach ($medium_data as $item): ?>
                        <option value="<?=esc($item["medium_id"])?>"> <?=esc($item["medium_name"])?></option>
                    <?php endforeach ?>
                </select>  
            </div>
        </div>
    </div>

    <input type="submit" name="submit"  class="btn btn-primary btn-block" value="Add Exam Details" />
</form>