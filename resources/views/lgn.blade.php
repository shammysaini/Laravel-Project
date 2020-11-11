<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
  <style>
  .myform{background:#fff;padding:30px;border-radius:10px;box-shadow:53px 0px 188px 446px #efefef ;}
  </style>
</head>
<body> 
 
 
 <div class="container mt-2">
  <div class = "row justify-content-center">
   <div class = "col-xs-2 myform">

  <form action="ans" method="post">
  @csrf
  <div class="form-group">
  @if(Session::has('success'))
      
        <div class="alert alert-success" role="alert">
        {{Session::get('success')}} 
        </div>

  @endif
    
    <label for="exampleInputEmail1">Enter User Name </label>
    <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="User Name">
    <small id="emailHelp" class="form-text text-danger">@error('username'){{$message}}@enderror</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" name="userpassword" placeholder="Password">
    <small id="emailHelp" class="form-text text-danger">@error('userpassword'){{$message}}@enderror</small>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Contact</label>
    <input type="text" class="form-control" name="usercontact" placeholder="Password">
    <small id="emailHelp" class="form-text text-danger">@error('usercontact'){{$message}}@enderror</small>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</body>
</html>
