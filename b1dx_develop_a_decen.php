<?php

namespace B1DX\DecentralizedCLI;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

abstract class DecentralizedCLIParser
{
    private $input;
    private $output;

    public function __construct(InputInterface $input, OutputInterface $output)
    {
        $this->input = $input;
        $this->output = $output;
    }

    public function parse()
    {
        $options = $this->input->getOptions();

        if (isset($options['node'])) {
            $this->parseNodeOption($options['node']);
        }

        if (isset($options['command'])) {
            $this->parseCommandOption($options['command']);
        }
    }

    private function parseNodeOption($node)
    {
        // logic to parse node option
    }

    private function parseCommandOption($command)
    {
        // logic to parse command option
    }

    protected function getNodeConfig($node)
    {
        // logic to get node config
    }

    protected function getCommandConfig($command)
    {
        // logic to get command config
    }
}

class NodeOption
{
    private $name;
    private $url;

    public function __construct($name, $url)
    {
        $this->name = $name;
        $this->url = $url;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getUrl()
    {
        return $this->url;
    }
}

class CommandOption
{
    private $name;
    private $description;

    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }
}

class DecentralizedCLIParserFactory
{
    public static function createParser(InputInterface $input, OutputInterface $output)
    {
        return new DecentralizedCLIParser($input, $output);
    }
}

?>