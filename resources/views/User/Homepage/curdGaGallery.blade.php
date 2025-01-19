<x-layout>
    <x-slot name="title">gallery</x-slot>
    <x-slot name="customwork">
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
                    @if ($gallerydata->isEmpty())
                    <tr>
                        <td colspan="5">No records available</td>
                    </tr>
                @else
                <div class="row">
                @foreach ($gallerydata as $data)
    <div class="col-md-2 mb-2">
        <div class="gallery-item position-relative">
            <form action="{{ route('deletegallery', ['id' => $data->id]) }}" method="post" class="position-absolute top-0 end-0">
                @csrf
                @method('delete')
                <button type="submit" class="ml-5"><i style="font-size:24px" class="fa ">&#xf014;</i></button>
            </form>
            <h5 style="color: brown" class="position-absolute top-3 start-3 ml-2 food-time">{{ $data->foodtime }}</h5>
            <a href="{{ asset('storage/' . $data->foodimage) }}" data-fancybox="gallery" data-caption="{{ $data->foodtime }}">
                <img class="img-fluid food-image"
                     style="max-width: 200px; max-height: 200px; min-width: 200px; min-height: 200px;"
                     src="{{ asset('storage/' . $data->foodimage) }}"
                     alt="{{ $data->foodtime }}">
            </a>
        </div>
    </div>
@endforeach

                </div>


                    @endif

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
                                        <form id="submitForm" enctype="multipart/form-data" action="{{ route('submitgallery') }}" method="POST">
                                            @csrf
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


    </x-slot>
</x-layout>
