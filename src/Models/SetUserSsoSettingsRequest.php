<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class SetUserSsoSettingsRequest extends Model
{
    /**
     * @var string
     */
    public $metadataDocument;

    /**
     * @var bool
     */
    public $ssoEnabled;

    /**
     * @var string
     */
    public $auxiliaryDomain;
    protected $_name = [
        'metadataDocument' => 'MetadataDocument',
        'ssoEnabled'       => 'SsoEnabled',
        'auxiliaryDomain'  => 'AuxiliaryDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metadataDocument) {
            $res['MetadataDocument'] = $this->metadataDocument;
        }
        if (null !== $this->ssoEnabled) {
            $res['SsoEnabled'] = $this->ssoEnabled;
        }
        if (null !== $this->auxiliaryDomain) {
            $res['AuxiliaryDomain'] = $this->auxiliaryDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetUserSsoSettingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetadataDocument'])) {
            $model->metadataDocument = $map['MetadataDocument'];
        }
        if (isset($map['SsoEnabled'])) {
            $model->ssoEnabled = $map['SsoEnabled'];
        }
        if (isset($map['AuxiliaryDomain'])) {
            $model->auxiliaryDomain = $map['AuxiliaryDomain'];
        }

        return $model;
    }
}
