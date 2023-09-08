
    <section class="modal__registroAlumno">
        <button type="button" class="mt-5 mx-5 btn btn-primary  p-10" data-bs-toggle ="modal" data-bs-target="#miModal" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg> Registro Alumnos</button>
        <div class="modal fade " id="miModal" tabindex="-1" aria-hidden="true" arial-labelledby="modalTitle" b>
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content modal-body bg-dark col-lg-10 col-md-12 col-sm-12">
                    <!--------------------------------------------->
                    <div class="modal-header">
                        <h3 class="modal-title w-75 form__tittle text-primary text-center" id="modalTitle"> Registro de alumnos</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label></button>
                    </div>
                     <!--------------------------------------------->
                    <div class="">
                    <section>
    <div class="container container-fluid p-4" >

        <!-- <div class="row w-75 mx-auto my-6">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card card-body bg-dark mb-3">
                <h2 class="form__tittle text-primary text-center">REGISTRO DE ALUMNOS</h2>  -->
                <form  action="../save.php" method="post">
                    <div class="row pb-3">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="PRIMER_NOMBRE" class="form-control" placeholder="Primer nombre" aria-label="PRIMER_NOMBRE">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="SEGUNDO_NOMBRE" class="form-control" placeholder="Segundo nombre" aria-label="SEGUNDO_NOMBRE">
                        </div>
                    </div><!--------cierra la primera fila del formulario------->
                    <div class="row pt-3 pb-3">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="PRIMER_APELLIDO" class="form-control" placeholder="Primer apellido" aria-label="PRIMER_APELLIDO">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="SEGUNDO_APELLIDO" class="form-control" placeholder="Segundo apellido" aria-label="SEGUNDO_APELLIDO">
                        </div>
                    </div><!--------cierra la segunda fila del formulario------->
                    <div class="row pt3 pb-3">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="TELEFONO_CONTACTO" class="form-control" placeholder="Telefono de contacto" aria-label="TELEFONO_CONTACTO">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <input type="email" name="CORREO" class="form-control" placeholder="ejemplo: email@gmail.com" aria-label="CORREO">
                        </div>
                    </div><!--------cierra la tercera fila del formulario------->
                    <div class="row pt3 pb-3">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <input type="text" name="DIRECCION" class="form-control" placeholder="Direccion de donde vives" aria-label="DIRECCION">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <input type="num" name="NUMERO_DOCUMENTO" class="form-control" placeholder="escribe tu numero de documento" aria-label="NUMERO_DOCUMENTO">
                        </div>
                    </div><!--------cierra la cuarta fila del formulario------->
                    <div class="row pt3 pb-3">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <label  for="TIPODOCUMENTO_ID_TIPO_DOCUMENTO" class="form-label">TIPO DE DOCUMENTO</label>
                                <select name="TIPODOCUMENTO_ID_TIPO_DOCUMENTO" id="TIPODOCUMENTO_ID_TIPO_DOCUMENTO" class="form-select">
                                <option selected>Seleccione un tipo de documento</option>
                                <option value="TARJETA_DE_IDENTIDAD">Tarjeta de identidad</option>
                                <option value="REGISTRO_CIVIL">Registro civil</option>
                                <option value="CEDULA_DE_CIUDADANIA"> Cedula de ciudadania</option>
                                <option value="PASAPORTE">Pasaporte</option>
                                </select>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 pb-3" >
                            <input type="date" name="EDAD" class="form-control" placeholder="fecha de nacimiento: dia/mes/año" aria-label="EDAD">
                        </div>
                    </div><!--------cierra la quinta fila del formulario------->
                    <div class="row pt3 pb-3">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <label for="GENERO_ID_GENERO" class="form-label">GENERO</label>
                                <select name="GENERO_ID_GENERO" id="GENERO_ID_GENERO" class="form-select">
                                <option selected>Selecciona un genero</option>
                                <option value="FEMENINO">Femenino</option>
                                <option value="MASCULINO">Masculino</option>
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <label for="DEPORTE_ID_DEPORTE" class="form-label">DEPORTE</label>
                            <select name="DEPORTE_ID_DEPORTE" id="DEPORTE_ID_DEPORTE" class="form-select">
                                <option selected>Selecciona el deporte de tu preferencia</option>
                                <option value="CICLO_MONTAÑISMO">Ciclo montañismo</option>
                                <option value="KARATE">karate</option>
                                <option value="TAEKWONDO">taekwondo</option>
                            </select>
                        </div>
                    </div> <!--------cierra la sexta fila del formulario------->
                    <div class="row">
                    <input type="submit" class="btn btn-success btn-block bt-5" name="ENVIAR" value="ENVIAR">
                    <h5 class="notifCorreo"><?=$result; ?> </h5>
                    </div>
                </form>
            <!-- </div>
            </div>
        </div> -->
    </div>
    </section>
                    </div>
                     <!--------------------------------------------->
                    <div class="modal-footer">

                    </div>
                     <!--------------------------------------------->
                </div>
            </div>
        </div>
    </section>
