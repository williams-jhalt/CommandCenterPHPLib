<?php
namespace CommandCenter;

class Connector {

    private $_ch;
    private $_url;
    private $_username;
    private $_password;
    private static $_options;
    
    public function __destruct() {
        curl_close($this->_ch);
    }

    public function __construct(array $config = null) {

        if ($config === null) {
            $config = self::$_options;
        }

        $this->_url = $config['url'];
        $this->_username = $config['username'];
        $this->_password = $config['password'];
    }

    public static function setDefaultOptions(array $options) {
        self::$_options = $options;
    }

    private function _getCurlHandler() {  
        if ($this->_ch === null) {
            $this->_ch = curl_init();
            curl_setopt($this->_ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($this->_ch, CURLOPT_USERPWD, "{$this->_username}:{$this->_password}");
        }
        return $this->_ch;
    }

    public function findWebBanners(WebBannerRequestOptions $options = null) {

        if ($options === null) {
            $options = new WebBannerRequestOptions();
        }

        $ch = $this->_getCurlHandler();

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, "{$this->_url}/web-banner?{$options->toRequestString()}");

        $result = array();

        if (($response = curl_exec($ch)) === false) {
            return $result;
        }

        $data = json_decode($response);
        
        foreach ($data as $webBannerData) {
            $webBanner = new WebBanner();
            $webBanner->fromJsonResponse($webBannerData);
            $result[] = $webBanner;
        }

        return $result;
    }

}