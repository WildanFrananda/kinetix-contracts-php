<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Geo\V1;

/**
 */
class GeocodingServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Geo\V1\GeocodeAddressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GeocodeAddress(\Geo\V1\GeocodeAddressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/geo.v1.GeocodingService/GeocodeAddress',
        $argument,
        ['\Geo\V1\GeocodeAddressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Geo\V1\GeocodeAddressesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GeocodeAddresses(\Geo\V1\GeocodeAddressesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/geo.v1.GeocodingService/GeocodeAddresses',
        $argument,
        ['\Geo\V1\GeocodeAddressesResponse', 'decode'],
        $metadata, $options);
    }

}
