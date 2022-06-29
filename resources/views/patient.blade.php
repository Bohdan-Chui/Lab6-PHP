
@extends('app')

@section('title')
    {{$patient->name}}
@endsection

@section('content')

    <h1>{{$patient->name}}</h1>

    <div class="container">
        <p>{{$patient->name}}</p>  
        <p>Patient: {{$patient->doctor->name}}</p>
@endsection