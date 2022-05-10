<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="./css/ItemStyles.css">
	

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	   <?php
                $conn = new mysqli('localhost:4000', 'root', '', 'gtg');
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
				
				$sql = "SELECT MemberID, FirstName, LastName, PhoneNum, JoinDate, Email FROM members";
                $member_result = $conn->query($sql);	
				
				$sql = "Select ProductID, ProductName, Price FROM Products";
				$products_result = $conn->query($sql);
				
				$sql = "SELECT OrderID, ProductID, Quantity FROM orderitems";
				$order_items =  $conn->query($sql);
				
				
		?>

</head>

<body>

  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap"></use>
          </svg>
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="products.php" class="nav-link px-2 text-white">Products</a></li>
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

  <div class="container" style="padding-top:5%;">
  
    <form action = "insert_order.php" method="post">
      <div class="form-row py-3">
        <div class="col-md-6" style="padding: 0% 3%;">
          <h3 style="padding-bottom: 5%;">Billing details</h3>
          <div class="col-md-6" style="padding: 0%;">
            <lable for="memberid">User ID</label>

				<select class="custom-select overflow-auto" name="memberid" id="memberid" style="margin: 2% 0 2% 0;">
				  <option selected>Open this select menu</option>
			   
				   <?php
					  while($row = $member_result->fetch_assoc())
					  {
						echo "<option value=\"" .$row['MemberID']. "\">" .$row['MemberID']. ' ' .$row['FirstName'].' '.$row['LastName']. "</option>";
					  }
				  ?>
				</select>

          </div>
          <div class="col" style="padding: 0%;">
            <label for="address" style="padding-bottom: 2%;">Address</label>
            <input class="form-control" type="text" name="address" id="address" placeholder="Enter Address" style="height:12%; ">
          </div>
          <div class="col" style="padding: 0%;">
            <label for="info" style="padding: 2% 0%;">Additional Information</label>
            <input class="form-control" type="text" name="info" id="info" placeholder="Note" style="height:30%">
          </div>
        </div>
        <div class="col-md-6" style="padding: 0% 3%;">
          <h3 style="padding-bottom: 5%;">Order</h3>
          Add product
          <div class="row">
            <div class="col-md-10" >
              
             
				
				<select class="form-select" aria-label="Default select example">
				  <option selected>Please choose </option>
				 
					<?php
						while($row = $products_result->fetch_assoc())
						{
							echo '<option value="'.$row['ProductID'] .'">'. $row['ProductID'] . ":" . $row['ProductName'] . '</option>';
						}
					?>

				 <option value="1">One</option>
				  <option value="2">Two</option>
				  <option value="3">Three</option>
				  
				  
				</select>
				
				
		
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-primary btn-group-sm">Add</button>

            </div>

          </div>

          <div class=" col py-3" style="padding: 0px;">
            <table class="table table-striped" style="width:100%">
              <thead>
                <tr>
                  <th>Items</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Delete</th>
                </tr>
              </thead>

              <tbody>
                <tr>
                  <td>Lettuce</td>
                  <td>$3.5</td>
                  <td>
                    <button type="button" class="btn btn-dark ButtonNegative"> - </button>
                    <span style="padding: 0px 5px;">6</span>
                    <button type="button" class="btn btn-dark ButtonPositive"> + </button>
                  </td>
                  <td> <button class="btn btn-warning"> <i class="fa fa-trash-o fa-lg"></i></button></td>
                </tr>
                <tr>
                  <td>Egg</td>
                  <td>$0.5</td>
                  <td>
                    <button type="button" class="btn btn-dark ButtonNegative"> - </button>
                    <span style="padding: 0px 5px;">6</span>
                    <button type="button" class="btn btn-dark ButtonPositive"> + </button>
                  </td>
                  <td> <button class="btn btn-warning"> <i class="fa fa-trash-o fa-lg"></i></button></td>
                </tr>
                <tr>
                  <td>Tomato</td>
                  <td>$1</td>
                  <td>
                     <button type="button" class="btn btn-dark ButtonNegative"> - </button>
					 <span style="padding: 0px 5px;">6</span>
                     <button type="button" class="btn btn-dark ButtonPositive"> + </button>
                  </td>
                  <td> <button class="btn btn-warning"> <i class="fa fa-trash-o fa-lg"></i></button></td>
                </tr>

              </tbody>
            </table>
          </div>
          <div class="row g-3 border-top">
            <div class="col-sm-6" style="padding-top: 5%;">
              <h3>TOTAL (AUD)</h3>
            </div>
            <div class="col-sm-6 text-right" style="padding-top: 5%;">
              <h3 style="padding-right:8%">$11.5</h3>
            </div>
          </div>
        </div>
        <div class="col-md-6"></div>
        <div class="row g-3 col-md-6" style="padding: 5% 3%;">
          <div class="col-md-6" style="padding-left: 15%;">
            <input type="submit" name="submit" value="Confirm" class="btn btn-primary btn-lg"></input>
          </div>
          <div class="col-md-6" style="padding-left: 15%;">
            <button type="button" class="btn btn-danger btn-lg">Cancel</button>
          </div>
        </div>
      </div>
      <!-- <button type="submit" name = "submit" class="btn btn-primary">Confirm</button> -->
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>
