<?php
namespace calavera\customerBundle\DTO;
/**
 * Description of CustomerDTO
 *
 * @author Angel Barrientos Cruz <uetiko@gmail.com>
 */
class CustomerDTO {
    private $nombre = null;
    private $apellidos = null;
    private $email = null;
    private $gender = null;
    private $password = null;
    private $userName = null;
    
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }
    
    public function getApellidos(){
        return $this->apellidos;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function setGender($gender){
        $this->gender = $gender;
    }
    
    public function getGender(){
        return $this->gender;
    }
    
    public function setPassword($password){
        $this->password = $password;
    }
    
    public function getPassword(){
        return $this->password;
    }
    
    public function setUserName($userName){
        $this->userName = $userName;
    }
    public function getUserName(){
        return $this->userName;
    }
}
