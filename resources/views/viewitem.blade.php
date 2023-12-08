@extends("layouts.adminside")

@section("page-content")


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>




<body>

<br><br>
<section>     
      <div class="row">
         <div class="col-lg-12">
            <div class="full text_align_center heading_s1">
                 <h2 style="width: 100%;text-align: center;">ITEM DETAILS</h2>
            </div>
         </div>
      </div>

</section>




<div class="container">
<div class="jumbotron">

<table class="table table-bordered table-dark">
<thead>
<tr>
     <td>ID</td>
     <td>PRODUCT NAME</td>
     <td>PRODUCT DESCRIPTION</td>
     <td>PRODUCT IMAGE</td>
     <td>PRODUCT PRICE</td>
     <td>ACTION</td>
     <td>ACTION</td>
</tr>
</thead>
  @foreach($user as $userf)

<tr>
     <td>{{$userf->id}}</td>
     <td>{{$userf->pname}}</td>
     <td>{{$userf->pdesc}}</td>
     <td><img src="{{ asset('uploads/itemimages/' . $userf->pimg) }}" width="90px;" alt="Image"></td>
     <td>{{$userf->pprice}}</td>
     
     <td> <a class="btn btn-success" href="/edititem/{{$userf->id}}">EDIT</a></td>
     
     <form action="/deleteitem/{{$userf->id}}" method="POST">
     {{ csrf_field() }}
     <td><button type="submit" class="btn btn-danger">DELETE</button></td>
     </form>
</tr>
 
@endforeach
</table>

</div>
</div>
    

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>


@endsection