<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Fleet\V1;

/**
 */
class CourierTelemetryServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Fleet\V1\DispatchCourierRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DispatchCourier(\Fleet\V1\DispatchCourierRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fleet.v1.CourierTelemetryService/DispatchCourier',
        $argument,
        ['\Fleet\V1\DispatchCourierResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\BidiStreamingCall
     */
    public function StreamDriverLocation($metadata = [], $options = []) {
        return $this->_bidiRequest('/fleet.v1.CourierTelemetryService/StreamDriverLocation',
        ['\Fleet\V1\DriverLocationAck','decode'],
        $metadata, $options);
    }

}
