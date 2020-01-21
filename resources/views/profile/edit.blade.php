@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/user/{{$user->id}}" class="col" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col mb-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header font-weight-bold text-center" style="font-size: 20px;">My Profile</div>
                        <div class="text-center" style="margin-top:1em">
                            <img src="{{URL::to('/')}}/img/{{$user->user_picture}}" 
                                style="width: 12rem; height: 12rem;" class="img-thumbnail rounded-circle" alt="">
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name" style="font-size:14px;">Username</label>
                                <input name="name" type="text" class="form-control" id="name" value="{{$user->name}}" style="font-size:18px">
                            </div>
                            <div class="form-group">
                                <label for="email" style="font-size:14px;">Email</label>
                                <input name="email" type="email" class="form-control" id="email" value="{{$user->email}}" style="font-size:18px" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($user->store_name != NULL)
                <div class="col-8 mb-4 ">
                    <div class="card">
                        <div class="card-header font-weight-bold text-center" style="font-size: 20px;">My Profile</div>
                        <div class="text-center" style="margin-top:1em">
                            <img src="{{URL::to('/')}}/img/{{$user->store_picture}}" 
                                style="width: 12rem; height: 12rem;" class="img-thumbnail rounded-circle" alt="">
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="store_name" style="font-size:14px;">Store Name</label>
                                <input name="store_name" type="text" class="form-control" id="store_name" value="{{$user->store_name}}" style="font-size:18px">
                            </div>
                            <div class="form-group">
                                <label for="store_description" style="font-size:14px;">Store Description</label>
                                <input name="store_description" type="text" class="form-control" id="store_description" value="{{$user->store_description}}" style="font-size:18px">
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <div class="row">
                <div class="col">
                    <input type="submit" class="btn btn-primary" value="Save Changes">
                </div>
            </div>
        </form>
    </div>
@endsection