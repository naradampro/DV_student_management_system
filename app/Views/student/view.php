<!-- Begin Page Content -->
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-body">

    <table class="table table-bordered" width="100%" cellspacing="0">
        <tr><td>Student Index Number</td><td><?=esc($student[0]['student_index_number'])?></td></tr>
        <tr><td>Full name in English</td><td><?=esc($student[0]['full_name_en'])?></td></tr>
        <tr><td>සම්පුර්ණ නම සිංහලෙන්</td><td><?=esc($student[0]['full_name_sin'])?></td></tr>
        <tr><td>Name(First name and Last name)</td><td><?=esc($student[0]['first_name'])?> <?=esc($student[0]['last_name'])?></td></tr>
        <tr><td>Name With Initials</td><td><?=esc($student[0]['name_with_initials'])?></td></tr>
        <tr><td>Date of Addmission</td><td><?=esc($student[0]['date_of_addmission'])?></td></tr>
        <tr><td>Date of Birth</td><td><?=esc($student[0]['birthday'])?></td></tr>
        <tr><td>Gender</td><td><?=esc($student[0]['gender_status'])?></td></tr>
        <tr><td>Address</td><td><?=esc($student[0]['address'])?></td></tr>
        <tr><td>Age</td><td><?=esc($student[0]['age'])?></td></tr>
        <tr><td>Religion</td><td><?=esc($student[0]['religion_name'])?></td></tr>
        <tr><td>Race</td><td><?=esc($student[0]['race_name'])?></td></tr>
        <tr><td>Grama Niladhari Division</td><td><?=esc($student[0]['gnd_name'])?></td></tr>
        <tr><td>Medium</td><td><?=esc($student[0]['medium_name'])?></td></tr>
        <tr><td>Currently Studying class</td><td><?=esc($student[0]['class_name'])?></td></tr>
        <tr><td>'SURAKSHA' Insurance Number</td><td><?=esc($student[0]['student_insurance_number'])?></td></tr>
        <tr><td>Student Identification Number</td><td><?=esc($student[0]['student_identification_number'])?></td></tr>
        <tr><td>Current Status</td><td><?=esc($student[0]['student_status_name'])?></td></tr>
    </table>
    </div>
    </div> 
</div>
