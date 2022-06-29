@extends('app')
@section('title')
    Patients
@endsection
@section('content')
    <h1>All the patients</h1>

    <div class="container">
            @foreach($patients as $patient)
                    <div class="element">
                        <div>
                           <a href="{{ url('patient', ['id' => $patient]) }}">{{$patient->name}}</a>
                        </div>
                @endforeach
        </div>
@endsection