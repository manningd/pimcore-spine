<?php
/**
 * Class Spine_Plugin
 */
class Spine_Plugin  extends Pimcore_API_Plugin_Abstract implements Pimcore_API_Plugin_Interface
{

    /**
     * Install
     *
     * @return string
     */
    public static function install()
    {
        $path = self::getInstallPath();

        if(!is_dir($path))
        {
            mkdir($path);
        }

        if(self::isInstalled())
        {
            return "Spine Plugin successfully installed.";
        }
        else
        {
            return "Spine Plugin could not be installed";
        }
	}

    /**
     * Uninstall
     *
     * @return string
     */
    public static function uninstall()
    {
        rmdir(self::getInstallPath());

        if (!self::isInstalled())
        {
            return "Spine Plugin successfully uninstalled.";
        }
        else
        {
            return "Spine Plugin could not be uninstalled";
        }
	}

    /**
     * Is Installed
     *
     * @return bool
     */
    public static function isInstalled()
    {
        return is_dir(self::getInstallPath());
	}

    /**
     * Get the install path
     *
     * @static
     * @return string
     */
    public static function getInstallPath()
    {
        return PIMCORE_PLUGINS_PATH . "/Spine/install";
    }

    /**
     * Get the install path
     *
     * @static
     * @return string
     */
    public static function getPluginPath()
    {
        return PIMCORE_PLUGINS_PATH . "/Spine";
    }

    /**
     * Translation files
     *
     * @param string $language
     * @return string path to the translation file relative to plugin directory
     */
    public static function getTranslationFile($language)
    {
        if(file_exists(PIMCORE_PLUGINS_PATH . "/Spine/data/translations/" . $language . ".csv"))
        {
            return "/Spine/data/translations/" . $language . ".csv";
        }
        return "/Spine/data/translations/en.csv";
    }
}
