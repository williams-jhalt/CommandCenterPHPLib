<?php

namespace CommandCenter;

class WebBannerRequestOptions extends AbstractModel implements JsonRestRequestInterface {

    public $_shownOn = null;
    public $_activeOnly = false;
    public $_imageType = null;
    
    public function getImageType() {
        return $this->_imageType;
    }

    public function setImageType($imageType) {
        $this->_imageType = $imageType;
        return $this;
    }

    
    public function getShownOn() {
        return $this->_shownOn;
    }

    public function setShownOn($shownOn) {
        $this->_shownOn = $shownOn;
        return $this;
    }

    public function getActiveOnly() {
        return $this->_activeOnly;
    }

    public function setActiveOnly($activeOnly) {
        $this->_activeOnly = $activeOnly;
        return $this;
    }

    public function toRequestString() {
        return http_build_query(array(
            'shownOn' => $this->_shownOn,
            'activeOnly' => $this->_activeOnly,
            'imageType' => $this->_imageType
        ));
    }

}