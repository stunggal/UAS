<!-- ======= Food Section ======= --> 
<section class="about">
    <div class="container  mt-5" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-3 order-1 order-lg-2 ms-5" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img">
            @yield('img')
          </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>@yield('nama')</h3>
          <p class="fst-italic">
            @yield('deskripsi')<br>
            <br>Berikut adalah resep nya :
          </p>
          <ul>
            <h4>Bahan :</h4>
            @yield('bahan')

          </ul>
          <ul>
            <h4>Cara Memasak :</h4>
            @yield('proses')

          </ul>
          
        </div>
      </div>

    </div>
  </section>
<!-- End Food Section -->