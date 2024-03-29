<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterHealthStatusResponseBody;

use AlibabaCloud\Tea\Model;

class worker extends Model
{
    /**
     * @description The number of healthy storage node groups.
     *
     * @example 2
     *
     * @var int
     */
    public $activeCount;

    /**
     * @description The total number of storage node groups.
     *
     * @example 2
     *
     * @var int
     */
    public $expectedCount;

    /**
     * @description The number of risky storage node groups.
     *
     * @example 0
     *
     * @var int
     */
    public $riskCount;

    /**
     * @description The health state of storage node groups. Valid values:
     *
     *   **RISK**: risky
     *   **NORMAL**: healthy
     *   **UNAVAILABLE**: unavailable
     *
     * @example NORMAL
     *
     * @var string
     */
    public $status;

    /**
     * @description The number of unavailable storage node groups.
     *
     * @example 0
     *
     * @var int
     */
    public $unavailableCount;
    protected $_name = [
        'activeCount'      => 'ActiveCount',
        'expectedCount'    => 'ExpectedCount',
        'riskCount'        => 'RiskCount',
        'status'           => 'Status',
        'unavailableCount' => 'UnavailableCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeCount) {
            $res['ActiveCount'] = $this->activeCount;
        }
        if (null !== $this->expectedCount) {
            $res['ExpectedCount'] = $this->expectedCount;
        }
        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->unavailableCount) {
            $res['UnavailableCount'] = $this->unavailableCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return worker
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveCount'])) {
            $model->activeCount = $map['ActiveCount'];
        }
        if (isset($map['ExpectedCount'])) {
            $model->expectedCount = $map['ExpectedCount'];
        }
        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UnavailableCount'])) {
            $model->unavailableCount = $map['UnavailableCount'];
        }

        return $model;
    }
}
