<!-- Footer -->
<footer class="page-footer font-small unique-color-dark footer1" style="background: #292b2c">
    <div style="background-color: #6351ce;" class="bg-info footer2">
        <div class="container">
            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">
                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0">¡Conéctate con nosotros en las redes sociales!</h6>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <a href="http://www.facebook.com" target="__blank" class="fb-ic"><i class="fab fa-facebook-f white-text mr-4"> </i></a>
                    <a href="http://www.twitter.com/" target="__blank" class="tw-ic"><i class="fab fa-twitter white-text mr-4"> </i></a>
                    <a href="http://www.googleplus.com/" target="__blank" class="gplus-ic"><i class="fab fa-google-plus-g white-text mr-4"> </i></a>
                    <a href="http://www.youtube.com/" target="__blank" class="li-ic"><i class="fab fa-youtube white-text mr-4"> </i></a>
                    <a href="mailto:yuri_1030@hotmail.com" target="__blank" class="ins-ic"><i class="far fa-envelope"> </i></a>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row-->
        </div>
    </div>
    <!-- Footer Links -->
    <div class="container text-md-left mt-5 text-white ">
        <!-- Grid row -->
        <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">Huascaran System SAC</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p class="text-justify">Huascaran System SAC es un empresa dedicada al uso de la tecnologia para poder desarrollar,
                    implementación y mantenimiento de sistemas informaticos para la gestion empresarial , asi como
                    la configuracion y mantenimiento de redes informaticas y dar soporte tecnico</p>
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">SERVICIOS</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="servicios?service=1"><i class="fas fa-bomb"></i> Desarrollo de Software</a></p>
                <p><a href="servicios?service=2"><i class="fas fa-bomb"></i> Soporte Tecnico</a></p>
                <p><a href="servicios?service=3"><i class="fas fa-bomb"></i> Redes Informaticas</a></p>
            </div>
            <!-- Grid column -->
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">INFORMACIÓN</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><i class="fas fa-home mr-3"></i> Huaraz, Ancash, Perú</p>
                <p><i class="fas fa-envelope mr-3"></i> yuri_1030@hotmail.com</p>
                <p><i class="fas fa-phone mr-3"></i> (43)-233588</p>
                <p><i class="fas fa-mobile-alt mr-3"></i> 936 695 173</p>

            </div>
            <!-- Grid column -->
            <div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-3 mx-auto mb-4">
                <img src="assets/img/logos/logoFooter.jpg" alt="" class="w-100 h-100 rounded">
            </div>

        </div>
        <!-- Grid row -->
    </div>
    <!-- Footer Links -->
    </div>
    <hr class="bg-secondary w-75">
    <!-- <div class="text-center" style="margin-left: 500px ;margin-right: 500px">
        <img src="assets/img/logos/logo07.png" alt="" class="w-50 h-50 rounded-circle bg-light ">
    </div> -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 text-white">© 2020 Copyright:
        <a href="https://mdbootstrap.com/"> Huascaran System S.A.C - Empresa Tecnologica - Huaraz - Perú</a>
    </div>
    <!-- Copyright -->

</footer>


<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!--- Scroll Reveal -->
<script src="https://unpkg.com/scrollreveal"></script>
<script src="assets/js/jquery-3.5.0.min.js"></script>
<script src="assets/js/main.js"></script>
<script>
    (function() {
        $(document).ready(function() {
            $(".btn-menu").click(function(e) {
                e.preventDefault();
                var filtro = $(this).attr("data-filter");
                if (filtro == "todos") {
                    $(".box-img").show(500);
                } else {
                    $(".box-img").not("." + filtro).hide(500);
                    $(".box-img").filter("." + filtro).show(500);
                }
            });

            $(".menu ul li").click(function() {
                $(this).addClass("active-btn").siblings().removeClass("active-btn");
            });
        });
    }())
</script>
</body>

</html>