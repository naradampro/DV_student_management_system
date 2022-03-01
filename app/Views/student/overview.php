<h2><?= esc($title) ?></h2>

<?php if (! empty($student) && is_array($student)): ?>

    <?php foreach ($student as $student_item): ?>

        <h3><?= esc($student_item['student_index_number']) ?></h3>

        <div class="main">
            <?= esc($student_item['first_name']) ?>
        </div>
         

    <?php endforeach ?>

<?php else: ?>

    <h3>No student</h3>

    <p>Unable to find any student for you.</p>

<?php endif ?>