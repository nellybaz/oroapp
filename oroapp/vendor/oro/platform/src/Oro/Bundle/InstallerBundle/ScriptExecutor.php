<?php

namespace Oro\Bundle\InstallerBundle;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ScriptExecutor
{
    const ORO_SCRIPT_ANNOTATION = 'OroScript';

    /**
     * @var OutputInterface
     */
    protected $output;

    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var CommandExecutor
     */
    protected $commandExecutor;

    /**
     * @param OutputInterface    $output
     * @param ContainerInterface $container
     * @param CommandExecutor    $commandExecutor
     */
    public function __construct(
        OutputInterface $output,
        ContainerInterface $container,
        CommandExecutor $commandExecutor
    ) {
        $this->output          = $output;
        $this->container       = $container;
        $this->commandExecutor = $commandExecutor;
    }

    /**
     * Run script
     *
     * @param string $fileName
     */
    public function runScript($fileName)
    {
        if (is_file($fileName)) {
            $tokens = [];
            if (preg_match(
                '/@' . self::ORO_SCRIPT_ANNOTATION . '(\(("([\w -]*)")?\))?/i',
                file_get_contents($fileName),
                $tokens
            )
            ) {
                $scriptLabel = count($tokens) === 4 && $tokens[3]
                    ? sprintf('"%s" (%s)', $tokens[3], $fileName)
                    : sprintf('"%s"', $fileName);
                $this->output->writeln(
                    sprintf('Launching %s script', $scriptLabel)
                );
                ob_start();
                // this variables defined here to be used in included files without $this, just a shortcut
                $container       = $this->container;
                $commandExecutor = $this->commandExecutor;
                include($fileName);
                $scriptOutput = ob_get_contents();
                ob_end_clean();
                $this->output->writeln($scriptOutput);
            } else {
                $this->output->writeln(
                    sprintf(
                        'The "%s" script must contains @%s annotation',
                        $fileName,
                        self::ORO_SCRIPT_ANNOTATION
                    )
                );
            }
        } else {
            $this->output->writeln(sprintf('File "%s" not found', $fileName));
        }
    }
}
