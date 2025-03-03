<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/common/criteria.proto

namespace Google\Ads\GoogleAds\V18\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A custom affinity criterion.
 * A criterion of this type is only targetable.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.common.CustomAffinityInfo</code>
 */
class CustomAffinityInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The CustomInterest resource name.
     *
     * Generated from protobuf field <code>optional string custom_affinity = 2;</code>
     */
    protected $custom_affinity = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $custom_affinity
     *           The CustomInterest resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The CustomInterest resource name.
     *
     * Generated from protobuf field <code>optional string custom_affinity = 2;</code>
     * @return string
     */
    public function getCustomAffinity()
    {
        return isset($this->custom_affinity) ? $this->custom_affinity : '';
    }

    public function hasCustomAffinity()
    {
        return isset($this->custom_affinity);
    }

    public function clearCustomAffinity()
    {
        unset($this->custom_affinity);
    }

    /**
     * The CustomInterest resource name.
     *
     * Generated from protobuf field <code>optional string custom_affinity = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomAffinity($var)
    {
        GPBUtil::checkString($var, True);
        $this->custom_affinity = $var;

        return $this;
    }

}

