@extends('layout.main')
@section('content')

<div class="row g-0">
    @foreach($stations as $station)
    <div class=" col-lg-3 col-md-4 col-sm-6 col-12 p-1">
    
        <div class="card" style="width:100%;">
            <div class="card-body">
                <p class="card-text">Start from: {{$station->start}} -Ends at: {{$station->end}}</p>
                <p class="card-text">Take off: {{$station->take_off}} -Arrival at: {{$station->arrival}}</p>
                <p class="card-text">Ticket Cost: {{$station->cost}} ₺ </p>
            </div>
        </div>
        </div>
  
    @endforeach
</div>

@endsection