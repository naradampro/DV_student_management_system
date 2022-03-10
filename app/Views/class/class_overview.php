<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= esc($title) ?></h1>
    <a href="<?= base_url() ?>/class/add_class_form" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Add a class</a>
</div>

<?php if (! empty($class) && is_array($class)): ?>
    <!-- DataTale -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All classes</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Class Name</th>
                                <th>Year</th>
                                <th>Number Of Students</th>
                                <th>Class Teacher</th>
                                <th>Teacher Contact No.</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Class Name</th>
                                <th>Year</th>
                                <th>Number Of Students</th>
                                <th>Class Teacher</th>
                                <th>Teacher Contact No.</th>
                                <th>View</th>
                            </tr>
                        </tfoot>
                        <tbody>
    <?php foreach ($class as $class_item): ?>
        <tr>
            <td><?= esc($class_item['class_name']) ?></td>
            <td><?= esc($class_item['year']) ?></td>
            <td><?= esc($class_item['number_of_students']) ?></td>  
            <td>
                <?php
                    if(esc($class_item['gender_id'])=='1'){
                        echo 'Mr.';
                    }
                    else{
                        echo 'Mrs./Miss.';
                    }
                ?>
                <?= esc($class_item['first_name'])?>
                 <?= esc($class_item['middle_name'])?>
                 <?= esc($class_item['last_name'])?>
            </td>
            <td><?= esc($class_item['contact_number']) ?></td>  
            
            <td><a href="<?=base_url()?>/class/<?=esc($class_item['class_name'])?>">view</a></td>    
                                          
        </tr>                            
    <?php endforeach ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>   

<?php else: ?>

    <h3>No class</h3>

    <p>Unable to find any class for you.</p>

<?php endif ?>
</div>




