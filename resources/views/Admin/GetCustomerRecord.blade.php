<x-layout>
    <x-slot name="title">Monthly customers record</x-slot>
    <x-slot name="customwork">

        <div class="page-wrapper">
            {{-- @foreach($customer->unique('created_at') as $row) --}}
                <tr>
                    {{-- <td class="text-center">{{ \Carbon\Carbon::parse($customer->created_at)->format(' F d, Y') }}</td> --}}

                <div class="d-flex">
                        <div class="">
                            @foreach ($customer as $index => $customerRow)
                                @if ($index == 0)
                                    <button class="btn btn-info btn-sm addReceivedbutton ml-3" data-customerid="{{$customerRow->Customerid}}" data-toggle="modal" data-target="#addRecivedModel">Add Received Money</button>
                                @endif
                            @endforeach
                        </div>
                        <div class="ml-3">
                            @foreach ($customer as $index => $customerRow)
                                @if ($index == 0)
                                <form action="{{ route('delete-customer', $customerRow->Customerid) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-info btn-sm">Delete</button>
                                </form>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </tr>
            <div id="message"></div>

                <div class="page-content">

                    <button class="btn btn-info ml-3 float-end"><a href="{{ route('downloadPdf') }}">Download</a></button>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h1 class="text-center">Khyber pinda restorent</h1>
                                            @if ($customer->count() > 0)
                                                <div class="d-flex mt-3">
                                                    <p class="me-3"><strong>CURD NO:</strong> {{ $customer->first()->Customerid }}</p>
                                                    <p class="me-3"><strong>Name:</strong> {{ $customer->first()->Customername }}</p>
                                                    <p class="me-3"><strong>Mobile:</strong> {{ $customer->first()->Customermobile }}</p>
                                                </div>
                                                <div class="d-flex mt-3">
                                                    <p class="me-3"><strong>Company Name:</strong> {{ $customer->first()->CustomerComName }}</p>
                                                    <p class="me-3"><strong>Building Name:</strong> {{ $customer->first()->CustomerBidg }}</p>
                                                    <p class="me-3"><strong>Room No:</strong> {{ $customer->first()->CustomerRoomno }}</p>
                                                </div>
                                                {{-- {{ dd($customer) }} --}}
                                                <table id="" class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>DATE</th>
                                                            <th>TIME</th>
                                                            <th>Food</th>
                                                            <th>PRICE</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $totalFoodPrice = 0; // Initialize the total food price
                                                        @endphp
                                                        {{--stard find month how many month are complated  --}}
                                                        @php
                                                        $completedMonths = $foodrecord->pluck('created_at')->map(function ($date) {
                                                            return \Carbon\Carbon::parse($date)->format('Y-m');
                                                        })->unique()->toArray();
                                                        $currentMonth = \Carbon\Carbon::now()->format('Y-m');
                                                        $isMonthCompleted = in_array($currentMonth, $completedMonths);
                                                        $numCompletedMonths = ($isMonthCompleted && count($completedMonths) > 0) ? count($completedMonths) - 1 : 0;
                                                    @endphp

                                                    @if ($isMonthCompleted)
                                                        @if ($numCompletedMonths === 0)

                                                        @else
                                                            Completed {{ $numCompletedMonths }} months
                                                        @endif
                                                    @endif



                                                        @foreach($foodrecord->unique('created_at') as $row)
                                                        @php
                                                        $monthKey = \Carbon\Carbon::parse($row->created_at)->format('Y-m');
                                                    @endphp

                                                    @if (!in_array($monthKey, $completedMonths) && \Carbon\Carbon::parse($row->created_at)->isSameMonth(Carbon\Carbon::now()))
                                                        @php
                                                            $completedMonths[] = $monthKey;
                                                        @endphp
                                                        {{ 'Complete a month (' . \Carbon\Carbon::parse($row->created_at)->format('F Y') . ')' }}
                                                    @endif
                                                     {{--stard find month how many month are complated  --}}
                                                        <tr>
                                                            <td>
                                                                {{ \Carbon\Carbon::parse($row->created_at)->format('l, F d, Y') }}

                                                            </td>
                                                            <td>{{ \Carbon\Carbon::parse($row->created_at)->format('h:i A') }}</td>
                                                            <td>{{ $row->food }}</td>
                                                            <td>{{ $row->foodprice }}</td>
                                                        </tr>
                                                            @php
                                                                $totalFoodPrice += $row->foodprice; // Calculate the total food price for each unique created_at
                                                            @endphp
                                                        @endforeach

                                                        <tr>
                                                            <td colspan="3"><b>TOTAL</b></td>
                                                            <td>{{ $totalFoodPrice }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan=""><b>Advance</b></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td colspan=""><b>{{ $customer[0]->CustomerAdvance }}</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan=""><b>TOTAL RECEIVED</b></td>
                                                            <td colspan=""><b>
                                                                @foreach ($customer as $index => $row)
                                                                @if ($index == 0)
                                                                    <button class="btn btn-info btn-sm DetailsReceivedbutton ml-3" data-customerid="{{ $row->Customerid }}" data-toggle="modal" data-target="#DetailsReceivedModel">Details Received</button>
                                                                @endif
                                                                @endforeach
                                                            </b></td>
                                                            <td>@php
                                                                $totalrecived = 0; // Initialize the total received amount
                                                                @endphp

                                                                @foreach ($recordrecived as $item)
                                                                    @php
                                                                    $totalrecived += $item->Received; // Calculate the total received amount for each unique created_at
                                                                    @endphp
                                                                @endforeach

                                                                <td><b>{{ $totalrecived }}</b></td>
                                                                </td>

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3"><b>Remaining</b></td>
                                                            <td><b>{{ $totalFoodPrice - $customer[0]->CustomerAdvance - $totalrecived }}</b></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>

                                            <h1>month</h1>
                                        {{-- @endforeach --}}

                                        @else
                                            <p>You won't find the customer record until you add the food.</p>
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            {{-- @endforeach --}}
        </div>

        <!-- start Recived modal ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <div class="modal fade" id="addRecivedModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Received Money</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="{{ route('ReceivedMoney') }}">
                        @csrf
                        <div class="modal-body">
                            <label for="id">no</label>
                            @if ($customer->first())
                                <input type="text" name="Customerid" id="Customerid" value="{{ $customer->first()->Customerid }}">
                            @else
                                <!-- Handle the case when $customer is null or empty -->
                                <p>No customer found.</p>
                            @endif
                            <label for="Received">Received Money</label>
                            <input class="w-100 mb-3" type="text" name="Received" placeholder="Enter Customer Received Money" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Received</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- End Recived modal ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

<!-- start get data in the table Recived modal ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="modal fade" id="DetailsReceivedModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Received Money</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('ReceivedMoney') }}">
                @csrf
                <div class="modal-body">
                    <table id="" class="table table-hover">
                        <thead>
                          <tr>
                            <th>DATE</th>
                            <th>TIME</th>
                            <th>RECIVED</th>
                            <th></th>
                          </tr>
                        </thead>
                        @php
                        $totalrecived = 0; // Initialize the total received amount
                    @endphp
                        @if ($recordrecived->count() > 0)
                        @foreach ($recordrecived as $item)
                            <tr>
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('l, F d, Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('h:i A') }}</td>
                                <td colspan="2"><b>{{ $item->Received }}</b></td>
                            </tr>
                    @php
                    $totalrecived += $item->Received; // Calculate the total food price for each unique created_at
                @endphp
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">No records found.</td>
                        </tr>
                    @endif

                    <tfoot>
                        <tr>
                            <td colspan="2"><b>TOTAL RECEIVED</b></td>
                            <td>{{ $totalrecived }}</td>
                        </tr>
                    </tfoot>
                    </table>
                </div>

        </div>
    </div>
</div>

<!-- End get data in the table Recived modal ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

        <script>
            $(document).ready(function() {
                $('.addReceivedbutton').click(function() {
                    var customerId = $(this).data('Customerid');
                    $('#id').val(customerId);
                });
            });
        </script>
<!-- delete the data  by  customerid-->


    </x-slot>
</x-layout>
