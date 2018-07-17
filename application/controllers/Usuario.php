<?php  
//defined(BASEPATH) OR exit ('acceso denegado');
class Usuario extends CI_Controller {
        
     public function __construct()
        {
                parent::__construct();
                $this->load->helper('url');
                $this->load->model('Model_Usuario');
        }
    
    public function index (){
        $data['contenido']='usuario/index';
        $data['seleccionarPerfil']=$this->Model_Usuario->seleccionarPerfil();
        $data['listaUsuarios']=$this->Model_Usuario->listUsuarios();
        $this->load->view("plantilla",$data);
    }
    
    public function insert (){
        $datos=$this->input->post();
        
        if(isset ($datos)){
            $idperfil= $datos['selectPerfil'];
            $nombres= $datos['nombres'];
            $apellidos= $datos['apellidos'];
            $correo= $datos['email'];
            $telefono= $datos['telefono'];        
            $this->Model_Usuario->insertUsuario($idperfil,$nombres,$apellidos,$correo,$telefono);
            //echo "<script>alert('Usuario Registrado con exito ¡')</script>";
            redirect('');
            
        }
    }
    
    public function delete($id=NULL){
        
        if($id != NULL){
            $this->Model_Usuario->deleteUsuario($id);
        }
        
    }
    
    public function edit($id=NULL){
        
        if($id != NULL){
            $data['contenido']='usuario/edit';
            $data['seleccionarPerfil']=$this->Model_Usuario->seleccionarPerfil();
            $data['datosUsuario']=$this->Model_Usuario->editUsuario($id);
            $this->load->view('plantilla',$data);
        }else{
            redirect('');
        }
        
    }
    
    public function update(){
        
        $datos=$this->input->post();
        
        if(isset ($datos)){
            $idusuario = $datos['idusuario'];
            $idperfil= $datos['selectPerfil'];
            $nombres= $datos['nombres'];
            $apellidos= $datos['apellidos'];
            $correo= $datos['email'];
            $telefono= $datos['telefono'];        
            $this->Model_Usuario->updateUsuario($idusuario,$idperfil,$nombres,$apellidos,$correo,$telefono);
            //echo "<script>alert('Usuario Registrado con exito ¡')</script>";
            redirect('');
            
        }
    }
}
