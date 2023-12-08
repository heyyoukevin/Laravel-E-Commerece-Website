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


<section >   
<br><br><br>
      <div class="row">
         <div class="col-lg-12">
            <div class="full text_align_center heading_s1">
                 <h2 style="width: 100%;text-align: center;">ADD ITEMS</h2>
            </div>
         </div>
      </div>

</section>


<div class="container">
<div class="jumbotron">


<fieldset>
<center>
<form action="/aditem" method="post" enctype="multipart/form-data" onSubmit="return check()">
{{ csrf_field() }}
<table>

<br>

<td>PRODUCT NAME</td>
<td><input type="text" name="pname" id="pname" value="{{old('pname')}}" required ></td>

</tr><tr><td><br></td></tr>

<td>PRODUCT DESCRIPTION</td>
<td><input type="text" name="pdesc" id="pdesc" value="{{old('pdesc')}}" required ></td>

</tr><tr><td><br></td></tr>

<td>PRODUCT IMAGE</td>
<td><input type="file" name="pimg" id="pimg" value="{{old('pimg')}}" required ></td>

</tr><tr><td><br></td></tr>

<td>PRODUCT PRICE</td>
<td><input type="text" name="pprice" id="pprice" value="{{old('pprice')}}" required ></td>


</table>
<br><br><br>
<div class="field center">
<button class="test">ADD</button>
</fieldset>
</center>
</form>

</div>
</div>
                           

<br><br><br>

<script type="text/javascript">
    var letters=/^[a-z A-Z]+$/;
    var numbers=/^[0-9]+$/;
    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    function check()
    {
   if(!document.getElementById("pname").value.match(letters))
        {
            alert('Please input alphabet characters only,enter Product Name properly');
            return false;
        }
    else if(!document.getElementById("pprice").value.match(numbers))
        {
            alert('Please input numeric characters only,enter Product Price properly');
            return false;
        }
        else
        {
            return true;
        }
    }	
</script>


    

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
