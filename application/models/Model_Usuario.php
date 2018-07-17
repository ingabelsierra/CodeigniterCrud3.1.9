<?php

class Model_Usuario extends CI_Model {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function seleccionarPerfil(){
        $query=$this->db->query("select * from perfil");
        return $query->result();
    }
    
    public function insertUsuario($idp,$nom,$ap,$cor,$tel){
        
        $arrayDatos= array (
            'id_perfil'=>$idp,
            'nombres'=>$nom,
            'apellidos'=>$ap,
            'correo'=>$cor,
            'telefono'=>$tel
            
            
        );
        
        $this->db->insert('usuario',$arrayDatos);
        //echo "<script>alert('Usuario Registrado con exito ¡')</script>";
    }
    
    public function listUsuarios(){
        $query=$this->db->query("select * from usuario u inner join perfil p on u.id_perfil=p.id_perfil");
        return $query->result();
    }
    
    public function deleteUsuario($id){
        
        $this->db->where('id_usuario',$id);
        $this->db->delete('usuario');
        redirect('');
    }
    
    public function editUsuario($id){
        
        $consulta=$this->db->query("select * from usuario u inner join perfil p on u.id_perfil=p.id_perfil where u.id_usuario=$id");
        
        return $consulta->result();
    }
    
    public function updateUsuario($idusuario,$idperfil,$nombres,$apellidos,$correo,$telefono){
        
        $array= array (
            //'id_usuario'=>$idusuario,
            'id_perfil'=>$idperfil,
            'nombres'=>$nombres,
            'apellidos'=>$apellidos,
            'correo'=>$correo,
            'telefono'=>$telefono
            
        );
        
        $this->db->where('id_usuario',$idusuario);
        $this->db->update('usuario',$array);
        redirect('');
        
    }
}

