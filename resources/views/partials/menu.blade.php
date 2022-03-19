<!-- ======= Recipe Section ======= -->
<section id="recipe" class="menu section-bg">
    <div class="container" data-aos="fade-up">

    <div class="section-title">
        <h2>Recipe List</h2>
        @yield('recipeTitle')
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
        <ul id="menu-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-sidedish">Side Dish</li>
            <li data-filter=".filter-snacks">Snacks</li>
            <li data-filter=".filter-drinks">Drinks</li>
        </ul>
        </div>
    </div>

    <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
        @yield('for')
    </div>
</section>
<!-- End Recipe Section -->