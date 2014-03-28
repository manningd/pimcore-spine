<?php
/**
 * Class Spine_Countries
 */
class Spine_Countries
{

    /**
     * Get Nationalities
     */
    public static function getNationalities()
    {
        $data = Spine_Data_Storage::getData(Spine_Data_Storage::JSON_NATIONALITIES);
        asort($data);
        return $data;
    }

    /**
     * Get Nationality by country code (AE | LK)
     *
     * @param $code
     */
    public static function getNationalityByCode($code)
    {
        $data = Spine_Data_Storage::getData(Spine_Data_Storage::JSON_NATIONALITIES);
        return $data[strtoupper(trim($code))];
    }
}