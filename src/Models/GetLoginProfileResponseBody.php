<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetLoginProfileResponseBody\loginProfile;
use AlibabaCloud\Tea\Model;

class GetLoginProfileResponseBody extends Model
{
    /**
     * @var loginProfile
     */
    public $loginProfile;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'loginProfile' => 'LoginProfile',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginProfile) {
            $res['LoginProfile'] = null !== $this->loginProfile ? $this->loginProfile->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLoginProfileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginProfile'])) {
            $model->loginProfile = loginProfile::fromMap($map['LoginProfile']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
