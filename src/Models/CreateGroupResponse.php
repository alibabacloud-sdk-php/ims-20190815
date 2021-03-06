<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\CreateGroupResponse\group;
use AlibabaCloud\Tea\Model;

class CreateGroupResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var group
     */
    public $group;
    protected $_name = [
        'requestId' => 'RequestId',
        'group'     => 'Group',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('group', $this->group, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->group) {
            $res['Group'] = null !== $this->group ? $this->group->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGroupResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Group'])) {
            $model->group = group::fromMap($map['Group']);
        }

        return $model;
    }
}
