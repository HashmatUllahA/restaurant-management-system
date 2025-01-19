<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Include Bootstrap JavaScript (optional, needed for some features) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>monthy cost</title>
</head>
<body>

    <table id="" class="table table-hover">
        <h5 class="text-center">Monthly costs Records</h5>
        <thead>
            <tr>
                <th>DATE:</th>
                <th>DATIELS:</th>
                <th>COSTS:</th>
            </tr>
        </thead>
        <tbody>
            <h3 class="text-center">Records for <?php echo e($month); ?>-<?php echo e($year); ?></h3>
            <?php if($monthlyCosts->isEmpty()): ?>
                <p>No records found for this month.</p>
            <?php else: ?>
            <?php $__currentLoopData = $monthlyCosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cost): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($cost->created_at->format('d F ')); ?></td>

    <td><?php echo e($cost->details); ?></td>
    <td><?php echo e($cost->costmoney); ?></td>

</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
        </tbody>
        <tr>
            <th colspan="2">Total Cost</th>
            <td><?php echo e($totalCostMoney); ?></td>
        </tr>
    </table>
</body>
</html>
<?php /**PATH J:\kpr\resources\views/Admin/Costs/monthly_costs.blade.php ENDPATH**/ ?>