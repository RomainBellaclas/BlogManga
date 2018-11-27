
@extends("_includes.template")

@section("content")
<div class="card divTemplate text-center col-md-6 offset-md-3">
<div class="card-body">
<div class="d-flex flex-column align-items-center text-center" >
<h4 class="card-header" >S'enregistrer</h4>
<form action="/users" method="POST">

{{ csrf_field() }}

<div class="form-group">
    <label for="exampleInputFistName">FirstName</label>
    <input type="text" class="form-control" id="exampleInputFirstName" placeholder="FirstName" name="firstname">
</div>

<div class="form-group">
    <label for="exampleInputLastName">LastName</label>
    <input type="text" class="form-control" id="exampleInputLastName" placeholder="LastName" name="lastname">
</div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="mail">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>

  <div class="form-group">
    <label for="exampleInputConfirmPassword">ConfirmPassword</label>
    <input type="password" class="form-control" id="exampleInputConfirmPassword" placeholder="ConfirmPassword" name="password_confirmation">
</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>

@endsection