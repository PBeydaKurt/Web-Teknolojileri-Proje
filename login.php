<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title> Web Teknolojileri Proje Ödevi</title>
    <!-- Css -->
    <link rel="stylesheet" href="style.css">
    
    <style>
      body {
      background-color: plum;
      } 
    </style>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #bedef5;"> 
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Web Teknolojileri Proje Ödevi</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Hakkımda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sehrim.html">Şehrim</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ilgialanlarim.html">İlgi Alanlarım</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="iletisim.html">İletişim</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>


    <br> <div style="text-align:center"><h1>Giriş Ekranı</h1></div> <br>
     
  <main>
		<div class="loginbar">

		    <form action="loginyon.php" method="POST">
				  <div class="form-group">
					  <label for="username">Kullanıcı Adı</label>
					  <input type="text" name="kullaniciadi" class="form-control" placeholder="g201210082@sakarya.edu.tr" required>
				  </div>
				  <div class="form-group">
					  <label for="password">Şifre</label>
					  <input type="password" name="kullanicisifre" class="form-control" placeholder="g201210082" required>
				  </div><br>
				  <button class="logindugme" type="submit">Gönder</button>
				  <br><br><br>
			</form>
		</div>
	</main>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> 

    <!-- BOOTSTRAP -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>
</html>