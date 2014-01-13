<?php

namespace CommandCenter;

class ProductRequestOptions extends AbstractModel implements JsonRestRequestInterface {

    public $_shownOn = null;
    public $_activeOnly = false;

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
            'activeOnly' => $this->_activeOnly
        ));
    }

}