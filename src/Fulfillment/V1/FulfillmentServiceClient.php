<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Fulfillment\V1;

/**
 */
class FulfillmentServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Fulfillment\V1\CreateOrderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateOrder(\Fulfillment\V1\CreateOrderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fulfillment.v1.FulfillmentService/CreateOrder',
        $argument,
        ['\Fulfillment\V1\CreateOrderResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Fulfillment\V1\GetOrderStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrderStatus(\Fulfillment\V1\GetOrderStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fulfillment.v1.FulfillmentService/GetOrderStatus',
        $argument,
        ['\Fulfillment\V1\GetOrderStatusResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Fulfillment\V1\CancelOrderRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CancelOrder(\Fulfillment\V1\CancelOrderRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fulfillment.v1.FulfillmentService/CancelOrder',
        $argument,
        ['\Fulfillment\V1\CancelOrderResponse', 'decode'],
        $metadata, $options);
    }

}
