<?php
/**
 * Created by PhpStorm.
 * User: aberdnikov
 * Date: 04.07.2017
 * Time: 20:12
 */

\Larakit\StaticFiles\Manager::package('larakit/sf-slickcarousel')
                            ->usePackage('larakit/sf-jquery')
                            ->setSourceDir('public')
                            ->cssPackage('slick.css')
                            ->cssPackage('slick-theme.css')
                            ->jsPackage('slick.js')
;

\Larakit\NgAdminlte\LkNg::moduleRegister('slickCarousel');

\Larakit\StaticFiles\Manager::package('larakit')
                            ->usePackage('larakit/sf-angular-slickcarousel')
;