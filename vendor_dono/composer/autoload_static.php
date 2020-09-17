<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdfc0099856cc66e134a415325717e8ab
{
    public static $files = array (
        '9b38cf48e83f5d8f60375221cd213eee' => __DIR__ . '/..' . '/phpstan/phpstan/bootstrap.php',
        'c14057a02afc95b84dc5bf85d98c5b66' => __DIR__ . '/..' . '/julien731/wp-dismissible-notices-handler/handler.php',
        'ff8834a662873e3e689a4283b27598d2' => __DIR__ . '/..' . '/julien731/wp-dismissible-notices-handler/includes/helper-functions.php',
        '0d59ee240a4cd96ddbb4ff164fccea4d' => __DIR__ . '/..' . '/symfony/polyfill-php73/bootstrap.php',
        'a2c48002d05f7782d8b603bd2bcb5252' => __DIR__ . '/..' . '/johnbillion/extended-cpts/extended-cpts.php',
        'a50f2d2ba04e0c6b552331bf2bdeba41' => __DIR__ . '/..' . '/julien731/wp-review-me/review.php',
        'e67733b1c67d30ae0534fc358ce6ccd9' => __DIR__ . '/..' . '/wp-cache-remember/wp-cache-remember.php',
        '33463dafc79559dfcabd4bb559eb4b57' => __DIR__ . '/..' . '/wpbp/cpt_columns/CPT_Columns.php',
        'ab9c306a707f0fda77eaa634dc02fca6' => __DIR__ . '/..' . '/wpbp/cronplus/cronplus.php',
        '1ed2e86416e62cbd8a94629858dae65f' => __DIR__ . '/..' . '/wpbp/debug/debug.php',
        '9b6589aa6a8382a7459438252aee60ae' => __DIR__ . '/..' . '/wpbp/fakepage/fake-page.php',
        '5883ee4b643b7e87de56323bec06b24c' => __DIR__ . '/..' . '/wpbp/language/language.php',
        '174f5545298fc44fc2ee140f23d4bfef' => __DIR__ . '/..' . '/wpbp/pointerplus/pointerplus.php',
        '1fa8862ea6a31004f198b1e9b7b6b499' => __DIR__ . '/..' . '/wpbp/template/template.php',
        'e7a23b473708f4b0fb5b99fe921bee83' => __DIR__ . '/..' . '/wpbp/widgets-helper/wph-widget.php',
        '0509b34a4bd7aebefeac629c9dc8a978' => __DIR__ . '/..' . '/wpdesk/wp-notice/src/WPDesk/notice-functions.php',
        '241d2b5b9c1e680c0770b006b0271156' => __DIR__ . '/..' . '/yahnis-elsts/plugin-update-checker/load-v4p9.php',
        '2d130972ab3066918649e0c2c9109d03' => __DIR__ . '/..' . '/wp-custom-bulk-actions/custom-bulk-actions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPDesk\\PluginBuilder\\' => 21,
            'WPDesk\\Notice\\' => 14,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php73\\' => 23,
        ),
        'P' => 
        array (
            'PHPStan\\WordPress\\' => 18,
        ),
        'M' => 
        array (
            'Micropackage\\Requirements\\' => 26,
            'Micropackage\\Internationalization\\' => 34,
        ),
        'E' => 
        array (
            'ExtCPTs\\Tests\\' => 14,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
            'Coachs\\Internals\\' => 17,
            'Coachs\\Integrations\\' => 20,
            'Coachs\\Frontend\\' => 16,
            'Coachs\\Engine\\' => 14,
            'Coachs\\Backend\\' => 15,
            'Coachs\\Ajax\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPDesk\\PluginBuilder\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpdesk/wp-builder/src',
        ),
        'WPDesk\\Notice\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpdesk/wp-notice/src/WPDesk/Notice',
        ),
        'Symfony\\Polyfill\\Php73\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php73',
        ),
        'PHPStan\\WordPress\\' => 
        array (
            0 => __DIR__ . '/..' . '/szepeviktor/phpstan-wordpress/src',
        ),
        'Micropackage\\Requirements\\' => 
        array (
            0 => __DIR__ . '/..' . '/micropackage/requirements/src',
        ),
        'Micropackage\\Internationalization\\' => 
        array (
            0 => __DIR__ . '/..' . '/micropackage/internationalization/src',
        ),
        'ExtCPTs\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/johnbillion/extended-cpts/tests/phpunit',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Coachs\\Internals\\' => 
        array (
            0 => __DIR__ . '/../..' . '/internals',
        ),
        'Coachs\\Integrations\\' => 
        array (
            0 => __DIR__ . '/../..' . '/integrations',
        ),
        'Coachs\\Frontend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/frontend',
        ),
        'Coachs\\Engine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/engine',
        ),
        'Coachs\\Backend\\' => 
        array (
            0 => __DIR__ . '/../..' . '/backend',
        ),
        'Coachs\\Ajax\\' => 
        array (
            0 => __DIR__ . '/../..' . '/ajax',
        ),
    );

    public static $classMap = array (
        'Coachs\\Ajax\\Ajax' => __DIR__ . '/../..' . '/ajax/Ajax.php',
        'Coachs\\Ajax\\Ajax_Admin' => __DIR__ . '/../..' . '/ajax/Ajax_Admin.php',
        'Coachs\\Backend\\ActDeact' => __DIR__ . '/../..' . '/backend/ActDeact.php',
        'Coachs\\Backend\\ImpExp' => __DIR__ . '/../..' . '/backend/ImpExp.php',
        'Coachs\\Engine\\Base' => __DIR__ . '/../..' . '/engine/Base.php',
        'Coachs\\Engine\\Initialize' => __DIR__ . '/../..' . '/engine/Initialize.php',
        'Coachs\\Engine\\Is_Methods' => __DIR__ . '/../..' . '/engine/Is_Methods.php',
        'Coachs\\Frontend\\Enqueue' => __DIR__ . '/../..' . '/frontend/Enqueue.php',
        'Coachs\\Integrations\\CMB' => __DIR__ . '/../..' . '/integrations/CMB.php',
        'Coachs\\Integrations\\Widgets\\Coachs_Event_List' => __DIR__ . '/../..' . '/integrations/Widgets/Coachs_Event_List.php',
        'Coachs\\Integrations\\Widgets\\Coachs_Widget' => __DIR__ . '/../..' . '/integrations/Widgets/Coachs_Widget.php',
        'Coachs\\Internals\\PostTypes' => __DIR__ . '/../..' . '/internals/PostTypes.php',
        'Coachs\\Internals\\Shortcode' => __DIR__ . '/../..' . '/internals/Shortcode.php',
        'Coachs\\Internals\\Transient' => __DIR__ . '/../..' . '/internals/Transient.php',
        'Composer\\Installers\\AglInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AglInstaller.php',
        'Composer\\Installers\\AimeosInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AimeosInstaller.php',
        'Composer\\Installers\\AnnotateCmsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AnnotateCmsInstaller.php',
        'Composer\\Installers\\AsgardInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AsgardInstaller.php',
        'Composer\\Installers\\AttogramInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AttogramInstaller.php',
        'Composer\\Installers\\BaseInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/BaseInstaller.php',
        'Composer\\Installers\\BitrixInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/BitrixInstaller.php',
        'Composer\\Installers\\BonefishInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/BonefishInstaller.php',
        'Composer\\Installers\\CakePHPInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CakePHPInstaller.php',
        'Composer\\Installers\\ChefInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ChefInstaller.php',
        'Composer\\Installers\\CiviCrmInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CiviCrmInstaller.php',
        'Composer\\Installers\\ClanCatsFrameworkInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ClanCatsFrameworkInstaller.php',
        'Composer\\Installers\\CockpitInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CockpitInstaller.php',
        'Composer\\Installers\\CodeIgniterInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CodeIgniterInstaller.php',
        'Composer\\Installers\\Concrete5Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Concrete5Installer.php',
        'Composer\\Installers\\CraftInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CraftInstaller.php',
        'Composer\\Installers\\CroogoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CroogoInstaller.php',
        'Composer\\Installers\\DecibelInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DecibelInstaller.php',
        'Composer\\Installers\\DframeInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DframeInstaller.php',
        'Composer\\Installers\\DokuWikiInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DokuWikiInstaller.php',
        'Composer\\Installers\\DolibarrInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DolibarrInstaller.php',
        'Composer\\Installers\\DrupalInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DrupalInstaller.php',
        'Composer\\Installers\\ElggInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ElggInstaller.php',
        'Composer\\Installers\\EliasisInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/EliasisInstaller.php',
        'Composer\\Installers\\ExpressionEngineInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ExpressionEngineInstaller.php',
        'Composer\\Installers\\EzPlatformInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/EzPlatformInstaller.php',
        'Composer\\Installers\\FuelInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/FuelInstaller.php',
        'Composer\\Installers\\FuelphpInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/FuelphpInstaller.php',
        'Composer\\Installers\\GravInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/GravInstaller.php',
        'Composer\\Installers\\HuradInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/HuradInstaller.php',
        'Composer\\Installers\\ImageCMSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ImageCMSInstaller.php',
        'Composer\\Installers\\Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Installer.php',
        'Composer\\Installers\\ItopInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ItopInstaller.php',
        'Composer\\Installers\\JoomlaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/JoomlaInstaller.php',
        'Composer\\Installers\\KanboardInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KanboardInstaller.php',
        'Composer\\Installers\\KirbyInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KirbyInstaller.php',
        'Composer\\Installers\\KnownInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KnownInstaller.php',
        'Composer\\Installers\\KodiCMSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KodiCMSInstaller.php',
        'Composer\\Installers\\KohanaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KohanaInstaller.php',
        'Composer\\Installers\\LanManagementSystemInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LanManagementSystemInstaller.php',
        'Composer\\Installers\\LaravelInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LaravelInstaller.php',
        'Composer\\Installers\\LavaLiteInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LavaLiteInstaller.php',
        'Composer\\Installers\\LithiumInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LithiumInstaller.php',
        'Composer\\Installers\\MODULEWorkInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MODULEWorkInstaller.php',
        'Composer\\Installers\\MODXEvoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MODXEvoInstaller.php',
        'Composer\\Installers\\MagentoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MagentoInstaller.php',
        'Composer\\Installers\\MajimaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MajimaInstaller.php',
        'Composer\\Installers\\MakoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MakoInstaller.php',
        'Composer\\Installers\\MantisBTInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MantisBTInstaller.php',
        'Composer\\Installers\\MauticInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MauticInstaller.php',
        'Composer\\Installers\\MayaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MayaInstaller.php',
        'Composer\\Installers\\MediaWikiInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MediaWikiInstaller.php',
        'Composer\\Installers\\MicroweberInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MicroweberInstaller.php',
        'Composer\\Installers\\ModxInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ModxInstaller.php',
        'Composer\\Installers\\MoodleInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MoodleInstaller.php',
        'Composer\\Installers\\OctoberInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OctoberInstaller.php',
        'Composer\\Installers\\OntoWikiInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OntoWikiInstaller.php',
        'Composer\\Installers\\OsclassInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OsclassInstaller.php',
        'Composer\\Installers\\OxidInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OxidInstaller.php',
        'Composer\\Installers\\PPIInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PPIInstaller.php',
        'Composer\\Installers\\PhiftyInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PhiftyInstaller.php',
        'Composer\\Installers\\PhpBBInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PhpBBInstaller.php',
        'Composer\\Installers\\PimcoreInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PimcoreInstaller.php',
        'Composer\\Installers\\PiwikInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PiwikInstaller.php',
        'Composer\\Installers\\PlentymarketsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PlentymarketsInstaller.php',
        'Composer\\Installers\\Plugin' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Plugin.php',
        'Composer\\Installers\\PortoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PortoInstaller.php',
        'Composer\\Installers\\PrestashopInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PrestashopInstaller.php',
        'Composer\\Installers\\PuppetInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PuppetInstaller.php',
        'Composer\\Installers\\PxcmsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PxcmsInstaller.php',
        'Composer\\Installers\\RadPHPInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/RadPHPInstaller.php',
        'Composer\\Installers\\ReIndexInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ReIndexInstaller.php',
        'Composer\\Installers\\Redaxo5Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Redaxo5Installer.php',
        'Composer\\Installers\\RedaxoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/RedaxoInstaller.php',
        'Composer\\Installers\\RoundcubeInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/RoundcubeInstaller.php',
        'Composer\\Installers\\SMFInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SMFInstaller.php',
        'Composer\\Installers\\ShopwareInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ShopwareInstaller.php',
        'Composer\\Installers\\SilverStripeInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SilverStripeInstaller.php',
        'Composer\\Installers\\SiteDirectInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SiteDirectInstaller.php',
        'Composer\\Installers\\SyDESInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SyDESInstaller.php',
        'Composer\\Installers\\SyliusInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SyliusInstaller.php',
        'Composer\\Installers\\Symfony1Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Symfony1Installer.php',
        'Composer\\Installers\\TYPO3CmsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TYPO3CmsInstaller.php',
        'Composer\\Installers\\TYPO3FlowInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TYPO3FlowInstaller.php',
        'Composer\\Installers\\TaoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TaoInstaller.php',
        'Composer\\Installers\\TheliaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TheliaInstaller.php',
        'Composer\\Installers\\TuskInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TuskInstaller.php',
        'Composer\\Installers\\UserFrostingInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/UserFrostingInstaller.php',
        'Composer\\Installers\\VanillaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/VanillaInstaller.php',
        'Composer\\Installers\\VgmcpInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/VgmcpInstaller.php',
        'Composer\\Installers\\WHMCSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/WHMCSInstaller.php',
        'Composer\\Installers\\WolfCMSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/WolfCMSInstaller.php',
        'Composer\\Installers\\WordPressInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/WordPressInstaller.php',
        'Composer\\Installers\\YawikInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/YawikInstaller.php',
        'Composer\\Installers\\ZendInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ZendInstaller.php',
        'Composer\\Installers\\ZikulaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ZikulaInstaller.php',
        'JsonException' => __DIR__ . '/..' . '/symfony/polyfill-php73/Resources/stubs/JsonException.php',
        'Micropackage\\Internationalization\\Internationalization' => __DIR__ . '/..' . '/micropackage/internationalization/src/Internationalization.php',
        'Micropackage\\Requirements\\Abstracts\\Checker' => __DIR__ . '/..' . '/micropackage/requirements/src/Abstracts/Checker.php',
        'Micropackage\\Requirements\\Checker\\DocHooks' => __DIR__ . '/..' . '/micropackage/requirements/src/Checker/DocHooks.php',
        'Micropackage\\Requirements\\Checker\\PHP' => __DIR__ . '/..' . '/micropackage/requirements/src/Checker/PHP.php',
        'Micropackage\\Requirements\\Checker\\PHPExtensions' => __DIR__ . '/..' . '/micropackage/requirements/src/Checker/PHPExtensions.php',
        'Micropackage\\Requirements\\Checker\\Plugins' => __DIR__ . '/..' . '/micropackage/requirements/src/Checker/Plugins.php',
        'Micropackage\\Requirements\\Checker\\Theme' => __DIR__ . '/..' . '/micropackage/requirements/src/Checker/Theme.php',
        'Micropackage\\Requirements\\Checker\\WP' => __DIR__ . '/..' . '/micropackage/requirements/src/Checker/WP.php',
        'Micropackage\\Requirements\\Interfaces\\Checkable' => __DIR__ . '/..' . '/micropackage/requirements/src/Interfaces/Checkable.php',
        'Micropackage\\Requirements\\Requirements' => __DIR__ . '/..' . '/micropackage/requirements/src/Requirements.php',
        'PHPStan\\WordPress\\Composer\\FixWpStubs' => __DIR__ . '/..' . '/szepeviktor/phpstan-wordpress/src/Composer/FixWpStubs.php',
        'PHPStan\\WordPress\\EscSqlDynamicFunctionReturnTypeExtension' => __DIR__ . '/..' . '/szepeviktor/phpstan-wordpress/src/EscSqlDynamicFunctionReturnTypeExtension.php',
        'PHPStan\\WordPress\\GetPostDynamicFunctionReturnTypeExtension' => __DIR__ . '/..' . '/szepeviktor/phpstan-wordpress/src/GetPostDynamicFunctionReturnTypeExtension.php',
        'PHPStan\\WordPress\\GetPostsDynamicFunctionReturnTypeExtension' => __DIR__ . '/..' . '/szepeviktor/phpstan-wordpress/src/GetPostsDynamicFunctionReturnTypeExtension.php',
        'PHPStan\\WordPress\\IsWpErrorFunctionTypeSpecifyingExtension' => __DIR__ . '/..' . '/szepeviktor/phpstan-wordpress/src/IsWpErrorFunctionTypeSpecifyingExtension.php',
        'PHPStan\\WordPress\\RedirectCanonicalDynamicFunctionReturnTypeExtension' => __DIR__ . '/..' . '/szepeviktor/phpstan-wordpress/src/RedirectCanonicalDynamicFunctionReturnTypeExtension.php',
        'PHPStan\\WordPress\\WpThemeMagicPropertiesClassReflectionExtension' => __DIR__ . '/..' . '/szepeviktor/phpstan-wordpress/src/WpThemeMagicPropertiesClassReflectionExtension.php',
        'Symfony\\Polyfill\\Php73\\Php73' => __DIR__ . '/..' . '/symfony/polyfill-php73/Php73.php',
        'WPDesk\\Notice\\AjaxHandler' => __DIR__ . '/..' . '/wpdesk/wp-notice/src/WPDesk/Notice/AjaxHandler.php',
        'WPDesk\\Notice\\Factory' => __DIR__ . '/..' . '/wpdesk/wp-notice/src/WPDesk/Notice/Factory.php',
        'WPDesk\\Notice\\Notice' => __DIR__ . '/..' . '/wpdesk/wp-notice/src/WPDesk/Notice/Notice.php',
        'WPDesk\\Notice\\PermanentDismissibleNotice' => __DIR__ . '/..' . '/wpdesk/wp-notice/src/WPDesk/Notice/PermanentDismissibleNotice.php',
        'WPDesk\\PluginBuilder\\BuildDirector\\LegacyBuildDirector' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/BuildDirector/LegacyBuildDirector.php',
        'WPDesk\\PluginBuilder\\Builder\\AbstractBuilder' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Builder/AbstractBuilder.php',
        'WPDesk\\PluginBuilder\\Builder\\InfoActivationBuilder' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Builder/InfoActivationBuilder.php',
        'WPDesk\\PluginBuilder\\Builder\\InfoBuilder' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Builder/InfoBuilder.php',
        'WPDesk\\PluginBuilder\\Plugin\\AbstractPlugin' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/AbstractPlugin.php',
        'WPDesk\\PluginBuilder\\Plugin\\Activateable' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/Activateable.php',
        'WPDesk\\PluginBuilder\\Plugin\\ActivationAware' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/ActivationAware.php',
        'WPDesk\\PluginBuilder\\Plugin\\ActivationTracker' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/ActivationTracker.php',
        'WPDesk\\PluginBuilder\\Plugin\\Conditional' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/Conditional.php',
        'WPDesk\\PluginBuilder\\Plugin\\Deactivateable' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/Deactivateable.php',
        'WPDesk\\PluginBuilder\\Plugin\\Hookable' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/Hookable.php',
        'WPDesk\\PluginBuilder\\Plugin\\HookableCollection' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/HookableCollection.php',
        'WPDesk\\PluginBuilder\\Plugin\\HookableParent' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/HookableParent.php',
        'WPDesk\\PluginBuilder\\Plugin\\HookablePluginDependant' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/HookablePluginDependant.php',
        'WPDesk\\PluginBuilder\\Plugin\\PluginAccess' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/PluginAccess.php',
        'WPDesk\\PluginBuilder\\Plugin\\SlimPlugin' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/SlimPlugin.php',
        'WPDesk\\PluginBuilder\\Plugin\\TemplateLoad' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/TemplateLoad.php',
        'WPDesk\\PluginBuilder\\Storage\\Exception\\ClassAlreadyExists' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Storage/Exception/ClassAlreadyExists.php',
        'WPDesk\\PluginBuilder\\Storage\\Exception\\ClassNotExists' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Storage/Exception/ClassNotExists.php',
        'WPDesk\\PluginBuilder\\Storage\\PluginStorage' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Storage/PluginStorage.php',
        'WPDesk\\PluginBuilder\\Storage\\StaticStorage' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Storage/StaticStorage.php',
        'WPDesk\\PluginBuilder\\Storage\\StorageFactory' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Storage/StorageFactory.php',
        'WPDesk\\PluginBuilder\\Storage\\WordpressFilterStorage' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Storage/WordpressFilterStorage.php',
        'WPDesk_Buildable' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/WithoutNamespace/Buildable.php',
        'WPDesk_Has_Plugin_Info' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/WithoutNamespace/Has_Plugin_Info.php',
        'WPDesk_Plugin_Info' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/WithoutNamespace/Plugin_Info.php',
        'WPDesk_Translable' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/WithoutNamespace/Translable.php',
        'WPDesk_Translatable' => __DIR__ . '/..' . '/wpdesk/wp-builder/src/Plugin/WithoutNamespace/Translatable.php',
        'Yoast_I18n_WordPressOrg_v3' => __DIR__ . '/..' . '/yoast/i18n-module/src/i18n-wordpressorg-v3.php',
        'Yoast_I18n_v3' => __DIR__ . '/..' . '/yoast/i18n-module/src/i18n-v3.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdfc0099856cc66e134a415325717e8ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdfc0099856cc66e134a415325717e8ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdfc0099856cc66e134a415325717e8ab::$classMap;

        }, null, ClassLoader::class);
    }
}
