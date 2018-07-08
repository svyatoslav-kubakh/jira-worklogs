<?php
namespace App\Model;

class Credentials
{
    /** @var string */
    protected $server;

    /** @var string */
    protected $user;

    /** @var string */
    protected $password;

    /**
     * Credentials constructor.
     * @param string $server
     * @param string $user
     * @param string $password
     */
    public function __construct($server, $user, $password)
    {
        $this->server = $server;
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}
