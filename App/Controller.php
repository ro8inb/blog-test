<?php


class Controller {

    protected $viewPath = 'Views';
    protected $template = 'layout';

    public function render ($view, $variables = []) {
        ob_start();
        extract($variables);
        require $this->viewPath.$view.'.php';
        $content = ob_get_clean();
        require $this->viewPath.'/'.$this->template.'.php';
    }


}