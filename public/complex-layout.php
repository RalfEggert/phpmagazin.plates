<?php
/**
 * PHP Magazin: Artikel über Plates
 *
 * @author     Ralf Eggert <r.eggert@travello.de>
 * @link       https://www.travello.de/
 * @copyright  Travello GmbH, 2017
 */

use League\Plates\Engine;

define('PROJECT_ROOT', realpath(__DIR__ . '/..'));

require_once PROJECT_ROOT . '/vendor/autoload.php';

$engine = new Engine();
$engine->setFileExtension('phtml');
$engine->addFolder('layouts', PROJECT_ROOT . '/templates/layouts');
$engine->addFolder('pages', PROJECT_ROOT . '/templates/pages');

$template = $engine->make('pages::complex-layout');

$pages = include PROJECT_ROOT . '/config/pages.php';

echo $template->render(
    [
        'title' => 'Plates - Komplexes Layout',
        'pages' => $pages,
    ]
);
