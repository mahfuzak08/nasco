<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        p {
            font-size: 14px;
        }

        .signature {
            font-style: italic;
        }
    </style>
</head>
<body>
<div>
    <p>Hey Admin,</p>
    <p>We have received a query from our website. Here is the details:</p>
    <p class="signature">
        <p>Name: <b>{{$data['w3lName']}}</b></p>
        <p>Email: <b>{{$data['email']}}</b></p>
        <p>Phone Number: <b>{{$data['w3lphone']}}</b></p>
        <p>Body: <b>{{$data['w3lMessage']}}</b></p>
    </p>
    <p>Please contact with his/ her if needed. </p>
    Thank you...
</div>
</body>
</html>