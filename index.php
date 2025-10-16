<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7cac9; /* light pink */
            padding: 40px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 30px;
            max-width: 400px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            margin-top: 20px;
            background-color: #ff6666; /* light red */
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #e65c5c; /* slightly darker red on hover */
        }
    </style>
</head>
<body>
    <div>
        <h2>Student Registration Form</h2>
        <form action="http://localhost/baunsit/display.php" method="POST">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" value="Mitchie">

            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" value="Baunsit">

            <label for="idNum">ID Number:</label>
            <input type="text" id="idNum" name="idNum" value="24208100">

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>