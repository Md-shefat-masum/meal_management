@extends('admin.master')
@section('content')
    <div id="calendar"></div>
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">All Expense</h5>
            <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
                <div class="col-md-4 user_role"></div>
                <div class="col-md-4 user_plan"></div>
                <div class="col-md-4 user_status"></div>
            </div>

            <form action="{{ route('admin.daily_expense.search') }}" method="POST">
                @csrf
                <label for="searchText">Search:</label>
                <input class="form-control mb-2" type="text" name="searchText" id="searchText" placeholder="Enter search text">
                <label for="selectedDate">Select Date:</label>
                <input class="form-control mb-2" type="date" name="selectedDate" id="selectedDate">
                <button type="submit" class="btn btn-primary ">Filter</button>
            </form>
        </div>
        <div class="card-datatable table-responsive">
            <table class="datatables-users table border-top dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>title</th>
                        <th>quantity</th>
                        <th>unit</th>
                        <th>price</th>
                        <th>bajar_date</th>
                        <th>total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    @foreach ($expense as $meal)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>
                                @if($meal->title === 'khala')
                                    {{'cook salary'}}
                                @else
                                    {{ $meal->title }}
                                @endif
                            </td>
                            <td>{{ $meal->quantity }}</td>
                            <td>
                                @if($meal->unit === 'salary')
                                    {{""}}
                                @else
                                    {{ $meal->unit }}
                                @endif
                            </td>
                            <td>{{ $meal->price }}</td>
                            <td>{{ $meal->bajar_date }}</td>
                            <td>{{ $meal->total }}</td>
                            <td>
                                @if($meal->unit === 'salary' && $meal->title === 'khala')
                                    {{""}}
                                @else
                                    <a href="{{ route('admin.daily_expense.edit', $meal->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.daily_expense.delete', $meal->id) }}" class="btn btn-danger">Delete</a>
                                @endif

                            </td>
                        </tr>
                    @endforeach
                        <tr>
                            <td></td>
                            <td colspan="5" class="text-end">Total Expense</td>
                            <td >{{$total_expense}}</td>
                            <td></td>
                        </tr>
                </tbody>
            </table>
            <div class="mt-3 px-4">
                {{ $expense->links() }}
            </div>
        </div>
    </div>
@endsection
