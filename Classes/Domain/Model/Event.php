<?php
/**
 * Event (Example) for the calendarize function
 *
 * @package Calendarize\Domain\Model
 * @author  Tim Lochmüller
 */

namespace HDNET\Calendarize\Domain\Model;

/**
 * Event (Example) for the calendarize function
 *
 * @author     Tim Lochmüller
 * @db
 */
class Event extends AbstractModel {

	/**
	 * Title
	 *
	 * @var string
	 * @db
	 */
	protected $title;

	/**
	 * Description
	 *
	 * @var string
	 * @db
	 */
	protected $description;

	/**
	 * Images
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
	 * @db
	 */
	protected $images;

	/**
	 * Downloads
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
	 * @db
	 */
	protected $downloads;

	/**
	 * Set title
	 *
	 * @param string $title
	 *
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Get title
	 *
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Set description
	 *
	 * @param string $description
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Get description
	 *
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Set downloads
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $downloads
	 */
	public function setDownloads($downloads) {
		$this->downloads = $downloads;
	}

	/**
	 * Get downloads
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getDownloads() {
		return $this->downloads;
	}

	/**
	 * Set images
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $images
	 */
	public function setImages($images) {
		$this->images = $images;
	}

	/**
	 * Get images
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getImages() {
		return $this->images;
	}

}