<?php

namespace calavera\customerBundle\DAO;

use calavera\customerBundle\Entity\Contacts;
use calavera\customerBundle\Entity\Calls;
use calavera\customerBundle\Entity\CallsContacts;
use Doctrine\ORM\EntityNotFoundException;
use Doctrine\ORM\ORMInvalidArgumentException;
use \Exception;
use calavera\customerBundle\DTO\ContactoDTO;
use calavera\customerBundle\JJUtils\Utils;
use calavera\customerBundle\Entity\EmailAddrBeanRel;
use calavera\customerBundle\Entity\EmailAddresses;

/**
 * Description of SugarCRMDAO
 *
 * @author silent
 */
class SugarCRMDAO {

    /**
     *
     * @var Doctrine\ORM\EntityManager 
     */
    private $em = NULL;

    public function __construct(\Doctrine\ORM\EntityManager $em) {
        $this->em = $em;
    }

    public function registraLlamadaSugar(ContactoDTO $to) {
        switch ($this->creaContacto($to)) {
            case TRUE:
                if (FALSE == $this->existsEmailSugar($to->getEmail())) {
                    try {
                        $this->registraEmailSugar($to);
                    } catch (Exception $exc) {
                        
                    }
                    try {
                        $this->registraEmailAddressBean($to, $this->getIdEmailSugar($to->getEmail()));
                    } catch (Exception $exc) {
                        echo $exc->getTraceAsString();
                    }
                }
                break;
            case FALSE:
                break;
        }
    }

    public function registraEmailSugar(ContactoDTO $to) {
        $success = FALSE;
        $emailAddress = new EmailAddresses();
        $emailAddress->setId(Utils::createIdSugar());
        $emailAddress->setEmailAddress($to->getEmail());
        $emailAddress->setEmailAddressCaps(strtoupper($to->getEmail()));
        $emailAddress->setDateCreated(date('d-m-Y H:i:s'));
        $emailAddress->setDateModified(date('d-m-Y H:i:s'));
        $emailAddress->setOptOut(FALSE);
        $emailAddress->setDeleted(FALSE);
        $emailAddress->setInvalidEmail(FALSE);
        try {
            $this->em->persist($emailAddress);
            $this->em->flush();
            $success = TRUE;
        } catch (Exception $exc) {
            throw new \Exception("No se pudo crear cuenta");
        }
        return $success;
    }

    public function existsEmailSugar($email) {
        $exist = FALSE;
        $dql = "select COUNT(m.id) from calavera\customerBundle\Entity\EmailAddresses m where m.emailAddress = '$email'";
        try {
            $query = $this->em->createQuery($dql);
            $result = $query->getSingleScalarResult();
        } catch (\Doctrine\ORM\NoResultException $exc) {
            echo $exc->getTraceAsString();
        }
        if ($result != 0) {
            $exist = TRUE;
        }
        return $exist;
    }

    public function getIdEmailSugar($email) {
        $emailAddress = new EmailAddresses();
        $dql = "select m.id from calavera\customerBundle\Entity\EmailAddresses m where m.emailAddress = '$email'";
        try {
            $query = $this->em->createQuery($dql);
            $emailAddress = $query->getOneOrNullResult();
        } catch (\Doctrine\ORM\NoResultException $exc) {
            echo $exc->getTraceAsString();
        }
        return $emailAddress->getId();
    }

    public function registraEmailAddressBean(ContactoDTO $to, $idEmail) {
        $emailaddBean = new EmailAddrBeanRel(Utils::createIdSugar());
        $emailaddBean->setEmailAddressId($idEmail);
        $emailaddBean->setBeanId($to->getId());
        $emailaddBean->setBeanModule('Contacts');
        $emailaddBean->setPrimaryAddress(TRUE);
        $emailaddBean->setReplyToAddress(FALSE);
        $emailaddBean->setDateCreated(date('d-m-Y H:i:s'));
        $emailaddBean->setDateModified(date('d-m-Y H:i:s'));
        try {
            $this->em->persist($emailaddBean);
            $this->em->flush();
        } catch (Exception $exc) {
            
        }
    }

    /**
     * 
     * @param \calavera\customerBundle\DTO\ContactoDTO $to
     * @return boolean
     */
    public function creaContacto(ContactoDTO $to) {
        $success = FALSE;
        $contacto = new Contacts();
        $contacto->setId($to->getId());
        $contacto->setFirstName($to->getNombre());
        $contacto->setLastName($to->getApellido());
        $contacto->setTitle($to->getAsunto());
        $contacto->setPhoneWork($to->getTelefono());
        $contacto->setDescription($to->getMensaje());
        try {
            $this->em->persist($contacto);
            $this->em->flush();
            $success = true;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $success;
    }

    public function createCallSugar(ContactoDTO $to) {
        $calls = new Calls(Utils::createIdSugar());
        $calls->setName($to->getAsunto());
        $calls->setDateEntered(Utils::getCurrentDateAndTime());
        $calls->setDateModified(Utils::getCurrentDateAndTime());
        $calls->setModifiedUserId('1');
        $calls->setCreatedBy('1');
        $calls->setDescription($to->getMensaje());
        $calls->setDeleted(FALSE);
        $calls->setAssignedUserId('1');
        $calls->setDurationHours(0);
        $calls->setDurationMinutes(15);
        $calls->setDateStart(Utils::calculateCallDateStart());
        $calls->setDateEnd(Utils::calculateCallDateEnd());
        $calls->setParentType('Contacts');
        $calls->setStatus('Planned');
        $calls->setDirection('outbound');
        $calls->setParentId($to->getId());
        $calls->setReminderTime(1800);
        $calls->setEmailReminderTime(-1);
        $calls->setEmailReminderSent(FALSE);
        $calls->setRepeatInterval(1);
        try {
            $this->em->persist($calls);
            $this->em->flush();
        } catch (Exception $e) {
            
        }
        return $calls->getId();
    }
    
    public function createCallContactSugar(ContactoDTO $to, $idCall){
        $callContact = new CallsContacts(Utils::createIdSugar());
        $callContact->setCallId($idCall);
        $callContact->setContactId($to->getId());
        $callContact->setRequired('1');
        $callContact->setAcceptStatus('none');
        $callContact->setDateModified(Utils::getCurrentDateAndTime());
        $callContact->setDeleted(FALSE);
    }

}
