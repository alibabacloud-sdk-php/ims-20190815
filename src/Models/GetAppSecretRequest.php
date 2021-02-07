<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GetAppSecretRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appSecretId;

    /**
     * @var string
     */
    public $akProxySuffix;
    protected $_name = [
        'appId'         => 'AppId',
        'appSecretId'   => 'AppSecretId',
        'akProxySuffix' => 'AkProxySuffix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appSecretId) {
            $res['AppSecretId'] = $this->appSecretId;
        }
        if (null !== $this->akProxySuffix) {
            $res['AkProxySuffix'] = $this->akProxySuffix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppSecretRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppSecretId'])) {
            $model->appSecretId = $map['AppSecretId'];
        }
        if (isset($map['AkProxySuffix'])) {
            $model->akProxySuffix = $map['AkProxySuffix'];
        }

        return $model;
    }
}
