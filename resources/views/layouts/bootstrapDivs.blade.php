<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Index</title>
  
  <livewire:styles />
  <livewire:bootstrap-styles />
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="card">
          <div class="card-header">
            Login Form
          </div>
          <div class="card-body">
            <form action="">
              <div class="form-group">
                <label for="email">Enter Email: </label>
                <input type="email"  class="form-control form-control-sm">
              </div>
              
              <div class="form-group">
                <label for="password">Enter Password: </label>
                <input type="password"  class="form-control form-control-sm">
              </div>
              
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
      <div class="col-6">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Age</th>
            </tr>
          </thead>
          
          <tbody>
            <tr>
              <th>Test id</th>
              <th>Test Name</th>
              <th>Test Age</th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  <livewire:scripts />
  <livewire:bootstrap-script />
</body>
</html>