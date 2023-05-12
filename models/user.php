<?php
class User{
    private $userid;
    private $username;
    private $password;

    public function getUserid(){return $this->userid;}
    public function getUsername(){return $this->username;}
    public function getPassword(){return $this->password;}

    public function __construct($userid, $username,$password){

        $this->userid= $userid;
        $this->username= $username;
        $this->password=$password;
    }
    public function __toString()
    {
        return $this->username;
    }
}
?>