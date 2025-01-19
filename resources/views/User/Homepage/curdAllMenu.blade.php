<x-layout>
    <x-slot name="title">Monthly customers</x-slot>
    <x-slot name="customwork">
        <div class="page-wrapper">
			<div class="page-content">

					<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                        <!-- Button trigger modal -->

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addallmenuModel">
                            Add menu
                        </button>
					</div>
                    <div class="container mt-6">
                        @if(session('success'))
                        <div class="alert alert-success mt-3">
                            Data submitted successfully.
                        </div>
                        @endif
                        <div style="background-color: rgb(233, 221, 221);" class="body-card bg-gray   mt-2">
                            <h3 class="text-center text-black ">Update the website user menu page.</h3>
                            <p class="text-center text-black ">The following records of the user menu page are provided.</p>

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
                                <th>explanation</th>
                                <th>Food Price</th>
                                <th>Meals</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                         <tbody>
                            @if ($allmenudata->isEmpty())
                                <tr>
                                    <td colspan="5">No records available</td>
                                </tr>
                            @else
                                @foreach ($allmenudata as $data)
                                    <tr>
                                        <td>{{ \Carbon\Carbon::parse($data->created_at)->format(' F d, Y') }}</td>
                                        <td>{{ $data->foodname }}</td>
                                        <td>{{ $data->explanation }}</td>
                                        <td>{{ $data->foodprice }}</td>
                                        <td>{{ $data->eatedtime }}</td>
                                        <td>
                                        <form action="{{ route('delete.food', ['id' => $data->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>




                    </div>
                      <!--add add on cash  Modal -->
                        <div class="modal fade" id="addallmenuModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">

                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Add Menu</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form method="POST" action="{{ route('storeallmenu') }}" id="addmenu">
                                            @csrf
                                            <div class="modal-body">
                                                <label for="">Enter the name of Food:</label>
                                                <input class="w-100 mb-3" type="text"  name="foodname" placeholder="Enter the name of Food." required>
                                                <label for="">Food Explanation:</label>
                                                <input class="w-100 mb-3" type="text" name="explanation" placeholder="Enter Food Explanation here." required>
                                                <label for="">Food Price:</label>
                                                <input class="w-100 mb-3" type="text" name="foodprice" placeholder="Enter the cost money here." required>
                                                <label for="">select Eating time of the  food:</label>
                                                <select name="eatedtime" id="">
                                                    <option value="Breakfast">Breakfast</option>
                                                    <option value="Lunch">Lunch</option>
                                                    <option value="Dinner">Dinner</option>
                                                </select>
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
                    url: '{{ route('deletemenuitem', ['id' => '__id__']) }}'.replace('__id__', id),

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


    </x-slot>
</x-layout>
