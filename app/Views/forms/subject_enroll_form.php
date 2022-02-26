<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Subject Enrollment Form</h1>

<form class="user">
<div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <label><strong>Subject ID</strong></label><br>
                <input type="text" class="form-control" id="subject_id" placeholder="Subject ID" name="subject_id">
            </div>
            <div class="col-sm-6">
            <label><strong>Subject Name</strong> </label><br>
                <input type="text" class="form-control" id="subject_name" placeholder="Subject Name" name="subject_name">
            </div>
        </div>
<hr>
        <label><strong>Subject Medium</strong></label><br>
        <div class="form-group row">
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
        <a href=".html" class="btn btn-primary btn-block">
            Add Subject
        </a>
    </form>

</div>
<!-- /.container-fluid -->