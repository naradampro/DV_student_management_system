<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Exam Details Form</h1>

<form class="user">
<div class="form-group row">
            <div class="col-sm-4 mb-3 mb-sm-0">
            <label><strong>Term</strong></label><br>
                <input type="text" class="form-control" id="term" placeholder="Term" name="term">
            </div>
            <div class="col-sm-4">
            <label><strong>Year</strong> </label><br>
                <input type="text" class="form-control" id="year" placeholder="Year" name="year">
            </div>
            <div class="col-sm-4">
            <label><strong>Grade</strong> </label><br>
            <div class="input-group mb-3">
                        <select class="custom-select" id="medium_id" name="medium_id">
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
                            <option value="12">12</option>
                            <option value="13">13</option>
                        </select> 
                    </div>
            </div>
        </div>
<hr>

<div class="form-group row">
            <div class="col-sm-4 mb-3 mb-sm-0">
            <label><strong>Subject Name</strong></label><br>
                <input type="text" class="form-control" id="subject_name" placeholder="Subject" name="subject_name">
            </div>
            <div class="col-sm-4">
            <label><strong>Medium</strong> </label><br>
            <div class="input-group mb-3">
                        <select class="custom-select" id="medium_id" name="medium_id">
                            <option selected>Choose Medium</option>
                            <option value="1">Sinhala</option>
                            <option value="2">English</option>
                            <option value="3">Tamil</option>
                        </select> 
                    </div>
            </div>
        </div>

        <a href=".html" class="btn btn-primary btn-block">
            Add Exam Details
        </a>
</form>