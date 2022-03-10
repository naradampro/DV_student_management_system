 <!-- Begin Page Content -->
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-body">
    <h2>Class Details</h2>
    <table class="table table-bordered" width="100%" cellspacing="0">
        <tr><td>Class Name</td><td><?=esc($class[0]['class_name'])?></td></tr>
        <tr><td>Year</td><td><?=esc($class[0]['year'])?></td></tr>
        <tr><td>Number Of Students</td><td><?=esc($class[0]['number_of_students'])?></td></tr>
        <tr><td>Class Teacher</td>
           <td>
                <?php
                    if(esc($class[0]['gender_id'])=='1'){
                        echo 'Mr.';
                    }
                    else{
                        echo 'Mrs./Miss.';
                    }
                ?>
                 <?= esc($class[0]['first_name'])?>
                 <?= esc($class[0]['middle_name'])?>
                 <?= esc($class[0]['last_name'])?> 
            </td>
        </tr> 
    </table>
    </div>
    </div> 
</div>