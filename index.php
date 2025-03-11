<!DOCTYPE html>
<html>

<head>
     <title>INGRESAR DATOS </title>

</head>

<body>
     <div clase="container">
          <div clase="row">
               <h2 style="text-align:center">NOTIFICACIÓN DE CASO SOSPECHOSO DE INFECCIÓN ASOCIADA AL CUIDADO DE LA SALUD</h2>
               <h3 style="text-align:center">UNIDAD DE VIGILANCIA EPIDEMIOLÓGICA HOSPITALARIA</h3>

               <br>

               <div class="row table-responsive">
                    <form action="guardar.php" method="post">
                         <p>Num. de afiliación <input type="text" name="nss"></p>

                         <p>Nombre completo <input type="text" name="nombre"></p>

                         <p>Edad <input type="text" name="edad"></p>
                         <p>Sexo: 
                         <label for="F">Femenino</label> <input type="radio"name="sexo" value="Masculino">
                         <label for="M">Masculino</label><input type="radio"name="sexo" value="Femenino">

                         <p>Servicio <!--<input type="text" name="servicio">-->
                              <select name="servicio" id="">
                                   <option value="Medicina interna">Medicina interna</option>
                                   <option value="Neurocirugia">Neurocirugia</option>
                                   <option value="Cirugia General">Cirugia General</option>
                                   <option value="Pediatria">Pediatria</option>
                                   <option value="Traumatologia">Traumatologia</option>
                                   <option value="Urgencias">Urgencias</option>
                                   <option value="Neumologia">Neumologia</option>
                              </select>
                         </p>

                         <p>Cama <input type="text" name="cama"></p>

                         <p>Piso <input type="text" name="sala"></p>

                         <!--<p>Fecha de ingreso a hospitalización <input type="date" name="fechaIn"></p>-->

                         <p>Sitio de infección
                              <select name="sitioInfeccion" id="">
                                   <option value="Neumonia asociada a ventilador">Neumonia asociada a ventilador</option>
                                   <option value="Ivu asociada a sonda">Ivu asociada a sonda</option>
                                   <option value="Its relacionada a cateter">Its relacionada a cateter</option>
                                   <option value="Infeccion de sitio quirurgico">Infeccion de sitio quirurgico</option>
                                   <option value="Otras">Otras</option>
                              </select>
                         </p>

                         <p>Diagnósticos <input type="text" name="diagnostico"></p>

                         <p>Fecha de notificacion <input type="date" name="fechaNoti"></p>

                         <p>Medico tratante/quien notifica <!--<input type="text" name="medico">-->
                              <select name="medico" id="">
                                   <option value="Medico">Medico</option>
                                   <option value="Enfermera">Enfermera</option>
                                   <option value="Sanitarista">Sanitarista</option>
                              </select>
                         </p>

                         <button type="submit" class="btn btn-primary">nuevo registro</button>
                    </form>
               </div>
          </div>


</body>

</html>