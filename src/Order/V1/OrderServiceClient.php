<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Order\V1;

/**
 */
class OrderServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Order\V1\GetOrderDetailsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrderDetails(\Order\V1\GetOrderDetailsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.v1.OrderService/GetOrderDetails',
        $argument,
        ['\Order\V1\GetOrderDetailsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Order\V1\ListOrdersForPrincipalRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListOrdersForPrincipal(\Order\V1\ListOrdersForPrincipalRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.v1.OrderService/ListOrdersForPrincipal',
        $argument,
        ['\Order\V1\ListOrdersForPrincipalResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Order\V1\FulfillmentPackedRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FulfillmentPacked(\Order\V1\FulfillmentPackedRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.v1.OrderService/FulfillmentPacked',
        $argument,
        ['\Order\V1\FulfillmentPackedResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Order\V1\OrderDeliveredRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function OrderDelivered(\Order\V1\OrderDeliveredRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.v1.OrderService/OrderDelivered',
        $argument,
        ['\Order\V1\OrderDeliveredResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Order\V1\OpenReturnRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function OpenReturn(\Order\V1\OpenReturnRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.v1.OrderService/OpenReturn',
        $argument,
        ['\Order\V1\OpenReturnResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Order\V1\ReturnGoodsReceivedRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReturnGoodsReceived(\Order\V1\ReturnGoodsReceivedRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.v1.OrderService/ReturnGoodsReceived',
        $argument,
        ['\Order\V1\ReturnGoodsReceivedResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Order\V1\OrdersChangedSinceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function OrdersChangedSince(\Order\V1\OrdersChangedSinceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.v1.OrderService/OrdersChangedSince',
        $argument,
        ['\Order\V1\OrdersChangedSinceResponse', 'decode'],
        $metadata, $options);
    }

}
