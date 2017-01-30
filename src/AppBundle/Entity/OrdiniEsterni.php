<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdiniEsterni
 *
 * @ORM\Table(name="ordini_esterni")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrdiniEsterniRepository")
 */
class OrdiniEsterni
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Data", type="datetime")
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="Quantita", type="string", length=255)
     */
    private $quantita;

    /**
     * @var string
     *
     * @ORM\Column(name="Sconto", type="string", length=255)
     */
    private $sconto;

    /**
     * @var string
     *
     * @ORM\Column(name="Commento", type="string", length=255)
     */
    private $commento;

    /**
     * @var string
     *
     * @ORM\Column(name="ClienteEsternoId", type="string", length=255)
     */
    private $clienteEsternoId;

    /**
     * @var string
     *
     * @ORM\Column(name="SitoProduzioneId", type="string", length=255)
     * @ORM\Id
     */
    private $sitoProduzioneId;


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
     * Set data
     *
     * @param \DateTime $data
     *
     * @return OrdiniEsterni
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set quantita
     *
     * @param string $quantita
     *
     * @return OrdiniEsterni
     */
    public function setQuantita($quantita)
    {
        $this->quantita = $quantita;

        return $this;
    }

    /**
     * Get quantita
     *
     * @return string
     */
    public function getQuantita()
    {
        return $this->quantita;
    }

    /**
     * Set sconto
     *
     * @param string $sconto
     *
     * @return OrdiniEsterni
     */
    public function setSconto($sconto)
    {
        $this->sconto = $sconto;

        return $this;
    }

    /**
     * Get sconto
     *
     * @return string
     */
    public function getSconto()
    {
        return $this->sconto;
    }

    /**
     * Set commento
     *
     * @param string $commento
     *
     * @return OrdiniEsterni
     */
    public function setCommento($commento)
    {
        $this->commento = $commento;

        return $this;
    }

    /**
     * Get commento
     *
     * @return string
     */
    public function getCommento()
    {
        return $this->commento;
    }

    /**
     * Set clienteEsternoId
     *
     * @param string $clienteEsternoId
     *
     * @return OrdiniEsterni
     */
    public function setClienteEsternoId($clienteEsternoId)
    {
        $this->clienteEsternoId = $clienteEsternoId;

        return $this;
    }

    /**
     * Get clienteEsternoId
     *
     * @return string
     */
    public function getClienteEsternoId()
    {
        return $this->clienteEsternoId;
    }

    /**
     * Set sitoProduzioneId
     *
     * @param string $sitoProduzioneId
     *
     * @return OrdiniEsterni
     */
    public function setSitoProduzioneId($sitoProduzioneId)
    {
        $this->sitoProduzioneId = $sitoProduzioneId;

        return $this;
    }

    /**
     * Get sitoProduzioneId
     *
     * @return string
     */
    public function getSitoProduzioneId()
    {
        return $this->sitoProduzioneId;
    }
}

