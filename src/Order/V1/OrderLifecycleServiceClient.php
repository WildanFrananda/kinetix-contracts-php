<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Order\V1;

/**
 */
class OrderLifecycleServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Order\V1\LifecycleEventsSinceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LifecycleEventsSince(\Order\V1\LifecycleEventsSinceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.v1.OrderLifecycleService/LifecycleEventsSince',
        $argument,
        ['\Order\V1\LifecycleEventsSinceResponse', 'decode'],
        $metadata, $options);
    }

}
