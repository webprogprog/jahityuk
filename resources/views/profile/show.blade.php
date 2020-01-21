@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mb-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{URL::to('/')}}/img/{{$user->user_picture}}" 
                                style="width: 15rem; height: 15rem;" class="img-thumbnail rounded-circle" alt="">
                        </div>
                        <div class="text-center" style="margin-top:1em">
                            <h3 class="card-title">{{$user->name}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection