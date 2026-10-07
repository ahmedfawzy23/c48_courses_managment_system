<?php
$errors = $session->pullFlash('errors');
foreach ($errors as $error): ?>
    <div class="alert alert-danger">
        <?= $error  ?>
    </div>
<?php endforeach; ?>
<?php
$success = $session->pullFlash('success');
foreach ($success as $s): ?>
    <div class="alert alert-success">
        <?= $s  ?>
    </div>
<?php endforeach; ?>