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

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addnewcustomerModel">
                            Add New Customers
                        </button>
					</div>
                    <div class="container mt-6">
                        <div style="background-color: rgb(233, 221, 221);" class="body-card bg-gray   mt-2">
                            <h3 class="text-center text-black ">Monthly Miss Curd Recurd</h3>
                            <p class="text-center text-black ">The follwing  Monthly Miss Curd records for the customers are provided.</p>

                        </div>
                    </div>
                    <div style="text-align: right;">
                        <input class="h-20" type="text" id="searchBox" placeholder="Search">Search Customer
                    </div>

                    <table id="customerTable" class="table table-hover">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Moblie</th>
                            <th>Company Name</th>
                            <th>Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php if(empty($record)): ?>
                                    <tr>
                                        <td class="col-4">No records available</td>
                                    </tr>
                                <?php else: ?>
                                    <?php $__currentLoopData = $record; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($data->Customerid); ?></td>
                                            <td><?php echo e($data->Customername); ?></td>
                                            <td><?php echo e($data->Customermobile); ?></td>
                                            <td><?php echo e($data->CustomerComName); ?></td>
                                            <?php
                                            $completedMonths = isset($findmonth) ? $findmonth->where('customerid', $data->Customerid)->pluck('created_at')->map(function ($date) {
                                                return \Carbon\Carbon::parse($date)->format('Y-m');
                                            })->unique()->toArray() : [];

                                            $currentMonth = \Carbon\Carbon::now()->format('Y-m');
                                            $isMonthCompleted = in_array($currentMonth, $completedMonths);
                                            $numCompletedMonths = ($isMonthCompleted && count($completedMonths) > 0) ? count($completedMonths) - 1 : 0;
                                        ?>

                                        <?php if($isMonthCompleted): ?>
                                            <?php if($numCompletedMonths === 0): ?>
                                            <!-- Handle the case where only the current month is completed -->
                                            <?php else: ?>
                                            <span style="color: red;">Completed <?php echo e($numCompletedMonths); ?> months</span>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </td>
                                            <td><?php echo e(\Carbon\Carbon::parse($data->created_at)->format(' F d, Y')); ?></td>

                                            <td>
                                                <button class="btn btn-info btn-sm addfoodbutton" data-customerid="<?php echo e($data->Customerid); ?>" data-toggle="modal" data-target="#addfoodtModel">Add Food</button>
                                                <button class="btn btn-info btn-sm editbutton" data-id="<?php echo e($data->id); ?>" data-toggle="modal" data-target="#editexamtModel">Edit</button>
                                                <button class="btn btn-danger btn-sm deletebutton" data-id="<?php echo e($data->id); ?>">Delete</button>
                                                <a href="<?php echo e(route('getCustomerData', ['customerId' => $data->Customerid])); ?>">
                                                    <button class="btn btn-dark btn-sm" data-id="<?php echo e($data->id); ?>">View Customer</button>
                                                </a>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                                

                        </tbody>
                      </table>



                    </div>
                      <!--add monthly customer Modal -->
                        <div class="modal fade" id="addnewcustomerModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">

                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Add New Customer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form id="addmonthlyCustomer">
                                            <?php echo csrf_field(); ?>
                                            <div class="modal-body">
                                                <label for="">ID:</label>
                                                <input class="w-100 mb-3" type="text"  name="Customerid" placeholder="Enter Customer ID" required>
                                                <label for="">NAME:</label>
                                                <input class="w-100 mb-3" type="text" name="Customername" placeholder="Enter Customer Name" required>
                                                <label for="">MOBILE NO:</label>
                                                <input class="w-100 mb-3" type="text" name="Customermobile" placeholder="Enter Customer Mobile No" required>
                                                <label for="">COMPNAY NAME:</label>
                                                <input class="w-100 mb-3" type="text" name="CustomerComName" placeholder="Enter Customer Company Name" required>
                                                <label for="">BIDG NO:</label>
                                                <input class="w-100 mb-3" type="text" name="CustomerBidg" placeholder="Enter Customer Bidg No" required>
                                                <label for="">ROOM NO:</label>

                                                <input class="w-100 mb-3" type="text" name="CustomerRoomno" placeholder="Enter Customer Room No" required>
                                                <label for="">ADVANCE:</label>

                                                <input class="w-100 mb-3" type="text" name="CustomerAdvance" placeholder="Enter Customer Advance" required>
                                                <label for="">DATE:</label>
                                                <input class="w-100 mb-3" type="date" name="date" placeholder="Enter exam name" required>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Add Customer</button>
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
                                            <h5 class="modal-title" id="exampleModalLongTitle">Edit Customer Record</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form id="updateexam">
                                            <?php echo csrf_field(); ?>
                                            <div class="modal-body">
                                                <label for="">ID</label>
                                                <input type="text" name="Customerid" id="Customerid">
                                                <label for="">NAME</label>
                                                <input class="w-100 mb-3" type="text" name="Customername" id="Customername" required>
                                                <label for="">Mobile No:</label>
                                                <input class="w-100 mb-3" type="text" name="Customermobile" id="Customermobile" required>
                                                <label for="">COMPNAY NAME:</label>
                                                <input class="w-100 mb-3" type="text" name="CustomerComName" id="CustomerComName" required>
                                                <label for="">BIDG NO:</label>
                                                <input class="w-100 mb-3" type="text" name="CustomerBidg" id="CustomerBidg" required>
                                                <label for="">ROOM NO:</label>
                                                <input class="w-100 mb-3" type="text" name="CustomerRoomno" id="CustomerRoomno" required>
                                                <label for="">ADVANCE:</label>
                                                <input class="w-100 mb-3" type="text" name="CustomerAdvance" id="CustomerAdvance" required>
                                                <label for="">DATE:</label>
                                                <input class="w-100 mb-3" type="text" name="date" id="CustomerDate" required>
                                                <input class="w-100 mb-3" type="date" id="date" name="date"  required>
                                                <!-- Add other input fields -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update Customer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!--add food Modal -->
                            <div class="modal fade" id="addfoodtModel" tabindex="-1" role="dialog" aria-labelledby="addfoodtModelLabel" aria-hidden="true">
                                <form method="POST" action="<?php echo e(route ('addFood')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addfoodtModelLabel">Add Food</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="customerid" id="customer_id" value="">
                                                <select class="w-100" name="food" id="">
                                                    <option value="Breakfast">Breakfast</option>
                                                    <option value="Lunch">Lunch</option>
                                                    <option value="Dinner">Dinner</option>
                                                </select>
                                                <br><br>
                                                <label for="">Food Price</label>
                                                <input class="w-100 mb-3" type="text" name="foodprice" placeholder="Enter food price" required>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Add Food</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

			</div>
		</div>
		<!--end page wrapper -->
<script>
    //add customer
    $(document).ready(function() {
    $('#addmonthlyCustomer').submit(function(e) {
        e.preventDefault(); // Prevent the form from submitting normally

        // Serialize the form data
        var formData = $(this).serialize();

        // Send an AJAX POST request
        $.ajax({
            type: 'POST',
            url: '<?php echo e(route("monthlyCustomer")); ?>',
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
    $(document).ready(function() {
        $('.editbutton').click(function() {
            var id = $(this).attr('data-id');
            $("#Customerid").val(id);

            var url = '/get-Exam-Detail/' + id;

            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    if (response) {
                        $('#Customername').val(response.Customername);
                        $('#Customermobile').val(response.Customermobile);
                        $('#CustomerComName').val(response.CustomerComName);
                        $('#CustomerBidg').val(response.CustomerBidg);
                        $('#CustomerRoomno').val(response.CustomerRoomno);
                        $('#CustomerAdvance').val(response.CustomerAdvance);
                        $('#CustomerDate').val(response.date); // Updated ID of the input field
                        $('#date').val(response.date); // Add this line for the time input field
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
    });

    //update monthle record
    $(document).ready(function() {
    // ...

    // Handle form submission
    $('#updateexam').submit(function(event) {
        event.preventDefault(); // Prevent the default form submission

        var formData = $(this).serialize(); // Serialize form data

        $.ajax({
            url: '/updatemonthy', // Update the URL to match your route
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    // Optionally, you can show a success message or perform any other action
                    // alert('Data saved successfully!');
                    location.reload();

                    // Close the modal
                    $('#editexamtModel').modal('hide');
                } else {
                    alert('Failed to update customer.');
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('An error occurred while updating the customer.');
            }
        });
    });
});

$(document).ready(function() {
    // ...

    // Handle delete button click
    $('.deletebutton').click(function() {
        var id = $(this).attr('data-id');

        if (confirm("Are you sure you want to delete this record?")) {
            $.ajax({
                url: '/delete-monthly-record/' + id, // Update the URL to match your route
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        // Optionally, you can show a success message or perform any other action
                        // alert('Monthly record deleted successfully.');
                        location.reload();

                        // Optionally, you can remove the deleted record from the table
                        $(this).closest('tr').remove();
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

//add monthy food
$(document).ready(function() {
  $('.addfoodbutton').click(function() {
    var customerId = $(this).data('customerid');
    $('#customer_id').val(customerId);
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

     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH J:\kpr\resources\views/Admin/monthlyCustomer.blade.php ENDPATH**/ ?>