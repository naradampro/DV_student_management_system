<!-- Begin Page Content -->
<div class="container-fluid">

<div class="card shadow mb-4">
    <div class="card-body">

    <table class="table table-bordered" width="100%" cellspacing="0">
    <?php
        foreach ($student[0] as $key => $value) {
            echo "<tr><td>".$key."</td><td>".$value."</td></tr>";
        }
    ?>
    </table>
    </div>
    </div> 
</div>