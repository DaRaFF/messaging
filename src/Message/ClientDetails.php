<?php
namespace Message;


class ClientDetails {


    public function getDetailsFrom($apiKey)
    {
        if($apiKey === "111") {
            return $this;
        }

        return null;
    }
}