@extends("layouts.app")
@section("content")

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>Editar estudiante</h2>  
        <div>

        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('students.update', $student->id) }}" method="EDIT">
                    @csrf
                    @method('PUT')
                    <div class="form-group

@endsection