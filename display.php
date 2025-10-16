<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6f0; /* light pink */
            padding: 40px;
            color: #333;
        }

        .result-box {
            background-color: #fff0f5; /* soft pink */
            padding: 25px;
            max-width: 500px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

            /* Animation */
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2 {
            text-align: center;
            color: #cc3366;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
        }
    </style>
</head>
<body>

    <div class="result-box">
        <h2>Welcome!</h2>
        <p>Welcome <?php echo $_POST["fname"]; ?>.</p>
        <p>Your family name is: <?php echo $_POST["lname"]; ?></p>
        <p>Your ID number is: <?php echo $_POST["idNum"]; ?></p>
    </div>

</body>
</html>
