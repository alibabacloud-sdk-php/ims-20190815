<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetLoginProfileResponse;

use AlibabaCloud\Tea\Model;

class loginProfile extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $lastLoginTime;

    /**
     * @var string
     */
    public $updateDate;

    /**
     * @var bool
     */
    public $passwordResetRequired;

    /**
     * @var string
     */
    public $userPrincipalName;

    /**
     * @var bool
     */
    public $MFABindRequired;
    protected $_name = [
        'status'                => 'Status',
        'lastLoginTime'         => 'LastLoginTime',
        'updateDate'            => 'UpdateDate',
        'passwordResetRequired' => 'PasswordResetRequired',
        'userPrincipalName'     => 'UserPrincipalName',
        'MFABindRequired'       => 'MFABindRequired',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('lastLoginTime', $this->lastLoginTime, true);
        Model::validateRequired('updateDate', $this->updateDate, true);
        Model::validateRequired('passwordResetRequired', $this->passwordResetRequired, true);
        Model::validateRequired('userPrincipalName', $this->userPrincipalName, true);
        Model::validateRequired('MFABindRequired', $this->MFABindRequired, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->lastLoginTime) {
            $res['LastLoginTime'] = $this->lastLoginTime;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }
        if (null !== $this->passwordResetRequired) {
            $res['PasswordResetRequired'] = $this->passwordResetRequired;
        }
        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }
        if (null !== $this->MFABindRequired) {
            $res['MFABindRequired'] = $this->MFABindRequired;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['LastLoginTime'])) {
            $model->lastLoginTime = $map['LastLoginTime'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }
        if (isset($map['PasswordResetRequired'])) {
            $model->passwordResetRequired = $map['PasswordResetRequired'];
        }
        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }
        if (isset($map['MFABindRequired'])) {
            $model->MFABindRequired = $map['MFABindRequired'];
        }

        return $model;
    }
}
