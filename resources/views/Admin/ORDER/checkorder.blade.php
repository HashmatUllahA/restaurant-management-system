<x-layout>
    <x-slot name="title">user contect us</x-slot>
    <x-slot name="customwork">
        <div class="page-wrapper">
			<div class="page-content">

					<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                        <!-- Button trigger modal -->


					</div>
                    <div class="container mt-6">

                        <div style="background-color: rgb(233, 221, 221);" class="body-card bg-gray   mt-2">
                            <h3 class="text-center text-black ">This record belongs to the customer who placed an order throung the website.</h3>
                            <!-- <p class="text-center text-black ">The record below is from today.</p> -->

                        </div>
                    </div>
                    <div style="text-align: right;">
                        <input class="h-20" type="text" id="searchBox" placeholder="Search">Search Order...
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
                                <th>Food Iteams</th>
                                <th>message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                         <tbody>
                            @if ($order->isEmpty())
                                <tr>
                                    <td colspan="5">No records available</td>
                                </tr>
                            @else
                                @foreach ($order as $data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{ \Carbon\Carbon::parse($data->created_at)->format(' h:i A') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($data->created_at)->format(' F d, Y') }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->mobilenumber }}</td>
                                        <td>{{ $data->address }}</td>
                                        <td>{{ $data->fooditeams }}</td>
                                        <td>{{ $data->message }}</td>
                                        <td>
                                            <form action="{{ route('delete.order', ['id' => $data->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                            {{-- @if(Session::has('new_contacts'))
                                                <div class="new-contact-notification bg-danger text-white rounded-circle">
                                                    {{ $newContactCount }}
                                                </div>
                                            @endif --}}
                                        </td>

                                    </tr>
                                @endforeach
                            @endif
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
    @if(Session::has('new_contacts'))
        {{ Session::forget('new_contacts') }}
    @endif
</script>


    </x-slot>
</x-layout>
