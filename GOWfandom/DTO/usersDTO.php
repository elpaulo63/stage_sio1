<?php
class userDTO{
    private $id;
    private $username;
    private $passw;

    public function __construct($id, $username, $passw)
    {
        $this->id = $id;
        $this->username = $username;
        $this->passw = $passw;

    }
    

    
    public function getId() {
        return $this->id;
    }

    
    public function setId($id) {
        $this->id = $id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getPassw() {
        return $this->passw;
    }

    public function setPassw($passw) {
        $this->passw = $passw;
    }
}
?>