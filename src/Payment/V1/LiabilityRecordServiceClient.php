<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Payment\V1;

/**
 */
class LiabilityRecordServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Payment\V1\GetLiabilitySnapshotRecordRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLiabilitySnapshotRecord(\Payment\V1\GetLiabilitySnapshotRecordRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/payment.v1.LiabilityRecordService/GetLiabilitySnapshotRecord',
        $argument,
        ['\Payment\V1\GetLiabilitySnapshotRecordResponse', 'decode'],
        $metadata, $options);
    }

}
