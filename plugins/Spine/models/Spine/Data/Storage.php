<?php
/**
 * Class Spine_Data_Storage
 */
class Spine_Data_Storage
{
    /**
     * @var array
     */
    protected static $_memory = array();

    /**
     * Nationality list
     */
    const JSON_NATIONALITIES = '/json/nationalities.json';

    /**
     * Is Exist
     *
     * @param $path
     * @return bool
     */
    public static function isExist($path)
    {
        return isset(self::$_memory[$path]);
    }

    /**
     * Get Data
     *
     * @param $path
     * @return mixed
     */
    public static function getData($path)
    {
        return self::_loadData($path);
    }

    /**
     * @param $path
     * @return mixed
     * @throws Exception
     */
    protected  static function _loadData($path)
    {
        if(self::isExist($path))
        {
            return self::$_memory[$path];
        }

        $actualPath = Spine_Plugin::getPluginPath() . '/data/storage' . $path;

        if(!file_exists($actualPath))
        {
            Logger::err("Can't read file: " . $actualPath);
            throw new Exception("Requested file {$path} not found");
        }

        $contents = file_get_contents($actualPath);

        //Identify file type
        if(strpos($path, '.json') !== false)
        {
            $contents = @json_decode($contents, true);
        }
        self::$_memory[$path] = $contents;
        return $contents;
    }
}