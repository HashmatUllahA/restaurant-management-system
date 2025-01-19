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

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcostsModel">
                            Add Costs
                        </button>
					</div>
                    <div class="container mt-6">
                        <div style="background-color: rgb(233, 221, 221);" class="body-card bg-gray   mt-2">
                            <h3 class="text-center text-black ">Costs of the Khyber Pinda Restaurant.</h3>
                            <p class="text-center text-black ">The following cost records of the Khyber Pinda Restaurant are provided.</p>

                        </div>
                    </div>
                    <div style="text-align: right;">
                        <input class="h-20" type="text" id="searchBox" placeholder="Search">Search Customer
                    </div>

                    <table id="customerTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Costs Datiels</th>
                                <th>Costs</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                         <tbody>
                            <?php if($costData->isEmpty()): ?>
                                <tr>
                                    <td colspan="5">No records available</td>
                                </tr>
                            <?php else: ?>
                                <?php $__currentLoopData = $costData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(\Carbon\Carbon::parse($data->created_at)->format(' F d, Y')); ?></td>
                                        <td><?php echo e(\Carbon\Carbon::parse($data->created_at)->format(' h:i A')); ?></td>
                                        <td><?php echo e($data->details); ?></td>
                                        <td><?php echo e($data->costmoney); ?></td>
                                        <td>

                                            <button class="btn btn-info btn-sm editbutton" data-id="<?php echo e($data->id); ?>" data-toggle="modal" data-target="#editexamtModel">Edit</button>
                                            <button class="btn btn-danger btn-sm deletebutton" data-id="<?php echo e($data->id); ?>">Delete</button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>




                    </div>
                      <!--add add on cash  Modal -->
                        <div class="modal fade" id="addcostsModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">

                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Add Costs</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form id="addcosts">
                                            <?php echo csrf_field(); ?>
                                            <div class="modal-body">
                                                <label for="">Enter the cost Details:</label>
                                                <input class="w-100 mb-3" type="text"  name="details" placeholder="Enter the cost Details here." required>
                                                <label for="">Enter the cost money:</label>
                                                <input class="w-100 mb-3" type="text" name="costmoney" placeholder="Enter the cost money here." required>
                                             </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Add Cost</button>
                                            </div>
                                        </form>

                                    </div>

                            </div>
                        </div>
                        <!-- The edit Customer   Modal -->
                            <div class="modal fade" id="editexamtModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit cost</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="updatecost">
                                            <?php echo csrf_field(); ?>
                                            <div class="modal-body">

                                                <input type="hidden" name="id" id="id">
                                                <label for="">Update the cost Details:</label>
                                                <input class="w-100 mb-3" type="text" name="details" id="details" required>
                                                <label for="">Update the cost money:</label>
                                                <input class="w-100 mb-3" type="text" name="costmoney" id="costmoney" required>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update cost</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>



			</div>
		</div>
		<!--end page wrapper -->
<script>
    //add customer
    $(document).ready(function() {
    $('#addcosts').submit(function(e) {
        e.preventDefault(); // Prevent the form from submitting normally

        // Serialize the form data
        var formData = $(this).serialize();

        // Send an AJAX POST request
        $.ajax({
            type: 'POST',
            url: '<?php echo e(route("submitcosts")); ?>',
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

<script>
    $(document).ready(function() {
    // Handle the Edit button click
    $('.editbutton').click(function() {
        var id = $(this).data('id');
        $("#id").val(id);

        var url = '/get-Exam-Detail/' + id;

        $.ajax({
            url: url,
            type: 'GET',
            success: function(response) {
                if (response) {
                    $('#details').val(response.details);
                    $('#costmoney').val(response.costmoney);
                } else {
                    alert("Some error occurred.");
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('An error occurred while fetching the data.');
            }
        });
    });

    // Handle form submission
    $('#updatecost').submit(function(event) {
        event.preventDefault(); // Prevent the default form submission

        var formData = $(this).serialize(); // Serialize form data

        $.ajax({
            url: '<?php echo e(route("updateCost")); ?>', // Update the URL to match your route
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    // Optionally, you can show a success message or perform any other action
                    // alert('Cost updated successfully!');
                    location.reload();

                    // Close the modal
                    $('#editexamtModel').modal('hide');
                } else {
                    alert('Failed to update cost.');
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('An error occurred while updating the cost.');
            }
        });
    });
});

</script>
<!-- JavaScript code to handle the delete button click -->
<script>
    $(document).ready(function() {
        // Handle the Delete button click
        $('.deletebutton').click(function() {
            var id = $(this).attr('data-id');

            if (confirm("Are you sure you want to delete this record?")) {
                $.ajax({
                    url: '/delete-monthly-record/' + id,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            // Optionally, you can show a success message or perform any other action
                            alert('Monthly record deleted successfully.');
                            location.reload();
                        } else {
                            alert('Failed to delete monthly record.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('An error occurred while deleting the monthly record.');
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
<?php /**PATH J:\kpr\resources\views/Admin/Costs/costsindex.blade.php ENDPATH**/ ?>