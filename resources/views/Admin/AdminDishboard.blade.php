<x-layout>
    <x-slot name="title">admin dishboard</x-slot>
    <x-slot name="customwork">
        <div class="page-wrapper">
			<div class="page-content">
                {{-- <div  class="new-contact-notification">
                    New Contacts: {{ $newContactCount }}
                </div> --}}
					<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
						<div class="col">
							<div class="card radius-10 bg-gradient-deepblue">
							 <div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">D.CUSTOMERS:{{$totalCashCustomerPrice}}</h5>
									<div class="ms-auto">
                                        <i class='bx bx-money fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-2 bg-opacity-25 bg-white" style="height:4px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Direct Customers Today:</p>
									<p class="mb-0 ms-auto">{{ $totalCustomersToday !== null ? $totalCustomersToday : 0 }}<span><i class='bx bx-up-arrow-alt'></i></span></p>
								</div>
							</div>
						  </div>
						</div>
						<div class="col">
							<div class="card radius-10 bg-gradient-ohhappiness">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">M.CUSTOMERS :{{$totalmisscusrdCustomerPrice}}</h5>

									<div class="ms-auto">
                                        <i class='bx bx-money fs-3 text-white'></i>
									</div>

								</div>
								<div class="progress my-2 bg-opacity-25 bg-white" style="height:4px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Monthly Customers Today:</p>
									<p class="mb-0 ms-auto">{{ $totalmonthlycustomerToday !== null ? $totalmonthlycustomerToday : 0 }}<span><i class='bx bx-up-arrow-alt'></i></span></p>
								</div>
							</div>
						  </div>
						</div>
						<div class="col">
							<div class="card radius-10 bg-gradient-ibiza">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">Total:{{$Total}}</h5>
									<div class="ms-auto">
                                        <i class='bx bx-money fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-2 bg-opacity-25 bg-white" style="height:4px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Total Visitors today: </p>
									<p class="mb-0 ms-auto">{{$TotalVisitors}}<span><i class='bx bx-up-arrow-alt'></i></span></p>
								</div>
							</div>
						</div>
						</div>

						<div class="col">
							<div class="card radius-10 bg-gradient-moonlit">
							 <div class="card-body">
								<div class="d-flex align-items-center">
									<h5 class="mb-0 text-white">Total Cost: {{$totalCost}}</h5>
									<div class="ms-auto">
                                        <i class='bx bx-money fs-3 text-white'></i>
									</div>
								</div>
								<div class="progress my-2 bg-opacity-25 bg-white" style="height:4px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="d-flex align-items-center text-white">
									<p class="mb-0">Cost Today:</p>
									<p class="mb-0 ms-auto">{{$totalCostToday}}<span><i class='bx bx-up-arrow-alt'></i></span></p>
								</div>
							</div>
						 </div>
						</div>


                        {{-- <p>On cash Customers Today: {{ $totalCustomersToday !== null ? $totalCustomersToday : 0 }}</p>
                        <p>Monthly Customers Today: {{ $totalmonthlycustomerToday !== null ? $totalmonthlycustomerToday : 0 }}</p> --}}




			</div>
		</div>
		<!--end page wrapper -->
        <table id="" class="table table-hover ml-3">
        <h5 class="ml-3">Total monthly customers we have: {{$customerCount}}</h5>
            <div class="ml-3">
                <h5>Monthly miss curd Recurd of the customers.</h5>
               
            </div>

            <thead>
                <tr>
                    <th>Months</th>
                    <th>No of Customers:</th>
                    <th>INCOMES:</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($monthlycurdCustomersCount as $monthly)
                <tr>
                    <td>{{ \Carbon\Carbon::createFromFormat('m', $monthly->month)->format('Y-m') }}</td>
                    <td>{{ $monthly->count }}</td>
                    <td>{{ $monthly->totalFoodPrice }}</td>
                    <td>
                        <a href="{{ route('viewMonthlycurd', ['year' => $currentYear, 'month' => $monthly->month]) }}" class="btn btn-info">view</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>


        <table id="" class="table table-hover ml-3">
            <h5 class="ml-3">Monthly Recurd On cash customers</h5>
            <thead>
                <tr>
                    <th>Months</th>
                    <th>No of Customers:</th>
                    <th>INCOMES:</th>
                    <th>Action:</th>
                </tr>
            </thead>
            <tbody>
                @foreach($monthlyCustomersCount as $monthly)
                <tr>
                    <td>{{ \Carbon\Carbon::createFromFormat('m', $monthly->month)->format('Y-m') }}</td>
                    <td>{{ $monthly->count }}</td>
                    <td>{{ $monthly->totalFoodPrice }}</td>
                    <td>
                        <a href="{{ route('viewMonthlycash', ['year' => $currentYear, 'month' => $monthly->month]) }}" class="btn btn-info">view</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        </table>
        <table id="" class="table table-hover ml-3">
            <h5 class="ml-3">Monthly cost Record</h5>
            <thead>
                <tr>
                    <th>Months</th>
                    <th>No of Costs:</th>
                    <th>Total Costs:</th>
                    <th>Action:</th>
                </tr>
            </thead>
            <tbody>
                <!-- <h1>Year: {{ $currentYear }}</h1> -->

<!-- Loop through the monthly cost count -->
@foreach ($monthlycostCount as $monthly)
    <tr>
        <td>{{ \Carbon\Carbon::createFromFormat('m', $monthly->month)->format('Y-m') }}</td>
        <td>{{ $monthly->count }}</td>
        <td>{{ $monthly->totalcostmoney }}</td>
        <td>
            <a href="{{ route('viewMonthlyCosts', ['year' => $currentYear, 'month' => $monthly->month]) }}" class="btn btn-info">view</a>
        </td>
    </tr>
@endforeach
            </tbody>

        </table>
{{-- view cost --}}
<script>
    function viewMonthlyCosts(year, month) {
        // Make an AJAX request to fetch records for the selected month
        axios.get(`/costs/month/${year}/${month}`)
            .then(function (response) {
                // Process the response and display records in the monthlyCostsContainer div
                let monthlyCosts = response.data.monthlyCosts;
                let html = '<ul>';
                monthlyCosts.forEach(function (cost) {
                    html += '<li>' + cost.details + ' - ' + cost.costmoney + '</li>';
                });
                html += '</ul>';

                document.getElementById('monthlyCostsContainer').innerHTML = html;
            })
            .catch(function (error) {
                console.error(error);
            });
    }
</script>



    </x-slot>
</x-layout>
