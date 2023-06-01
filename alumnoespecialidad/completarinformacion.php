<?php

    session_start();
    $username=$_SESSION['username'];

    require '../dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Completar informacion personal | CEPAP</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image/x-icon" href="../images/ico.ico" />
</head>
<body>
<?php include 'sidenav.php'; ?>

<div class="container mt-5">

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>COMPLETAR INFORMACION PERSONAL
                </h4>
            </div>
            <div class="card-body">

                <?php
                if(isset($_SESSION['username']))
                {
                    $registro_id = mysqli_real_escape_string($con, $_SESSION['username']);
                    $query = "SELECT * FROM informacion WHERE username='$registro_id' ";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $registro = mysqli_fetch_array($query_run);
                        ?>
                        <form action="codeinfo.php" method="post">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 mtop">
                                <label for="username" class="form-label">Nombre de usuario</label>
                                <input type="text" class="form-control" id="username" value="<?= $registro['username']; ?>" disabled>
                            </div>

                            <div class="col-12 col-md-4 mtop">
                                <label for="estado" class="form-label">Estado de origen</label>
                                <select class="form-select" id="estado" name="estado" required autocomplete="off">
                                    <option selected disabled>Seleccione una opcion</option>
                                    <option value="Aguascalientes">Aguascalientes</option>
                                    <option value="Baja California Norte">Baja California Norte</option>
                                    <option value="Baja California Sur">Baja California Sur</option>
                                    <option value="Campeche">Campeche</option>
                                    <option value="Ciudad de México">Ciudad de México</option>
                                    <option value="Coahuila">Coahuila</option>
                                    <option value="Colima">Colima</option>
                                    <option value="Chiapas">Chiapas</option>
                                    <option value="Chihuahua">Chihuahua</option>
                                    <option value="Durango">Durango</option>
                                    <option value="Guanajuato">Guanajuato</option>
                                    <option value="Guerrero">Guerrero</option>
                                    <option value="Hidalgo">Hidalgo</option>
                                    <option value="Jalisco">Jalisco</option>
                                    <option value="Estado de Mexico">Estado de México</option>
                                    <option value="Michoacan">Michoacán</option>
                                    <option value="Morelos">Morelos</option>
                                    <option value="Nayarit">Nayarit</option>
                                    <option value="Nuevo Leon">Nuevo León</option>
                                    <option value="Oaxaca">Oaxaca</option>
                                    <option value="Puebla">Puebla</option>
                                    <option value="Queretaro">Querétaro</option>
                                    <option value="Quintana Roo">Quintana Roo</option>
                                    <option value="San Luis Potosi">San Luis Potosí</option>
                                    <option value="Sinaloa">Sinaloa</option>
                                    <option value="Sonora">Sonora</option>
                                    <option value="Tabasco">Tabasco</option>
                                    <option value="Tamaulipas">Tamaulipas</option>
                                    <option value="Tlaxcala">Tlaxcala</option>
                                    <option value="Veracruz">Veracruz</option>
                                    <option value="Yucatan">Yucatán</option>
                                    <option value="Zacatecas">Zacatecas</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-4 mtop">
                                <label for="pais" class="form-label">País de origen</label>
                                <select class="form-select" id="pais" name="pais" required autocomplete="off">
                                    <option selected disabled>Seleccione una opcion</option>
                                    <option value="Afganistán">Afganistán</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Alemania">Alemania</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                                    <option value="Arabia Saudita">Arabia Saudita</option>
                                    <option value="Argelia">Argelia</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaiyán">Azerbaiyán</option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bangladés">Bangladés</option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Baréin">Baréin</option>
                                    <option value="Bélgica">Bélgica</option>
                                    <option value="Belice">Belice</option>
                                    <option value="Benín">Benín</option>
                                    <option value="Bielorrusia">Bielorrusia</option>
                                    <option value="Birmania/Myanmar">Birmania/Myanmar</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia y Herzegovina">Bosnia y Herzegovina</option>
                                    <option value="Botsuana">Botsuana</option>
                                    <option value="Brasil">Brasil</option>
                                    <option value="Brunéi">Brunéi</option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">Burkina Faso</option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Bután">Bután</option>
                                    <option value="Cabo Verde">Cabo Verde</option>
                                    <option value="Camboya">Camboya</option>
                                    <option value="Camerún">Camerún</option>
                                    <option value="Canadá">Canadá</option>
                                    <option value="Catar">Catar</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Chipre">Chipre</option>
                                    <option value="Ciudad del Vaticano">Ciudad del Vaticano</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoras">Comoras</option>
                                    <option value="Corea del Norte">Corea del Norte</option>
                                    <option value="Corea del Sur">Corea del Sur</option>
                                    <option value="Costa de Marfil">Costa de Marfil</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Croacia">Croacia</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Dinamarca">Dinamarca</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egipto">Egipto</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Eslovaquia">Eslovaquia</option>
                                    <option value="Eslovenia">Eslovenia</option>
                                    <option value="España">España</option>
                                    <option value="Estados Unidos">Estados Unidos</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Etiopía">Etiopía</option>
                                    <option value="Filipinas">Filipinas</option>
                                    <option value="Finlandia">Finlandia</option>
                                    <option value="Fiyi">Fiyi</option>
                                    <option value="Francia">Francia</option>
                                    <option value="Gabón">Gabón</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Granada">Granada</option>
                                    <option value="Grecia">Grecia</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea ecuatorial">Guinea ecuatorial</option>
                                    <option value="Guinea-Bisáu">Guinea-Bisáu</option>
                                    <option value="Haití">Haití</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hungría">Hungría</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Irak">Irak</option>
                                    <option value="Irán">Irán</option>
                                    <option value="Irlanda">Irlanda</option>
                                    <option value="Islandia">Islandia</option>
                                    <option value="Islas Marshall">Islas Marshall</option>
                                    <option value="Islas Salomón">Islas Salomón</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italia">Italia</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japón">Japón</option>
                                    <option value="Jordania">Jordania</option>
                                    <option value="Kazajistán">Kazajistán</option>
                                    <option value="Kenia">Kenia</option>
                                    <option value="Kirguistán">Kirguistán</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Laos">Laos</option>
                                    <option value="Lesoto">Lesoto</option>
                                    <option value="Letonia">Letonia</option>
                                    <option value="Líbano">Líbano</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libia">Libia</option>
                                    <option value="Liechtenstein">Liechtenstein</option>
                                    <option value="Lituania">Lituania</option>
                                    <option value="Luxemburgo">Luxemburgo</option>
                                    <option value="Macedonia del Norte">Macedonia del Norte</option>
                                    <option value="Madagascar">Madagascar</option>
                                    <option value="Malasia">Malasia</option>
                                    <option value="Malaui">Malaui</option>
                                    <option value="Maldivas">Maldivas</option>
                                    <option value="Malí">Malí</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marruecos">Marruecos</option>
                                    <option value="Mauricio">Mauricio</option>
                                    <option value="Mauritania">Mauritania</option>
                                    <option value="México">México</option>
                                    <option value="Micronesia">Micronesia</option>
                                    <option value="Moldavia">Moldavia</option>
                                    <option value="Mónaco">Mónaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montenegro">Montenegro</option>
                                    <option value="Mozambique">Mozambique</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Níger">Níger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Noruega">Noruega</option>
                                    <option value="Nueva Zelanda">Nueva Zelanda</option>
                                    <option value="Omán">Omán</option>
                                    <option value="Países Bajos">Países Bajos</option>
                                    <option value="Pakistán">Pakistán</option>
                                    <option value="Palaos">Palaos</option>
                                    <option value="Panamá">Panamá</option>
                                    <option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Perú">Perú</option>
                                    <option value="Polonia">Polonia</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Reino Unido">Reino Unido</option>
                                    <option value="República Centroafricana">República Centroafricana</option>
                                    <option value="República Checa">República Checa</option>
                                    <option value="República del Congo">República del Congo</option>
                                    <option value="República Democrática del Congo">República Democrática del Congo</option>
                                    <option value="República Dominicana">República Dominicana</option>
                                    <option value="República Sudafricana">República Sudafricana</option>
                                    <option value="Ruanda">Ruanda</option>
                                    <option value="Rumanía">Rumanía</option>
                                    <option value="Rusia">Rusia</option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
                                    <option value="Santa Lucía">Santa Lucía</option>
                                    <option value="Santo Tomé y Príncipe">Santo Tomé y Príncipe</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leona">Sierra Leona</option>
                                    <option value="Singapur">Singapur</option>
                                    <option value="Siria">Siria</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Suazilandia">Suazilandia</option>
                                    <option value="Sudán">Sudán</option>
                                    <option value="Sudán del Sur">Sudán del Sur</option>
                                    <option value="Suecia">Suecia</option>
                                    <option value="Suiza">Suiza</option>
                                    <option value="Surinam">Surinam</option>
                                    <option value="Tailandia">Tailandia</option>
                                    <option value="Tanzania">Tanzania</option>
                                    <option value="Tayikistán">Tayikistán</option>
                                    <option value="Timor Oriental">Timor Oriental</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                                    <option value="Túnez">Túnez</option>
                                    <option value="Turkmenistán">Turkmenistán</option>
                                    <option value="Turquía">Turquía</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Ucrania">Ucrania</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistán">Uzbekistán</option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">Venezuela</option>
                                    <option value="Vietnam">Vietnam</option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Yibuti">Yibuti</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabue">Zimbabue</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-6 mtop">
                                <label for="instituto" class="form-label">Instituto de procedencia</label>
                                <input type="text" class="form-control" id="instituto" name="instituto" required autocomplete="off">
                            </div>

                            <div class="col-12 col-md-6 mtop">
                                <label for="grado" class="form-label">Ultimo grado de estudios</label>
                                <select class="form-select" id="grado" name="grado" required autocomplete="off">
                                    <option selected disabled>Seleccione una opcion</option>
                                    <option value="Licenciatura">Licenciatura</option>
                                    <option value="Posgrado">Posgrado</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 mtop">
                                <label for="titulacion" class="form-label">Estatus de titulación</label>
                                <select class="form-select" id="titulacion" name="titulacion" required autocomplete="off">
                                    <option selected disabled>Seleccione una opcion</option>
                                    <option value="En proceso">En proceso</option>
                                    <option value="Titulado">Titulado</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6 mtop">
                                <label for="cedula" class="form-label">Número de cedula</label>
                                <input type="text" class="form-control" id="cedula" name="cedula" autocomplete="off">
                            </div>
                            <div class="col-12 col-md-6 mtop">
                                <label for="area" class="form-label">Área en la que te desempeñas</label>
                                <input type="text" class="form-control" id="area" name="area" required autocomplete="off">
                            </div>
                            <div class="col-12 col-md-6 mtop">
                                <label for="nacimiento" class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="nacimiento" name="nacimiento" required autocomplete="off">
                            </div>
                            <div class="col-12 text-center" style="margin-top:20px;">
                                <button type="submit" name="save" class="btn btn-primary">Guardar</button>
                                <a href="informacionpersonal.php" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

                <?php
                    }
                    else
                    {
                        echo "<h4>No se encontro ningún usuario existente</h4>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
