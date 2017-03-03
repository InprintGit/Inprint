<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // Ahome
            if (rtrim($pathinfo, '/') === '/a/home') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Ahome');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::homeAction',  '_route' => 'Ahome',);
            }

            if (0 === strpos($pathinfo, '/a/categoria')) {
                // Acategorie
                if (rtrim($pathinfo, '/') === '/a/categoria') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'Acategorie');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::categorieAction',  '_route' => 'Acategorie',);
                }

                // AnuovaCategoria
                if ($pathinfo === '/a/categoria/nuova') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::nuovaCategoriaAction',  '_route' => 'AnuovaCategoria',);
                }

            }

            if (0 === strpos($pathinfo, '/a/a')) {
                if (0 === strpos($pathinfo, '/a/articoli')) {
                    // Aarticoli
                    if (rtrim($pathinfo, '/') === '/a/articoli') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'Aarticoli');
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::articoliAction',  '_route' => 'Aarticoli',);
                    }

                    // AnuovoArticolo
                    if ($pathinfo === '/a/articoli/nuovo') {
                        return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::nuovoArticoloAction',  '_route' => 'AnuovoArticolo',);
                    }

                }

                // Aattributi
                if (rtrim($pathinfo, '/') === '/a/attributi') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'Aattributi');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::attributiAction',  '_route' => 'Aattributi',);
                }

            }

            // Aproducibili
            if (rtrim($pathinfo, '/') === '/a/producibili') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Aproducibili');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::producibiliAction',  '_route' => 'Aproducibili',);
            }

            // Aconferma
            if (rtrim($pathinfo, '/') === '/a/conferma') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Aconferma');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::confermaAction',  '_route' => 'Aconferma',);
            }

            // albero
            if ($pathinfo === '/a/treeJs') {
                return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::TreeJsAction',  '_route' => 'albero',);
            }

            if (0 === strpos($pathinfo, '/a/nuov')) {
                // nuovaCategoriaJson
                if ($pathinfo === '/a/nuovaCategoriaJson') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::nuovaCategoriaJson',  '_route' => 'nuovaCategoriaJson',);
                }

                // Anuovoattributo
                if ($pathinfo === '/a/nuovoattributo') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::nuovoAttributo',  '_route' => 'Anuovoattributo',);
                }

            }

            // Acaricanattributo
            if ($pathinfo === '/a/caricaAttributi') {
                return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::caricaNuoviAttributi',  '_route' => 'Acaricanattributo',);
            }

            // Asalvattributo
            if ($pathinfo === '/a/salvaAttributi') {
                return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::salvaNuoviAttributi',  '_route' => 'Asalvattributo',);
            }

            // AgruppoAttributo
            if ($pathinfo === '/a/GruppiAttributo') {
                return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::GruppiAction',  '_route' => 'AgruppoAttributo',);
            }

            // AnuovoProducibile
            if ($pathinfo === '/a/Producibli/nuovo') {
                return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::nuovoProducibileAction',  '_route' => 'AnuovoProducibile',);
            }

            // AnuovoProducibileJson
            if ($pathinfo === '/a/nuovoProducibileJson') {
                return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::nuovoProducibileJsonAction',  '_route' => 'AnuovoProducibileJson',);
            }

            // Aset
            if ($pathinfo === '/a/setAttributi') {
                return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::setAttributiAction',  '_route' => 'Aset',);
            }

            if (0 === strpos($pathinfo, '/a/nuovo/set')) {
                // AnuovoGruppo
                if ($pathinfo === '/a/nuovo/set') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::nuovoGruppoAction',  '_route' => 'AnuovoGruppo',);
                }

                // AcreaSet
                if ($pathinfo === '/a/nuovo/set2') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::creaGruppoAction',  '_route' => 'AcreaSet',);
                }

            }

            if (0 === strpos($pathinfo, '/a/s')) {
                // AspecificheJSON
                if ($pathinfo === '/a/specifiche') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::caricaSpecificheJSON',  '_route' => 'AspecificheJSON',);
                }

                // nuovoArticoloJSON
                if ($pathinfo === '/a/salvaArticoloJson') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::salvaArticoloJson',  '_route' => 'nuovoArticoloJSON',);
                }

            }

            // ricercaArticolo
            if ($pathinfo === '/articolo/SearchJSON') {
                return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::articoloSearchAction',  '_route' => 'ricercaArticolo',);
            }

            // ricercaAttributo
            if ($pathinfo === '/attributo/SearchJSON') {
                return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::attributoSearchAction',  '_route' => 'ricercaAttributo',);
            }

        }

        // ricercaCategoria
        if ($pathinfo === '/categoria/SearchJSON') {
            return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::categoriaSearchAction',  '_route' => 'ricercaCategoria',);
        }

        // ricercaProducibile
        if ($pathinfo === '/producibile/SearchJSON') {
            return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::producibileSearchAction',  '_route' => 'ricercaProducibile',);
        }

        // ricercaSetAttributi
        if ($pathinfo === '/setAttributi/SearchJSON') {
            return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::setAttributiSearchAction',  '_route' => 'ricercaSetAttributi',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/a/categoria')) {
                // Acategoria
                if (preg_match('#^/a/categoria/(?P<idCategoria>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Acategoria')), array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::showCategoriaAction',));
                }

                // AEliminaCategoria
                if ($pathinfo === '/a/categoriaeliminaJSON') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::eliminaCategoriaAction',  '_route' => 'AEliminaCategoria',);
                }

            }

            if (0 === strpos($pathinfo, '/a/articolo')) {
                // Aarticolo
                if (preg_match('#^/a/articolo/(?P<idArticolo>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'Aarticolo')), array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::showArticoloAction',));
                }

                // AEliminaArticolo
                if ($pathinfo === '/a/articoloEliminaJSON') {
                    return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::eliminaArticoloAction',  '_route' => 'AEliminaArticolo',);
                }

            }

            // Aproducibile
            if (0 === strpos($pathinfo, '/a/producibile') && preg_match('#^/a/producibile/(?P<idProducibile>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Aproducibile')), array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::showProducibileAction',));
            }

            // AEliminaProducibile
            if ($pathinfo === '/a/eliminaProducibileJson') {
                return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::eliminaProducibileAction',  '_route' => 'AEliminaProducibile',);
            }

            // ASetAttributi
            if (0 === strpos($pathinfo, '/a/setAttributo') && preg_match('#^/a/setAttributo/(?P<idSetAttributi>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ASetAttributi')), array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::showSetAttributiAction',));
            }

            // AEliminaSet
            if ($pathinfo === '/a/eliminaSetJSON') {
                return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::eliminaSetAction',  '_route' => 'AEliminaSet',);
            }

            // AAttributo
            if (0 === strpos($pathinfo, '/a/Attributo') && preg_match('#^/a/Attributo/(?P<idAttributo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'AAttributo')), array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::showAttributoAction',));
            }

            // AEliminaAttributo
            if ($pathinfo === '/a/eliminaAttributoJSON') {
                return array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::eliminaAttributoAction',  '_route' => 'AEliminaAttributo',);
            }

            // AModificaAttributo
            if (0 === strpos($pathinfo, '/a/Attributo/modifica') && preg_match('#^/a/Attributo/modifica/(?P<idAttributo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'AModificaAttributo')), array (  '_controller' => 'AppBundle\\Controller\\AmministratoreController::modificaAttributoAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/g')) {
            // Ghome
            if ($pathinfo === '/g/home') {
                return array (  '_controller' => 'AppBundle\\Controller\\GraficoController::homeAction',  '_route' => 'Ghome',);
            }

            // Gconclusi
            if ($pathinfo === '/g/gconclusi') {
                return array (  '_controller' => 'AppBundle\\Controller\\GraficoController::graficheAccettateAction',  '_route' => 'Gconclusi',);
            }

            // Lavinattesa
            if ($pathinfo === '/g/lavinattesa') {
                return array (  '_controller' => 'AppBundle\\Controller\\GraficoController::attesaAction',  '_route' => 'Lavinattesa',);
            }

            // Gcomunicazioni
            if ($pathinfo === '/g/Gcomunicazioni') {
                return array (  '_controller' => 'AppBundle\\Controller\\GraficoController::comunicazioniAction',  '_route' => 'Gcomunicazioni',);
            }

            // Gincorso
            if ($pathinfo === '/g/lavinproduzione') {
                return array (  '_controller' => 'AppBundle\\Controller\\GraficoController::incorsoAction',  '_route' => 'Gincorso',);
            }

        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\LoginController::showAction',  '_route' => 'login',);
        }

        // Ohome
        if ($pathinfo === '/o/home') {
            return array (  '_controller' => 'AppBundle\\Controller\\OperatoreController::homeAction',  '_route' => 'Ohome',);
        }

        // home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::homeAction',  '_route' => 'home',);
        }

        // cliente
        if (0 === strpos($pathinfo, '/cliente') && preg_match('#^/cliente/(?P<idcliente>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente')), array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::clienteAction',));
        }

        // ordine
        if (0 === strpos($pathinfo, '/ordine') && preg_match('#^/ordine(?P<idordine>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ordine')), array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::ordineAction',));
        }

        // nuovocliente
        if ($pathinfo === '/nuovocliente') {
            return array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::ncAction',  '_route' => 'nuovocliente',);
        }

        // riepilogo
        if ($pathinfo === '/riepilogo') {
            return array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::riepilogoAction',  '_route' => 'riepilogo',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // conferma
            if ($pathinfo === '/conferma') {
                return array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::confermaAction',  '_route' => 'conferma',);
            }

            // clienti
            if ($pathinfo === '/clienti') {
                return array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::clientiAction',  '_route' => 'clienti',);
            }

        }

        // nuovoordine
        if ($pathinfo === '/nuovoordine') {
            return array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::nordineAction',  '_route' => 'nuovoordine',);
        }

        // catalogo
        if ($pathinfo === '/catalogo') {
            return array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::catalogoAction',  '_route' => 'catalogo',);
        }

        // ordini
        if ($pathinfo === '/ordini') {
            return array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::ordiniAction',  '_route' => 'ordini',);
        }

        // immagine
        if (0 === strpos($pathinfo, '/immagine') && preg_match('#^/immagine/(?P<idgrafica>[^/]++)/(?P<idcliente>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'immagine')), array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::immagineAction',));
        }

        if (0 === strpos($pathinfo, '/articolo')) {
            // articolo
            if (preg_match('#^/articolo/(?P<idproducibile>[^/]++)/(?P<precedente>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'articolo')), array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::articoloAction',));
            }

            // articolo2
            if (preg_match('#^/articolo/(?P<idarticolo>[^/]++)/(?P<idcliente>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'articolo2');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'articolo2')), array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::articolo2Action',));
            }

        }

        // bozza
        if (rtrim($pathinfo, '/') === '/bozza') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'bozza');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::bozzaAction',  '_route' => 'bozza',);
        }

        // annulla
        if ($pathinfo === '/annulla') {
            return array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::annullaAction',  '_route' => 'annulla',);
        }

        // sospendi
        if ($pathinfo === '/sospendi') {
            return array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::sospendiAction',  '_route' => 'sospendi',);
        }

        // visualizza
        if ($pathinfo === '/visualizza') {
            return array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::visualizzaAction',  '_route' => 'visualizza',);
        }

        // prova
        if ($pathinfo === '/prova') {
            return array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::provaAction',  '_route' => 'prova',);
        }

        if (0 === strpos($pathinfo, '/categoria')) {
            // JsonCategoria
            if ($pathinfo === '/categoriaJson') {
                return array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::catalogoJson',  '_route' => 'JsonCategoria',);
            }

            // JsonNomeCategoria
            if ($pathinfo === '/categoriaNomeJson') {
                return array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::nomeCategoriaJson',  '_route' => 'JsonNomeCategoria',);
            }

        }

        // JsonProdottiCategoria
        if ($pathinfo === '/ProdotticategoriaNomeJson') {
            return array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::ProdottiCategoriaJson',  '_route' => 'JsonProdottiCategoria',);
        }

        // articoloJSON
        if ($pathinfo === '/articoloJson') {
            return array (  '_controller' => 'AppBundle\\Controller\\PrinkinoController::articoloJSONAction',  '_route' => 'articoloJSON',);
        }

        if (0 === strpos($pathinfo, '/SP')) {
            // SPhome
            if ($pathinfo === '/SP/home') {
                return array (  '_controller' => 'AppBundle\\Controller\\ResponsabileProduzioneController::homeAction',  '_route' => 'SPhome',);
            }

            // SPoperatori
            if ($pathinfo === '/SP/operatori') {
                return array (  '_controller' => 'AppBundle\\Controller\\ResponsabileProduzioneController::operatoriAction',  '_route' => 'SPoperatori',);
            }

            // SPdaeseguire
            if ($pathinfo === '/SP/daeseguire') {
                return array (  '_controller' => 'AppBundle\\Controller\\ResponsabileProduzioneController::daeseguireAction',  '_route' => 'SPdaeseguire',);
            }

            // SPinproduzione
            if ($pathinfo === '/SP/inProduzione') {
                return array (  '_controller' => 'AppBundle\\Controller\\ResponsabileProduzioneController::inProduzioneAction',  '_route' => 'SPinproduzione',);
            }

            // SPconclusi
            if ($pathinfo === '/SP/conclusi') {
                return array (  '_controller' => 'AppBundle\\Controller\\ResponsabileProduzioneController::conclusiAction',  '_route' => 'SPconclusi',);
            }

            if (0 === strpos($pathinfo, '/SP/o')) {
                // SPordine
                if (0 === strpos($pathinfo, '/SP/ordine') && preg_match('#^/SP/ordine/(?P<idordine>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'SPordine')), array (  '_controller' => 'AppBundle\\Controller\\ResponsabileProduzioneController::ordineAction',));
                }

                if (0 === strpos($pathinfo, '/SP/operatori')) {
                    // SPnuovoOperatore
                    if ($pathinfo === '/SP/operatori/nuovo') {
                        return array (  '_controller' => 'AppBundle\\Controller\\ResponsabileProduzioneController::nuovooperatoreAction',  '_route' => 'SPnuovoOperatore',);
                    }

                    // SPoperatore
                    if (preg_match('#^/SP/operatori/(?P<idOperatore>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'SPoperatore')), array (  '_controller' => 'AppBundle\\Controller\\ResponsabileProduzioneController::operatoreAction',));
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
