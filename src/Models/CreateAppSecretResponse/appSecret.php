<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\CreateAppSecretResponse;

use AlibabaCloud\Tea\Model;

class appSecret extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appSecretValue;

    /**
     * @var string
     */
    public $appSecretId;

    /**
     * @var string
     */
    public $createDate;
    protected $_name = [
        'appId'          => 'AppId',
        'appSecretValue' => 'AppSecretValue',
        'appSecretId'    => 'AppSecretId',
        'createDate'     => 'CreateDate',
    ];

    public function validate()
    {
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('appSecretValue', $this->appSecretValue, true);
        Model::validateRequired('appSecretId', $this->appSecretId, true);
        Model::validateRequired('createDate', $this->createDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appSecretValue) {
            $res['AppSecretValue'] = $this->appSecretValue;
        }
        if (null !== $this->appSecretId) {
            $res['AppSecretId'] = $this->appSecretId;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appSecret
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppSecretValue'])) {
            $model->appSecretValue = $map['AppSecretValue'];
        }
        if (isset($map['AppSecretId'])) {
            $model->appSecretId = $map['AppSecretId'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        return $model;
    }
}
