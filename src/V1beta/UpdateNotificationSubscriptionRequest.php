<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/notifications/v1beta/notificationsapi.proto

namespace Google\Shopping\Merchant\Notifications\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the UpdateNotificationSubscription method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.notifications.v1beta.UpdateNotificationSubscriptionRequest</code>
 */
class UpdateNotificationSubscriptionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The new version of the notification subscription that should be
     * updated.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.notifications.v1beta.NotificationSubscription notification_subscription = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $notification_subscription = null;
    /**
     * List of fields being updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Shopping\Merchant\Notifications\V1beta\NotificationSubscription $notificationSubscription Required. The new version of the notification subscription that should be
     *                                                                                                          updated.
     * @param \Google\Protobuf\FieldMask                                              $updateMask               List of fields being updated.
     *
     * @return \Google\Shopping\Merchant\Notifications\V1beta\UpdateNotificationSubscriptionRequest
     *
     * @experimental
     */
    public static function build(\Google\Shopping\Merchant\Notifications\V1beta\NotificationSubscription $notificationSubscription, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setNotificationSubscription($notificationSubscription)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Shopping\Merchant\Notifications\V1beta\NotificationSubscription $notification_subscription
     *           Required. The new version of the notification subscription that should be
     *           updated.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           List of fields being updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Notifications\V1Beta\Notificationsapi::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The new version of the notification subscription that should be
     * updated.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.notifications.v1beta.NotificationSubscription notification_subscription = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Shopping\Merchant\Notifications\V1beta\NotificationSubscription|null
     */
    public function getNotificationSubscription()
    {
        return $this->notification_subscription;
    }

    public function hasNotificationSubscription()
    {
        return isset($this->notification_subscription);
    }

    public function clearNotificationSubscription()
    {
        unset($this->notification_subscription);
    }

    /**
     * Required. The new version of the notification subscription that should be
     * updated.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.notifications.v1beta.NotificationSubscription notification_subscription = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Shopping\Merchant\Notifications\V1beta\NotificationSubscription $var
     * @return $this
     */
    public function setNotificationSubscription($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Notifications\V1beta\NotificationSubscription::class);
        $this->notification_subscription = $var;

        return $this;
    }

    /**
     * List of fields being updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * List of fields being updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

