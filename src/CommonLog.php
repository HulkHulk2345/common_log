<?php

namespace CommonLog;

use Monolog\Formatter\FormatterInterface;
use Monolog\Formatter\JsonFormatter;

class CommonLog
{
    private $formatter;

    /**
     * 格式化工具
     */
    public function setFormatter(FormatterInterface $formatter)
    {
        $this->formatter = $formatter;
        return $this;
    }

    public function log($level, $msg, $action)
    {
        if (!$this->formatter) {
            $this->formatter = new JsonFormatter();
        }
        
        $msg = $this->formatter->format($msg);
    }
}
