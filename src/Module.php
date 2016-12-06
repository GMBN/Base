<?php

namespace Base;

class Module {

    public function getConfig() {
        return require __DIR__ . '/config.php';
    }

    public function getEventGlobal() {
        return require __DIR__ . '/event.global.php';
    }

    public function getDir() {
        return __DIR__;
    }

}
