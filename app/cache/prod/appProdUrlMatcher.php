<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // jyg_revestimientos_page_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'jyg_revestimientos_page_index');
            }

            return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::indexAction',  '_route' => 'jyg_revestimientos_page_index',);
        }

        // jyg_revestimientos_page_productos
        if ($pathinfo === '/productos') {
            return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::productosAction',  '_route' => 'jyg_revestimientos_page_productos',);
        }

        // jyg_revestimientos_page_galeria
        if ($pathinfo === '/galeria') {
            return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::galeriaAction',  '_route' => 'jyg_revestimientos_page_galeria',);
        }

        // jyg_revestimientos_page_contacto
        if ($pathinfo === '/contacto') {
            return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::contactoAction',  '_route' => 'jyg_revestimientos_page_contacto',);
        }

        // jyg_revestimientos_page_ayuda
        if ($pathinfo === '/ayuda') {
            return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::ayudaAction',  '_route' => 'jyg_revestimientos_page_ayuda',);
        }

        // jyg_revestimientos_page_mision
        if ($pathinfo === '/mision') {
            return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::misionAction',  '_route' => 'jyg_revestimientos_page_mision',);
        }

        // jyg_revestimientos_page_vision
        if ($pathinfo === '/vision') {
            return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::visionAction',  '_route' => 'jyg_revestimientos_page_vision',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/item')) {
            // item
            if (rtrim($pathinfo, '/') === '/item') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'item');
                }

                return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ItemController::indexAction',  '_route' => 'item',);
            }

            // item_show
            if (preg_match('#^/item/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'item_show')), array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ItemController::showAction',));
            }

            // item_new
            if ($pathinfo === '/item/new') {
                return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ItemController::newAction',  '_route' => 'item_new',);
            }

            // item_create
            if ($pathinfo === '/item/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_item_create;
                }

                return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ItemController::createAction',  '_route' => 'item_create',);
            }
            not_item_create:

            // item_edit
            if (preg_match('#^/item/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'item_edit')), array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ItemController::editAction',));
            }

            // item_update
            if (preg_match('#^/item/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_item_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'item_update')), array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ItemController::updateAction',));
            }
            not_item_update:

            // item_delete
            if (preg_match('#^/item/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_item_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'item_delete')), array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\ItemController::deleteAction',));
            }
            not_item_delete:

        }

        if (0 === strpos($pathinfo, '/venta')) {
            // venta
            if (rtrim($pathinfo, '/') === '/venta') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'venta');
                }

                return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\VentaController::indexAction',  '_route' => 'venta',);
            }

            // venta_show
            if (preg_match('#^/venta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venta_show')), array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\VentaController::showAction',));
            }

            // venta_new
            if ($pathinfo === '/venta/new') {
                return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\VentaController::newAction',  '_route' => 'venta_new',);
            }

            // venta_create
            if ($pathinfo === '/venta/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_venta_create;
                }

                return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\VentaController::createAction',  '_route' => 'venta_create',);
            }
            not_venta_create:

            // venta_edit
            if (preg_match('#^/venta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venta_edit')), array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\VentaController::editAction',));
            }

            // venta_update
            if (preg_match('#^/venta/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_venta_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venta_update')), array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\VentaController::updateAction',));
            }
            not_venta_update:

            // venta_delete
            if (preg_match('#^/venta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_venta_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venta_delete')), array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\VentaController::deleteAction',));
            }
            not_venta_delete:

        }

        if (0 === strpos($pathinfo, '/bitacora')) {
            // bitacora
            if (rtrim($pathinfo, '/') === '/bitacora') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'bitacora');
                }

                return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\BitacoraController::indexAction',  '_route' => 'bitacora',);
            }

            // bitacora_show
            if (preg_match('#^/bitacora/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'bitacora_show')), array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\BitacoraController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario
            if (rtrim($pathinfo, '/') === '/usuario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'usuario');
                }

                return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'usuario',);
            }

            // usuario_show
            if (preg_match('#^/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\UsuarioController::showAction',));
            }

            // usuario_new
            if ($pathinfo === '/usuario/new') {
                return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\UsuarioController::newAction',  '_route' => 'usuario_new',);
            }

            // usuario_create
            if ($pathinfo === '/usuario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_usuario_create;
                }

                return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\UsuarioController::createAction',  '_route' => 'usuario_create',);
            }
            not_usuario_create:

            // usuario_edit
            if (preg_match('#^/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\UsuarioController::editAction',));
            }

            // usuario_update
            if (preg_match('#^/usuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_usuario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\UsuarioController::updateAction',));
            }
            not_usuario_update:

            // usuario_delete
            if (preg_match('#^/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_usuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_delete')), array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\UsuarioController::deleteAction',));
            }
            not_usuario_delete:

        }

        // JYGRevestimientosBundle_inicio
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_JYGRevestimientosBundle_inicio;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'JYGRevestimientosBundle_inicio');
            }

            return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::indexAction',  '_route' => 'JYGRevestimientosBundle_inicio',);
        }
        not_JYGRevestimientosBundle_inicio:

        // JYGRevestimientosBundle_productos
        if ($pathinfo === '/productos') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_JYGRevestimientosBundle_productos;
            }

            return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::productosAction',  '_route' => 'JYGRevestimientosBundle_productos',);
        }
        not_JYGRevestimientosBundle_productos:

        // JYGRevestimientosBundle_galeria
        if ($pathinfo === '/galeria') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_JYGRevestimientosBundle_galeria;
            }

            return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::galeriaAction',  '_route' => 'JYGRevestimientosBundle_galeria',);
        }
        not_JYGRevestimientosBundle_galeria:

        // JYGRevestimientosBundle_contacto
        if ($pathinfo === '/contacto') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_JYGRevestimientosBundle_contacto;
            }

            return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::contactoAction',  '_route' => 'JYGRevestimientosBundle_contacto',);
        }
        not_JYGRevestimientosBundle_contacto:

        // JYGRevestimientosBundle_ayuda
        if ($pathinfo === '/ayuda') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_JYGRevestimientosBundle_ayuda;
            }

            return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::ayudaAction',  '_route' => 'JYGRevestimientosBundle_ayuda',);
        }
        not_JYGRevestimientosBundle_ayuda:

        // JYGRevestimientosBundle_mision
        if ($pathinfo === '/mision') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_JYGRevestimientosBundle_mision;
            }

            return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::misionAction',  '_route' => 'JYGRevestimientosBundle_mision',);
        }
        not_JYGRevestimientosBundle_mision:

        // JYGRevestimientosBundle_vision
        if ($pathinfo === '/vision') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_JYGRevestimientosBundle_vision;
            }

            return array (  '_controller' => 'JYG\\RevestimientosBundle\\Controller\\PageController::visionAction',  '_route' => 'JYGRevestimientosBundle_vision',);
        }
        not_JYGRevestimientosBundle_vision:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
