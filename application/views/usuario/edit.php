<form method="POST" action="<?php echo base_url('usuario/update');?>">
              
              <?php foreach($datosUsuario as $value) {?>
             
              <div class="form-group">
                <input type="hidden" name="idusuario" value="<?php echo $value->id_usuario?>"
                <label for="Iperfil">Perfil </label>


           
                    <?php
                    $lista=array();
                    foreach ($seleccionarPerfil as $registro) {
                        $lista[$registro->id_perfil]=$registro->nombre_perfil;
                    } 
                    echo form_dropdown('selectPerfil',$lista,$value->id_perfil,'class="form-control"');
                    ?>
                    
                                
             
              </div>

              <div class="form-group">
                <label for="Inombres">Nombres </label>
                <input type="text" class="form-control" id="Inombres" name="nombres" value="<?php echo $value->nombres;?>">
              </div>

              <div class="form-group">
                <label for="Iapellidos">Apellidos </label>
                <input type="text" class="form-control" id="Iapellidos" name="apellidos" value="<?php echo $value->apellidos;?>">
              </div> 

              <div class="form-group">
                <label for="Itelefono">Teléfono </label>
                <input type="text" class="form-control" id="Itelefono" name="telefono" value="<?php echo $value->telefono;?>">
              </div>  

              <div class="form-group">
                <label for="Iemail">Email</label>
                <input type="email" class="form-control" id="Iemail" name="email" value="<?php echo $value->correo;?>">
              </div>
    
              <?php
               } 
              ?>


              <button type="submit" class="btn btn-default">Editar Usuario</button>
</form>
