<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoriaRepository")
 */
class Categoria 
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
     * @var string
     *
     * @ORM\Column(name="Nome", type="string", length=255, unique=true)
     */
    private $nome;

    /**
     * @var int
     *
     * @ORM\Column(name="CategoriaPadreId", type="integer", nullable=true)
     */
    private $categoriaPadreId;

  


    /**
     * @var string
     *
     * @ORM\Column(name="Descrizione", type="string", length=255, nullable=true)
     */
    private $descrizione;
    
    /**
     * @var string
     *
     * @ORM\Column(name="immagine", type="string", length=255, nullable=true)
     */
    private $immagine;
    
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
     * @return Categoria
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
     * Set categoriaPadreId
     *
     * @param integer $categoriaPadreId
     *
     * @return Categoria
     */
    public function setCategoriaPadreId($categoriaPadreId)
    {
        $this->categoriaPadreId = $categoriaPadreId;

        return $this;
    }

    /**
     * Get categoriaPadreId
     *
     * @return int
     */
    public function getCategoriaPadreId()
    {
        return $this->categoriaPadreId;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return Categoria
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set immagine
     *
     * @param string $immagine
     *
     * @return Categoria
     */    
    public function setImmagine($immagine)
    {
        $this->immagine = $immagine;

        return $this;
    }

    /**
     * Get immagine
     *
     * @return string
     */
    public function getImmagine()
    {
        return $this->immagine;
    }

    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string', 255);
    }

    public function setUp()
    {
        $this->actAs('NestedSet');
    }
}
