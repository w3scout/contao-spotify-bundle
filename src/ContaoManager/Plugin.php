<?php
/**
 * @copyright  Darko Selesi 2017 <http://w3scouts.com>
 * @author     Darko Selesi (w3scout)
 * @package    Spotify
 * @license    LGPL-3.0+
 * @see	       https://github.com/w3scout/spotify.git
 *
 */

namespace W3Scout\SpotifyBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Plugin for the Contao Manager.
 *
 * @author Darko Selesi (w3scout)
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('W3Scout\SpotifyBundle\W3ScoutSpotifyBundle')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle'])
                ->setReplace(['spotify']),
        ];
    }
}