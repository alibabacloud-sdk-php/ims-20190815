<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListSAMLProvidersResponseBody\SAMLProviders;
use AlibabaCloud\Tea\Model;

class ListSAMLProvidersResponseBody extends Model
{
    /**
     * @description Indicates whether the response is truncated. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @description The `marker`. This parameter is returned only if the value of `IsTruncated` is `true`. If the parameter is returned, you can call this operation again and set this parameter to obtain the truncated part.
     *
     * @example EXAMPLE
     *
     * @var string
     */
    public $marker;

    /**
     * @description The ID of the request.
     *
     * @example 2D8B70D3-E194-41C9-93C5-F6A10D716D24
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information of the IdP.
     *
     * @var SAMLProviders
     */
    public $SAMLProviders;
    protected $_name = [
        'isTruncated'   => 'IsTruncated',
        'marker'        => 'Marker',
        'requestId'     => 'RequestId',
        'SAMLProviders' => 'SAMLProviders',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SAMLProviders) {
            $res['SAMLProviders'] = null !== $this->SAMLProviders ? $this->SAMLProviders->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSAMLProvidersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SAMLProviders'])) {
            $model->SAMLProviders = SAMLProviders::fromMap($map['SAMLProviders']);
        }

        return $model;
    }
}
