<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Notification\V1;

/**
 */
class NotificationServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Notification\V1\NotifyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Notify(\Notification\V1\NotifyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/notification.v1.NotificationService/Notify',
        $argument,
        ['\Notification\V1\NotifyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Notification\V1\GetDeliveryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDelivery(\Notification\V1\GetDeliveryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/notification.v1.NotificationService/GetDelivery',
        $argument,
        ['\Notification\V1\GetDeliveryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Notification\V1\RegisterDeviceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegisterDevice(\Notification\V1\RegisterDeviceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/notification.v1.NotificationService/RegisterDevice',
        $argument,
        ['\Notification\V1\RegisterDeviceResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Notification\V1\ForgetDeviceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ForgetDevice(\Notification\V1\ForgetDeviceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/notification.v1.NotificationService/ForgetDevice',
        $argument,
        ['\Notification\V1\ForgetDeviceResponse', 'decode'],
        $metadata, $options);
    }

}
