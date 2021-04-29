<?php


/**
 * Class Logger
 */
class Logger
{
    public static function log(Throwable $e)
    {
        file_put_contents(
            'log.txt',
            '[' . date('Y-m-d H:i:s') . ']'
                // fichier dans lequel l'exception a été jetée
                . $e->getFile()
                // à quelle ligne
                . ' line ' . $e->getLine()
                // son message
                . ' ' . $e->getMessage()
                // la chronologie de ce qui s'est passé dans le code qui a méné à l'exception
                . PHP_EOL . $e->getTraceAsString() . PHP_EOL,
            FILE_APPEND
        );
    }
}
