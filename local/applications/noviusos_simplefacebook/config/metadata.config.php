<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

return array(
    'name'    => 'Simple Facebook share',
    'version' => '0.1',
    'provider' => array(
        'name' => 'Novius OS',
    ),
    'icon16' => 'static/apps/noviusos_simplefacebook/img/facebook.png',
    'data_catchers' => array(
        'noviusos_simplefacebook' => array(
            'title' => 'Facebook',
            'description'  => '',
            'iconUrl' => 'static/apps/noviusos_simplefacebook/img/facebook.png',
            'action' => array(
                'action' => 'window.open',
                'url' => 'http://www.facebook.com/sharer/sharer.php?u={{urlencode:absolute_url}}',
            ),
            'onDemand' => true,
            'specified_models' => false,
            'required_data' => array(
                \Nos\DataCatcher::TYPE_URL,
            ),
        ),
    ),
);
