<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Payment\V1;

/**
 */
class PaymentServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Payment\V1\CreateEscrowHoldRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateEscrowHold(\Payment\V1\CreateEscrowHoldRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/payment.v1.PaymentService/CreateEscrowHold',
        $argument,
        ['\Payment\V1\EscrowHoldResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Payment\V1\ReleaseEscrowRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReleaseEscrow(\Payment\V1\ReleaseEscrowRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/payment.v1.PaymentService/ReleaseEscrow',
        $argument,
        ['\Payment\V1\EscrowHoldResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Payment\V1\RefundEscrowRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RefundEscrow(\Payment\V1\RefundEscrowRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/payment.v1.PaymentService/RefundEscrow',
        $argument,
        ['\Payment\V1\EscrowHoldResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Payment\V1\GetEscrowStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetEscrowStatus(\Payment\V1\GetEscrowStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/payment.v1.PaymentService/GetEscrowStatus',
        $argument,
        ['\Payment\V1\EscrowHoldResponse', 'decode'],
        $metadata, $options);
    }

}
