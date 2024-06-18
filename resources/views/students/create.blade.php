@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>Crear estudiante</h2>
        <div>
</div>
    <div class="row">
        <div class="col-md-8">
            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="CIF">CIF</label>
                    <input type="text" name="CIF" id="CIF" class="form-control">
                </div>
                <div class="form-group
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group
                    <label for="age">Edad</label>
                    <input type="text" name="age" id="age" class="form-control">
                </div>
                <div class="form-group
                    <label for="phone">Telefono</label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
</div>
@endsection
    