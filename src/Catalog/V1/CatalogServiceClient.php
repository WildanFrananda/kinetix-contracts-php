<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Catalog\V1;

/**
 */
class CatalogServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Catalog\V1\ChangedSinceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ChangedSince(\Catalog\V1\ChangedSinceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.CatalogService/ChangedSince',
        $argument,
        ['\Catalog\V1\ChangedSinceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\GetProductRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetProduct(\Catalog\V1\GetProductRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.CatalogService/GetProduct',
        $argument,
        ['\Catalog\V1\GetProductResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\V1\CountProductsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CountProducts(\Catalog\V1\CountProductsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.v1.CatalogService/CountProducts',
        $argument,
        ['\Catalog\V1\CountProductsResponse', 'decode'],
        $metadata, $options);
    }

}
