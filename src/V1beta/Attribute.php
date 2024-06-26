<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/notifications/v1beta/notificationsapi.proto

namespace Google\Shopping\Merchant\Notifications\V1beta;

use UnexpectedValueException;

/**
 * Enum to specify the attribute in the resource that is being changed to
 * notify the merchant about.
 *
 * Protobuf type <code>google.shopping.merchant.notifications.v1beta.Attribute</code>
 */
class Attribute
{
    /**
     * Unspecified attribute
     *
     * Generated from protobuf enum <code>ATTRIBUTE_UNSPECIFIED = 0;</code>
     */
    const ATTRIBUTE_UNSPECIFIED = 0;
    /**
     * Status of the changed entity
     *
     * Generated from protobuf enum <code>STATUS = 1;</code>
     */
    const STATUS = 1;

    private static $valueToName = [
        self::ATTRIBUTE_UNSPECIFIED => 'ATTRIBUTE_UNSPECIFIED',
        self::STATUS => 'STATUS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

