<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= esc($title) ?></h1>
    <a href="<?= base_url() ?>/teacher/add_teacher_form" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Register a teacher</a>
</div>

<?php if (! empty($teacher) && is_array($teacher)): ?>
    <!-- DataTale -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All teachers</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr> 
                                <th>Name</th>
                                <th>Address</th>
                                <th>Birthday</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr> 
                                <th>Name</th>
                                <th>Address</th>
                                <th>Birthday</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
    <?php foreach ($teacher as $teacher_item): ?>
        <tr> 
            <td><?= esc($teacher_item['first_name']) ?> <?= esc($teacher_item['last_name']) ?></td>
            <td><?= esc($teacher_item['address']) ?></td>
            <td><?= esc($teacher_item['birthday']) ?></td>
            <td><a href="<?=base_url()?>/teacher/<?=esc($teacher_item['teacher_id'])?>">View</a></td>
            <td><a href="<?= base_url()?>/teacher/edit/<?=esc($teacher_item['teacher_id']) ?>">Edit</a></td>                                
        </tr>                            
    <?php endforeach ?>
    </tbody>
                    </table>
                </div>
            </div>
        </div>   

<?php else: ?>

    <h3>No teacher</h3>

    <p>Unable to find any teacher for you.</p>

<?php endif ?>
</div>




