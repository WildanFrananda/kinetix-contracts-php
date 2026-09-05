<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Pricing\V1;

/**
 */
class PricingServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Pricing\V1\CalculatePriceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CalculatePrice(\Pricing\V1\CalculatePriceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pricing.v1.PricingService/CalculatePrice',
        $argument,
        ['\Pricing\V1\CalculatePriceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Pricing\V1\RedeemVoucherRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RedeemVoucher(\Pricing\V1\RedeemVoucherRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pricing.v1.PricingService/RedeemVoucher',
        $argument,
        ['\Pricing\V1\RedeemVoucherResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Pricing\V1\ReleaseVoucherRedemptionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReleaseVoucherRedemption(\Pricing\V1\ReleaseVoucherRedemptionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pricing.v1.PricingService/ReleaseVoucherRedemption',
        $argument,
        ['\Pricing\V1\ReleaseVoucherRedemptionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Pricing\V1\AllocateFlashSaleStockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AllocateFlashSaleStock(\Pricing\V1\AllocateFlashSaleStockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pricing.v1.PricingService/AllocateFlashSaleStock',
        $argument,
        ['\Pricing\V1\AllocateFlashSaleStockResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Pricing\V1\ReleaseFlashSaleAllocationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReleaseFlashSaleAllocation(\Pricing\V1\ReleaseFlashSaleAllocationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/pricing.v1.PricingService/ReleaseFlashSaleAllocation',
        $argument,
        ['\Pricing\V1\ReleaseFlashSaleAllocationResponse', 'decode'],
        $metadata, $options);
    }

}
