<?php


class Bootstrap
{
    public function run()
    {
        $this->autoLoad();
    }

    public function autoLoad()
    {
        spl_autoload_register(function ($className) {
            $path = explode('\\', $className);
            $filepath = APP_PATH;
            $filename = $path[count($path) - 1] . '.php';
            foreach ($path as $key => $val) {
                if ($key === count($path) - 1) {
                    continue;
                }
                $filepath .= DIRECTORY_SEPARATOR . strtolower($val);
            }
            $filepath .= DIRECTORY_SEPARATOR . $filename;

            require_once $filepath;
        });
    }
}