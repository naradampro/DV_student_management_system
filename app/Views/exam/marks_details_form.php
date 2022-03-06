<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Marks Details Form</h1>

<form class="user">
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
        
        <!-- Class -->
        <div class="col-sm-4"> 
            <label>
                <strong>Class</strong>
            </label><br>
            <div class="input-group mb-3">
                <select class="custom-select" id="class_id" name="class_id">
                    <option selected>Choose Class</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
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
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
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
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>  
            </div>
        </div>
    </div>

    <input type="submit" name="submit"  class="btn btn-primary btn-block" value="Add Marks" />
</form>