<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientiEsterni
 *
 * @ORM\Table(name="clienti_esterni")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClientiEsterniRepository")
 */
class ClientiEsterni
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="Cognome", type="string", length=255)
     */
    private $cognome;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DataNascita", type="date")
     */
    private $dataNascita;

    /**
     * @var string
     *
     * @ORM\Column(name="CodiceFiscale", type="string", length=255)
     */
    private $codiceFiscale;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=255)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="Via", type="string", length=255)
     */
    private $via;

    /**
     * @var string
     *
     * @ORM\Column(name="Numero", type="string", length=255)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="Citta", type="string", length=255)
     */
    private $citta;

    /**
     * @var string
     *
     * @ORM\Column(name="CAP", type="string", length=255)
     */
    private $cAP;

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(name="SitoproduzioneId", type="integer")
     */
    private $sitoproduzioneId;

    /**
     * Set nome
     *
     * @param string $id
     *
     * @return ClientiEsterni
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    
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
     * Set nome
     *
     * @param string $nome
     *
     * @return ClientiEsterni
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set cognome
     *
     * @param string $cognome
     *
     * @return ClientiEsterni
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get cognome
     *
     * @return string
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set dataNascita
     *
     * @param \DateTime $dataNascita
     *
     * @return ClientiEsterni
     */
    public function setDataNascita($dataNascita)
    {
        $this->dataNascita = $dataNascita;

        return $this;
    }

    /**
     * Get dataNascita
     *
     * @return \DateTime
     */
    public function getDataNascita()
    {
        return $this->dataNascita;
    }

    /**
     * Set codiceFiscale
     *
     * @param string $codiceFiscale
     *
     * @return ClientiEsterni
     */
    public function setCodiceFiscale($codiceFiscale)
    {
        $this->codiceFiscale = $codiceFiscale;

        return $this;
    }

    /**
     * Get codiceFiscale
     *
     * @return string
     */
    public function getCodiceFiscale()
    {
        return $this->codiceFiscale;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return ClientiEsterni
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set via
     *
     * @param string $via
     *
     * @return ClientiEsterni
     */
    public function setVia($via)
    {
        $this->via = $via;

        return $this;
    }

    /**
     * Get via
     *
     * @return string
     */
    public function getVia()
    {
        return $this->via;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return ClientiEsterni
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set citta
     *
     * @param string $citta
     *
     * @return ClientiEsterni
     */
    public function setCitta($citta)
    {
        $this->citta = $citta;

        return $this;
    }

    /**
     * Get citta
     *
     * @return string
     */
    public function getCitta()
    {
        return $this->citta;
    }

    /**
     * Set cAP
     *
     * @param string $cAP
     *
     * @return ClientiEsterni
     */
    public function setCAP($cAP)
    {
        $this->cAP = $cAP;

        return $this;
    }

    /**
     * Get cAP
     *
     * @return string
     */
    public function getCAP()
    {
        return $this->cAP;
    }

    /**
     * Set sitoproduzioneId
     *
     * @param integer $sitoproduzioneId
     *
     * @return ClientiEsterni
     */
    public function setSitoproduzioneId($sitoproduzioneId)
    {
        $this->sitoproduzioneId = $sitoproduzioneId;

        return $this;
    }

    /**
     * Get sitoproduzioneId
     *
     * @return int
     */
    public function getSitoproduzioneId()
    {
        return $this->sitoproduzioneId;
    }
}

