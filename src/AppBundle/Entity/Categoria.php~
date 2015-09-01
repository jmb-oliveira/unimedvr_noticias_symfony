<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\Categoria")
 * @ORM\Table(name="unmd_categorias")
 */

class Categoria
{
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;

	/** @ORM\Column(type="string", length=60) **/
	protected $dcategoria;

	/** @ORM\Column(type="boolean") **/
	protected $visivel_desktop;

	/** @ORM\Column(type="boolean") **/
	protected $visivel_mobile;

	/** @ORM\Column(type="integer") **/
	protected $id_autor;

    /** @ORM\Column(type="integer") **/
    protected $created_on;

	/** @ORM\Column(type="integer", nullable=true) **/
	protected $updated_on;

	/** @ORM\Column(type="integer", nullable=true) **/
	protected $removed_on;

    /** @ORM\OneToMany(targetEntity="Noticia", mappedBy="Categoria") **/
    protected $noticias;

    public function __construct()
    {
        $this->noticias = new ArrayCollection();
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
     * Set dcategoria
     *
     * @param string $dcategoria
     * @return Categoria
     */
    public function setDcategoria($dcategoria)
    {
        $this->dcategoria = $dcategoria;

        return $this;
    }

    /**
     * Get dcategoria
     *
     * @return string 
     */
    public function getDcategoria()
    {
        return $this->dcategoria;
    }

    /**
     * Set visivel_desktop
     *
     * @param boolean $visivelDesktop
     * @return Categoria
     */
    public function setVisivelDesktop($visivelDesktop)
    {
        $this->visivel_desktop = $visivelDesktop;

        return $this;
    }

    /**
     * Get visivel_desktop
     *
     * @return boolean 
     */
    public function getVisivelDesktop()
    {
        return $this->visivel_desktop;
    }

    /**
     * Set visivel_mobile
     *
     * @param boolean $visivelMobile
     * @return Categoria
     */
    public function setVisivelMobile($visivelMobile)
    {
        $this->visivel_mobile = $visivelMobile;

        return $this;
    }

    /**
     * Get visivel_mobile
     *
     * @return boolean 
     */
    public function getVisivelMobile()
    {
        return $this->visivel_mobile;
    }

    /**
     * Set id_autor
     *
     * @param integer $idAutor
     * @return Categoria
     */
    public function setIdAutor($idAutor)
    {
        $this->id_autor = $idAutor;

        return $this;
    }

    /**
     * Get id_autor
     *
     * @return integer 
     */
    public function getIdAutor()
    {
        return $this->id_autor;
    }

    /**
     * Set created_on
     *
     * @param integer $createdOn
     * @return Categoria
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
     * @return Categoria
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
     * @return Categoria
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

    /**
     * Add noticias
     *
     * @param \AppBundle\Entity\Noticia $noticias
     * @return Categoria
     */
    public function addNoticia(\AppBundle\Entity\Noticia $noticias)
    {
        $this->noticias[] = $noticias;

        return $this;
    }

    /**
     * Remove noticias
     *
     * @param \AppBundle\Entity\Noticia $noticias
     */
    public function removeNoticia(\AppBundle\Entity\Noticia $noticias)
    {
        $this->noticias->removeElement($noticias);
    }

    /**
     * Get noticias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNoticias()
    {
        return $this->noticias;
    }
}
