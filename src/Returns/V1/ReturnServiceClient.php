<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Returns\V1;

/**
 */
class ReturnServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Returns\V1\SubmitReturnClaimRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SubmitReturnClaim(\Returns\V1\SubmitReturnClaimRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/returns.v1.ReturnService/SubmitReturnClaim',
        $argument,
        ['\Returns\V1\SubmitReturnClaimResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Returns\V1\GetReturnStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetReturnStatus(\Returns\V1\GetReturnStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/returns.v1.ReturnService/GetReturnStatus',
        $argument,
        ['\Returns\V1\GetReturnStatusResponse', 'decode'],
        $metadata, $options);
    }

}
