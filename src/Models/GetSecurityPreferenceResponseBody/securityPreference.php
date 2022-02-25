<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetSecurityPreferenceResponseBody;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetSecurityPreferenceResponseBody\securityPreference\accessKeyPreference;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetSecurityPreferenceResponseBody\securityPreference\loginProfilePreference;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetSecurityPreferenceResponseBody\securityPreference\MFAPreference;
use AlibabaCloud\SDK\Ims\V20190815\Models\GetSecurityPreferenceResponseBody\securityPreference\personalInfoPreference;
use AlibabaCloud\Tea\Model;

class securityPreference extends Model
{
    /**
     * @var accessKeyPreference
     */
    public $accessKeyPreference;

    /**
     * @var loginProfilePreference
     */
    public $loginProfilePreference;

    /**
     * @var MFAPreference
     */
    public $MFAPreference;

    /**
     * @var personalInfoPreference
     */
    public $personalInfoPreference;
    protected $_name = [
        'accessKeyPreference'    => 'AccessKeyPreference',
        'loginProfilePreference' => 'LoginProfilePreference',
        'MFAPreference'          => 'MFAPreference',
        'personalInfoPreference' => 'PersonalInfoPreference',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyPreference) {
            $res['AccessKeyPreference'] = null !== $this->accessKeyPreference ? $this->accessKeyPreference->toMap() : null;
        }
        if (null !== $this->loginProfilePreference) {
            $res['LoginProfilePreference'] = null !== $this->loginProfilePreference ? $this->loginProfilePreference->toMap() : null;
        }
        if (null !== $this->MFAPreference) {
            $res['MFAPreference'] = null !== $this->MFAPreference ? $this->MFAPreference->toMap() : null;
        }
        if (null !== $this->personalInfoPreference) {
            $res['PersonalInfoPreference'] = null !== $this->personalInfoPreference ? $this->personalInfoPreference->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityPreference
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyPreference'])) {
            $model->accessKeyPreference = accessKeyPreference::fromMap($map['AccessKeyPreference']);
        }
        if (isset($map['LoginProfilePreference'])) {
            $model->loginProfilePreference = loginProfilePreference::fromMap($map['LoginProfilePreference']);
        }
        if (isset($map['MFAPreference'])) {
            $model->MFAPreference = MFAPreference::fromMap($map['MFAPreference']);
        }
        if (isset($map['PersonalInfoPreference'])) {
            $model->personalInfoPreference = personalInfoPreference::fromMap($map['PersonalInfoPreference']);
        }

        return $model;
    }
}
