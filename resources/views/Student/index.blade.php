@extends('layouts.mainlayout')

@section('title', 'Index Page')

@section('content')
    <div class="container mt-4">
        <h1 class="text-white"><b>List of Students</b></h1>

        <div class="table-responsive">
            <table class="table table-bordered table-dark table-striped table-hover">
                <tr class="">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Section</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Grade</th>
                    <th style="width: 6%">Action</th>
                </tr>
                @foreach ($students as $key => $student)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->section }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->grade }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('students.show', $student->id) }}">Show</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
