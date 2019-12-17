<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="icon" href="http://localhost/Leafberri/Leafberri-logo.png" type="image/x-icon/" />
    <title>LeafBerri</title>
</head>

<body>

<style>
    #tt{
        margin-top: 10px;
    }
#ap{
    margin-top: 20px;
}
#ap,#vp,#vpl,#lg{
    margin-bottom: 20px;
    margin-left: 4px;
}
</style>

<div class="row">
<div class="col-xl-3 col-lg-3 col-md-3 ">
    
<h3 class="text-center align-middle" id="tt">LEAFBERRI</h3>

<div class="row">
<a class="btn col-xl-12 col-lg-12 col-md-12 btn-light text-center" id="ap"> Add Product</a>
<a class="btn col-xl-12 col-lg-12 col-md-12 btn-light btn-light" id="vp"> View Product</a>
<a class="btn col-xl-12 col-lg-12 col-md-12 btn-light text-center" id="vpl"> Shop </a>
<a class="btn col-xl-12 col-lg-12 col-md-12 btn-light text-center" id="lg"> Logout</a>

</div>
</div>



<div class="col-xl-9 col-lg-9 col-md-9">

<nav class="navbar navbar-expand-lg navbar-light bg-primary container-fluid">
            <a class="navbar-brand d-none d-sm-block d-md-none" href="#"><img src="Leafberri-logo.png" width="30px"></a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  " id="navbarText">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link text-uppercase" ><?php echo  $_GET['user_email'];?><span class="sr-only">(current)</span></a>
                    </li>
                </ul>

            </div>
        </nav>


        <div class="row">

    
        <div class="col-xl-12 col-lg-12 col-md-12">
<h4 class="text-center">Add Product</h4>

        <form method="POST" id="form2">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Enter product Name</label>
      <input type="text" class="form-control" required name="pname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Enter product price</label>
      <input type="number" class="form-control" required name="pprice">
    </div>
  </div>
  <div class="form-row">
      
    <div class="form-group col-md-6">
      <label for="inputCity">Enter product description</label>
      <input type="text" class="form-control" required name="pdesc">
    </div>
    
  <div class="form-group col-md-6">
    <label for="exampleFormControlFile1">Choose Product Image</label>
    <input type="file" class="form-control-file" required name="pimage">
  </div>
  </div>

  <button  class="btn btn-primary">Submit</button><p id="report_add"></p>
</form>

        </div>

<!-- This displays all products-->
        <div class="col-xl-12 col-lg-12 col-md-12">

        <h4 class="text-center">All Posted Products</h4>

        <div class="row">

        <?php 

$connection = mysqli_connect('localhost','root','','leafberri');

$sql = "SELECT * FROM products";
$result = mysqli_query($connection,$sql);

while($row = mysqli_fetch_assoc($result)){
   
    echo"<div class='col-xl-3 col-lg-3 col-md-3 '>
    <div class='card w-100'>
    <img src='http://localhost/Leafberri/php/".$row['product_image']."' class='card-img-top' alt='...'>  
    <div class='card-body'>
    <h5 class='card-title'>".$row['product_name']."</h5>
    <p class='card-text'>$".$row['product_price']."</p>
   
    <p class='card-text'>".$row['product_description']."</p>
    <a href='#' class='btn btn-primary'>Edit</a>
    <a href='#' class='btn btn-danger'>Remove</a>
    
    </div>
    
    
</div>
    
    
    </div>";
}

?>

        </div>
        
        </div>
<!-- This displays all products-->
        </div>

    
</div>

</div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://localhost/Leafberri/js/admin.js"></script>
</body>

</html>