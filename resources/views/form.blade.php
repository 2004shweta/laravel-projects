<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Form</title>
</head>
<body>
    <h2>Fill the Form</h2>
    <form action="/form" method="POST">
        @csrf  <!-- Laravel security token -->

        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br><br>

        <button type="submit">Submit</button>
    </form>

    @if(isset($data))
        <h3>Submitted Data:</h3>
        <p><strong>Name:</strong> {{ $data['name'] ?? '' }}</p>
        <p><strong>Email:</strong> {{ $data['email'] ?? '' }}</p>
        <p><strong>Regis:</strong> {{ $data['regis'] ?? '' }}</p>
    @endif
</body>
</html>
