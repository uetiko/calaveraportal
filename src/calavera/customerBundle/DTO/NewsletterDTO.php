<?php
namespace calavera\customerBundle\DTO;
/**
 * transer object para los datos de newsletter
 *
 * @author Angel Barrientos <uetiko@gmail.com>
 */
class NewsletterDTO {
    private $gender;
    private $email;
    private $status;
    /**
     * set gender
     * @param string $gender
     */
    public function setGender($gender){
        $this->gender = $gender;
    }
    /**
     * return gender.
     * @return string
     */
    public function getGender(){
        return $this->gender;
    }
    /**
     * 
     * @param string $email
     */
    public function setEmail($email){
        $this->email = $email;
    }
    /**
     * 
     * @return string
     */
    public function getEmail(){
        return $this->email;
    }
    
    public function setStatus($status) {
        $this->status = $status;
    }
    /**
     * 
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }
}
