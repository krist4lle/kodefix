<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kodefix</title>
</head>
<body>
<form method="GET">
    @csrf
    <label for="sms">Write a word</label>
    <input type="text" id="sms" name="sms">
</form>
<div>
    <h3>Result</h3>
    <p id="result"></p>
</div>
<script src="js/sms-solve.js"></script>
</body>
</html>
