<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\Usuario")
 * @ORM\Table(name="unmd_usuarios")
 */

class Usuario implements UserInterface, \Serializable
{
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	private $id; 

	/** @ORM\Column(type="string", length=60) **/
	private $name;

    /** @ORM\Column(type="string", length=60) **/
    private $username;

    /** @ORM\Column(type="string", length=255) **/
    private $password;

    /** @ORM\Column(type="string", length=255) **/
    private $email;

    /** @ORM\Column(name="is_active", type="boolean") **/
    private $isActive;

    /** @ORM\Column(type="smallint", options={"default" = 1, "comment" = "(1) Author, (2) Admin"}) **/
    private $access_level;

    private $roles;

    public function __construct()
    {
        $this->isActive = true;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getSalt()
    {
        return null;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getRoles()
    {
        switch ($this->getAccessLevel()) {
            case '1':
                return array('ROLE_AUTHOR');
                break;

            case '2':
                return array('ROLE_ADMIN');
                break;
            
            default:
                return array();
                break;
        }
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,            
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,        
        ) = unserialize($serialized);
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Usuario
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Usuario
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set access_level
     *
     * @param boolean $accessLevel
     * @return Usuario
     */
    public function setAccessLevel($accessLevel)
    {
        $this->access_level = $accessLevel;

        return $this;
    }

    /**
     * Get access_level
     *
     * @return boolean 
     */
    public function getAccessLevel()
    {
        return $this->access_level;
    }
}
