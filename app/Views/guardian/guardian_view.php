  <!-- Begin Page Content -->
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-body">
    <h2>Guardian Details</h2>
    <table class="table table-bordered" width="100%" cellspacing="0">
    <tr><td>Student Addmission Number</td><td><?=esc($trustee['student_id'])?></td></tr>
    <tr><td>Relationship Type</td><td><?=esc($trustee['relationship_type_id'])?></td></tr>
        <tr><td>Name</td><td> <?php
                    if(esc($trustee['gender_id'])=='1'){
                        echo 'Mr.';
                    }
                    else{
                        echo 'Mrs./Miss.';
                    }
                ?>
                 <?= esc($trustee['trustee_name'])?>  </td></tr>
        <tr><td>NIC Number</td><td><?=esc($trustee['trustee_nic'])?></td></tr>
        <tr><td>Address </td><td><?=esc($trustee['address'])?></td></tr>
        <tr><td>Mobile Number </td><td><?=esc($trustee['mobile_number'])?></td></tr>
        <tr><td>Work Place Phone Number </td><td><?=esc($trustee['work_place_phone_number'])?></td></td>
        <tr><td>Resident Phone Number </td><td><?=esc($trustee['resident_phone_number'])?></td></tr>
        </tr>
        <tr><td>Occupation</td>
           <td>
                 <?= esc($trustee['occupation'])?> 
            </td>
        </tr> </table>
    </div>
    </div> 
</div>