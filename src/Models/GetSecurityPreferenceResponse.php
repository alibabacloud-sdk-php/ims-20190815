<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetSecurityPreferenceResponse\securityPreference;
use AlibabaCloud\Tea\Model;

class GetSecurityPreferenceResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var securityPreference
     */
    public $securityPreference;
    protected $_name = [
        'requestId'          => 'RequestId',
        'securityPreference' => 'SecurityPreference',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('securityPreference', $this->securityPreference, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityPreference) {
            $res['SecurityPreference'] = null !== $this->securityPreference ? $this->securityPreference->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSecurityPreferenceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityPreference'])) {
            $model->securityPreference = securityPreference::fromMap($map['SecurityPreference']);
        }

        return $model;
    }
}
