<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style>
  .mega-menu{width:800px;overflow:hidden;padding:10px}
   .mega-menu a{text-decoration:none}
   .dropdown-menu{top:115%}
   
   
   </style> 
<body>

<nav class="navbar navbar-expand-sm bg-info navbar-dark">
  <!-- Brand -->
 <div class="container">
  <a class="navbar-brand" href="#">Aptech</a>
  <button class="navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="signup">Signup</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/login">Login</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu mega-menu">
	  <div class ="row">
	  <div class ="col-md-3">
	  <img src= "Images/alia.jpg" alt = "image can't" class="img-fluid">
	  <h4> alia bhat image</h4>
	  <p> alia born in india </p>
	  </div>
	  <div class = "col-md-3">
	  <p><strong class = "sub-menu-heading">courses</strong></p>
	  <p><a href= "#" >java</a></p>
	   <p><a href= "#" >c</a></p>
	    <p><a href= "#" >c++</a></p>
		 <p><a href= "#" >php</a></p>
	  </div>
	  
       <div class = "col-md-3">
	  <p><strong class = "sub-menu-heading">courses</strong></p>
	  <p><a href= "#" >java</a></p>
	   <p><a href= "#" >c</a></p>
	    <p><a href= "#" >c++</a></p>
		 <p><a href= "#" >php</a></p>
	  </div>
	  
	  <div class = "col-md-3">
	  <p><strong class = "sub-menu-heading">courses</strong></p>
	  <p><a href= "#" >java</a></p>
	   <p><a href= "#" >c</a></p>
	    <p><a href= "#" >c++</a></p>
		 <p><a href= "#" >php</a></p>
	  </div>
      </div>
    </li>
  </ul>
  </div>
  </div>
</nav>
<br>
  
<div class="container">
  <h3>Navbar With Dropdown</h3>
  <p>This example adds a dropdown menu in the navbar.</p>
</div>

</body>
</html>
 