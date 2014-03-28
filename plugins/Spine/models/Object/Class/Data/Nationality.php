<?php
/**
 * Spine Nationality
 *
 * @category   Spine
 * @package    Object
 * @author     manningd.com
 */
class Object_Class_Data_Nationality extends Object_Class_Data_Select {

    /**
     * Static type of this element
     *
     * @var string
     */
    public $fieldtype = "nationality";

    /**
     * Class Construct
     */
    public function __construct()
    {
        $options = array();

        /** @var array $data */
        $data = Spine_Countries::getNationalities();

        foreach($data as $countryCode => $nationality)
        {
            $options[] = array(
                "key"   => $nationality,
                "value" => $countryCode
            );
        }
        $this->setOptions($options);
    }

}
