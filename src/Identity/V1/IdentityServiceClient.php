<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Identity\V1;

/**
 */
class IdentityServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Identity\V1\ResolvePrincipalRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResolvePrincipal(\Identity\V1\ResolvePrincipalRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/identity.v1.IdentityService/ResolvePrincipal',
        $argument,
        ['\Identity\V1\ResolvePrincipalResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Identity\V1\GetPrincipalRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPrincipal(\Identity\V1\GetPrincipalRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/identity.v1.IdentityService/GetPrincipal',
        $argument,
        ['\Identity\V1\GetPrincipalResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Identity\V1\GetUserProfileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetUserProfile(\Identity\V1\GetUserProfileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/identity.v1.IdentityService/GetUserProfile',
        $argument,
        ['\Identity\V1\GetUserProfileResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Identity\V1\GetMerchantInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMerchantInfo(\Identity\V1\GetMerchantInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/identity.v1.IdentityService/GetMerchantInfo',
        $argument,
        ['\Identity\V1\GetMerchantInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Identity\V1\ValidateTokenRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ValidateToken(\Identity\V1\ValidateTokenRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/identity.v1.IdentityService/ValidateToken',
        $argument,
        ['\Identity\V1\ValidateTokenResponse', 'decode'],
        $metadata, $options);
    }

}
