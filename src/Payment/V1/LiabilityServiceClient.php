<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Payment\V1;

/**
 */
class LiabilityServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Payment\V1\StreamLiabilitySnapshotRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ServerStreamingCall
     */
    public function StreamLiabilitySnapshot(\Payment\V1\StreamLiabilitySnapshotRequest $argument,
      $metadata = [], $options = []) {
        return $this->_serverStreamRequest('/payment.v1.LiabilityService/StreamLiabilitySnapshot',
        $argument,
        ['\Payment\V1\StreamLiabilitySnapshotResponse', 'decode'],
        $metadata, $options);
    }

}
