<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\Usuario")
 * @ORM\Table(name="unmd_usuarios")
 */

class Usuario
{
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;

    /** @ORM\Column(type="boolean", options={"default" = 1, "comment" = "1- Autor, 2- Admin"}) **/
    protected $acesso;

    /** @ORM\Column(type="boolean", options={"default" = 1}) **/
    protected $habilitado;  

	/** @ORM\Column(type="string", length=60) **/
	protected $dusuario;

    /** @ORM\Column(type="string", length=60) **/
    protected $login;

    /** @ORM\Column(type="string", length=255) **/
    protected $senha;

    /** @ORM\Column(type="string", length=255) **/
    protected $email;

    /** @ORM\Column(type="integer") **/
    protected $created_on;

	/** @ORM\Column(type="integer", nullable=true) **/
	protected $updated_on;

	/** @ORM\Column(type="integer", nullable=true) **/
	protected $removed_on;    


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
     * Set acesso
     *
     * @param boolean $acesso
     * @return Usuario
     */
    public function setAcesso($acesso)
    {
        $this->acesso = $acesso;

        return $this;
    }

    /**
     * Get acesso
     *
     * @return boolean 
     */
    public function getAcesso()
    {
        return $this->acesso;
    }

    /**
     * Set habilitado
     *
     * @param boolean $habilitado
     * @return Usuario
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

        return $this;
    }

    /**
     * Get habilitado
     *
     * @return boolean 
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }

    /**
     * Set dusuario
     *
     * @param string $dusuario
     * @return Usuario
     */
    public function setDusuario($dusuario)
    {
        $this->dusuario = $dusuario;

        return $this;
    }

    /**
     * Get dusuario
     *
     * @return string 
     */
    public function getDusuario()
    {
        return $this->dusuario;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Usuario
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set senha
     *
     * @param string $senha
     * @return Usuario
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get senha
     *
     * @return string 
     */
    public function getSenha()
    {
        return $this->senha;
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
     * Set created_on
     *
     * @param integer $createdOn
     * @return Usuario
     */
    public function setCreatedOn($createdOn)
    {
        $this->created_on = $createdOn;

        return $this;
    }

    /**
     * Get created_on
     *
     * @return integer 
     */
    public function getCreatedOn()
    {
        return $this->created_on;
    }

    /**
     * Set updated_on
     *
     * @param integer $updatedOn
     * @return Usuario
     */
    public function setUpdatedOn($updatedOn)
    {
        $this->updated_on = $updatedOn;

        return $this;
    }

    /**
     * Get updated_on
     *
     * @return integer 
     */
    public function getUpdatedOn()
    {
        return $this->updated_on;
    }

    /**
     * Set removed_on
     *
     * @param integer $removedOn
     * @return Usuario
     */
    public function setRemovedOn($removedOn)
    {
        $this->removed_on = $removedOn;

        return $this;
    }

    /**
     * Get removed_on
     *
     * @return integer 
     */
    public function getRemovedOn()
    {
        return $this->removed_on;
    }
}
