<?php
namespace calavera\customerBundle\DTO;

/**
 * Description of ContactoDTO
 *
 * @author Angel Barrientos Cruz <uetiko@gmail.com>
 */
class ContactoDTO {

    private $id = NULL;
    private $nombre = NULL;
    private $apellido = NULL;
    private $telefono = NULL;
    private $email = NULL;
    private $asunto = NULL;
    private $mensaje = NULL;
    private $success = NULL;
    /**
     *
     * @var \Swift_Message
     */
    private $message = NULL;
    /**
     *
     * @var \ArrayObject
     */
    private $params = NULL;

    public function __construct($id) {
        $this->id = $id;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getAsunto() {
        return $this->asunto;
    }

    public function setAsunto($asunto) {
        $this->asunto = $asunto;
    }

    public function getMensaje() {
        return $this->mensaje;
    }

    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
    }
    /**
     * 
     * @param boolean $success
     */
    public function setSuccessStatus($success){
        $this->success = $success;
    }
    /**
     * 
     * @return boolean
     */
    public function getSuccessStatus(){
        return $this->success;
    }
    /**
     * 
     * @param \Swift_Message $message
     */
    public function setSwiftMessage($message){
        $this->message = $message;
    }
    /**
     * 
     * @return \Swift_Message
     */
    public function getSwiftMessage(){
        return $this->message;
    }
    
    public function setParams(\ArrayObject $params){
        $this->params = $params;
    }
    
    public function getParams(){
        return $this->params;
    }
    
    public function getParamsToArray(){
        return $this->params->getArrayCopy();
    }

}

?>
