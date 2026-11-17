
@extends('layout')

@section('content')

<h3>Add New Student</h3>

<form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Name:</label>
    <input type="text" name="name" required>
    <br><br>

    <label>Email:</label>
    <input type="email" name="email" required>
    <br><br>

    <label>Phone:</label>
    <input type="text" name="phone" required>
    <br><br>

    <label>Section:</label>
    <input type="text" name="section" required>
    <br><br>

    <label>Image:</label>
    <input type="file" name="image" accept="image/*" required>
    <br><br>

    <button type="submit">Save Student</button>
</form>

@endsection
