<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> Monthly customers <?php $__env->endSlot(); ?>
     <?php $__env->slot('customwork', null, []); ?> 
        <div class="page-wrapper">
			<div class="page-content">

					<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                        <!-- Button trigger modal -->

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addmenuModel">
                            Add menu
                        </button>
					</div>
                    <div class="container mt-6">
                        <div style="background-color: rgb(233, 221, 221);" class="body-card bg-gray   mt-2">
                            <h3 class="text-center text-black ">Update the homepage menu for website users.</h3>
                            <!-- <p class="text-center text-black ">The follwing given  Record user Home page Menu.</p> -->
                            <!-- <p class="text-center text-black ">Note: Don't Upload more the 6 menus.</p> -->

                        </div>
                    </div>
                    <div style="text-align: right;">
                        <input class="h-20" type="text" id="searchBox" placeholder="Search">Search Menu
                    </div>

                    <table id="customerTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Food Name</th>
                                
                                <th>Food Price</th>
                                <th>explanation</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                         <tbody>
                            <?php if($datamenu->isEmpty()): ?>
                                <tr>
                                    <td colspan="5">No records available</td>
                                </tr>
                            <?php else: ?>
                                <?php $__currentLoopData = $datamenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(\Carbon\Carbon::parse($data->created_at)->format(' F d, Y')); ?></td>
                                        <td><?php echo e($data->foodname); ?></td>
                                        <td><?php echo e($data->explanation); ?></td>
                                        <td><?php echo e($data->foodprice); ?></td>
                                        <td>

                                            <button class="btn btn-danger btn-sm deletebutton" data-id="<?php echo e($data->id); ?>">Delete</button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>




                    </div>
                      <!--add add on cash  Modal -->
                        <div class="modal fade" id="addmenuModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">

                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Add Menu</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form id="addmenu">
                                            <?php echo csrf_field(); ?>
                                            <div class="modal-body">
                                                <label for="">Enter the name Food:</label>
                                                <input class="w-100 mb-3" type="text"  name="foodname" placeholder="Enter the cost Details here." required>
                                                <label for="">Food Expinations:</label>
                                                <input class="w-100 mb-3" type="text" name="foodprice" placeholder="Enter the cost money here." required>
                                                <label for="">Food Price:</label>
                                                <input class="w-100 mb-3" type="text" name="explanation" placeholder="Enter the cost money here." required>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Add Cost</button>
                                            </div>
                                        </form>

                                    </div>

                            </div>
                        </div>

			</div>
		</div>
		<!--end page wrapper -->
<script>
    //add menu
    $(document).ready(function() {
    $('#addmenu').submit(function(e) {
        e.preventDefault(); // Prevent the form from submitting normally

        // Serialize the form data
        var formData = $(this).serialize();

        // Send an AJAX POST request
        $.ajax({
            type: 'POST',
            url: '<?php echo e(route("submitmenu")); ?>',
            data: formData,
            success: function(response) {
                // Handle the successful response
                console.log(response); // Optional: Log the response for debugging
                location.reload(); // Reload the page
            },
            error: function(xhr, status, error) {
                // Handle the error response
                console.error(xhr.responseText);
                alert('An error occurred while saving the data.');
            }
        });
    });
});
</script>


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
<script>
    $(document).ready(function() {
        $('.deletebutton').click(function() {
            var id = $(this).attr('data-id');

            if (confirm("Are you sure you want to delete this record?")) {
                $.ajax({
                    url: '<?php echo e(route('deletemenuitem', ['id' => '__id__'])); ?>'.replace('__id__', id),

                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            alert('Record deleted successfully.');
                            location.reload();
                        } else {
                            alert('Failed to delete the record.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('An error occurred while deleting the record.');
                    }
                });
            }
        });
    });
</script>


     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH J:\kpr\resources\views/User/Homepage/curdUserHome.blade.php ENDPATH**/ ?>