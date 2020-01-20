@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col mb-4 flex-grow-0">
            <div class="card" style="width: 15rem;">
                <img src="{{url('/img/fabric.jpg')}}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Popok stanley</h5>
                    <h6 class="card-title">Rp 50.000,-</h6>
                    <a href="#" class="card-link">Tailor Name</a>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="col mb-4 flex-grow-0">
            <div class="card" style="width: 15rem;">
                <img src="{{url('/img/fabric.jpg')}}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Popok stanley</h5>
                    <h6 class="card-title">Rp 50.000,-</h6>
                    <a href="#" class="card-link">Tailor Name</a>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
