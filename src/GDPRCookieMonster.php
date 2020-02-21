<?php
/**
 * GDPR Cookie Monster plugin for Craft CMS 3.x
 *
 * A Craft CMS plugin the unleashes a monster that eats cookies for GDPR
 *
 * @link      https://ecce.uk
 * @copyright Copyright (c) 2020 ecce
 */

namespace Eccemedia\GDPRCookieMonster;


use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * Class GDPR Cookie Monster
 *
 * @author    ecce-media
 * @package   GDPRCookieMonster
 * @since     0.0.1
 *
 */
class GDPRCookieMonster extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var GDPRCookieMonster
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '0.0.1';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'gdpr-cookie-monster',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
