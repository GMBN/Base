<?php

global $e;

$e->on('preRender', function($dados, $view, $template) {
    if ($dados) {
        $service = new \LevBase\Service\View();
        return $service->render($dados, $view, $template);
    }
});

new \LevBase\Event\View\Seo();
new \LevBase\Event\View\Render();
