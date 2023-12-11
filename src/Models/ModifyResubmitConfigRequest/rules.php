<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\ModifyResubmitConfigRequest;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $exceedMemoryException;

    /**
     * @example test2
     *
     * @var string
     */
    public $groupName;

    /**
     * @example 32
     *
     * @var string
     */
    public $peakMemory;

    /**
     * @example 300
     *
     * @var string
     */
    public $queryTime;

    /**
     * @example test_target_group
     *
     * @var string
     */
    public $targetGroupName;
    protected $_name = [
        'exceedMemoryException' => 'ExceedMemoryException',
        'groupName'             => 'GroupName',
        'peakMemory'            => 'PeakMemory',
        'queryTime'             => 'QueryTime',
        'targetGroupName'       => 'TargetGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exceedMemoryException) {
            $res['ExceedMemoryException'] = $this->exceedMemoryException;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->peakMemory) {
            $res['PeakMemory'] = $this->peakMemory;
        }
        if (null !== $this->queryTime) {
            $res['QueryTime'] = $this->queryTime;
        }
        if (null !== $this->targetGroupName) {
            $res['TargetGroupName'] = $this->targetGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExceedMemoryException'])) {
            $model->exceedMemoryException = $map['ExceedMemoryException'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['PeakMemory'])) {
            $model->peakMemory = $map['PeakMemory'];
        }
        if (isset($map['QueryTime'])) {
            $model->queryTime = $map['QueryTime'];
        }
        if (isset($map['TargetGroupName'])) {
            $model->targetGroupName = $map['TargetGroupName'];
        }

        return $model;
    }
}
