<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class SetSecurityPreferenceRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $allowUserToChangePassword;

    /**
     * @example false
     *
     * @var bool
     */
    public $allowUserToManageAccessKeys;

    /**
     * @example true
     *
     * @var bool
     */
    public $allowUserToManageMFADevices;

    /**
     * @example true
     *
     * @var bool
     */
    public $allowUserToManagePersonalDingTalk;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableSaveMFATicket;

    /**
     * @example true
     *
     * @var bool
     */
    public $enforceMFAForLogin;

    /**
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $loginNetworkMasks;

    /**
     * @example 6
     *
     * @var int
     */
    public $loginSessionDuration;
    protected $_name = [
        'allowUserToChangePassword'         => 'AllowUserToChangePassword',
        'allowUserToManageAccessKeys'       => 'AllowUserToManageAccessKeys',
        'allowUserToManageMFADevices'       => 'AllowUserToManageMFADevices',
        'allowUserToManagePersonalDingTalk' => 'AllowUserToManagePersonalDingTalk',
        'enableSaveMFATicket'               => 'EnableSaveMFATicket',
        'enforceMFAForLogin'                => 'EnforceMFAForLogin',
        'loginNetworkMasks'                 => 'LoginNetworkMasks',
        'loginSessionDuration'              => 'LoginSessionDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowUserToChangePassword) {
            $res['AllowUserToChangePassword'] = $this->allowUserToChangePassword;
        }
        if (null !== $this->allowUserToManageAccessKeys) {
            $res['AllowUserToManageAccessKeys'] = $this->allowUserToManageAccessKeys;
        }
        if (null !== $this->allowUserToManageMFADevices) {
            $res['AllowUserToManageMFADevices'] = $this->allowUserToManageMFADevices;
        }
        if (null !== $this->allowUserToManagePersonalDingTalk) {
            $res['AllowUserToManagePersonalDingTalk'] = $this->allowUserToManagePersonalDingTalk;
        }
        if (null !== $this->enableSaveMFATicket) {
            $res['EnableSaveMFATicket'] = $this->enableSaveMFATicket;
        }
        if (null !== $this->enforceMFAForLogin) {
            $res['EnforceMFAForLogin'] = $this->enforceMFAForLogin;
        }
        if (null !== $this->loginNetworkMasks) {
            $res['LoginNetworkMasks'] = $this->loginNetworkMasks;
        }
        if (null !== $this->loginSessionDuration) {
            $res['LoginSessionDuration'] = $this->loginSessionDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetSecurityPreferenceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowUserToChangePassword'])) {
            $model->allowUserToChangePassword = $map['AllowUserToChangePassword'];
        }
        if (isset($map['AllowUserToManageAccessKeys'])) {
            $model->allowUserToManageAccessKeys = $map['AllowUserToManageAccessKeys'];
        }
        if (isset($map['AllowUserToManageMFADevices'])) {
            $model->allowUserToManageMFADevices = $map['AllowUserToManageMFADevices'];
        }
        if (isset($map['AllowUserToManagePersonalDingTalk'])) {
            $model->allowUserToManagePersonalDingTalk = $map['AllowUserToManagePersonalDingTalk'];
        }
        if (isset($map['EnableSaveMFATicket'])) {
            $model->enableSaveMFATicket = $map['EnableSaveMFATicket'];
        }
        if (isset($map['EnforceMFAForLogin'])) {
            $model->enforceMFAForLogin = $map['EnforceMFAForLogin'];
        }
        if (isset($map['LoginNetworkMasks'])) {
            $model->loginNetworkMasks = $map['LoginNetworkMasks'];
        }
        if (isset($map['LoginSessionDuration'])) {
            $model->loginSessionDuration = $map['LoginSessionDuration'];
        }

        return $model;
    }
}
