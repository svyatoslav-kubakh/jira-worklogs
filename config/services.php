<?php

use App\Command\CredentialsCommand;
use App\Command\ReportCommand;

$container
    ->register(CredentialsCommand::class, CredentialsCommand::class);

$container
    ->register(ReportCommand::class, ReportCommand::class);
