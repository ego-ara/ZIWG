<?php
class Ikasleak implements JsonSerializable 
{
    private $id;
    private $izena;
    private $email;

    public function __construct($id = null, $izena = null, $email = null)
    {
        $this->id    = $id;
        $this->izena = $izena;
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getIzena()
    {
        return $this->izena;
    }

    public function setIzena($izena)
    {
        $this->izena = $izena;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function jsonSerialize(): mixed {
        return [
            'id'    => $this->id,
            'izena' => $this->izena,
            'email' => $this->email
        ];
    }
}
?>
