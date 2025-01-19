<x-layout>
    <x-slot name="title">our team</x-slot>
    <x-slot name="customwork">
        <div class="page-wrapper">
			<div class="page-content">

					<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                        <!-- Button trigger modal -->

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addourteamModel">
                            Add Team Member
                        </button>
                        <hr>
					</div>
                    <div class="container mt-6">
                        <div style="background-color: rgb(233, 221, 221);" class="body-card bg-gray   mt-2">
                            <h3 class="text-center text-black ">Our Team Members.</h3>
                            <!-- <p class="text-center text-black ">The follwing given  Record our team.</p> -->

                        </div>
                    </div>
                    <div style="text-align: right;">
                        <input class="h-20" type="text" id="searchBox" placeholder="Search">Search our team
                    </div>

                    <table id="customerTable" class="table table-hover">
                        <thead>
                            <tr>
                                {{-- <th>Date</th> --}}
                                <th>image</th>
                                <th>Name</th>
                                <th>exppartis</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                         <tbody>
                            @if ($dataOurteam->isEmpty())
                                <tr>
                                    <td colspan="5">No records available</td>
                                </tr>
                            @else
                            @foreach ($dataOurteam as $teamMember)
                                <tr>
                                    <td>
                                    <img style="width:30px;" src="{{ asset('storage/' . $teamMember->memberimage) }}" alt="{{ $teamMember->membername }}">
                                    <!-- <img src="{{ asset('storage/image/side-img-shoes.jpg') }}" alt="Shoes"> -->

                                    <!-- <img style="width:30px;" src="{{ Storage::url('ourteamimage/4c5PRrCBKoZGPJyj4uCllUcLhrxnSizy4VtKSb0H.jpg') }}" alt="location error">
                                    <img style="width:30px;" src="{{ asset('storage/public/ourteamimage/4c5PRrCBKoZGPJyj4uCllUcLhrxnSizy4VtKSb0H.jpg') }}" alt="location error"> -->

                                </td>
                                    
                                    <td>{{ $teamMember->membername }}</td>
                                    <td>{{ $teamMember->membersdes }}</td>
                                    <td>
                                        <form action="{{ route('deleteMember', ['id' => $teamMember->id]) }}" method="post">
                                            @csrf
                                            @method('delete')
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
                        <div class="modal fade" id="addourteamModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">

                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Add Team Member</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <form id="submitForm" enctype="multipart/form-data" action="{{ route('submitourteam') }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <label for="">Enter the name of team member:</label>
                                                <input class="w-100 mb-3" type="text" name="membername" placeholder="Enter the name of team member." required>
                                                <label for="">Enter the Expertise of the team Member :</label>
                                                <input class="w-100 mb-3" type="text" name="membersdes" placeholder="Enter the Expertise of the team Member." required>
                                                <label for="">Select the Image of team member:</label>
                                                <input class="w-100 mb-3" type="file" name="memberimage" required>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Add Team Member</button>
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
