<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
         body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .buttons {
            text-align: center;
            padding-top: 100px; /* Adjust vertical spacing */
        }

        .buttons h1 {
            font-size: 36px;
        }

        .buttons ul {
            list-style-type: none;
            padding: 0;
            margin: 20px 0;
        }

        .buttons li {
            display: inline;
            margin-right: 20px;
        }

        .buttons li a {
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .buttons li a.active,
        .buttons li a:hover {
            background-color: #555;
        }

        .container {
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="buttons">
        <h1>Student Management</h1>
        <ul>
            <li><a href="{{ url('/home') }}" class="{{ Request::is('home') ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ url('/student')}}" class="{{ Request::is('student') ? 'active' : '' }}"> Students</a></li>
            <li><a href="{{ url('/course')}}" class="{{ Request::is('course') ? 'active' : '' }}"> Courses </a></li>
            <li><a href="{{ url('/enrollment')}}" class="{{ Request::is('enrollment') ? 'active' : '' }}"> Enrollments </a></li>
            <li><a href="{{ url('/grade')}}" class="{{ Request::is('grade') ? 'active' : '' }}"> Grades </a></li>
        </ul>
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
