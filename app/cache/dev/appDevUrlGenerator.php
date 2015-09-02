<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jyg_revestimientos_page_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jyg_revestimientos_page_productos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::productosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/productos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jyg_revestimientos_page_galeria' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::galeriaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/galeria',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jyg_revestimientos_page_contacto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::contactoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contacto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jyg_revestimientos_page_ayuda' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::ayudaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ayuda',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jyg_revestimientos_page_mision' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::misionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mision',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jyg_revestimientos_page_vision' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::visionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vision',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
<<<<<<< HEAD
        'cliente' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ClienteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cliente/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cliente_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ClienteController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cliente_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ClienteController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cliente/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cliente_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ClienteController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cliente/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cliente_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ClienteController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cliente_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ClienteController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cliente_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ClienteController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/cliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
=======
        'material' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\MaterialController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/material/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'material_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\MaterialController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/material',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'material_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\MaterialController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/material/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'material_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\MaterialController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/material/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'material_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\MaterialController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/material',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'material_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\MaterialController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/material',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'material_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\MaterialController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/material',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deposito' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\DepositoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deposito/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deposito_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\DepositoController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/deposito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deposito_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\DepositoController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deposito/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deposito_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\DepositoController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deposito/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deposito_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\DepositoController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/deposito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deposito_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\DepositoController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/deposito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'deposito_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\DepositoController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/deposito',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
>>>>>>> 0d0ead52bb1352b193e5beee6d867bce38b40134
        'item' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ItemController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/item/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'item_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ItemController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/item',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'item_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ItemController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/item/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'item_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ItemController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/item/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'item_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ItemController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/item',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'item_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ItemController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/item',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'item_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ItemController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/item',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'venta' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\VentaController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/venta/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'venta_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\VentaController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/venta',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'venta_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\VentaController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/venta/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'venta_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\VentaController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/venta/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'venta_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\VentaController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/venta',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'venta_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\VentaController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/venta',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'venta_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\VentaController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/venta',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bitacora' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\BitacoraController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bitacora/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bitacora_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\BitacoraController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/bitacora',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\UsuarioController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\UsuarioController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\UsuarioController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\UsuarioController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/usuario/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\UsuarioController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\UsuarioController::updateAction',  ),  2 =>   array (    '_method' => 'POST|PUT',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'usuario_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\UsuarioController::deleteAction',  ),  2 =>   array (    '_method' => 'POST|DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/usuario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'JYGRevestimientosBundle_inicio' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'JYGRevestimientosBundle_productos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::productosAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/productos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'JYGRevestimientosBundle_galeria' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::galeriaAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/galeria',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'JYGRevestimientosBundle_contacto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::contactoAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contacto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'JYGRevestimientosBundle_ayuda' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::ayudaAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ayuda',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'JYGRevestimientosBundle_mision' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::misionAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mision',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'JYGRevestimientosBundle_vision' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::visionAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/vision',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
