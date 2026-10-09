<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Search\V1;

/**
 */
class SearchServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Search\V1\SearchProductsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SearchProducts(\Search\V1\SearchProductsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/search.v1.SearchService/SearchProducts',
        $argument,
        ['\Search\V1\SearchProductsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Search\V1\SuggestProductsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SuggestProducts(\Search\V1\SuggestProductsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/search.v1.SearchService/SuggestProducts',
        $argument,
        ['\Search\V1\SuggestProductsResponse', 'decode'],
        $metadata, $options);
    }

}
