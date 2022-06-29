@extends('app')
@section('title')
    Doctors
@endsection
@section('content')
    <h1>All the Doctors in the hospital</h1>

    <div class="container">
            @foreach($doctors as $doctor)
                    <div class="element">
                        <div>
                           <a href="{{url('doctor',$doctor->id)}}">{{$doctor->name}}</a>
                        </div>
                @endforeach
        </div>
@endsection