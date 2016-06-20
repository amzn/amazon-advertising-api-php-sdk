<?php
namespace AmazonAdvertisingApi;

class Regions
{
    public $endpoints = array(
        "na" => array(
            "prod"     => "advertising-api.amazon.com",
            "sandbox"  => "advertising-api-test.amazon.com",
            "tokenUrl" => "api.amazon.com/auth/o2/token"),
        "eu" => array(
            "prod"     => "advertising-api-eu.amazon.com",
            "sandbox"  => "advertising-api-test.amazon.com",
            "tokenUrl" => "api.amazon.com/auth/o2/token"
        )
    );
}
