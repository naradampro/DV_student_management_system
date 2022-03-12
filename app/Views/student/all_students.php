<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= esc($title) ?></h1>  
</div>

<?php if (! empty($student) && is_array($student)): ?>
    <!-- DataTale -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All students</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Birthday</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Student ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Birthday</th>
                                <th>View</th>
                            </tr>
                        </tfoot>
                        <tbody>
    <?php foreach ($student as $student_item): ?>
        <tr>
            <td><?= esc($student_item['student_index_number']) ?></td>
            <td><?= esc($student_item['first_name']) ?> <?= esc($student_item['last_name']) ?></td>
            <td><?= esc($student_item['address']) ?></td>
            <td><?= esc($student_item['birthday']) ?></td>  
            <td><a href="<?=base_url()?>/student/<?=esc($student_item['student_index_number'])?>">view</a></td>                              
        </tr>                            
    <?php endforeach ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>   

<?php else: ?>

    <h3>No student</h3>

    <p>Unable to find any student for you.</p>

<?php endif ?>
</div>




