@extends('master.master')

@section('title')
  Coche {{ $coche->id }}
@endsection

@section('header')
  <h1>Concesionario Sánchez</h1>
  <h2>Coche {{ $coche->id }}</h2>
@endsection

@section('content')
  <ul>
      <li>Make: {{ $coche->make }}</li>
      <li>Model: {{ $coche->model }}</li>
      <li>Produced on: {{ $coche->produced_on }}</li>
  </ul>
@endsection