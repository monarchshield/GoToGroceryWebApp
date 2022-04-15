
<head>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.html" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="products.html" class="nav-link px-2 text-white">Products</a></li>
          <li><a href="orders.html" class="nav-link px-2 text-white">Order</a></li>
          <li><a href="users.html" class="nav-link px-2 text-white">Users</a></li>
        </ul>


        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Search</button>
        </div>
      </div>
    </div>
  </header>


<div class="container" style="padding-top:5%">

<h3>Add User </h3>
	<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname">First name</label>
      <input type="fname" class="form-control" id="f_name" placeholder="Enter first name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Last name</label>
      <input type="lname" class="form-control" id="l_name" placeholder="Enter last name">
    </div>
	
	<div class="form-group col-md-4">
      <label for="inputPassword4">Phone number</label>
      <input type="lname" class="form-control" id="phone_number" placeholder="Enter Phone Number">
    </div>
	<div class="form-group col-md-4">
      <label for="inputPassword4">Email</label>
      <input type="lname" class="form-control" id="email_address" placeholder="Enter Email Address">
    </div>
	
	<div class="form-group col-md-4">
      <label for="inputPassword4">Address</label>
      <input type="address" class="form-control" id="home_address" placeholder="Enter Email Address">
    </div>
	
  </div>
 
  <button type="submit" class="btn btn-primary">Confirm</button>
</form>
	
	
</div>



</body>