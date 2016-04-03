<?php

namespace Droid\Plugin\Haigha;

class DroidPlugin
{
    public function __construct($droid)
    {
        $this->droid = $droid;
    }
    
    public function getCommands()
    {
        $commands = [];
        $command = new \Haigha\Command\LoadCommand();
        $command->setName('haigha:load');
        $commands[] = $command;
        return $commands;
    }
}
