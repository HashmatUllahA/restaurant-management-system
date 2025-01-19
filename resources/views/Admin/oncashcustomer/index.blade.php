<x-layout>
    <x-slot name="title">Monthly customers</x-slot>
    <x-slot name="customwork">
        <div class="page-wrapper">
			<div class="page-content">

					<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                        <!-- Button trigger modal -->

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcashModel">
                            Add Cash
                        </button>
					</div>
                    <div class="container mt-6">
                        <div style="background-color: rgb(233, 221, 221);" class="body-card bg-gray   mt-2">
                            <h3 class="text-center text-black ">On cash Recurd</h3>
                            <!-- <p class="text-center text-black ">The follwing given On cash Recurd for the Customers.</p> -->

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
                                <th>Food Name</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($customerRecordsToday->isEmpty())
                                <tr>
                                    <td colspan="5">No records available</td>
                                </tr>
                            @else
                                @foreach ($customerRecordsToday as $data)
                                    <tr>
                                        <td>{{ \Carbon\Carbon::parse($data->created_at)->format(' F d, Y') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($data->created_at)->format(' h:i A') }}</td>
                                        <td>{{ $data->foodname }}</td>
                                        <td>{{ $data->price }}</td>
                                        <td>
                                            <button class="btn btn-info btn-sm addfoodbutton" data-customerid="{{ $data->Customerid }}" data-toggle="modal" data-target="#addfoodtModel">Add Food</button>
                                            <button class="btn btn-info btn-sm editbutton" data-id="{{ $data->id }}" data-toggle="modal" data-target="#editexamtModel">Edit</button>
                                            <button class="btn btn-danger btn-sm deletebutton" data-id="{{ $data->id }}">Delete</button>
                                            <!-- {{-- <a href="{{ route('getCustomerData', ['customerId' => $data->Customerid]) }}"> --}}
                                                <button class="btn btn-dark btn-sm">View Customer</button>
                                            {{-- </a> --}} -->
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>




                    </div>
                      <!--add add on cash  Modal -->
                        <div class="modal fade" id="addcashModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">

                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Add Cash</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form id="addoncash">
                                            @csrf
                                            <div class="modal-body">
                                                <label for="">Food Name:</label>
                                                <input class="w-100 mb-3" type="text"  name="foodname" placeholder="Enter Food Name" required>
                                                <label for="">Food Price:</label>
                                                <input class="w-100 mb-3" type="text" name="price" placeholder="Enter Food Price" required>
                                             </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Add Cash</button>
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
                                            @csrf
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
                                <form method="POST" action="{{route ('addFood')}}">
                                    @csrf
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
    $('#addoncash').submit(function(e) {
        e.preventDefault(); // Prevent the form from submitting normally

        // Serialize the form data
        var formData = $(this).serialize();

        // Send an AJAX POST request
        $.ajax({
            type: 'POST',
            url: '{{ route("submitoncash") }}',
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

    </x-slot>
</x-layout>
