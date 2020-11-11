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
<div class="form-group">
  @if(Session::has('success'))
      
        <div class="alert alert-success" role="alert">
        {{Session::get('success')}} 
        </div>

  @endif
    
  
 <table class="table">
 <tr class="table-success">
 <th>Student ID</th>
 <th>Student Name</th>
 <th>Student Email</th>
 <th>Student Contact</th>
 <th>Modification</th>
 </tr>
 @foreach($member as $ss)
 
 <tr class="table-bordered table-striped table-hover">
 <td>{{$ss['Id']}}</td>
 <td>{{$ss['name']}}</td>
 <td>{{$ss['email']}}</td>
 <td>{{$ss['contact']}}</td>
 <td>
 
 <a class="btn btn-primary" href={{"/edit/".$ss['Id']}}>Edit</a>
 <a class="btn btn-danger"  href={{"/delete/".$ss['Id']}}>Delete</a>
</td>
 </tr>

 @endforeach
 </table>
 
 
</body>
</html>
