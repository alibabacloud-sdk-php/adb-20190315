<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosisDimensionsResponseBody extends Model
{
    /**
     * @description The source IP addresses.
     *
     * @var string[]
     */
    public $clientIps;

    /**
     * @description The databases.
     *
     * @var string[]
     */
    public $databases;

    /**
     * @description The request ID.
     *
     * @example E0B56BCD-1BED-30EC-8CAF-1D1E5F******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resource groups.
     *
     * @var string[]
     */
    public $resourceGroups;

    /**
     * @description The usernames.
     *
     * @var string[]
     */
    public $userNames;
    protected $_name = [
        'clientIps'      => 'ClientIps',
        'databases'      => 'Databases',
        'requestId'      => 'RequestId',
        'resourceGroups' => 'ResourceGroups',
        'userNames'      => 'UserNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIps) {
            $res['ClientIps'] = $this->clientIps;
        }
        if (null !== $this->databases) {
            $res['Databases'] = $this->databases;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroups) {
            $res['ResourceGroups'] = $this->resourceGroups;
        }
        if (null !== $this->userNames) {
            $res['UserNames'] = $this->userNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosisDimensionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIps'])) {
            if (!empty($map['ClientIps'])) {
                $model->clientIps = $map['ClientIps'];
            }
        }
        if (isset($map['Databases'])) {
            if (!empty($map['Databases'])) {
                $model->databases = $map['Databases'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroups'])) {
            if (!empty($map['ResourceGroups'])) {
                $model->resourceGroups = $map['ResourceGroups'];
            }
        }
        if (isset($map['UserNames'])) {
            if (!empty($map['UserNames'])) {
                $model->userNames = $map['UserNames'];
            }
        }

        return $model;
    }
}
