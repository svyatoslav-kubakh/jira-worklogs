<?php
namespace App\Service;

use App\Model\Credentials;

interface CredentialsServiceInterface
{
    /**
     * @param Credentials $credentials
     */
    public function save(Credentials $credentials);

    /**
     * @return Credentials
     */
    public function load();
}
