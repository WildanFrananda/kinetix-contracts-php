<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Fulfillment\V1;

/**
 */
class BinStockServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Fulfillment\V1\CheckBinStockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CheckBinStock(\Fulfillment\V1\CheckBinStockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fulfillment.v1.BinStockService/CheckBinStock',
        $argument,
        ['\Fulfillment\V1\CheckBinStockResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Fulfillment\V1\ReserveStockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReserveStock(\Fulfillment\V1\ReserveStockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fulfillment.v1.BinStockService/ReserveStock',
        $argument,
        ['\Fulfillment\V1\ReserveStockResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Fulfillment\V1\ReleaseStockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReleaseStock(\Fulfillment\V1\ReleaseStockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fulfillment.v1.BinStockService/ReleaseStock',
        $argument,
        ['\Fulfillment\V1\ReleaseStockResponse', 'decode'],
        $metadata, $options);
    }

}
