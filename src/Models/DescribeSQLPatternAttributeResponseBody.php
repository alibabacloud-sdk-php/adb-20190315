<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeSQLPatternAttributeResponseBody\patternDetail;
use AlibabaCloud\Tea\Model;

class DescribeSQLPatternAttributeResponseBody extends Model
{
    /**
     * @description The detailed information of the SQL pattern.
     *
     * @var patternDetail
     */
    public $patternDetail;

    /**
     * @description The ID of the request.
     *
     * @example 2A318054-6815-528A-AA94-8AC921******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'patternDetail' => 'PatternDetail',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->patternDetail) {
            $res['PatternDetail'] = null !== $this->patternDetail ? $this->patternDetail->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSQLPatternAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PatternDetail'])) {
            $model->patternDetail = patternDetail::fromMap($map['PatternDetail']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
