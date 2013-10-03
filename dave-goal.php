<?php include 'includes/header.php' ?>



                 <!----------------:::::::::::::::::::::::: WED 9-25 :::::::::::::::::::::::::::::-------->   
        <div data-role="page" id="home">
       <?php include 'includes/meta-header.php' ?><!---------------- start page-------->
          <div data-role="header" data-theme="c" data-position="fixed" data-id="footer">
                     <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
                <h1><a href="index.php"data-ajax="false">dave</a></h1>
           </div>
           
           
              <div data-role="content" ><!---------------- start content-------->
              
                    <div data-role="fieldcontain">
                    <label for="pesoUsuario">
                       LIKE 
                    </label>
                    <input id="pesoUsuario" type="range" name="pesoUsuario" value="100" min="0"
                    max="200" data-highlight="true"/>
                </div>
                <div data-role="fieldcontain">
                    <label for="alturaUsuario">
                       UM
                    </label>
                    <input id="alturaUsuario" type="range" name="sliderAltura" value="100" min="0"
                    max="200" data-highlight="true"/>
                </div>
                <div data-role="fieldcontain">
                    <label for="edadUsuario">
                       YOU KNOW
                    </label>
                    <input id="edadUsuario" type="range" name="sliderEdad" value="100" min="0"
                    max="200" data-highlight="true"/>
                </div>
                <input id="botonGuardarOpciones" type="submit" data-theme="d" 
               value="save" data-mini="true"/>
           
      
             
               </div><!---------------- end content------->       
           

            
                   <?php include 'includes/dave-footer.php' ?><!---------------- page footer-------->
              </div><!---------------- end page-------->

  
     
     </body>
     </html>