<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> Monthly customers record <?php $__env->endSlot(); ?>
     <?php $__env->slot('customwork', null, []); ?> 

        <div class="page-wrapper">
            
                <tr>
                    

                <div class="d-flex">
                        <div class="">
                            <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $customerRow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($index == 0): ?>
                                    <button class="btn btn-info btn-sm addReceivedbutton ml-3" data-customerid="<?php echo e($customerRow->Customerid); ?>" data-toggle="modal" data-target="#addRecivedModel">Add Received Money</button>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="ml-3">
                            <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $customerRow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($index == 0): ?>
                                <form action="<?php echo e(route('delete-customer', $customerRow->Customerid)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-info btn-sm">Delete</button>
                                </form>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </tr>
            <div id="message"></div>

                <div class="page-content">

                    <button class="btn btn-info ml-3 float-end"><a href="<?php echo e(route('downloadPdf')); ?>">Download</a></button>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h1 class="text-center">Khyber pinda restorent</h1>
                                            <?php if($customer->count() > 0): ?>
                                                <div class="d-flex mt-3">
                                                    <p class="me-3"><strong>CURD NO:</strong> <?php echo e($customer->first()->Customerid); ?></p>
                                                    <p class="me-3"><strong>Name:</strong> <?php echo e($customer->first()->Customername); ?></p>
                                                    <p class="me-3"><strong>Mobile:</strong> <?php echo e($customer->first()->Customermobile); ?></p>
                                                </div>
                                                <div class="d-flex mt-3">
                                                    <p class="me-3"><strong>Company Name:</strong> <?php echo e($customer->first()->CustomerComName); ?></p>
                                                    <p class="me-3"><strong>Building Name:</strong> <?php echo e($customer->first()->CustomerBidg); ?></p>
                                                    <p class="me-3"><strong>Room No:</strong> <?php echo e($customer->first()->CustomerRoomno); ?></p>
                                                </div>
                                                
                                                <table id="" class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>DATE</th>
                                                            <th>TIME</th>
                                                            <th>Food</th>
                                                            <th>PRICE</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $totalFoodPrice = 0; // Initialize the total food price
                                                        ?>
                                                        
                                                        <?php
                                                        $completedMonths = $foodrecord->pluck('created_at')->map(function ($date) {
                                                            return \Carbon\Carbon::parse($date)->format('Y-m');
                                                        })->unique()->toArray();
                                                        $currentMonth = \Carbon\Carbon::now()->format('Y-m');
                                                        $isMonthCompleted = in_array($currentMonth, $completedMonths);
                                                        $numCompletedMonths = ($isMonthCompleted && count($completedMonths) > 0) ? count($completedMonths) - 1 : 0;
                                                    ?>

                                                    <?php if($isMonthCompleted): ?>
                                                        <?php if($numCompletedMonths === 0): ?>

                                                        <?php else: ?>
                                                            Completed <?php echo e($numCompletedMonths); ?> months
                                                        <?php endif; ?>
                                                    <?php endif; ?>



                                                        <?php $__currentLoopData = $foodrecord->unique('created_at'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php
                                                        $monthKey = \Carbon\Carbon::parse($row->created_at)->format('Y-m');
                                                    ?>

                                                    <?php if(!in_array($monthKey, $completedMonths) && \Carbon\Carbon::parse($row->created_at)->isSameMonth(Carbon\Carbon::now())): ?>
                                                        <?php
                                                            $completedMonths[] = $monthKey;
                                                        ?>
                                                        <?php echo e('Complete a month (' . \Carbon\Carbon::parse($row->created_at)->format('F Y') . ')'); ?>

                                                    <?php endif; ?>
                                                     
                                                        <tr>
                                                            <td>
                                                                <?php echo e(\Carbon\Carbon::parse($row->created_at)->format('l, F d, Y')); ?>


                                                            </td>
                                                            <td><?php echo e(\Carbon\Carbon::parse($row->created_at)->format('h:i A')); ?></td>
                                                            <td><?php echo e($row->food); ?></td>
                                                            <td><?php echo e($row->foodprice); ?></td>
                                                        </tr>
                                                            <?php
                                                                $totalFoodPrice += $row->foodprice; // Calculate the total food price for each unique created_at
                                                            ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        <tr>
                                                            <td colspan="3"><b>TOTAL</b></td>
                                                            <td><?php echo e($totalFoodPrice); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan=""><b>Advance</b></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td colspan=""><b><?php echo e($customer[0]->CustomerAdvance); ?></b></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan=""><b>TOTAL RECEIVED</b></td>
                                                            <td colspan=""><b>
                                                                <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($index == 0): ?>
                                                                    <button class="btn btn-info btn-sm DetailsReceivedbutton ml-3" data-customerid="<?php echo e($row->Customerid); ?>" data-toggle="modal" data-target="#DetailsReceivedModel">Details Received</button>
                                                                <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </b></td>
                                                            <td><?php
                                                                $totalrecived = 0; // Initialize the total received amount
                                                                ?>

                                                                <?php $__currentLoopData = $recordrecived; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php
                                                                    $totalrecived += $item->Received; // Calculate the total received amount for each unique created_at
                                                                    ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                <td><b><?php echo e($totalrecived); ?></b></td>
                                                                </td>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3"><b>Remaining</b></td>
                                                            <td><b><?php echo e($totalFoodPrice - $customer[0]->CustomerAdvance - $totalrecived); ?></b></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>

                                            <h1>month</h1>
                                        

                                        <?php else: ?>
                                            <p>You won't find the customer record until you add the food.</p>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            
        </div>

        <!-- start Recived modal ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <div class="modal fade" id="addRecivedModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Received Money</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="<?php echo e(route('ReceivedMoney')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="modal-body">
                            <label for="id">no</label>
                            <?php if($customer->first()): ?>
                                <input type="text" name="Customerid" id="Customerid" value="<?php echo e($customer->first()->Customerid); ?>">
                            <?php else: ?>
                                <!-- Handle the case when $customer is null or empty -->
                                <p>No customer found.</p>
                            <?php endif; ?>
                            <label for="Received">Received Money</label>
                            <input class="w-100 mb-3" type="text" name="Received" placeholder="Enter Customer Received Money" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Received</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- End Recived modal ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- start get data in the table Recived modal ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="modal fade" id="DetailsReceivedModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Received Money</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="<?php echo e(route('ReceivedMoney')); ?>">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <table id="" class="table table-hover">
                        <thead>
                          <tr>
                            <th>DATE</th>
                            <th>TIME</th>
                            <th>RECIVED</th>
                            <th></th>
                          </tr>
                        </thead>
                        <?php
                        $totalrecived = 0; // Initialize the total received amount
                    ?>
                        <?php if($recordrecived->count() > 0): ?>
                        <?php $__currentLoopData = $recordrecived; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(\Carbon\Carbon::parse($item->created_at)->format('l, F d, Y')); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($item->created_at)->format('h:i A')); ?></td>
                                <td colspan="2"><b><?php echo e($item->Received); ?></b></td>
                            </tr>
                    <?php
                    $totalrecived += $item->Received; // Calculate the total food price for each unique created_at
                ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4">No records found.</td>
                        </tr>
                    <?php endif; ?>

                    <tfoot>
                        <tr>
                            <td colspan="2"><b>TOTAL RECEIVED</b></td>
                            <td><?php echo e($totalrecived); ?></td>
                        </tr>
                    </tfoot>
                    </table>
                </div>

        </div>
    </div>
</div>

<!-- End get data in the table Recived modal ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <script>
            $(document).ready(function() {
                $('.addReceivedbutton').click(function() {
                    var customerId = $(this).data('Customerid');
                    $('#id').val(customerId);
                });
            });
        </script>
<!-- delete the data  by  customerid-->


     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH J:\kpr\resources\views/Admin/GetCustomerRecord.blade.php ENDPATH**/ ?>