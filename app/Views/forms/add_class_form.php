<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Add Class Form</h1>

<form class="user">
    <div class="form-group row">
        <!--Class Name-->
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label>
                <strong>Class Name</strong>
            </label><br>
            <input type="text" class="form-control" id="class_name" placeholder="Class Name" name="class_name">
        </div>
         <!--Teacher Name-->
        <div class="col-sm-6">
            <label>
                <strong>Teacher Name</strong> 
            </label><br>
            <div class="input-group mb-3">
                <select class="custom-select" id="teacher_id" name="teacher_id">
                    <option selected>Choose Teacher</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
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
            <input type="text" class="form-control" id="number_of_students" placeholder="Number Of Students" name="number_of_students">
        </div>  
        <!--Year-->
        <div class="col-sm-6">
            <label>
                <strong>Year</strong> 
            </label><br>
            <input type="date" class="form-control" id="year" name="year">
        </div>
    </div>

    <input type="submit" name="submit"  class="btn btn-primary btn-block" value="Add Class" />
</form>



