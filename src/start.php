<?php

/**
 * Bootstrapper for creating Twitter Bootstrap markup.
 *
 * @category   HTML/UI
 * @package    Boostrapper
 * @subpackage Twitter
 * @author     Patrick Talmadge - <ptalmadge@gmail.com>
 * @license    MIT License <http://www.opensource.org/licenses/mit>
 * @link       http://laravelbootstrapper.phpfogapp.com/
 *
 * @see        http://twitter.github.com/bootstrap/
 */

// Define main assets
Asset::container('bootstrapper')
    ->bundle('bootstrapper')
    ->add('bootstrap',            'css/bootstrap.min.css')
    ->add('bootstrap-responsive', 'css/bootstrap-responsive.min.css')
    ->add('nav-fix',              'css/nav-fix.css')
    ->add('jquery',               'js/jquery-1.8.3.min.js')
    ->add('bootstrap-js',         'js/bootstrap.min.js', 'jquery');

// Define unminified version of the assets
Asset::container('bootstrapper-unminified')
    ->bundle('bootstrapper')
    ->add('bootstrap',            'css/bootstrap.css')
    ->add('bootstrap-responsive', 'css/bootstrap-responsive.css')
    ->add('nav-fix',              'css/nav-fix.css')
    ->add('jquery',               'js/jquery-1.8.3.js')
    ->add('bootstrap-js',         'js/bootstrap.js', 'jquery');
