<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day Buttons</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
        }
        .day-button {
            margin: 10px;
            padding: 15px 30px;
            font-size: 18px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }
        .day-button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        .day-button:active {
            background-color: #004080;
        }
        #display {
            margin-top: 20px;
            font-size: 24px;
            color: #333;
        }
    </style>
</head>
<body>
    <button class="day-button" onclick="displayDay('Monday')">Monday</button>
    <button class="day-button" onclick="displayDay('Tuesday')">Tuesday</button>
    <button class="day-button" onclick="displayDay('Wednesday')">Wednesday</button>
    <button class="day-button" onclick="displayDay('Thursday')">Thursday</button>
    <button class="day-button" onclick="displayDay('Friday')">Friday</button>

    <p id="display"></p>

    <script>
        function displayDay(day) {
            document.getElementById('display').innerText = day;
        }
    </script>
</body>
</html>
