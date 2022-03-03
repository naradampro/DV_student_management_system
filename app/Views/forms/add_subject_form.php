<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Add Subject Form</h1>

<form class="user">
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <label><strong>Subject</strong></label><br>
                <input type="text" class="form-control" id="subject_name" placeholder="Subject Name" name="subject_name">
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
            <label><strong>Mediums</strong></label><br>
            <div class="input-group mb-3"> 
                  <div class="input-group-text">
                  Sinhala &nbsp&nbsp&nbsp&nbsp <input type="checkbox" aria-label="Checkbox for following text input" id="medium_id" name="medium" value="Sinhala" >
                  </div>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
                  <div class="input-group-text"> 
                  English &nbsp&nbsp&nbsp&nbsp <input type="checkbox" aria-label="Checkbox for following text input" id="medium_id" name="medium" value="English" >
                  </div>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
                  <div class="input-group-text"> 
                  Tamil &nbsp&nbsp&nbsp&nbsp <input type="checkbox" aria-label="Checkbox for following text input" id="medium_id" name="medium" value="Tamil" >
                  </div> 
            </div>
            </div>
        </div> 
        
        <input type="submit" name="submit"  class="btn btn-primary btn-block" value="Add Subject" />
</form>
</div>



