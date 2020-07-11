<?php

class CURL {

    private $resource;
    private $url;
    private $options;
    private $response;

    public function __construct(string $url)
    {
        $this->url = $url;
        $this->resource = curl_init( $this->url );
    }

    public function setOptions(array $options)
    {
        $this->options = $options;
        foreach ( $this->options as $option => $value )
        {
            curl_setopt( $this->resource, $option, $value );
        }
        $this->response = curl_exec( $this->resource );
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function __destruct()
    {
        curl_close( $this->resource );
    }

}