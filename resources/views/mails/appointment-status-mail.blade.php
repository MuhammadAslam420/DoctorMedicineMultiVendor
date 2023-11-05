<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appointment status</title>
</head>
<body>
    <p>Hi {{$appointment->firstname}} {{$appointment->lastname}}</p>
    <p>Your Appointment  has been {{$appointment->meeting_status}} successfully.
    </p>
    <br>
</body>
</html>