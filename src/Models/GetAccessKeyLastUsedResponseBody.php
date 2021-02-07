<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccessKeyLastUsedResponseBody\accessKeyLastUsed;
use AlibabaCloud\Tea\Model;

class GetAccessKeyLastUsedResponseBody extends Model
{
    /**
     * @var accessKeyLastUsed
     */
    public $accessKeyLastUsed;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessKeyLastUsed' => 'AccessKeyLastUsed',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyLastUsed) {
            $res['AccessKeyLastUsed'] = null !== $this->accessKeyLastUsed ? $this->accessKeyLastUsed->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccessKeyLastUsedResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyLastUsed'])) {
            $model->accessKeyLastUsed = accessKeyLastUsed::fromMap($map['AccessKeyLastUsed']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
