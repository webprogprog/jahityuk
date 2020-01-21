@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
        @foreach ($items as $item)
            <div class="col mb-4 flex-grow-0">
                <div class="card" style="width: 15rem;">
                    <img src="{{url('/img/fabric.jpg')}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                        <h6 class="card-title">Rp {{$item->price}},-</h6>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <form action="/item/{{$items[0]->user_id}}" class="col" method="POST">
            @csrf
            @method('PUT')
        </form>
    </div>
@endsection