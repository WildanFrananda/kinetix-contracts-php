<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Fleet\V1;

/**
 */
class FleetRegistryServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Fleet\V1\RegisterDriverRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegisterDriver(\Fleet\V1\RegisterDriverRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fleet.v1.FleetRegistryService/RegisterDriver',
        $argument,
        ['\Fleet\V1\RegisterDriverResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Fleet\V1\ActivateDriverRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ActivateDriver(\Fleet\V1\ActivateDriverRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fleet.v1.FleetRegistryService/ActivateDriver',
        $argument,
        ['\Fleet\V1\ActivateDriverResponse', 'decode'],
        $metadata, $options);
    }

}
