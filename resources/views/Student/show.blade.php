@extends('layouts.mainlayout')

@section('title', 'Show Page')

@section('content')
    <div class="container mt-4">
        <h1 class="text-white"><b>Student Details</b></h1>

        <div class="container p-4 bg-secondary border border-dark border-5 rounded-3">
            <h3 class="text-white"><b>Name:</b>
                {{ $student->name }}
            </h3>

            <h3 class="text-white"><b>Section:</b>
                {{ $student->section }}
            </h3>

            <h3 class="text-white"><b>Address:</b>
                {{ $student->address }}
            </h3>

            <h3 class="text-white"><b>Age:</b>
                {{ $student->age }}
            </h3>

            <h3 class="text-white"><b>Grade:</b>
                {{ $student->grade }}
            </h3>
        </div>

        <a class="btn btn-primary mt-3" href="{{ route('students.index') }}">Back</a>
    </div>
@endsection
