<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/common.proto

namespace Google\Cloud\Talent\V4beta1;

/**
 * An enum that represents who has view access to the resource.
 *
 * Protobuf type <code>google.cloud.talent.v4beta1.Visibility</code>
 */
class Visibility
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>VISIBILITY_UNSPECIFIED = 0;</code>
     */
    const VISIBILITY_UNSPECIFIED = 0;
    /**
     * The resource is only visible to the GCP account who owns it.
     *
     * Generated from protobuf enum <code>ACCOUNT_ONLY = 1;</code>
     */
    const ACCOUNT_ONLY = 1;
    /**
     * The resource is visible to the owner and may be visible to other
     * applications and processes at Google.
     *
     * Generated from protobuf enum <code>SHARED_WITH_GOOGLE = 2;</code>
     */
    const SHARED_WITH_GOOGLE = 2;
    /**
     * The resource is visible to the owner and may be visible to all other API
     * clients.
     *
     * Generated from protobuf enum <code>SHARED_WITH_PUBLIC = 3;</code>
     */
    const SHARED_WITH_PUBLIC = 3;
}

