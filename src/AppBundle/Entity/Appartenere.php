<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appartenere
 *
 * @ORM\Table(name="appartenere")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AppartenereRepository")
 */
class Appartenere
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idCategoria", type="integer")
     */
    private $idCategoria;

    /**
     * @var int
     *
     * @ORM\Column(name="idProducibile", type="integer")
     */
    private $idProducibile;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idCategoria
     *
     * @param integer $idCategoria
     *
     * @return Appartenere
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return int
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set idProducibile
     *
     * @param integer $idProducibile
     *
     * @return Appartenere
     */
    public function setIdProducibile($idProducibile)
    {
        $this->idProducibile = $idProducibile;

        return $this;
    }

    /**
     * Get idProducibile
     *
     * @return int
     */
    public function getIdProducibile()
    {
        return $this->idProducibile;
    }
}

