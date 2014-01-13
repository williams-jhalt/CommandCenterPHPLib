<?php

namespace CommandCenter;

class Promotion extends AbstractModel implements JsonRestResponseInterface {

    const SHOWN_ON_MUFFS = 1;
    const SHOWN_ON_WILLIAMS = 2;

    private $_id;
    private $_description;
    private $_startDate;
    private $_endDate;
    private $_expires;
    private $_userId;
    private $_linkText;
    private $_url;
    private $_imageFileName;
    private $_imageType;
    private $_shownOn;
    private $_createdOn;
    private $_updatedOn;
    private $_imageUrl;

    public function getId() {
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
        return $this;
    }

    public function getDescription() {
        return $this->_description;
    }

    public function setDescription($description) {
        $this->_description = $description;
        return $this;
    }

    public function getStartDate() {
        return $this->_startDate;
    }

    public function setStartDate($startDate) {
        $this->_startDate = $startDate;
        return $this;
    }

    public function getEndDate() {
        return $this->_endDate;
    }

    public function setEndDate($endDate) {
        $this->_endDate = $endDate;
        return $this;
    }

    public function getExpires() {
        return $this->_expires;
    }

    public function setExpires($expires) {
        $this->_expires = $expires;
        return $this;
    }

    public function getUserId() {
        return $this->_userId;
    }

    public function setUserId($userId) {
        $this->_userId = $userId;
        return $this;
    }

    public function getLinkText() {
        return $this->_linkText;
    }

    public function setLinkText($linkText) {
        $this->_linkText = $linkText;
        return $this;
    }

    public function getUrl() {
        return $this->_url;
    }

    public function setUrl($url) {
        $this->_url = $url;
        return $this;
    }

    public function getImageFileName() {
        return $this->_imageFileName;
    }

    public function setImageFileName($imageFileName) {
        $this->_imageFileName = $imageFileName;
        return $this;
    }

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

    public function getCreatedOn() {
        return $this->_createdOn;
    }

    public function setCreatedOn($createdOn) {
        $this->_createdOn = $createdOn;
        return $this;
    }

    public function getUpdatedOn() {
        return $this->_updatedOn;
    }

    public function setUpdatedOn($updatedOn) {
        $this->_updatedOn = $updatedOn;
        return $this;
    }

    public function getImageUrl() {
        return $this->_imageUrl;
    }

    public function setImageUrl($imageUrl) {
        $this->_imageUrl = $imageUrl;
        return $this;
    }

    public function fromJsonResponse($response) {

        $this->setId($response->id)
                ->setDescription($response->description)
                ->setStartDate($response->start_date)
                ->setEndDate($response->end_date)
                ->setExpires($response->expires)
                ->setUserId($response->user_id)
                ->setLinkText($response->link_text)
                ->setUrl($response->url)
                ->setImageFileName($response->image_file_name)
                ->setImageType($response->image_type)
                ->setShownOn($response->shown_on)
                ->setCreatedOn($response->created_on)
                ->setUpdatedOn($response->updated_on)
                ->setImageUrl($response->image_url);
    }

}