<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= esc($title) ?></h1>
    <a href="<?= base_url() ?>/exam/exam_details_form" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Add a Exam Details</a>
</div>

<?php if (! empty($exam) && is_array($exam)): ?>
    <!-- DataTale -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Exam details</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr> 
                                <th>Name</th>
                                <th>Address</th>
                                <th>Occupation</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr> 
                                <th>Name</th>
                                <th>Address</th>
                                <th>Occupation</th>
                            </tr>
                        </tfoot>
                        <tbody>
    <?php foreach ($exam as $exam_item): ?>
        <tr> 
            <td><?= esc($exam_item['trustee_name']) ?></td>
            <td><?= esc($exam_item['address']) ?></td>
            <td><?= esc($exam_item['occupation']) ?></td>                                
        </tr>                            
    <?php endforeach ?>
    </tbody>
                    </table>
                </div>
            </div>
        </div>   

<?php else: ?>

    <h3>No exams</h3>

    <p>Unable to find any exam details for you.</p>

<?php endif ?>
</div>




