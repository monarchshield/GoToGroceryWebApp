<head>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <script src="javascript/bootstrap.js"></script>
</head>

<body>

	<header class="p-3 bg-dark text-white">
		<div class="container">
		  <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
			<a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
			  <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
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


	<div class="container" style="padding-top: 3%">
		<a type="button" class="btn btn-outline-primary" href="add-products.php">Add Products</a>
	</div>
	<div class="container" style="padding-top: 3%;">
		<div class="row">
			<div class="col-8 ">
				<table id="example" class="table table-striped" style="width:100%">
					<thead>
						<tr>
							<th>ID</th>
							<th>Product Name</th>
							<th>Price</th>
							<th>Stock</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Toilet Paper</td>
							<td>12$</td>
							<td>6</td>
							<td>
								<button type="button" class="btn btn-danger btn-sm">Delete</button>
								<button type="button" class="btn btn-warning btn-sm">Edit</button>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Toilet Paper</td>
							<td>12$</td>
							<td>6</td>
							<td>
								<button type="button" class="btn btn-danger btn-sm">Delete</button>
								<button type="button" class="btn btn-warning btn-sm">Edit</button>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Toilet Paper</td>
							<td>12$</td>
							<td>6</td>
							<td>
								<button type="button" class="btn btn-danger btn-sm">Delete</button>
								<button type="button" class="btn btn-warning btn-sm">Edit</button>
							</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Toilet Paper</td>
							<td>12$</td>
							<td>6</td>
							<td>
								<button type="button" class="btn btn-danger btn-sm">Delete</button>
								<button type="button" class="btn btn-warning btn-sm">Edit</button>
							</td>
						</tr>
						<tr>
							<td>5</td>
							<td>Toilet Paper</td>
							<td>12$</td>
							<td>6</td>
							<td>
								<button type="button" class="btn btn-danger btn-sm">Delete</button>
								<button type="button" class="btn btn-warning btn-sm">Edit</button>
							</td>
						</tr>
						<tr>
							<td>6</td>
							<td>Toilet Paper</td>
							<td>12$</td>
							<td>6</td>
							<td>
								<button type="button" class="btn btn-danger btn-sm">Delete</button>
								<button type="button" class="btn btn-warning btn-sm">Edit</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-4">
				<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
					<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
						<input type="search" class="form-control form-control-dark" placeholder="Search product">
					</form>
					<div class="text-end">
						<button type="button" class="btn btn-primary me-2">Search</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container d-flex justify-content-center" style="padding-top: 3%;">
		<nav aria-label="Page navigation example">
			<ul class="pagination">
			  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
			  <li class="page-item"><a class="page-link" href="#">1</a></li>
			  <li class="page-item"><a class="page-link" href="#">2</a></li>
			  <li class="page-item"><a class="page-link" href="#">3</a></li>
			  <li class="page-item"><a class="page-link" href="#">4</a></li>
			  <li class="page-item"><a class="page-link" href="#">5</a></li>
			  <li class="page-item"><a class="page-link" href="#">6</a></li>
			  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
			</ul>
		  </nav>
	</div>

</body>