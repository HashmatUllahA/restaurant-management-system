<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> admin dishboard <?php $__env->endSlot(); ?>
     <?php $__env->slot('customwork', null, []); ?> 
        <div class="page-wrapper">
			<div class="page-content">
                
					<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
						<div class="col">
							<div class="card radius-10 bg-gradient-deepblue">
							 <div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">D.CUSTOMERS:<?php echo e($totalCashCustomerPrice); ?></h5>
									<div class="ms-auto">
                                        <i class='bx bx-money fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-2 bg-opacity-25 bg-white" style="height:4px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Direct Customers Today:</p>
									<p class="mb-0 ms-auto"><?php echo e($totalCustomersToday !== null ? $totalCustomersToday : 0); ?><span><i class='bx bx-up-arrow-alt'></i></span></p>
								</div>
							</div>
						  </div>
						</div>
						<div class="col">
							<div class="card radius-10 bg-gradient-ohhappiness">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">M.CUSTOMERS :<?php echo e($totalmisscusrdCustomerPrice); ?></h5>

									<div class="ms-auto">
                                        <i class='bx bx-money fs-3 text-white'></i>
									</div>

								</div>
								<div class="progress my-2 bg-opacity-25 bg-white" style="height:4px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Monthly Customers Today:</p>
									<p class="mb-0 ms-auto"><?php echo e($totalmonthlycustomerToday !== null ? $totalmonthlycustomerToday : 0); ?><span><i class='bx bx-up-arrow-alt'></i></span></p>
								</div>
							</div>
						  </div>
						</div>
						<div class="col">
							<div class="card radius-10 bg-gradient-ibiza">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">Total:<?php echo e($Total); ?></h5>
									<div class="ms-auto">
                                        <i class='bx bx-money fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-2 bg-opacity-25 bg-white" style="height:4px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Total Visitors today: </p>
									<p class="mb-0 ms-auto"><?php echo e($TotalVisitors); ?><span><i class='bx bx-up-arrow-alt'></i></span></p>
								</div>
							</div>
						</div>
						</div>

						<div class="col">
							<div class="card radius-10 bg-gradient-moonlit">
							 <div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">Total Cost: <?php echo e($totalCost); ?></h5>
									<div class="ms-auto">
                                        <i class='bx bx-money fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-2 bg-opacity-25 bg-white" style="height:4px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Cost Today:</p>
									<p class="mb-0 ms-auto"><?php echo e($totalCostToday); ?><span><i class='bx bx-up-arrow-alt'></i></span></p>
								</div>
							</div>
						 </div>
						</div>


                        




			</div>
		</div>
		<!--end page wrapper -->
        <table id="" class="table table-hover ml-3">
        <h5 class="ml-3">Total monthly customers we have: <?php echo e($customerCount); ?></h5>
            <div class="ml-3">
                <h5>Monthly miss curd Recurd of the customers.</h5>
               
            </div>

            <thead>
                <tr>
                    <th>Months</th>
                    <th>No of Customers:</th>
                    <th>INCOMES:</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $monthlycurdCustomersCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $monthly): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(\Carbon\Carbon::createFromFormat('m', $monthly->month)->format('Y-m')); ?></td>
                    <td><?php echo e($monthly->count); ?></td>
                    <td><?php echo e($monthly->totalFoodPrice); ?></td>
                    <td>
                        <a href="<?php echo e(route('viewMonthlycurd', ['year' => $currentYear, 'month' => $monthly->month])); ?>" class="btn btn-info">view</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>


        <table id="" class="table table-hover ml-3">
            <h5 class="ml-3">Monthly Recurd On cash customers</h5>
            <thead>
                <tr>
                    <th>Months</th>
                    <th>No of Customers:</th>
                    <th>INCOMES:</th>
                    <th>Action:</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $monthlyCustomersCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $monthly): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(\Carbon\Carbon::createFromFormat('m', $monthly->month)->format('Y-m')); ?></td>
                    <td><?php echo e($monthly->count); ?></td>
                    <td><?php echo e($monthly->totalFoodPrice); ?></td>
                    <td>
                        <a href="<?php echo e(route('viewMonthlycash', ['year' => $currentYear, 'month' => $monthly->month])); ?>" class="btn btn-info">view</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        </table>
        <table id="" class="table table-hover ml-3">
            <h5 class="ml-3">Monthly cost Record</h5>
            <thead>
                <tr>
                    <th>Months</th>
                    <th>No of Costs:</th>
                    <th>Total Costs:</th>
                    <th>Action:</th>
                </tr>
            </thead>
            <tbody>
                <!-- <h1>Year: <?php echo e($currentYear); ?></h1> -->

<!-- Loop through the monthly cost count -->
<?php $__currentLoopData = $monthlycostCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $monthly): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e(\Carbon\Carbon::createFromFormat('m', $monthly->month)->format('Y-m')); ?></td>
        <td><?php echo e($monthly->count); ?></td>
        <td><?php echo e($monthly->totalcostmoney); ?></td>
        <td>
            <a href="<?php echo e(route('viewMonthlyCosts', ['year' => $currentYear, 'month' => $monthly->month])); ?>" class="btn btn-info">view</a>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>

<script>
    function viewMonthlyCosts(year, month) {
        // Make an AJAX request to fetch records for the selected month
        axios.get(`/costs/month/${year}/${month}`)
            .then(function (response) {
                // Process the response and display records in the monthlyCostsContainer div
                let monthlyCosts = response.data.monthlyCosts;
                let html = '<ul>';
                monthlyCosts.forEach(function (cost) {
                    html += '<li>' + cost.details + ' - ' + cost.costmoney + '</li>';
                });
                html += '</ul>';

                document.getElementById('monthlyCostsContainer').innerHTML = html;
            })
            .catch(function (error) {
                console.error(error);
            });
    }
</script>



     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH J:\kpr\resources\views/Admin/AdminDishboard.blade.php ENDPATH**/ ?>