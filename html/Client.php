<?php
class Client
{
    private ?int $user_id = null;
    private ?string $user_name = null;
    private ?string $password = null; 
    private ?string $date = null;

    public function __construct($user_id = null, $user_name, $password, $date)
    {
        $this->user_id = $user_id;
        $this->user_name = $user_name;
        $this->password = $password;
        $this->date = $date;
    }

    /**
     * Get the value of id_user
     */
    public function getIdUser()
    {
        return $this->user_id;
    }

/**
     * Set the value of id_user
     *
     * @return  self
     */
    public function setIdUser($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Set the value of userName
     *
     * @return  self
     */
    public function setUserName($user_name)
    {
        $this->user_name = $user_name;

        return $this;
    }

    /**
     * Get the value of userName
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    

/**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
   

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }
}
