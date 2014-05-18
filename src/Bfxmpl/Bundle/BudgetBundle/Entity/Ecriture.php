<?php

namespace Bfxmpl\Bundle\BudgetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecriture
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Bfxmpl\Bundle\BudgetBundle\Entity\EcritureRepository")
 */
class Ecriture
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="sens", type="string", length=6)
     */
    private $sens;

    /**
     * @ORM\ManyToOne(targetEntity="Bfxmpl\Bundle\BudgetBundle\Entity\CompteBancaire", inversedBy="ecritures")
     * @ORM\JoinColumn(name="comptebancaire_id", referencedColumnName="id")
     */
    protected $compteBancaire;

    /**
     * @ORM\ManyToOne(targetEntity="Bfxmpl\Bundle\BudgetBundle\Entity\CompteComptable", inversedBy="ecritures")
     * @ORM\JoinColumn(name="comptecomptable_id", referencedColumnName="id")
     */
    protected $compteComptable;

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
     * Set libelle
     *
     * @param string $libelle
     * @return Ecriture
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
     * Set date
     *
     * @param \DateTime $date
     * @return Ecriture
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set montant
     *
     * @param float $montant
     * @return Ecriture
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set sens
     *
     * @param string $sens
     * @return Ecriture
     */
    public function setSens($sens)
    {
        $this->sens = $sens;

        return $this;
    }

    /**
     * Get sens
     *
     * @return string 
     */
    public function getSens()
    {
        return $this->sens;
    }

    /**
     * Set compteBancaire
     *
     * @param \Bfxmpl\Bundle\BudgetBundle\Entity\CompteBancaire $compteBancaire
     * @return Ecriture
     */
    public function setCompteBancaire(CompteBancaire $compteBancaire = null)
    {
        $this->compteBancaire = $compteBancaire;

        return $this;
    }

    /**
     * Get compteBancaire
     *
     * @return \Bfxmpl\Bundle\BudgetBundle\Entity\CompteBancaire 
     */
    public function getCompteBancaire()
    {
        return $this->compteBancaire;
    }

    /**
     * Set compteComptable
     *
     * @param \Bfxmpl\Bundle\BudgetBundle\Entity\CompteComptable $compteComptable
     * @return Ecriture
     */
    public function setCompteComptable(CompteComptable $compteComptable = null)
    {
        $this->compteComptable = $compteComptable;

        return $this;
    }

    /**
     * Get compteComptable
     *
     * @return \Bfxmpl\Bundle\BudgetBundle\Entity\CompteComptable 
     */
    public function getCompteComptable()
    {
        return $this->compteComptable;
    }
}
