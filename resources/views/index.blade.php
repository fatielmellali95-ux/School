
@extends('layout')

@section('content')

<div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
    <h2>Students List</h2>

    <a href="{{ route('students.create') }}"
       style="background:green; color:white; padding:10px 15px; text-decoration:none; border-radius:5px;">
        + Add New Student
    </a>
</div>

<table border="1" cellpadding="10" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Section</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @forelse($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->section }}</td>

                <td>
                    <img src="{{ asset('image/' . $student->image) }}"
                         width="60"
                         height="60"
                         style="object-fit:cover;">
                </td>

                <td>
                    <a href="{{ route('students.show', $student->id) }}">
                        Show
                    </a>

                    |

                    <a href="{{ route('students.edit', $student->id) }}">
                        Edit
                    </a>

                    |

                    <form action="{{ route('students.destroy', $student->id) }}"
                          method="POST"
                          style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                onclick="return confirm('Are you sure?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" style="text-align:center;">
                    No students found.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection



