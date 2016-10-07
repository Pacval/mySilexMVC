<?php

namespace App\Users\Entity;

class User
{
    protected $id;

    protected $nom;

    protected $prenom;

    protected $age;

    protected $ville;

    // Constructeur
    public function __construct($id, $nom, $prenom, $age, $ville)
    {
        $this->id = $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
        $this->ville = $ville;
    }

    // Setter
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
    }



    // Getter
    public function getId()
    {
        return $this->id;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getVille()
    {
        return $this->ville;
    }

    public function toArray()
    {
        $array = array();
        $array['id'] = $this->id;
        $array['nom'] = $this->nom;
        $array['prenom'] = $this->prenom;
        $array['age'] = $this->age;
        $array['ville'] = $this->ville;

        return $array;
    }
}
