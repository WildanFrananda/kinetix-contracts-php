<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Notary\V1;

/**
 */
class EpochWatchServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\ClientStreamingCall
     */
    public function ApproveEpoch($metadata = [], $options = []) {
        return $this->_clientStreamRequest('/notary.v1.EpochWatchService/ApproveEpoch',
        ['\Notary\V1\ApproveEpochResponse','decode'],
        $metadata, $options);
    }

}
