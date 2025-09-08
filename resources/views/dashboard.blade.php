    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<div class="container">

<div class="card">
    
  <div class="card-header">
    Dashboard
  </div>
  <div class="card-body">
    <h5 class="card-title">Welcome back, {{ Auth::user()->name; }}</h5>
    <p class="card-text">Thank for using these App.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a> <br>

 <form action="{{ url('logout') }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
  </div>
</div>
</div>