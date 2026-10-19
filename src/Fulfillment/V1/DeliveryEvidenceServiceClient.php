<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Fulfillment\V1;

/**
 */
class DeliveryEvidenceServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Fulfillment\V1\DeliveriesSinceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeliveriesSince(\Fulfillment\V1\DeliveriesSinceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fulfillment.v1.DeliveryEvidenceService/DeliveriesSince',
        $argument,
        ['\Fulfillment\V1\DeliveriesSinceResponse', 'decode'],
        $metadata, $options);
    }

}
