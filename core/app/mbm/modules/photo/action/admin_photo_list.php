<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
css_set_loadfile('/assets/flatlab/admin/assets/fancybox/source/jquery.fancybox.css', 91);
css_set_loadfile('/assets/flatlab/admin/css/gallery.css', 92);
js_set_loadfile('/assets/flatlab/admin/assets/fancybox/source/jquery.fancybox.js', 91);
js_set_loadfile('/assets/flatlab/admin/js/modernizr.custom.js', 92);
js_set_loadfile('/assets/flatlab/admin/js/toucheffects.js', 93);

$template->set('photos', \Photo::fetchAll());
