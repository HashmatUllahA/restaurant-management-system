<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> user contect us <?php $__env->endSlot(); ?>
     <?php $__env->slot('customwork', null, []); ?> 
        <div class="page-wrapper">
			<div class="page-content">

					<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                        <!-- Button trigger modal -->


					</div>
                    <div class="container mt-6">
                        <?php if(session('success')): ?>
                        <div class="con">
                            d
                            Contect is Deleted successfully.
                        </div>
                        <?php endif; ?>
                        <div style="background-color: rgb(233, 221, 221);" class="body-card bg-gray   mt-2">
                            <h3 class="text-center text-black ">This is a record of a user contacting us through the website.</h3>
                            <!-- <p class="text-center text-black ">The record below is from today.</p> -->

                        </div>
                    </div>
                    <div style="text-align: right;">
                        <input class="h-20" type="text" id="searchBox" placeholder="Search">Search contect
                    </div>

                    <table id="customerTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Time</th>
                                <th>Date</th>
                                <th> Name</th>
                                <th>Email</th>
                                <th>Mobile number</th>
                                <th>Subject</th>
                                <th>message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                         <tbody>
                            <?php if($usercontect->isEmpty()): ?>
                                <tr>
                                    <td colspan="5">No records available</td>
                                </tr>
                            <?php else: ?>
                                <?php $__currentLoopData = $usercontect; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($data->id); ?></td>
                                        <td><?php echo e(\Carbon\Carbon::parse($data->created_at)->format(' h:i A')); ?></td>
                                        <td><?php echo e(\Carbon\Carbon::parse($data->created_at)->format(' F d, Y')); ?></td>
                                        <td><?php echo e($data->name); ?></td>
                                        <td><?php echo e($data->email); ?></td>
                                        <td><?php echo e($data->phoneno); ?></td>
                                        <td><?php echo e($data->Subject); ?></td>
                                        <td><?php echo e($data->message); ?></td>
                                        <td>
                                            <form action="<?php echo e(route('delete.contect', ['id' => $data->id])); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                            <?php if(Session::has('new_contacts')): ?>
                                            <div class="new-contact-notification bg-danger text-white rounded-circle">
                                                <?php echo e($newContactCount); ?>

                                            </div>
                                        <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    </div>
			</div>
		</div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#searchBox').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            $('#customerTable tbody tr').filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
<script>
    // Clear the session flag after displaying the notification
    <?php if(Session::has('new_contacts')): ?>
        <?php echo e(Session::forget('new_contacts')); ?>

    <?php endif; ?>
</script>


     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH J:\kpr\resources\views/Admin/usercontect/seeUserContect.blade.php ENDPATH**/ ?>