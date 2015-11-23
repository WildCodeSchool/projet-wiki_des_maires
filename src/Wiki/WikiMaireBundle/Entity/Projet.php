<?php

namespace Wiki\WikiMaireBundle\Entity;

/**
 * Projet
 */
class Projet
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomprojet;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $daterealisation;

    /**
     * @var string
     */
    private $difficulte;

    /**
     * @var float
     */
    private $cout;

    /**
     * @var string
     */
    private $tailleprojet;

    /**
     * @var integer
     */
    private $bassinPopulation;


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
     * Set nomprojet
     *
     * @param string $nomprojet
     *
     * @return Projet
     */
    public function setNomprojet($nomprojet)
    {
        $this->nomprojet = $nomprojet;

        return $this;
    }

    /**
     * Get nomprojet
     *
     * @return string
     */
    public function getNomprojet()
    {
        return $this->nomprojet;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Projet
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set daterealisation
     *
     * @param \DateTime $daterealisation
     *
     * @return Projet
     */
    public function setDaterealisation($daterealisation)
    {
        $this->daterealisation = $daterealisation;

        return $this;
    }

    /**
     * Get daterealisation
     *
     * @return \DateTime
     */
    public function getDaterealisation()
    {
        return $this->daterealisation;
    }

    /**
     * Set difficulte
     *
     * @param string $difficulte
     *
     * @return Projet
     */
    public function setDifficulte($difficulte)
    {
        $this->difficulte = $difficulte;

        return $this;
    }

    /**
     * Get difficulte
     *
     * @return string
     */
    public function getDifficulte()
    {
        return $this->difficulte;
    }

    /**
     * Set cout
     *
     * @param float $cout
     *
     * @return Projet
     */
    public function setCout($cout)
    {
        $this->cout = $cout;

        return $this;
    }

    /**
     * Get cout
     *
     * @return float
     */
    public function getCout()
    {
        return $this->cout;
    }

    /**
     * Set tailleprojet
     *
     * @param string $tailleprojet
     *
     * @return Projet
     */
    public function setTailleprojet($tailleprojet)
    {
        $this->tailleprojet = $tailleprojet;

        return $this;
    }

    /**
     * Get tailleprojet
     *
     * @return string
     */
    public function getTailleprojet()
    {
        return $this->tailleprojet;
    }

    /**
     * Set bassinPopulation
     *
     * @param integer $bassinPopulation
     *
     * @return Projet
     */
    public function setBassinPopulation($bassinPopulation)
    {
        $this->bassinPopulation = $bassinPopulation;

        return $this;
    }

    /**
     * Get bassinPopulation
     *
     * @return integer
     */
    public function getBassinPopulation()
    {
        return $this->bassinPopulation;
    }
    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     *
     * @return Projet
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Application\Sonata\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
