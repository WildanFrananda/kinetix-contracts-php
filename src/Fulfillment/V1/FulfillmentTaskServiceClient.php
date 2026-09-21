<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Fulfillment\V1;

/**
 */
class FulfillmentTaskServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Fulfillment\V1\CreateFulfillmentTaskRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateFulfillmentTask(\Fulfillment\V1\CreateFulfillmentTaskRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fulfillment.v1.FulfillmentTaskService/CreateFulfillmentTask',
        $argument,
        ['\Fulfillment\V1\CreateFulfillmentTaskResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Fulfillment\V1\CancelFulfillmentTaskRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CancelFulfillmentTask(\Fulfillment\V1\CancelFulfillmentTaskRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fulfillment.v1.FulfillmentTaskService/CancelFulfillmentTask',
        $argument,
        ['\Fulfillment\V1\CancelFulfillmentTaskResponse', 'decode'],
        $metadata, $options);
    }

}
