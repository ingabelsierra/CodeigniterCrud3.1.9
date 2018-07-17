<h1>Crud Codeigniter 3.1.9, php 7.2.6, Mysql, Boostrap 3</h1>
<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Inicio</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Consulta</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Registro</a></li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home"></div>
    <div role="tabpanel" class="tab-pane" id="profile">
        <table class="table table-hover">
            <center>
            <thead>
            <th>Id</th>
            <th>Perfil</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th><center>Acciones</center></th>
            </thead>
            
            
            <tbody>
                <?php foreach($listaUsuarios as $value) {?>
                <tr>
                    <td><?php echo $value->id_usuario; ?></td> 
                    <td><?php echo $value->nombre_perfil; ?></td>
                    <td><?php echo $value->nombres; ?></td>
                    <td><?php echo $value->apellidos; ?></td>
                    <td><?php echo $value->correo; ?></td>
                    <td><?php echo $value->telefono; ?></td>
                    <td>
                        <center>
                            <a href="<?php echo base_url('usuario/delete').'/'.$value->id_usuario;?>" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                            <a href="<?php echo base_url('usuario/edit').'/'.$value->id_usuario;?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                        </center>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
        <form method="POST" action="<?php echo base_url('usuario/insert');?>">
    
    
              <div class="form-group">
                <label for="Iperfil">Perfil </label>


                <select class="form-control" name="selectPerfil">
                    <?php
                    foreach ($seleccionarPerfil as $value) { 
                    ?>
                    <option value="<?php echo $value->id_perfil; ?>"> <?php echo $value->nombre_perfil; ?></option>
                    <?php
                    } 
                    ?>             
                </select>
              </div>

              <div class="form-group">
                <label for="Inombres">Nombres </label>
                <input type="text" class="form-control" id="Inombres" name="nombres" placeholder="Nombres">
              </div>

              <div class="form-group">
                <label for="Iapellidos">Apellidos </label>
                <input type="text" class="form-control" id="Iapellidos" name="apellidos" placeholder="Apellidos">
              </div> 

              <div class="form-group">
                <label for="Itelefono">Teléfono </label>
                <input type="text" class="form-control" id="Itelefono" name="telefono" placeholder="Teléfono">
              </div>  

              <div class="form-group">
                <label for="Iemail">Email</label>
                <input type="email" class="form-control" id="Iemail" name="email" placeholder="Email">
              </div>


              <button type="submit" class="btn btn-default">Registrar Usuario</button>
        </form>
    </div>
    
  </div>

</div>





