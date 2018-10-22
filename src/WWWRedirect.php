<?php

namespace Roots\Bedrock;

/**
 * Class WWWRedirect
 * @package Roots\Bedrock
 * @author Dima Minka
 * @link https://cdk.co.il/
 */
class WWWRedirect
{
    /**
     * Make 301 redirect on production environment
     */
    public function addRedirect()
    {
        if (strncmp($_SERVER['HTTP_HOST'], 'www.', 4) !== 0) {
            header('Location: https://' . 'www.' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], true, 301);
            exit;
        }

        if ($_SERVER["HTTPS"] != "on" && php_sapi_name() != 'cli') {
            header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], true, 301);
            exit;
        }
    }
}
