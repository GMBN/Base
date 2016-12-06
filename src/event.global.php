<?php

global $e;

$e->on('preRender', function($dados, $view, $template) {
    if ($dados) {
        $service = new \Base\Service\View();
        return $service->render($dados, $view, $template);
    }
});

new \Base\Event\View\Seo();
new \Base\Event\View\Render();
