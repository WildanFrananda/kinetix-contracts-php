<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Shipping\V1;

/**
 */
class ShippingServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Shipping\V1\EstimateShippingOptionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function EstimateShippingOptions(\Shipping\V1\EstimateShippingOptionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/shipping.v1.ShippingService/EstimateShippingOptions',
        $argument,
        ['\Shipping\V1\EstimateShippingOptionsResponse', 'decode'],
        $metadata, $options);
    }

}
