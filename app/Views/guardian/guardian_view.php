  <!-- Begin Page Content -->
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-body">
    <h2>guardian Details</h2>
    <table class="table table-bordered" width="100%" cellspacing="0">
        <tr><td>Name</td><td> <?php
                    if(esc($guardian[0]['gender_id'])=='1'){
                        echo 'Mr.';
                    }
                    else{
                        echo 'Mrs./Miss.';
                    }
                ?>
                 <?= esc($guardian[0]['trustee_name'])?>  </td></tr>
        <tr><td>NIC Number</td><td><?=esc($guardian[0]['trustee_nic'])?></td></tr>
        <tr><td>Address </td><td><?=esc($guardian[0]['address'])?></td></tr>
        <tr>
            <td>Mobile Number </td><td><?=esc($guardian[0]['mobile-number'])?></td>
            <td>Work Place Phone Number </td><td><?=esc($guardian[0]['work_place_phone_number'])?></td>
            <td>Resident Phone Number </td><td><?=esc($guardian[0]['resident_phone_number'])?></td>
        </tr>
        <tr><td>Occupation</td>
           <td>
                 <?= esc($guardian[0]['occupation'])?> 
            </td>
        </tr> </table>
    </div>
    </div> 
</div>