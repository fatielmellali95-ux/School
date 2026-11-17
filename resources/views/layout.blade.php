
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f6f9;
        }
        nav {
            background: #263b5e;
            padding: 18px;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin-right: 25px;
        }
        .container {
            width: 90%;
            margin: 30px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background: #263b5e;
            color: white;
        }
        .btn {
            display: inline-block;
            padding: 8px 12px;
            background: #263b5e;
            color: white;
            text-decoration: none;
            border: 0;
            border-radius: 4px;
            cursor: pointer;
        }
        input {
            display: block;
            width: 100%;
            padding: 9px;
            margin: 8px 0 18px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

<nav>
    <a href="{{ route('students.index') }}">Students</a>
    <a href="{{ route('students.create') }}">Add Student</a>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>
