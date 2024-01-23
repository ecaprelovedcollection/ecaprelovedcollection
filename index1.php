<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Navbar (Navigation Bar) dengan bootstrap</title>
  <link href="bootstrap/css/bootstrap.min.css"rel="stylesheet"> <style> 
    .jumbotron {
      background-image: url("foto1.jpeg");
      background-size: cover;
      height: 500px;
      display: flex;
      align-items: center;
      text-align: center;
      color: white;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="continer">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed"data-toggle="collapsed" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand"href="#">ECA PRELOVED COLLECTION</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="elisahtml2.html">HOME<span class="sr-only">(current) </span></a></li>
          <li><a href="produkhtml.php">PRODUK</a></li>
           <li><a href="contact.php">CONTACT</a></li>
                      <li><a href="login.php">LOGIN</a></li>
        </li>
      </ul>
    </div>
  </nav>
         <div class="jumbotron" style= "backgroun-image: ">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> 
          <marquee><h1>Welcome <span> to eca preloved collection </span></h1></marquee> 
        </div>
      </div>
    </div>
  </div>
  <form>

        <body style="background-color:black;">
        <h1 style="color : white">KETERANGAN:</h1>
       <div  style="color : white">  <font size="5"> <br>1.Menjual baju bekas import(preloved)</font>
      <font size="5">  <br>2.Baju sudah di loundry
    <font size="5">    <br>3.Menerima pemesanan dalam atau luar kota
   <font size="5">     <br>4.Hanya menerima sistem cod di daerah terdekat saja
    <font size="5">    <br>5.Pengiriman lewat jnt atau jne</div>
         <script src="bootstrap/js/jquery.js"></script>
         <script src="bootstrap/js/bootstrap.min.js"></script>
       </body>
       </html>