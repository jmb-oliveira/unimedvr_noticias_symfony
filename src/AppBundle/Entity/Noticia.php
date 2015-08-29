<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\Noticia")
 * @ORM\Table(name="unmd_noticias")
 */

class Noticia
{
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;

	/** @ORM\Column(type="string", length=200) **/
	protected $titulo;

	/** @ORM\Column(type="text") **/
	protected $texto;

	/** @ORM\Column(type="integer") **/
	protected $id_categoria;

	/** @ORM\Column(type="boolean") **/
	protected $visivel_desktop;

	/** @ORM\Column(type="boolean") **/
	protected $visivel_mobile;

	/** @ORM\Column(type="string", length=255) **/
	protected $video_url;

	/** @ORM\Column(type="integer") **/
	protected $publicada_em;

	/** @ORM\Column(type="integer") **/
	protected $id_autor;

	/** @ORM\Column(type="integer") **/
	protected $updated_on;

	/** @ORM\Column(type="integer") **/
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
     * Set titulo
     *
     * @param string $titulo
     * @return Noticia
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set texto
     *
     * @param string $texto
     * @return Noticia
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string 
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set id_categoria
     *
     * @param integer $idCategoria
     * @return Noticia
     */
    public function setIdCategoria($idCategoria)
    {
        $this->id_categoria = $idCategoria;

        return $this;
    }

    /**
     * Get id_categoria
     *
     * @return integer 
     */
    public function getIdCategoria()
    {
        return $this->id_categoria;
    }

    /**
     * Set visivel_desktop
     *
     * @param boolean $visivelDesktop
     * @return Noticia
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
     * @return Noticia
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
     * Set video_url
     *
     * @param string $videoUrl
     * @return Noticia
     */
    public function setVideoUrl($videoUrl)
    {
        $this->video_url = $videoUrl;

        return $this;
    }

    /**
     * Get video_url
     *
     * @return string 
     */
    public function getVideoUrl()
    {
        return $this->video_url;
    }

    /**
     * Set publicada_em
     *
     * @param integer $publicadaEm
     * @return Noticia
     */
    public function setPublicadaEm($publicadaEm)
    {
        $this->publicada_em = $publicadaEm;

        return $this;
    }

    /**
     * Get publicada_em
     *
     * @return integer 
     */
    public function getPublicadaEm()
    {
        return $this->publicada_em;
    }

    /**
     * Set id_autor
     *
     * @param integer $idAutor
     * @return Noticia
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
     * Set updated_on
     *
     * @param integer $updatedOn
     * @return Noticia
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
     * @return Noticia
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
