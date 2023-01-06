<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetLoginProfileResponseBody;

use AlibabaCloud\Tea\Model;

class loginProfile extends Model
{
    /**
     * @example 2020-10-14T07:25:25Z
     *
     * @var string
     */
    public $lastLoginTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $MFABindRequired;

    /**
     * @example false
     *
     * @var bool
     */
    public $passwordResetRequired;

    /**
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @example 2020-10-14T06:56:45Z
     *
     * @var string
     */
    public $updateDate;

    /**
     * @example test@example.onaliyun.com
     *
     * @var string
     */
    public $userPrincipalName;
    protected $_name = [
        'lastLoginTime'         => 'LastLoginTime',
        'MFABindRequired'       => 'MFABindRequired',
        'passwordResetRequired' => 'PasswordResetRequired',
        'status'                => 'Status',
        'updateDate'            => 'UpdateDate',
        'userPrincipalName'     => 'UserPrincipalName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lastLoginTime) {
            $res['LastLoginTime'] = $this->lastLoginTime;
        }
        if (null !== $this->MFABindRequired) {
            $res['MFABindRequired'] = $this->MFABindRequired;
        }
        if (null !== $this->passwordResetRequired) {
            $res['PasswordResetRequired'] = $this->passwordResetRequired;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loginProfile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LastLoginTime'])) {
            $model->lastLoginTime = $map['LastLoginTime'];
        }
        if (isset($map['MFABindRequired'])) {
            $model->MFABindRequired = $map['MFABindRequired'];
        }
        if (isset($map['PasswordResetRequired'])) {
            $model->passwordResetRequired = $map['PasswordResetRequired'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        return $model;
    }
}
