<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Happy Food | Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendoradmin/aos/aos.css" rel="stylesheet">
  <link href="vendoradmin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendoradmin/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendoradmin/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendoradmin/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendoradmin/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/admin.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  @include('dashboard.navbar')

  <main id="main">

    <!-- ======= Request Section ======= -->
    <section id="" class="request">
      <div class="container">

        <div class="section-title">
          <h2>Post Menu</h2>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Recipe Added Successfully </strong>Add More Recipe...?
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="/postmenu" method="POST">   
            @csrf    
            <div class="form-container" style="max-width: 700px;">
                {{-- <div class="mb-3">
                    <label for="img" class="form-label">Gambar Makanan</label>
                    <input type="image" class="form-control" id="img" name="img" placeholder="Eg. Nasi Goreng" autofocus required>
                </div> --}}
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Makanan</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Eg. Nasi Goreng" autofocus required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Eg. Nasi yang di goreng dengan mentega dan telur" autofocus required>
                </div>

                <div class="mb-3">
                    <label for="bahan" class="form-label">Bahan</label>
                    <input type="text" class="form-control" id="bahan" name="bahan" placeholder="Eg. > Nasi <br> > Ayam....." autofocus required>
                </div>

                <div class="mb-3">
                    <label for="proses" class="form-label">Proses</label>
                    <input type="text" class="form-control" id="proses" name="proses" placeholder="Eg. 1. Panaskan Mentega <br>2. Masukkan bumbu....." autofocus required>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Kategori</label>
                </div>
                <div class="mb-3">
                    <input type="radio" class="form-radio" id="sidedish" name="kategori" value="sidedish" >
                    <label for="sidedish" class="form-label">Side Dish</label><br>

                    <input type="radio" class="form-radio" id="snacks" name="kategori" value="snacks" >
                    <label for="snacks" class="form-label">Snacks</label><br>

                    <input type="radio" class="form-radio" id="drinks" name="kategori" value="drinks" >
                    <label for="drinks" class="form-label">Drinks</label><br>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
           
              
        </form>

      </div>
    </section><!-- End About Section -->

  @include('dashboard.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- vendoradmin JS Files -->
  <script src="vendoradmin/purecounter/purecounter.js"></script>
  <script src="vendoradmin/aos/aos.js"></script>
  <script src="vendoradmin/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendoradmin/glightbox/js/glightbox.min.js"></script>
  <script src="vendoradmin/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendoradmin/swiper/swiper-bundle.min.js"></script>
  <script src="vendoradmin/typed.js/typed.min.js"></script>
  <script src="vendoradmin/waypoints/noframework.waypoints.js"></script>
  <script src="vendoradmin/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/admin.js"></script>

</body>

</html>