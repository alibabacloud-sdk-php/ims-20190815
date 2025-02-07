<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListSAMLProvidersResponseBody\SAMLProviders;

class ListSAMLProvidersResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isTruncated;
    /**
     * @var string
     */
    public $marker;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (null !== $this->SAMLProviders) {
            $this->SAMLProviders->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['SAMLProviders'] = null !== $this->SAMLProviders ? $this->SAMLProviders->toArray($noStream) : $this->SAMLProviders;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
