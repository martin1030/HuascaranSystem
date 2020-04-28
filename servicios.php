<?php include('layouts/header.php') ?>
<section class="container">
    <div class="row pl-3">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="list-group servicio">
                <a href="servicios.php?service=1" class="list-group-item list-group-item-action <?php if ($_GET['service'] == 1) echo 'active' ?>">DESARROLLO DE SOFTWARE</a>
                <a href="servicios.php?service=2" class="list-group-item list-group-item-action <?php if ($_GET['service'] == 2) echo 'active' ?>">SOPORTE TECNICO</a>
                <a href="servicios.php?service=3" class="list-group-item list-group-item-action <?php if ($_GET['service'] == 3) echo 'active' ?>">REDES INFORMATICAS</a>
                <!--  -->
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade <?php if ($_GET['service'] == 1) echo 'show active'; ?>">
                    <div class="container row">
                        <div class="servicio">
                            <h3 class="text-center"><b>DESARROLLO DE SOFTWARE</b></h3>
                            <hr class="w-25">
                            <p class="text-justify">El desarrollo de software moderno se distingue básicamente por dos características: la programación orientada al objeto y la separación de las diferentes etapas lógicas en nivel de presentación, de aplicación y de acceso a los datos. Otros parámetros de calidad, tales como la modularización, la creación de versiones y la documentación del código fuente, pertenecen a nuestro estándar igual que una gestión de proyectos enfocada</p>
                            <p>Cuando se va desarrollar un software intervienen muchas personas como lo es el cliente quien es el que tiene el problema en su empresa y desea que sea solucionado, para esto existe el analista de sistema quien es el encargado de hacerle llegar todos los requerimientos y necesidades que tiene el cliente a los programadores quienes son las personas encargadas de realizar lo que es la codificación y diseño del sistema para después probarlo y lo instalan al cliente. Es así como intervienen varias personas ya que una sola persona no podría determinar todo lo necesario lo mas seguro que le haga falta algún requerimiento o alguna parte del nuevo sistema y entre mas estén involucradas mejor para cubrir con todos los requerimientos del sistema.</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                                <div class="mt-5 mb-5 pt-5 pb-5 detalle-servicio" style="border-radius: 10px;background: #C9E3FA;">
                                    <h5 class="text-center"><b>SUB SERVICIOS</b></h5>
                                    <ul style="list-style: none;" class="mt-3">
                                        <li><i class="fas fa-check-circle"></i> Integración, Implantación y Despliegue.</li>
                                        <li><i class="fas fa-check-circle"></i> Implantación e integración de soluciones de aplicación estándar (CRM, ERP, HR).</li>
                                        <li><i class="fas fa-check-circle"></i> Soluciones de Gestión de la Seguridad.</li>
                                        <li><i class="fas fa-check-circle"></i> Diseño de arquitecturas y sistemas.</li>
                                        <li><i class="fas fa-check-circle"></i> Optimización del rendimiento y usabilidad de las aplicaciones.</li>
                                    </ul>
                                    <h5 class="text-center"><b>APLICACIONES</b></h5>
                                    <ul style="list-style: none;" class="mt-3">
                                        <li><i class="fas fa-check-circle"></i> Aplicaciones de negocio.</li>
                                        <li><i class="fas fa-check-circle"></i> Sistemas de gestión de Operadoras de Telecomunicaciones: tarificación en tiempo real, provisioning, comercial, datawarehouse, etc.</li>
                                        <li><i class="fas fa-check-circle"></i> Sistemas de gestión Bancarios.</li>
                                        <li><i class="fas fa-check-circle"></i> Sistemas de Atención al cliente (CAU/Help Desk).</li>
                                        <li><i class="fas fa-check-circle"></i> Sistemas web.</li>
                                        <li><i class="fas fa-check-circle"></i> Bases de Datos.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-12 mt-5 mb-2">
                                        <img src="assets/img/servicios1.png" alt="" class="img-fluid w-100 h-100" style="border-radius: 10px">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-12">
                                        <div class="card text-center tarjeta">
                                            <div class="card-header">
                                                <img src="assets/img/logos/logo07.png" alt="" class="w-50 h-50 bg-dark rounded-circle">
                                                <h5><strong>Huascaran System SAC</strong></h5>
                                            </div>
                                            <div class="card-body">
                                                <img src="assets/img/contacto.png" alt="" style="width: 50px">
                                                <br>
                                                <span>Cel: 936 695 173</span><br>
                                                <span>Tel: (43)- 233588</span><br>
                                                <span>Email:yuri_1030@hotmail.com</span><br>
                                            </div>
                                            <div class="card-footer">
                                                <a href="contacto" class="btn btn-primary btn-sm btn-block mt-1 rounded-0">Contactanos</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade <?php if ($_GET['service'] == 2) echo 'show active'; ?>">
                    <div class="container row">
                        <div class="servicio">
                            <h3 class="text-center"><strong>SOPORTE TECNICO</strong></h3>
                            <hr class="w-25">
                            <p class="text-justify">Convertimos la tecnología informática en una solución estratégica rentable para nuestros clientes; nuestro servicio de soporte técnico consiste en asistir al cliente en lo que requiere respecto a los productos o soluciones de TI que contrató en la empresa, brindándoles todas las herramientas para poder solucionar su problema de TI. Contamos con equipos especializados, ingenieros y técnicos con varios años de experiencia en equipos TI.</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                                <div class="mt-5 mb-5 pt-5 pb-5 detalle-servicio" style="border-radius: 10px;background: #C9E3FA;">
                                    <ul style="list-style: none;">
                                        <li><i class="fas fa-check-circle"></i> Mantenimiento Preventivo a computadoras
                                        </li>
                                        <li><i class="fas fa-check-circle"></i> Mantenimiento Correctivo a computadoras</li>
                                        <li><i class="fas fa-check-circle"></i> Instalacion de Software</li>
                                        <li><i class="fas fa-check-circle"></i> Repacion de Impresoras</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-12 mt-5 mb-2">
                                        <img src="assets/img/servicios1.png" alt="" class="img-fluid w-100 h-100 " style="border-radius: 10px">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-12">
                                        <div class="card text-center tarjeta">
                                            <div class="card-header">
                                                <img src="assets/img/logos/logo07.png" alt="" class="w-50 h-50 bg-dark rounded-circle">
                                                <h5><strong>Huascaran System SAC</strong></h5>
                                            </div>
                                            <div class="card-body">
                                                <img src="assets/img/contacto.png" alt="" style="width: 50px">
                                                <br>
                                                <span>Cel: 936 695 173</span><br>
                                                <span>Tel: (43)- 233588</span><br>
                                                <span>Email:yuri_1030@hotmail.com</span><br>
                                            </div>
                                            <div class="card-footer">
                                                <a href="contacto" class="btn btn-primary btn-sm btn-block mt-1 rounded-0">Contactanos</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade <?php if ($_GET['service'] == 3) echo 'show active'; ?>">
                    <div class="container row">
                        <div class="servicio">
                            <h3 class="text-center"><b>REDES INFORMATICAS</b></h3>
                            <hr class="w-25">
                            <p class="text-justify">En la mayor parte de las entidades es necesario tener y mantener una red local para el trabajo compartido. Permite a los trabajadores estar siempre conectados, compartir archivos y carpetas, trabajar en red...
                                Cada entidad necesita una red de trabajo según el tamaño, trabajadores, tipo de trabajo que se realiza, nivel de seguridad... Por eso análizamos tus necesidades y te proponemos la mejor solución.</p>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
                                <div class="mt-5 mb-5 pt-5 pb-5 detalle-servicio" style="border-radius: 10px;background: #C9E3FA;">
                                    <ul style="list-style: none;" class="p-3">
                                        <li><i class="fas fa-check-circle"></i> Instalacion De Redes Informáticas</li>
                                        <li><i class="fas fa-check-circle"></i> Mantenimiento De Redes Informáticas</li>
                                        <li><i class="fas fa-check-circle"></i> Servidores locales.</li>
                                        <li><i class="fas fa-check-circle"></i> Copias de seguridad</li>
                                        <li><i class="fas fa-check-circle"></i> Red de trabajo. </li>
                                        <li><i class="fas fa-check-circle"></i> Firewall.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-12 mt-5 mb-2">
                                        <img src="assets/img/servicios1.png" alt="" class="img-fluid w-100 h-100" style="border-radius: 10px">
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-12 ">
                                        <div class="card text-center tarjeta">
                                            <div class="card-header">
                                                <img src="assets/img/logos/logo07.png" alt="" class="w-50 h-50 bg-dark rounded-circle">
                                                <h5><strong>Huascaran System SAC</strong></h5>
                                            </div>
                                            <div class="card-body">
                                                <img src="assets/img/contacto.png" alt="" style="width: 50px">
                                                <br>
                                                <span>Cel: 936 695 173</span><br>
                                                <span>Tel: (43)- 233588</span><br>
                                                <span>Email:yuri_1030@hotmail.com</span><br>
                                            </div>
                                            <div class="card-footer">
                                                <a href="contacto" class="btn btn-primary btn-sm btn-block mt-1 rounded-0">Contactanos</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="margin-top: -100px">
        <img src="assets/img/servicios2.jpg" alt="" class="w-100 h-100">
    </div>
</section>
<section class="servicios-imagen">
    <div class="w-100 descripcion-slider" style="background: rgb(0, 0, 0,0.7)">
        <h1 class="text-center text-white pt-5 pb-5">BRINDANOS TU CONFIANZA...</h1>
        <p class="text-center text-white pb-5">y te ofrecemos confiabilidad y calidad en el servicio que eligas para poder ayudar
            a tu empresa a optimizar tus procesos como son ventas, almacen, gestion, etc y <br> que tu empresa obtenga un
            posicionamiento favorable y tener mas ganancias.</p>
    </div>
</section>
<?php include('layouts/footer.php') ?>