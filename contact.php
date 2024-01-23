<!doctype html>
<html>
<meta charset="uttf-8">
<meta name="viewport" content="width=device-width, initial=1">
<title>home</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
          <li class="active"><a href="elisahtml2.php">HOME<span class="sr-only">(current) </span></a></li>
          <li><a href="produkhtml.php">PRODUK</a></li>
           <li><a href="contact.php">CONTACT</a></li>
        </li>
      </ul>
    </div>
  </nav>
<div class="row mt-5">
  <div class="col-md-6 mx--auto text-center">
    <h3>Contact kami</h3>
    <p>Jika anda memiliki pertanyaan atau ingin memesan bisa melalui di bawah ini:</p>
<form acction ="submit_form-group">
  <label for="name">nama:</label>
  <inpt type="text" id="name" name="name" class="form-control" required>
    <div class="form-group">
      <label for="message">pesan:</label>
      <textarea id="message" name="message" class="form-control" row="5" required></textarea>
      <button type="submit" class="btn btn-primary">kirim</button>
    </form>
  </div>
</div>


<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>