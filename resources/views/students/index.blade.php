<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>
    <h1>Students List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <!-- @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->fname }}</td>
                    <td>{{ $student->lname }}</td>
                    <td>{{ $student->age }}</td>
                </tr>
            @endforeach -->
            @foreach ($students as $student)
                @include('students.student-details', ['student' => $student])
            @endforeach
        </tbody>
    </table>
</body>
</html>
