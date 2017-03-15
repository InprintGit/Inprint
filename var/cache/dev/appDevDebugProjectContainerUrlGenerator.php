<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Ahome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AmministratoreController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/a/home/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Acategorie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AmministratoreController::categorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/a/categoria/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'AnuovaCategoria' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AmministratoreController::nuovaCategoriaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/a/categoria/nuova',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Aarticoli' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AmministratoreController::articoliAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/a/articoli/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'AnuovoArticolo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AmministratoreController::nuovoArticoloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/a/articoli/nuovo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Aattributi' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AmministratoreController::attributiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/a/attributi/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Aproducibili' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AmministratoreController::producibiliAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/a/producibili/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Aconferma' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AmministratoreController::confermaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/a/conferma/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'albero' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AmministratoreController::TreeJsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/a/treeJs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nuovaCategoriaJson' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AmministratoreController::nuovaCategoriaJson',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/a/nuovaCategoriaJson',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Anuovoattributo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AmministratoreController::nuovoAttributo',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/a/nuovoattributo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Acaricanattributo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AmministratoreController::caricaNuoviAttributi',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/a/caricaAttributi',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Asalvattributo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AmministratoreController::salvaNuoviAttributi',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/a/salvaAttributi',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'AgruppoAttributo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AmministratoreController::GruppiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/a/GruppiAttributo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'AnuovoProducibile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AmministratoreController::nuovoProducibileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/a/Producibli/nuovo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Ghome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GraficoController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/g/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Gconclusi' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GraficoController::graficheAccettateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/g/gconclusi',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Lavinattesa' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GraficoController::attesaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/g/lavinattesa',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Gcomunicazioni' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GraficoController::comunicazioniAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/g/Gcomunicazioni',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Gincorso' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\GraficoController::incorsoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/g/lavinproduzione',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LoginController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Ohome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\OperatoreController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/o/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'cliente' => array (  0 =>   array (    0 => 'idcliente',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::clienteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idcliente',    ),    1 =>     array (      0 => 'text',      1 => '/cliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ordine' => array (  0 =>   array (    0 => 'idordine',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::ordineAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '',      2 => '[^/]++',      3 => 'idordine',    ),    1 =>     array (      0 => 'text',      1 => '/ordine',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nuovocliente' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::ncAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nuovocliente',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'riepilogo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::riepilogoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/riepilogo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'conferma' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::confermaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/conferma',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'clienti' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::clientiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clienti',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'nuovoordine' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::nordineAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nuovoordine',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'catalogo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::catalogoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/catalogo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ordini' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::ordiniAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ordini',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'immagine' => array (  0 =>   array (    0 => 'idgrafica',    1 => 'idcliente',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::immagineAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idcliente',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idgrafica',    ),    2 =>     array (      0 => 'text',      1 => '/immagine',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'articolo' => array (  0 =>   array (    0 => 'idproducibile',    1 => 'precedente',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::articoloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'precedente',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idproducibile',    ),    2 =>     array (      0 => 'text',      1 => '/articolo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'articolo2' => array (  0 =>   array (    0 => 'idarticolo',    1 => 'idcliente',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::articolo2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idcliente',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idarticolo',    ),    3 =>     array (      0 => 'text',      1 => '/articolo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'bozza' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::bozzaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/bozza/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'annulla' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::annullaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/annulla',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'sospendi' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::sospendiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/sospendi',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'visualizza' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::visualizzaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/visualizza',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'prova' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::provaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/prova',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'JsonCategoria' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::catalogoJson',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categoriaJson',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'JsonNomeCategoria' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::nomeCategoriaJson',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categoriaNomeJson',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'JsonProdottiCategoria' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::ProdottiCategoriaJson',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ProdotticategoriaNomeJson',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'articoloJSON' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PrinkinoController::articoloJSONAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/articoloJson',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'SPhome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ResponsabileProduzioneController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/SP/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'SPoperatori' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ResponsabileProduzioneController::operatoriAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/SP/operatori',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'SPdaeseguire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ResponsabileProduzioneController::daeseguireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/SP/daeseguire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'SPinproduzione' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ResponsabileProduzioneController::inProduzioneAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/SP/inProduzione',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'SPconclusi' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ResponsabileProduzioneController::conclusiAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/SP/conclusi',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'SPordine' => array (  0 =>   array (    0 => 'idordine',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ResponsabileProduzioneController::ordineAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idordine',    ),    1 =>     array (      0 => 'text',      1 => '/SP/ordine',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'SPnuovoOperatore' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ResponsabileProduzioneController::nuovooperatoreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/SP/operatori/nuovo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'SPoperatore' => array (  0 =>   array (    0 => 'idOperatore',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ResponsabileProduzioneController::operatoreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idOperatore',    ),    1 =>     array (      0 => 'text',      1 => '/SP/operatori',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
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
