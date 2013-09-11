<?php

namespace calavera\customerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacto
 *
 * @ORM\Table(name="contacto")
 * @ORM\Entity
 */
class Contacto {

    /**
     * @var string
     *
     * @ORM\Column(name="id_contact", type="string", length=36, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idContact;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellido", type="string", length=45, nullable=true)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=45, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="asunto", type="string", length=140, nullable=true)
     */
    private $asunto;

    /**
     * @var string
     *
     * @ORM\Column(name="mensaje", type="text", nullable=true)
     */
    private $mensaje;

    public function __construct($idContact) {
        $this->idContact = $idContact;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Contacto
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return Contacto
     */
    public function setApellido($apellido) {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido() {
        return $this->apellido;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Contacto
     */
    public function setTelefono($telefono) {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono() {
        return $this->telefono;
    }

    /**
     * Set asunto
     *
     * @param string $asunto
     * @return Contacto
     */
    public function setAsunto($asunto) {
        $this->asunto = $asunto;

        return $this;
    }

    /**
     * Get asunto
     *
     * @return string 
     */
    public function getAsunto() {
        return $this->asunto;
    }

    /**
     * Set mensaje
     *
     * @param string $mensaje
     * @return Contacto
     */
    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string 
     */
    public function getMensaje() {
        return $this->mensaje;
    }

    /**
     * Get idContact
     *
     * @return string 
     */
    public function getIdContact() {
        return $this->idContact;
    }

}