<?php


namespace Hot\PHPUnit;


class Processor implements ProcessorInterface {
    public function run($command){
        $status = null;
        passthru($command, $status);
        return $status;
    }
}