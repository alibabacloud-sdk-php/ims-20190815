<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GetCredentialReportRequest extends Model
{
    /**
     * @var string
     */
    public $maxItems;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'maxItems'  => 'MaxItems',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxItems) {
            $res['MaxItems'] = $this->maxItems;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCredentialReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxItems'])) {
            $model->maxItems = $map['MaxItems'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
