<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Review\V1;

/**
 */
class ReviewEvidenceServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Review\V1\ReviewsSinceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReviewsSince(\Review\V1\ReviewsSinceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/review.v1.ReviewEvidenceService/ReviewsSince',
        $argument,
        ['\Review\V1\ReviewsSinceResponse', 'decode'],
        $metadata, $options);
    }

}
