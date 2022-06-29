
@extends('app')

@section('title')
    {{$doctor->name}}
@endsection

@section('content')

    <h1>{{$doctor->name}}</h1>

    <div class="container">
        <p>{{$doctor->name}}</p>  
        <p>Doctor's patients: </p>
        @foreach($doctor->patients as $patient)
                    <div class="element">
                        <div>
                            <p>{{$patient->name}}</p>
                        </div>
                @endforeach
    </div>
@endsection