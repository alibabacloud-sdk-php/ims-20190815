<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class UpdateOIDCProviderRequest extends Model
{
    /**
     * @description The ID of the client. If you want to specify multiple fingerprints, separate the fingerprints with commas (,).
     *
     * >  If you specify this parameter, all the client IDs of the OIDC IdP are replaced. If you need to only add or remove a client ID, call the AddClientIdToOIDCProvider or RemoveClientIdFromOIDCProvider operation. For more information, see [AddClientIdToOIDCProvider](~~332057~~) or [RemoveClientIdFromOIDCProvider](~~332058~~).
     * @example 498469743454717****
     *
     * @var string
     */
    public $clientIds;

    /**
     * @description The description of the OIDC IdP.
     *
     * The description can be up to 256 characters in length.
     * @example This is a new OIDC Provider.
     *
     * @var string
     */
    public $newDescription;

    /**
     * @description The name of the OIDC IdP.
     *
     * @example TestOIDCProvider
     *
     * @var string
     */
    public $OIDCProviderName;
    protected $_name = [
        'clientIds'        => 'ClientIds',
        'newDescription'   => 'NewDescription',
        'OIDCProviderName' => 'OIDCProviderName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIds) {
            $res['ClientIds'] = $this->clientIds;
        }
        if (null !== $this->newDescription) {
            $res['NewDescription'] = $this->newDescription;
        }
        if (null !== $this->OIDCProviderName) {
            $res['OIDCProviderName'] = $this->OIDCProviderName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateOIDCProviderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIds'])) {
            $model->clientIds = $map['ClientIds'];
        }
        if (isset($map['NewDescription'])) {
            $model->newDescription = $map['NewDescription'];
        }
        if (isset($map['OIDCProviderName'])) {
            $model->OIDCProviderName = $map['OIDCProviderName'];
        }

        return $model;
    }
}
