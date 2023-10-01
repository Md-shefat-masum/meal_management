@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-3">Search Filter</h5>
            <form action="{{ route('admin.meal.update',$meal->id) }}" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="row mb-3">
                                <label for="inputEnterYourName" class="col-sm-3 col-form-label">users_id</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{  $meal->users_id }}" name="users_id" class="form-control" id="inputEnterYourName" placeholder="Enter Your Name">
                                </div>
                            </div>
                    
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">quantity</label>
                                <div class="col-sm-9">
                                    <input type="text" value="{{$meal->quantity}}" name="quantity" class="form-control" id="inputEmailAddress2" placeholder="mobile">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="inputEmailAddress2" class="col-sm-3 col-form-label">date</label>
                                <div class="col-sm-9">
                                    <input type="date" value="{{$meal->date}}" name="date" class="form-control" id="inputEmailAddress2" placeholder="Email Address">
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary px-5">update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </div>
    </div>
    </div>

   
@endsection