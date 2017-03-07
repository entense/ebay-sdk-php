<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\PostOrder\Types;

/**
 *
 * @property \DTS\eBaySDK\PostOrder\Enums\ShippingCarrierEnum $newCarrierEnum
 * @property string $newCarrierName
 * @property string $newTrackingNumber
 * @property \DTS\eBaySDK\PostOrder\Enums\ShippingCarrierEnum $usedCarrierEnum
 * @property string $usedCarrierName
 * @property string $usedTrackingNumber
 */
class UpdateTrackingRequest extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'newCarrierEnum' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'newCarrierEnum'
        ],
        'newCarrierName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'newCarrierName'
        ],
        'newTrackingNumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'newTrackingNumber'
        ],
        'usedCarrierEnum' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'usedCarrierEnum'
        ],
        'usedCarrierName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'usedCarrierName'
        ],
        'usedTrackingNumber' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'usedTrackingNumber'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}