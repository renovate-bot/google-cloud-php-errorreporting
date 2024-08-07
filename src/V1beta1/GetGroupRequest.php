<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/error_group_service.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to return an individual group.
 *
 * Generated from protobuf message <code>google.devtools.clouderrorreporting.v1beta1.GetGroupRequest</code>
 */
class GetGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The group resource name. Written as either
     * `projects/{projectID}/groups/{group_id}` or
     * `projects/{projectID}/locations/{location}/groups/{group_id}`. Call
     * [groupStats.list]
     * [google.devtools.clouderrorreporting.v1beta1.ErrorStatsService.ListGroupStats]
     * to return a list of groups belonging to this project.
     * Examples: `projects/my-project-123/groups/my-group`,
     * `projects/my-project-123/locations/global/groups/my-group`
     * In the group resource name, the `group_id` is a unique identifier for a
     * particular error group. The identifier is derived from key parts of the
     * error-log content and is treated as Service Data. For information about
     * how Service Data is handled, see [Google Cloud Privacy
     * Notice](https://cloud.google.com/terms/cloud-privacy-notice).
     * For a list of supported locations, see [Supported
     * Regions](https://cloud.google.com/logging/docs/region-support). `global` is
     * the default when unspecified.
     *
     * Generated from protobuf field <code>string group_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $group_name = '';

    /**
     * @param string $groupName Required. The group resource name. Written as either
     *                          `projects/{projectID}/groups/{group_id}` or
     *                          `projects/{projectID}/locations/{location}/groups/{group_id}`. Call
     *                          [groupStats.list]
     *                          [google.devtools.clouderrorreporting.v1beta1.ErrorStatsService.ListGroupStats]
     *                          to return a list of groups belonging to this project.
     *
     *                          Examples: `projects/my-project-123/groups/my-group`,
     *                          `projects/my-project-123/locations/global/groups/my-group`
     *
     *                          In the group resource name, the `group_id` is a unique identifier for a
     *                          particular error group. The identifier is derived from key parts of the
     *                          error-log content and is treated as Service Data. For information about
     *                          how Service Data is handled, see [Google Cloud Privacy
     *                          Notice](https://cloud.google.com/terms/cloud-privacy-notice).
     *
     *                          For a list of supported locations, see [Supported
     *                          Regions](https://cloud.google.com/logging/docs/region-support). `global` is
     *                          the default when unspecified. Please see
     *                          {@see ErrorGroupServiceClient::errorGroupName()} for help formatting this field.
     *
     * @return \Google\Cloud\ErrorReporting\V1beta1\GetGroupRequest
     *
     * @experimental
     */
    public static function build(string $groupName): self
    {
        return (new self())
            ->setGroupName($groupName);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $group_name
     *           Required. The group resource name. Written as either
     *           `projects/{projectID}/groups/{group_id}` or
     *           `projects/{projectID}/locations/{location}/groups/{group_id}`. Call
     *           [groupStats.list]
     *           [google.devtools.clouderrorreporting.v1beta1.ErrorStatsService.ListGroupStats]
     *           to return a list of groups belonging to this project.
     *           Examples: `projects/my-project-123/groups/my-group`,
     *           `projects/my-project-123/locations/global/groups/my-group`
     *           In the group resource name, the `group_id` is a unique identifier for a
     *           particular error group. The identifier is derived from key parts of the
     *           error-log content and is treated as Service Data. For information about
     *           how Service Data is handled, see [Google Cloud Privacy
     *           Notice](https://cloud.google.com/terms/cloud-privacy-notice).
     *           For a list of supported locations, see [Supported
     *           Regions](https://cloud.google.com/logging/docs/region-support). `global` is
     *           the default when unspecified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\ErrorGroupService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The group resource name. Written as either
     * `projects/{projectID}/groups/{group_id}` or
     * `projects/{projectID}/locations/{location}/groups/{group_id}`. Call
     * [groupStats.list]
     * [google.devtools.clouderrorreporting.v1beta1.ErrorStatsService.ListGroupStats]
     * to return a list of groups belonging to this project.
     * Examples: `projects/my-project-123/groups/my-group`,
     * `projects/my-project-123/locations/global/groups/my-group`
     * In the group resource name, the `group_id` is a unique identifier for a
     * particular error group. The identifier is derived from key parts of the
     * error-log content and is treated as Service Data. For information about
     * how Service Data is handled, see [Google Cloud Privacy
     * Notice](https://cloud.google.com/terms/cloud-privacy-notice).
     * For a list of supported locations, see [Supported
     * Regions](https://cloud.google.com/logging/docs/region-support). `global` is
     * the default when unspecified.
     *
     * Generated from protobuf field <code>string group_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getGroupName()
    {
        return $this->group_name;
    }

    /**
     * Required. The group resource name. Written as either
     * `projects/{projectID}/groups/{group_id}` or
     * `projects/{projectID}/locations/{location}/groups/{group_id}`. Call
     * [groupStats.list]
     * [google.devtools.clouderrorreporting.v1beta1.ErrorStatsService.ListGroupStats]
     * to return a list of groups belonging to this project.
     * Examples: `projects/my-project-123/groups/my-group`,
     * `projects/my-project-123/locations/global/groups/my-group`
     * In the group resource name, the `group_id` is a unique identifier for a
     * particular error group. The identifier is derived from key parts of the
     * error-log content and is treated as Service Data. For information about
     * how Service Data is handled, see [Google Cloud Privacy
     * Notice](https://cloud.google.com/terms/cloud-privacy-notice).
     * For a list of supported locations, see [Supported
     * Regions](https://cloud.google.com/logging/docs/region-support). `global` is
     * the default when unspecified.
     *
     * Generated from protobuf field <code>string group_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setGroupName($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_name = $var;

        return $this;
    }

}

