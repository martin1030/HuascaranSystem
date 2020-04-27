<?php include('layouts/header.php') ?>
<!-- CONTACT -->
<section class="bg-light mt-5 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card contacto">
                    <div class="card-header">
                        <div class="card-title">
                            <h4>CONTACTANOS</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="col-md-8 form-group">
                                    <label for="">Nombre</label>
                                    <input type="text" class="form-control" placeholder="nombre del cliente o empresa" id="nombre">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="">Telefono o Celular</label>
                                    <input type="text" class="form-control" placeholder="telefono o celular" id="tel">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" placeholder="email para darle una respuesta" id="email">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="">Asunto</label>
                                    <input type="text" class="form-control" placeholder="asunto del mensaje" id="asunto">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="">Mensaje</label>
                                    <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="mensaje" id="mensaje"></textarea>
                                </div>
                                <div class="col-md-6 form-group">
                                    <button type="submit" class="btn btn-primary form-control btn-enviar">ENVIAR</button>
                                </div>
                                <div class="col-md-6 form-group">
                                    <button type="reset" class="btn btn-danger form-control btn-cancel">CANCELAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center tarjeta">
                    <div class="card-header">
                        <img src="assets/img/logo2.png" alt="" class="w-50 h-50 bg-dark rounded-circle">
                        <h5><strong>Huascaran System SAC</strong></h5>
                    </div>
                    <div class="card-body">
                        <img src="assets/img/contacto.png" alt="" style="width: 50px">
                        <br>
                        <span>Cel: 936 695 173</span><br>
                        <span>Tel: (43)- 233588</span><br>
                        <span>Email:yuri_1030@hotmail.com</span><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div style="width: 100%">
        <iframe width="100%" height="600" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7869.959961076545!2d-77.53108217844509!3d-9.510468470904414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1587939505427!5m2!1ses!2spe" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</section>
<!--END CONTACT -->
<?php include('layouts/footer.php') ?>