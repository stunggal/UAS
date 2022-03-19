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
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Admin Happy Food</h1>
      <p>A Collection Of <span class="typed" data-typed-items="Easy, Delicious, Interesting"></span> Food Recipes</p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Request Section ======= -->
    <section id="request" class="request">
      <div class="container">

        <div class="section-title">
          <h2>Request</h2>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Request Has Been Deleted, </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <table class="table">
            <thead class="table-dark">
              <tr>
                  <th>Nama</th>
                  <th>Nama Makanan</th>
                  <th>Bahan Dasar</th>
                  <th>Option</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($request as $r)
                <tr>
                    <td>{{$r->nama}}</td>
                    <td>{{$r->nama_makanan}}</td>
                    <td>{{$r->bahan_dasar}}</td>
                    <td>
                        <a href="/dashboard/delete/{{$r->id}}" onclick="return confirm('Are You ure...?') " class="btn btn-danger mg-1"> Delete </a>
                        <a href="/postmenu" class="btn btn-primary mg-1"> Accept </a>
                    </td>
                </tr>
                @endforeach
              
            </tbody>
          </table>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Informasi Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Information</h2>
          
        </div>
        
        <div class="row no-gutters">
          

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Side Dish</strong></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Snack</strong></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Drink</strong></p>
            </div>
          </div>
            
        </div>

        <a href="/postmenu" class="btn btn-primary"> Add Recipe </a>
        
      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Menu Recipe</h2>
         
        </div>
        @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Recipe Has Been Deleted, </strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <table class="table">
          <thead class="table-dark">
            <tr>
                <th>Nama Makanan</th>
                <th>Bahan</th>
                <th>Proses</th>
                <th>kategori</th>
                <th>Option</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($menu as $m)
              <tr>
                  <td>{{$m->nama}}</td>
                  <td>{!!$m->bahan!!}</td>
                  <td>{!!$m->proses!!}</td>
                  <td>{{$m->kategori}}</td>
                  <td>
                    <a href="/dashboard/mdelete/{{$m->id}}" onclick="return confirm('Are You ure...?') " class="btn btn-danger mg-1"> Delete </a>
                  </td>
              </tr>
              @endforeach
            
          </tbody>
        </table>

      </div>
    </section><!-- End Skills Section -->

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