<?php
class personnagesDTO
{
    private $id;
    private $nom;
    private $face_id;
    private $role;
    private $mythologie_id;
    private $equipe_id;

    public function __construct($id, $nom, $face_id, $role, $mythologie_id, $equipe_id)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->face_id = $face_id;
        $this->role = $role;
        $this->mythologie_id = $mythologie_id;
        $this->equipe_id = $equipe_id;

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

    }


    public function getface_id()
    {
        return $this->face_id;
    }


    public function setFaceId($face_id)
    {
        $this->face_id = $face_id;
    }


    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;

    }


    public function getMythologieId()
    {
        return $this->mythologie_id;
    }

    public function setMythologieId($mythologie_id)
    {
        $this->mythologie_id = $mythologie_id;

    }

    public function getequipe_id()
    {
        return $this->equipe_id;
    }

    public function setequipe_id($equipe_id)
    {
        $this->equipe_id = $equipe_id;
    }
}
?>