<?php

namespace Bfxmpl\Bundle\BudgetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CompteComptable
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bfxmpl\Bundle\BudgetBundle\Entity\CompteComptableRepository")
 */
class CompteComptable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=6)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity="Bfxmpl\Bundle\BudgetBundle\Entity\Ecriture", mappedBy="compteComptable")
     */
    protected $ecritures;


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
     * Set numero
     *
     * @param string $numero
     * @return CompteComptable
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
     * Set libelle
     *
     * @param string $libelle
     * @return CompteComptable
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ecritures = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ecritures
     *
     * @param \Bfxmpl\Bundle\BudgetBundle\Entity\Ecriture $ecritures
     * @return CompteComptable
     */
    public function addEcriture(\Bfxmpl\Bundle\BudgetBundle\Entity\Ecriture $ecritures)
    {
        $this->ecritures[] = $ecritures;

        return $this;
    }

    /**
     * Remove ecritures
     *
     * @param \Bfxmpl\Bundle\BudgetBundle\Entity\Ecriture $ecritures
     */
    public function removeEcriture(\Bfxmpl\Bundle\BudgetBundle\Entity\Ecriture $ecritures)
    {
        $this->ecritures->removeElement($ecritures);
    }

    /**
     * Get ecritures
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEcritures()
    {
        return $this->ecritures;
    }
}
