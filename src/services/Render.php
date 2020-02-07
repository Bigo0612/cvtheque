<?php

namespace src\services;

class Render
{
    const TEMPLATES_FOLDER = SRC_FOLDER . '/Views/';
    const TEMPLATE_EXT = '.php';

    // home, array(users -> $users)
    public function render($template, $variables = array())
    {
        $targetFile = self::TEMPLATES_FOLDER . $template . self::TEMPLATE_EXT;
        if (file_exists($targetFile)) {
            ob_start();

            foreach ($variables as $variableName => $variable) {
                $$variableName = $variables[$variableName];
            }

            $currentTime = date('H:i:s');

            include($targetFile);
            $content = ob_get_clean();

            return $content;
        }

        return false;
    }

}
