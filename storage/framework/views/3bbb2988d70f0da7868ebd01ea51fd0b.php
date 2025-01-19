<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> gallery <?php $__env->endSlot(); ?>
     <?php $__env->slot('customwork', null, []); ?> 
        <div class="page-wrapper">
			<div class="page-content">

					<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                        <!-- Button trigger modal -->

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addourteamModel">
                            Add Picture
                        </button>
					</div>
                    <div class="container mt-6">
                        <div style="background-color: rgb(233, 221, 221);" class="body-card bg-gray   mt-2">
                            <h3 class="text-center text-black ">Update the gallery pictures.</h3>
                            <p class="text-center text-black ">The following records of the gallery pictures are provided.</p>

                        </div>
                    </div>
                    <div style="text-align: right;">
                        <input class="h-20" type="text" id="searchBox" placeholder="Search">Search our team
                    </div>
                    <hr>
                    <?php if($gallerydata->isEmpty()): ?>
                    <tr>
                        <td colspan="5">No records available</td>
                    </tr>
                <?php else: ?>
                <div class="row">
                <?php $__currentLoopData = $gallerydata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-2 mb-2">
        <div class="gallery-item position-relative">
            <form action="<?php echo e(route('deletegallery', ['id' => $data->id])); ?>" method="post" class="position-absolute top-0 end-0">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <button type="submit" class="ml-5"><i style="font-size:24px" class="fa ">&#xf014;</i></button>
            </form>
            <h5 style="color: brown" class="position-absolute top-3 start-3 ml-2 food-time"><?php echo e($data->foodtime); ?></h5>
            <a href="<?php echo e(asset('storage/' . $data->foodimage)); ?>" data-fancybox="gallery" data-caption="<?php echo e($data->foodtime); ?>">
                <img class="img-fluid food-image"
                     style="max-width: 200px; max-height: 200px; min-width: 200px; min-height: 200px;"
                     src="<?php echo e(asset('storage/' . $data->foodimage)); ?>"
                     alt="<?php echo e($data->foodtime); ?>">
            </a>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>


                    <?php endif; ?>

                    </div>
                      <!--add gallery picture  Modal -->
                        <div class="modal fade" id="addourteamModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">

                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Add Gallery picture</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form id="submitForm" enctype="multipart/form-data" action="<?php echo e(route('submitgallery')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <div class="modal-body">
                                                <label for="">Select Time*</label>
                                                <select class="w-100" name="foodtime" id="" required>
                                                    <option value="Breakfast">Breakfast</option>
                                                    <option value="Lunch">Lunch</option>
                                                    <option value="Dinner">Dinner</option>
                                                </select>

                                                <label for="">Select the food Picture:</label>
                                                <input class="w-100 mb-3" type="file" name="foodimage" required>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Add picture</button>
                                            </div>
                                        </form>

                                    </div>

                            </div>
                        </div>

			</div>
		</div>
		<!--end page wrapper -->



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

<!-- JavaScript code to handle the delete button click -->


     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH J:\kpr\resources\views/User/Homepage/curdGaGallery.blade.php ENDPATH**/ ?>