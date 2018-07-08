<?php
namespace App\Service;

use App\Model\Credentials;

class CredentialsService implements CredentialsServiceInterface
{
    const DEFAULT_CONFIG = '~/.config/jira-worklogs.yml';

    /**
     * @var string
     */
    protected $configFile;

    /**
     * @var string
     */
    protected $profile;

    /**
     * @param string $configFile
     * @param string $profile
     */
    public function __construct($profile, $configFile = self::DEFAULT_CONFIG)
    {
        $this->configFile = $configFile;
        $this->profile = $profile;
    }

    public function save(Credentials $credentials)
    {
        // TODO: Implement save() method.
    }

    public function load()
    {
        // TODO: Implement load() method.
    }
}
