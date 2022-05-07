<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-white ">Home</a></li>
          <li><a href="products.php" class="nav-link px-2 text-secondary">Products</a></li>
          <li><a href="orders.php" class="nav-link px-2 text-white">Order</a></li>
          <li><a href="users.php" class="nav-link px-2 text-white">Users</a></li>
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

    <h3>Add Product </h3>
      <form class="position-relative">
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="fname">Name</label>
          <input type="fname" class="form-control" id="p_name" placeholder="Enter name product">
        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4">Price</label>
          <input type="pname" class="form-control" id="p_price" placeholder="Enter price product">
        </div>

      <div class="form-group col-md-4">
          <label for="inputPassword4">Stock</label>
          <input type="pprice" class="form-control" id="phone_number" placeholder="Enter Stock Number">
        </div>
      <div class="form-group col-md-4 float-end position-absolute top-0 end-0">
          <label for="inputPassword4">Additional Infor</label>
          <input style="height:150px" type="lname" class="form-control" id="pinfo" placeholder="Enter infor product">
        </div>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle float-end " style="margin-right:70px ;"  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
            Category
          </button>
          <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Fruit</a></li>
            <li><a class="dropdown-item" href="#">Vegetable</a></li>
            <li><a class="dropdown-item" href="#">Dairy</a></li>
            <li><a class="dropdown-item" href="#">Meat</a></li>
          </ul>
        </div>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle float-end" type="button"  style="margin-right:50px ;"id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
           Unit
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Kg</a></li>
            <li><a class="dropdown-item" href="#">bunch</a></li>
            <li><a class="dropdown-item" href="#">head</a></li>
            <li><a class="dropdown-item" href="#">doz</a></li>
            <li><a class="dropdown-item" href="#">litre</a></li>
            <li><a class="dropdown-item" href="#">each</a></li>
          </ul>
        </div>



      <div class="form-group col-md-4 " >
          <label for="inputPassword4">Expiry</label>
          <input style="height:150px"type="address" class="form-control" id="pexpiry" placeholder="Enter expiry product">
        </div>

      </div>
      <button type="submit" class="btn btn-primary ">Confirm</button>
      <button type="reset" class="btn btn-primary ">Cancel</button>
    </form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>