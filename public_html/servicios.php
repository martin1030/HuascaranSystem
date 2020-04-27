<?php include('layouts/header.php') ?>
<section class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group servicio">
                <a href="servicios.php?service=1" class="list-group-item list-group-item-action <?php if ($_GET['service'] == 1) echo 'active' ?>">DESARROLLO DE SOFTWARE</a>
                <a href="servicios.php?service=2" class="list-group-item list-group-item-action <?php if ($_GET['service'] == 2) echo 'active' ?>">SOPORTE TECNICO</a>
                <a href="servicios.php?service=3" class="list-group-item list-group-item-action <?php if ($_GET['service'] == 3) echo 'active' ?>">REDES INFORMATICAS</a>
                <div class="card text-center tarjeta mt-5">
                    <div class="card-header">
                        <img src="../assets/img/logo2.png" alt="" class="w-50 h-50 bg-dark rounded-circle">
                        <h5><strong>Huascaran System SAC</strong></h5>
                    </div>
                    <div class="card-body">
                        <img src="../assets/img/contacto.png" alt="" style="width: 50px">
                        <br>
                        <span>Cel: 936 695 173</span><br>
                        <span>Tel: (43)- 233588</span><br>
                        <span>Email:yuri_1030@hotmail.com</span><br>
                    </div>
                    <div class="card-footer">
                        <a href="/" class="btn btn-primary btn-sm btn-block mt-1 rounded-0">Contactanos</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade <?php if ($_GET['service'] == 1) echo 'show active'; ?>">
                    <div class="servicio">
                        <h3 class="text-center">DESARROLLO DE SOFTWARE</h3>
                        <hr class="w-25">
                        <p>Desarrollamos aplicaciones web para cubrir las necesidades
                            de las empresas en cada uno de sus procesos. Mejoramos el rendimiento de las
                            actividades de
                            las empresas trabajando codo con codo con ellas y automatizamos procesos dando
                            soluciones
                            innovadoras y efectivas.

                            Enfocamos el desarrollo de software en las necesidades de cada empresa y realizamos
                            el
                            diseño enfocados en el usuario final y así darle una mejor experiencia y facilidad
                            que
                            repercutirá en la empresa en la productividad de cada uno de sus colaboradores ya
                            que
                            tendrán la información centralizada y en tiempo real.</p>
                    </div>
                    <div class="mt-5 mb-5 pt-5 pb-5 detalle-servicio" style="border-radius: 10px;background: #C9E3FA;">
                        <h4 class="pl-4">APLICACIONES NIVEL ESCRITORIO</h4>
                        <ul style="list-style: none;">
                            <li><i class="fas fa-check-circle"></i> Sistemas de Gestion Empresarial</li>
                            <li><i class="fas fa-check-circle"></i> Sistemas de Gestion Empresarial</li>
                            <li><i class="fas fa-check-circle"></i> Sistemas de Ventas</li>
                            <li><i class="fas fa-check-circle"></i> Sistemas de Almacen</li>
                            <li><i class="fas fa-check-circle"></i> Sistemas de kardex</li>
                        </ul>
                        <br>
                        <h4 class="pl-4">APLICACIONES NIVEL WEB</h4>
                        <ul style="list-style: none;">
                            <li><i class="fas fa-check-circle"></i> Sistemas de Gestion Empresarial</li>
                            <li><i class="fas fa-check-circle"></i> Sistemas de Gestion Empresarial</li>
                            <li><i class="fas fa-check-circle"></i> Sistemas de Ventas</li>
                            <li><i class="fas fa-check-circle"></i> Sistemas de Almacen</li>
                            <li><i class="fas fa-check-circle"></i> Sistemas de kardex</li>
                        </ul>
                        <br>
                        <h4 class="pl-4">APLICACIONES MOVILES <span>(android - IOS)</span></h4>
                        <ul style="list-style: none;">
                            <li><i class="fas fa-check-circle"></i> Aplicaciones Moviles</li>
                            <li><i class="fas fa-check-circle"></i> Sistemas de Gestion Empresarial</li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade <?php if ($_GET['service'] == 2) echo 'show active'; ?>">
                    <div class="servicio">
                        <h3 class="text-center">SOPORTE TECNICO</h3>
                        <hr class="w-25">
                        Desarrollamos aplicaciones web para cubrir las necesidades
                        de las empresas en cada uno de sus procesos. Mejoramos el rendimiento de las actividades de
                        las empresas trabajando codo con codo con ellas y automatizamos procesos dando soluciones
                        innovadoras y efectivas.
                    </div>
                    <div class="mt-5 mb-5 pt-5 pb-5 detalle-servicio" style="border-radius: 10px;background: #C9E3FA;">
                        <h4 class="pl-4">APLICACIONES NIVEL ESCRITORIO</h4>
                        <ul style="list-style: none;">
                            <li><i class="fas fa-check-circle"></i> Mantenimiento Preventivo a computadoras
                            </li>
                            <li><i class="fas fa-check-circle"></i> Mantenimiento Correctivo a computadoras</li>
                            <li><i class="fas fa-check-circle"></i> Instalacion de Software</li>
                            <li><i class="fas fa-check-circle"></i> Repacion de Impresoras</li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade <?php if ($_GET['service'] == 3) echo 'show active'; ?>">
                    <div class="servicio">
                        <h3 class="text-center">REDES INFORMATICAS</h3>
                        <hr class="w-25">
                        Enfocamos el desarrollo de software en las necesidades de cada empresa y realizamos el
                        diseño enfocados en el usuario final y así darle una mejor experiencia y facilidad que
                        repercutirá en la empresa en la productividad de cada uno de sus colaboradores ya que
                        tendrán la información centralizada y en tiempo real.
                    </div>
                    <div class="mt-5 mb-5 pt-5 pb-5 detalle-servicio" style="border-radius: 10px;background: #C9E3FA;">
                        <h4 class="pl-4">APLICACIONES NIVEL ESCRITORIO</h4>
                        <ul style="list-style: none;">
                            <li><i class="fas fa-check-circle"></i> Instalacion De Redes Informáticas</li>
                            <li><i class="fas fa-check-circle"></i> Mantenimiento De Redes Informáticas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="servicios-imagen mt-5 mb-5 pt-5 pb-5">
    <div class="d-md-block w-100 mb-5 descripcion-slider mt-5 pt-5 pb-5" style="background: rgb(0, 0, 0,0.7)">
        <h1 class="text-center ml-5 text-white">BRINDANOS TU CONFIANZA...</h1>
        <p class="text-center ml-5 text-white">y te ofrecemos confiabilidad y calidad en el servicio que eligas para poder ayudar
            a tu empresa a optimizar tus procesos como son ventas, almacen, gestion, etc y que tu empresa obtenga un
            posicionamiento favorable y tener mas ganancias.</p>
    </div>
</section>
<?php include('layouts/footer.php') ?>