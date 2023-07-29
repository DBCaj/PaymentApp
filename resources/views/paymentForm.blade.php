<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Payment Form</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  
  <x-bootstrap-styles />
</head>
<body>
  <x-success-msg />
  <x-payment-form />

  <x-bootstrap-scripts />
  <x-script-change-price />
</body>
</html>