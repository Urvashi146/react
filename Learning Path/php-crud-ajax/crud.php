<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<h1 class="text-center "><u>CRUD</u></h1>
<!-- navigation -->
<nav class="navbar  navbar-expand-sm bg-success m-5 ">
  <div class="container-fluid justify-content-center  ">
    <ul class="navbar-nav ">
      <li class="nav-item ">
        <a class="nav-link active" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ADD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">UPDATE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">DELETE</a>
      </li>
    </ul>
  </div>
</nav>
<!-- navigation end-->

<!-- main content table  -->
<h3 class="text-center "><u>All Records</u></h3>

<div class="container mt-3">
              
  <table class="table table-dark table-hover table-bordered ">
    <thead>
      <tr class="table-primary">
        <th>ID</th>
        <th>NAME</th>
        <th>ADDRESS</th>
        <th>CLASS</th>
        <th>PHONE</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td></td>
        <td><a href="#" class="btn btn-primary">Delete</a> <a href="#" class="btn btn-primary">Update</a></td>
      </tr>
      
    </tbody>
  </table>
</div>
<!-- main content table end  -->


    
    
</body>
</html>