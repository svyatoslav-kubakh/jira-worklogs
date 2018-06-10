<?php
namespace App\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CredentialsCommand extends Command
{
    const PROFILE_KEY = 'profile';
    const SERVER_KEY = 'server';
    const USER_KEY = 'user';
    const PASSWORD_KEY = 'password';

    protected $arguments = [
        self::PROFILE_KEY => ['Jira profile', 'default'],
    ];

    protected $options = [
        self::SERVER_KEY => ['Server url', 's'],
        self::USER_KEY => ['User', 'u'],
        self::PASSWORD_KEY => ['Password', 'p', true],
    ];

    /**
     * @inheritdoc
     */
    protected function configure()
    {
        parent::configure();
        $this
            ->setName('credentials')
            ->setDescription('Manage credentials')
            ->setAliases(['c']);
    }

    /**
     * @inheritdoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // ...
    }
}
