<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: test.proto

namespace Google\Cloud\Firestore\Tests\Conformance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Call to DocumentRef.Create.
 *
 * Generated from protobuf message <code>tests.CreateTest</code>
 */
class CreateTest extends \Google\Protobuf\Internal\Message
{
    /**
     * The path of the doc, e.g. "projects/projectID/databases/(default)/documents/C/d"
     *
     * Generated from protobuf field <code>string doc_ref_path = 1;</code>
     */
    private $doc_ref_path = '';
    /**
     * The data passed to Create, as JSON. The strings "Delete" and "ServerTimestamp"
     * denote the two special sentinel values. Values that could be interpreted as integers
     * (i.e. digit strings) should be treated as integers.
     *
     * Generated from protobuf field <code>string json_data = 2;</code>
     */
    private $json_data = '';
    /**
     * The request that the call should generate.
     *
     * Generated from protobuf field <code>.google.firestore.v1.CommitRequest request = 3;</code>
     */
    private $request = null;
    /**
     * If true, the call should result in an error without generating a request.
     * If this is true, request should not be set.
     *
     * Generated from protobuf field <code>bool is_error = 4;</code>
     */
    private $is_error = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $doc_ref_path
     *           The path of the doc, e.g. "projects/projectID/databases/(default)/documents/C/d"
     *     @type string $json_data
     *           The data passed to Create, as JSON. The strings "Delete" and "ServerTimestamp"
     *           denote the two special sentinel values. Values that could be interpreted as integers
     *           (i.e. digit strings) should be treated as integers.
     *     @type \Google\Cloud\Firestore\V1\CommitRequest $request
     *           The request that the call should generate.
     *     @type bool $is_error
     *           If true, the call should result in an error without generating a request.
     *           If this is true, request should not be set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Test::initOnce();
        parent::__construct($data);
    }

    /**
     * The path of the doc, e.g. "projects/projectID/databases/(default)/documents/C/d"
     *
     * Generated from protobuf field <code>string doc_ref_path = 1;</code>
     * @return string
     */
    public function getDocRefPath()
    {
        return $this->doc_ref_path;
    }

    /**
     * The path of the doc, e.g. "projects/projectID/databases/(default)/documents/C/d"
     *
     * Generated from protobuf field <code>string doc_ref_path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDocRefPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->doc_ref_path = $var;

        return $this;
    }

    /**
     * The data passed to Create, as JSON. The strings "Delete" and "ServerTimestamp"
     * denote the two special sentinel values. Values that could be interpreted as integers
     * (i.e. digit strings) should be treated as integers.
     *
     * Generated from protobuf field <code>string json_data = 2;</code>
     * @return string
     */
    public function getJsonData()
    {
        return $this->json_data;
    }

    /**
     * The data passed to Create, as JSON. The strings "Delete" and "ServerTimestamp"
     * denote the two special sentinel values. Values that could be interpreted as integers
     * (i.e. digit strings) should be treated as integers.
     *
     * Generated from protobuf field <code>string json_data = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setJsonData($var)
    {
        GPBUtil::checkString($var, True);
        $this->json_data = $var;

        return $this;
    }

    /**
     * The request that the call should generate.
     *
     * Generated from protobuf field <code>.google.firestore.v1.CommitRequest request = 3;</code>
     * @return \Google\Cloud\Firestore\V1\CommitRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * The request that the call should generate.
     *
     * Generated from protobuf field <code>.google.firestore.v1.CommitRequest request = 3;</code>
     * @param \Google\Cloud\Firestore\V1\CommitRequest $var
     * @return $this
     */
    public function setRequest($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\CommitRequest::class);
        $this->request = $var;

        return $this;
    }

    /**
     * If true, the call should result in an error without generating a request.
     * If this is true, request should not be set.
     *
     * Generated from protobuf field <code>bool is_error = 4;</code>
     * @return bool
     */
    public function getIsError()
    {
        return $this->is_error;
    }

    /**
     * If true, the call should result in an error without generating a request.
     * If this is true, request should not be set.
     *
     * Generated from protobuf field <code>bool is_error = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsError($var)
    {
        GPBUtil::checkBool($var);
        $this->is_error = $var;

        return $this;
    }

}

