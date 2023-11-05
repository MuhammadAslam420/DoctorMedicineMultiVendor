<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appointment Booking Confirmation</title>
</head>
<body>
    <p>Hi {{$appointment->firstname}} {{$appointment->lastname}}</p>
    <p>Your Appointment  has been scheduled successfully.
        Appointment date is {{$appointment->appointment_datetime}} & appointment type is {{$appointment->meeting_status}}.
    </p>
    <br>
    <table style="width:600px;text-align:right;">
    <thead>
        
    </thead>
    <tbody>
    
        <tr>
            <td colspan="3">{{$appointment->checkup_fees}}</td>
            <td style="font-size:15px; font-weight:400;border-top:1px solid #ccc;">Tax: {{$appointment->tax}}</td>
        </tr>
          
        <tr>
            <td colspan="3"></td>
            <td style="font-size:15px; font-weight:400;border-top:1px solid #ccc;">Total: {{$appointment->subtotal}}</td>
        </tr>
    </tbody>
</table>
</body>
</html>