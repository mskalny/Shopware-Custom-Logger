<?php
/**
 * @category  CustomLogger
 * @package   MskalnyCustomLogger
 * @author    Maciej Skalny <mjskalny@gmail.com>
 */

namespace MskalnyCustomLogger\Services;

use Monolog\Logger as MonologLogger;
use Monolog\Handler\HandlerInterface;
use Monolog\Handler\StreamHandler;

/**
 * Class Logger
 *
 * @package MskalnyCustomLogger\Services
 */
class Logger extends MonologLogger
{
    /**
     * Logs directory.
     */
    const LOG_DIR = '/var/log/';

    /**
     * Log file extension.
     */
    const LOG_EXT = '.log';

    /**
     * @var string
     */
    protected $rootDir;

    /**
     * Logger constructor.
     *
     * @param string $name
     * @param string $rootDir
     * @param array $handlers
     * @param array $processors
     */
    public function __construct(
        string $name,
        string $rootDir,
        array $handlers = [],
        array $processors = []
    ) {
        $this->rootDir = $rootDir;

        parent::__construct($name, $handlers, $processors);
    }

    /**
     * Pushes a handler on to the stack.
     *
     * @param HandlerInterface $handler
     *
     * @return $this
     *
     * @throws \Exception
     */
    public function pushHandler(HandlerInterface $handler): self
    {
        $handler = new StreamHandler(
            $this->rootDir . self::LOG_DIR . $this->name . self::LOG_EXT,
            MonologLogger::DEBUG
        );

        parent::pushHandler($handler);

        return $this;
    }
}
