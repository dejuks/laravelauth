

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Auth Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Registration Form</h2>
        </div>
        <div class="card-body">
<form action="{{ url('save-users') }}" method="post">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" placeholder="Name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Emaile</label>
    <input type="email" name="email" class="form-control" placeholder="Email" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password" required>
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-sm btn-info">Save</button>
  </div>
</form>
</div>
    
</div>
  </body>
</html>