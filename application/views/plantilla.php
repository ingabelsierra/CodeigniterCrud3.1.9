<!Doctype html>
<html lang="es">
    <head>
        <title>CRUD</title>
        <link href="<?php echo base_url('bootstrap/css/bootstrap.css')?>" rel="stylesheet">
        <script src="<?php echo base_url('js/jquery-3.3.1.min.js')?>"></script>
        <script src="<?php echo base_url('bootstrap/js/bootstrap.js')?>"></script>
    </head>
    <body>
        <header>
            
        </header>
        
        <div id="container">
            <!-- div dinamico-->
            <div class="col-md-5">
                 
                <?php 
                $this->load->view($contenido);
                ?>
                
            </div>
            
        </div>
        
        <footer>
          
        </footer>
    </body>
 
</html>
