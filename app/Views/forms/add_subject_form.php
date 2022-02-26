<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Add Subject Form</h1>

<form class="user">
    <label><strong>Subject</strong></label><br>
        <div class="form-group row">
            <div class="col-sm-4 mb-4 mb-sm-0">
                <input type="text" class="form-control" id="subject_id" placeholder="Subject Id" name="subject_id">
            </div>
            <div class="col-sm-4 mb-4 mb-sm-0">
                <input type="text" class="form-control" id="subject_category_id" placeholder="Subject Category Id" name="subject_category_id">
            </div>
            <div class="col-sm-4 mb-4 mb-sm-0">
                <input type="text" class="form-control" id="subject_name" placeholder="Subject Name" name="subject_name">
            </div>
        </div>
        <hr>
</form>

<form class="user">
    <label><strong>Subject Medium</strong></label><br>
        <div class="form-group row">
            <div class="col-sm-4 mb-4 mb-sm-0">
                <input type="text" class="form-control" id="medium_id" placeholder="Medium Id" name="medium_id">
            </div>
            <div class="col-sm-4 mb-4 mb-sm-0"> 
                    <div class="input-group mb-3">
                        <select class="custom-select" id="medium_id" name="medium_id">
                            <option selected>Choose Medium</option>
                            <option value="1">Sinhala</option>
                            <option value="2">English</option>
                            <option value="3">Tamil</option>
                        </select> 
                    </div>
            </div>
        <hr>
        <br><br><br>
        <a href=".html" class="btn btn-primary btn-block">
            Add Subject
        </a>
</form>



