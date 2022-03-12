<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Subject Details</h1>
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>

<form class="user" action="<?= base_url('subject/update/'.$subject['subject_id']) ?>" method="post">
<?= csrf_field() ?>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label>
                <strong>Subject</strong>
            </label><br>
            <input type="text" class="form-control" id="subject_name" placeholder="Subject Name" name="subject_name" value="<?=$subject['subject_name']?>">
        </div>
        
        <div class="col-sm-6 mb-3 mb-sm-0">
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
        
    <input type="submit" name="submit"  class="btn btn-primary btn-block" value="Update Subject" />
</form>
</div>



