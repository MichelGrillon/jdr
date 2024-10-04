<?php

abstract class Personnage implements ErrorMessages
{
    protected $id;
    protected $nom;
    protected $vitesse;
    protected $position;
    protected $repos;
    protected $type;
    protected $civilisation;
    protected $endurance;
    protected $puissance;
    protected $orientation;
    protected $resistance;



    public function errorMessage($message)
    {
        echo $message;
        return $message;
    }

    public function emptyValues()
    {
        return !empty($this->nom);
        return !empty($this->type);
        return !empty($this->civilisation);
    }

    /**
     * Get the value of repos
     */
    public function getRepos()
    {
        return $this->repos;
    }

    /**
     * Set the value of repos
     *
     * @return  self
     */
    public function setRepos($repos)
    {
        $this->repos = $repos;

        return $this;
    }

    /**
     * Get the value of position
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set the value of position
     *
     * @return  self
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get the value of vitesse
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Set the value of vitesse
     *
     * @return  self
     */
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of civilisation
     */
    public function getCivilisation()
    {
        return $this->civilisation;
    }

    /**
     * Set the value of civilisation
     *
     * @return  self
     */
    public function setCivilisation($civilisation)
    {
        $this->civilisation = $civilisation;

        return $this;
    }

    /**
     * Get the value of endurance
     */
    public function getEndurance()
    {
        return $this->endurance;
    }

    /**
     * Set the value of endurance
     *
     * @return  self
     */
    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;

        return $this;
    }

    /**
     * Get the value of force
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set the value of force
     *
     * @return  self
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get the value of orientation
     */
    public function getOrientation()
    {
        return $this->orientation;
    }

    /**
     * Set the value of orientation
     *
     * @return  self
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;

        return $this;
    }

    /**
     * Get the value of resistance
     */
    public function getResistance()
    {
        return $this->resistance;
    }

    /**
     * Set the value of resistance
     *
     * @return  self
     */
    public function setResistance($resistance)
    {
        $this->resistance = $resistance;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
