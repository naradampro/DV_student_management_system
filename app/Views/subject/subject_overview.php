<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= esc($title) ?></h1>
    <a href="<?= base_url() ?>/subject/add_subject_form" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Add a subject</a>
</div>

<?php if (! empty($subject) && is_array($subject)): ?>
    <!-- DataTale -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All subjects</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Subject Name</th>
                                <th>Medium</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Subject Name</th>
                                <th>Medium</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
    <?php foreach ($subject as $subject_item): ?>
        <tr>
            <td><?= esc($subject_item['subject_name']) ?></td>
            <td><?= esc($subject_item['medium_name']) ?></td>
            <td><a href="<?=base_url()?>/subject/<?=esc($subject_item['subject_id'])?>">View</a></td>
            <td><a href="<?= base_url()?>/subject/edit/<?=esc($subject_item['subject_id']) ?>">Edit</a></td>                            
        </tr>                            
    <?php endforeach ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>   

<?php else: ?>

    <h3>No subject</h3>

    <p>Unable to find any subject for you.</p>

<?php endif ?>
</div>