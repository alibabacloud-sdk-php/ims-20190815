<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccountSummaryResponse\summaryMap;
use AlibabaCloud\Tea\Model;

class GetAccountSummaryResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var summaryMap
     */
    public $summaryMap;
    protected $_name = [
        'requestId'  => 'RequestId',
        'summaryMap' => 'SummaryMap',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('summaryMap', $this->summaryMap, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->summaryMap) {
            $res['SummaryMap'] = null !== $this->summaryMap ? $this->summaryMap->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountSummaryResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SummaryMap'])) {
            $model->summaryMap = summaryMap::fromMap($map['SummaryMap']);
        }

        return $model;
    }
}
