<?php
$allowed_leaves = 36;
$taken_leaves = 32;
$remaining_leaves = $allowed_leaves - $taken_leaves;
$extra_leaves = 0;

if ($taken_leaves > $allowed_leaves) {
    $extra_leaves = $taken_leaves - $allowed_leaves;
    $remaining_leaves = 0; // No remaining leaves if extra leaves are taken
}

?>

<h5>
    <i class="fa-solid fa-square-poll-horizontal text-primary"></i> Leaves
    Statics
</h5>
<div class="row  p-2  my-3">
    <div class="col-md-3 p-2">
        <div class="card border-success text-success statics">
            <div class="card-body d-flex justify-content-between align-items-center">
                <h5 class="card-title">Allowed Leaves</h5>
                <h2><?= $allowed_leaves;  ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-3 p-2">
        <div class="card border-warning text-warning statics">
            <div class="card-body d-flex justify-content-between align-items-center">
                <h5 class="card-title">Taken Leaves</h5>
                <h2><?= $taken_leaves;  ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-3 p-2">
        <div class="card border-primary text-primary statics">
            <div class="card-body d-flex justify-content-between align-items-center">
                <h5 class="card-title">Remaining Leaves</h5>
                <h2><?= $remaining_leaves;  ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-3 p-2">
        <div class="card border-danger text-danger statics">
            <div class="card-body d-flex justify-content-between align-items-center">
                <h5 class="card-title">Extra Leaves</h5>
                <h2><?= $extra_leaves;  ?></h2>
            </div>
        </div>
    </div>
</div>