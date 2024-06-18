@extends('layouts.app')

@section('content')
    
    <div class="container">
        <h2>Listado de estudiantes</h2>
        <a href="{{ route('students.create') }}" class="btn btn-primary"class="btn btnn-outline-primary">Crear estudiante</a>
     </div>
     <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>CIF</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->CIF }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->email }}</td>
                        <td>
                          
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>   
@endsection