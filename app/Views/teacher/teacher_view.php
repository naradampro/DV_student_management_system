
 <!-- Begin Page Content -->
 <div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-body">
    <h2>Teacher Details</h2>
    <table class="table table-bordered" width="100%" cellspacing="0">
    <tr><td>Full Name</td>
        <td>
           <?php
                    if(esc($teacher[0]['gender_status'])=='Male'){
                        echo 'Mr.';
                    }
                    else{
                        echo 'Mrs./Miss.';
                    }
                ?>
                 <?= esc($teacher[0]['first_name'])?>
                 <?= esc($teacher[0]['middle_name'])?>
                 <?= esc($teacher[0]['last_name'])?> 
    </tr></td>
    <tr><td>Teacher NIC number</td><td><?=esc($teacher[0]['teacher_nic'])?></td></tr>
    <tr><td>Teacher Grade</td><td><?=esc($teacher[0]['teacher_grade_name'])?></td></tr>
    <tr><td>Birthday</td><td><?=esc($teacher[0]['birthday'])?></td></tr>
    <tr><td>Contact Number</td><td><?=esc($teacher[0]['contact_number'])?></td></tr>
    <tr><td>Address</td><td><?=esc($teacher[0]['address'])?></td></tr>
    <tr><td>Teacher Grade ID</td><td><?=esc($teacher[0]['teacher_grade_id'])?></td></tr> 
    </table>
    </div>
    </div> 
</div>