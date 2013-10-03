<?php include 'includes/header.php' ?>



                 <!----------------:::::::::::::::::::::::: WED 9-25 :::::::::::::::::::::::::::::-------->   
         <div data-role="page" id="week-1" data-pagination="1">
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
                <h1><a href="index.php"data-ajax="false">Sara</a></h1>
           </div>
           
           
              <div data-role="content" ><!---------------- start content-------->
              
              
              <div data-role="page" id="opciones">
            <div data-theme="a" data-role="header">
                <a data-role="button" data-inline="true" data-direction="reverse" data-theme="a" data-transition="flow"
                href="#principal" data-icon="home" data-iconpos="left" class="ui-btn-left">
                    Volver
                </a>
                <h3 id="nombreAplicacion">
                    Nombre Aplicacion
                </h3>
            </div>
            <div data-role="content">
                <h4 id="tituloOpciones">
                    Opciones
                </h4>
                <div data-role="fieldcontain">
                    <label for="nombreUsuario">
                        Nombre
                    </label>
                    <input id="nombreUsuarioOpciones" placeholder="ej: Juan Lopez" value=""
                    type="text" data-mini="true"/>
                </div>
                <div data-role="fieldcontain">
                    <label for="pesoUsuario">
                        Peso (kg)
                    </label>
                    <input id="pesoUsuario" type="range" name="pesoUsuario" value="95" min="0"
                    max="200" data-highlight="true"/>
                </div>
                <div data-role="fieldcontain">
                    <label for="alturaUsuario">
                        Altura (cm)
                    </label>
                    <input id="alturaUsuario" type="range" name="sliderAltura" value="173" min="0"
                    max="220" data-highlight="true"/>
                </div>
                <div data-role="fieldcontain">
                    <label for="edadUsuario">
                        Edad
                    </label>
                    <input id="edadUsuario" type="range" name="sliderEdad" value="24" min="0"
                    max="70" data-highlight="true"/>
                </div>
                <input id="botonGuardarOpciones" type="submit" data-theme="a" data-icon="edit"
                data-iconpos="left" value="Guardar" data-mini="true"/>
            </div>    
        </div>
             
               </div><!---------------- end content------->       
           

            
                   <?php include 'includes/sara-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->

  
     
     </body>
     </html>