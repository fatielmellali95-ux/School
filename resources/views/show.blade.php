
@extends('layout')

@section('content')

<h2>Student Details</h2>

<div style="padding:20px; border:1px solid #ddd; border-radius:10px;">

    <p><strong>ID:</strong> {{ $student->id }}</p>

    <p><strong>Name:</strong> {{ $student->name }}</p>

    <p><strong>Email:</strong> {{ $student->email }}</p>

    <p><strong>Phone:</strong> {{ $student->phone }}</p>

    <p><strong>Section:</strong> {{ $student->section }}</p>

    <p><strong>Image:</strong></p>

    <img src="{{ asset('image/'.$student->image) }}"
         width="150"
         alt="Student Image">

    <br><br>

    <a href="{{ route('students.index') }}">Back to Students List</a>

</div>

@endsection
