@extends("layouts.userside")

@section("page-content")


<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">

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
                 <h2 style="width: 100%;text-align: center;">PRODUCT DETAIL</h2>
            </div>
         </div>
      </div>
<br>
</section>



        <div class="col-lg-4 col-md-6 pb-1">

            <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">
                <h3><p class="text-right">PRICE-------Rs:{{$user->pprice}}</p></h3>
                <a href="" class="cat-img position-relative overflow-hidden mb-3">
                    <img class="img-fluid" src="uploads/itemimages/{{$user->pimg}}" width="900px;" alt="">
                </a>
                <h6 class="font-weight-semi-bold m-0">PRODUCT NAME : {{$user->pname}}</h6>
                <br>
                <h6 class="font-weight-semi-bold m-0">PRODUCT DESCRIPTION : {{$user->pdesc}}</h6>
                <br><br>
                
            <form action="/adcart/{{$user->id}}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-4">
                        <input type="number" name="qty" id="qty" value="1" min="1" style="width: 100px">
                    </div>
                    <div class="col-md-4">
                        <input type="submit" class="btn btn-success" value="ADD TO CART">                        
                    </div>
                </div>
            </form>

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