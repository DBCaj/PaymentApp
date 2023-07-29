<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Payment Form</title>
</head>
<body>
  <h1>Payment Form</h1>
  <h3>$125.00</h3>
  <form action="{{ route('payment') }}" method="POST">
    @csrf
    <input type="hidden" name="amount" value="125">
    <button type="submit">Pay Now</button>
  </form>
</body>
</html>