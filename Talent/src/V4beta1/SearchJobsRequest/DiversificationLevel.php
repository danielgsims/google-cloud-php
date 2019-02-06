<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/job_service.proto

namespace Google\Cloud\Talent\V4beta1\SearchJobsRequest;

/**
 * Controls whether highly similar jobs are returned next to each other in
 * the search results. Jobs are identified as highly similar based on
 * their titles, job categories, and locations. Highly similar results are
 * clustered so that only one representative job of the cluster is
 * displayed to the job seeker higher up in the results, with the other jobs
 * being displayed lower down in the results.
 *
 * Protobuf type <code>google.cloud.talent.v4beta1.SearchJobsRequest.DiversificationLevel</code>
 */
class DiversificationLevel
{
    /**
     * The diversification level isn't specified.
     *
     * Generated from protobuf enum <code>DIVERSIFICATION_LEVEL_UNSPECIFIED = 0;</code>
     */
    const DIVERSIFICATION_LEVEL_UNSPECIFIED = 0;
    /**
     * Disables diversification. Jobs that would normally be pushed to the last
     * page would not have their positions altered. This may result in highly
     * similar jobs appearing in sequence in the search results.
     *
     * Generated from protobuf enum <code>DISABLED = 1;</code>
     */
    const DISABLED = 1;
    /**
     * Default diversifying behavior. The result list is ordered so that
     * highly similar results are pushed to the end of the last page of search
     * results.
     *
     * Generated from protobuf enum <code>SIMPLE = 2;</code>
     */
    const SIMPLE = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DiversificationLevel::class, \Google\Cloud\Talent\V4beta1\SearchJobsRequest_DiversificationLevel::class);

