<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command as BaseCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Question\Question;

class Command extends BaseCommand
{
    /**
     * @var array
     */
    protected $arguments = [];

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @inheritdoc
     */
    protected function configure()
    {
        parent::configure();
        foreach ($this->arguments as $argumentKey => list($title, $defaults)) {
            $mode = $defaults === null ? InputArgument::REQUIRED : InputArgument::OPTIONAL;
            $this->addArgument($argumentKey, $mode, $title, $defaults);
        }
        foreach ($this->options as $optionKey => list($title, $alias)) {
            $this->addOption($optionKey, $alias, InputOption::VALUE_OPTIONAL, $title);
        }
    }

    /**
     * @inheritdoc
     */
    protected function interact(InputInterface $input, OutputInterface $output)
    {
        /** @var QuestionHelper $questionHelper */
        $questionHelper = $this->getHelper('question');
        foreach ($this->options as $optionKey => $optionInfo) {
            if ($input->getOption($optionKey)) {
                continue;
            }
            $question = new Question($optionInfo[0] . ': ');
            $question->setHidden($optionInfo[2] ?? false);
            $input->setOption($optionKey, $questionHelper->ask($input, $output, $question));
        }
    }
}
