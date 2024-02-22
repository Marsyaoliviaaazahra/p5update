@extends('layouts.aca')
@section('kontent')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            margin: 0;
        }

        .pdf-column, .form-column {
            width: 45%; 
            padding: 20px; 
            margin: 10px; 
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .pdf-column iframe {
            width: 100%;
            height: 400px; 
        }

        .form-column form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            background-color: #4ca3af;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #457fa0;
        }
    </style>
    <title>Two Columns</title>
</head>
<body>

    <div class="pdf-column" style="margin-left: 30%;">
        <iframe src="https://www.resourcefulindonesian.com/uploads/1/1/2/5/11252883/kancil_dan_buaya.pdf" title="Sample PDF"></iframe>
    </div>

    <div class="form-column" style="margin-left: 30%;">
        <form>
          <h4>LKPD</h4>
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>
@endsection
