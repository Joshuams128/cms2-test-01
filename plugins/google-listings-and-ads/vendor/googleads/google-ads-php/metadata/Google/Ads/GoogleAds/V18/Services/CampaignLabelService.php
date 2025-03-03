<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/campaign_label_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Services;

class CampaignLabelService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/ads/googleads/v18/resources/campaign_label.proto"google.ads.googleads.v18.resourcesgoogle/api/resource.proto"�
CampaignLabelE
resource_name (	B.�A�A(
&googleads.googleapis.com/CampaignLabel@
campaign (	B)�A�A#
!googleads.googleapis.com/CampaignH �:
label (	B&�A�A 
googleads.googleapis.com/LabelH�:l�Ai
&googleads.googleapis.com/CampaignLabel?customers/{customer_id}/campaignLabels/{campaign_id}~{label_id}B
	_campaignB
_labelB�
&com.google.ads.googleads.v18.resourcesBCampaignLabelProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v18/resources;resources�GAA�"Google.Ads.GoogleAds.V18.Resources�"Google\\Ads\\GoogleAds\\V18\\Resources�&Google::Ads::GoogleAds::V18::Resourcesbproto3
�
>google/ads/googleads/v18/services/campaign_label_service.proto!google.ads.googleads.v18.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/rpc/status.proto"�
MutateCampaignLabelsRequest
customer_id (	B�AR

operations (29.google.ads.googleads.v18.services.CampaignLabelOperationB�A
partial_failure (
validate_only ("�
CampaignLabelOperationC
create (21.google.ads.googleads.v18.resources.CampaignLabelH =
remove (	B+�A(
&googleads.googleapis.com/CampaignLabelH B
	operation"�
MutateCampaignLabelsResponse1
partial_failure_error (2.google.rpc.StatusM
results (2<.google.ads.googleads.v18.services.MutateCampaignLabelResult"_
MutateCampaignLabelResultB
resource_name (	B+�A(
&googleads.googleapis.com/CampaignLabel2�
CampaignLabelService�
MutateCampaignLabels>.google.ads.googleads.v18.services.MutateCampaignLabelsRequest?.google.ads.googleads.v18.services.MutateCampaignLabelsResponse"X�Acustomer_id,operations���9"4/v18/customers/{customer_id=*}/campaignLabels:mutate:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v18.servicesBCampaignLabelServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v18/services;services�GAA�!Google.Ads.GoogleAds.V18.Services�!Google\\Ads\\GoogleAds\\V18\\Services�%Google::Ads::GoogleAds::V18::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

