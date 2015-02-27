<?php
/**
 * Configuration for time options
 *
 * @package Calendarize\Domain\Model
 * @author  Tim Lochmüller
 */

namespace HDNET\Calendarize\Domain\Model;

/**
 * Configuration for time options
 *
 * @author       Tim Lochmüller
 * @db
 * @smartExclude language,enableFields
 */
class Configuration extends AbstractModel {

	const TYPE_TIME = 'time';

	const TYPE_INCLUDE_GROUP = 'include';

	const TYPE_EXCLUDE_GROUP = 'exclude';

	const TYPE_EXTERNAL = 'external';

	const FREQUENCY_NONE = '';

	const FREQUENCY_DAILY = 'daily';

	const FREQUENCY_WEEKLY = 'weekly';

	const FREQUENCY_MONTHLY = 'monthly';

	const FREQUENCY_YEARLY = 'yearly';

	const DAY_NONE = '';

	const DAY_SPECIAL_WEEKDAY = 'weekday';

	const DAY_SPECIAL_WORKDAY = 'workday';

	const DAY_SPECIAL_BUSINESS = 'business';

	const DAY_MONDAY = 'monday';

	const DAY_TUESDAY = 'tuesday';

	const DAY_WEDNESDAY = 'wednesday';

	const DAY_THURSDAY = 'thursday';

	const DAY_FRIDAY = 'friday';

	const DAY_SATURDAY = 'saturday';

	const DAY_SUNDAY = 'sunday';

	const RECURRENCE_NONE = '';

	const RECURRENCE_FIRST = 'first';

	const RECURRENCE_SECOND = 'second';

	const RECURRENCE_THIRD = 'third';

	const RECURRENCE_FOURTH = 'fourth';

	const RECURRENCE_LAST = 'last';

	/**
	 * Type
	 *
	 * @var string
	 * @db
	 */
	protected $type = self::TYPE_TIME;

	/**
	 * Start date
	 *
	 * @var \DateTime
	 * @db
	 */
	protected $startDate;

	/**
	 * End date
	 *
	 * @var \DateTime
	 * @db
	 */
	protected $endDate;

	/**
	 * Start time
	 *
	 * @var int
	 * @db
	 */
	protected $startTime;

	/**
	 * End time
	 *
	 * @var int
	 * @db
	 */
	protected $endTime;

	/**
	 * AllDay
	 *
	 * @var boolean
	 * @db
	 */
	protected $allDay;

	/**
	 * External ICS url
	 *
	 * @var string
	 * @db
	 */
	protected $externalIcsUrl;

	/**
	 * Groups
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\HDNET\Calendarize\Domain\Model\ConfigurationGroup>
	 * @db text NOT NULL
	 * @lazy
	 */
	protected $groups;

	/**
	 * Frequency
	 *
	 * @var string
	 * @db
	 */
	protected $frequency = self::FREQUENCY_NONE;

	/**
	 * Till date
	 *
	 * @var \DateTime
	 * @db
	 */
	protected $tillDate;

	/**
	 * Counter amount
	 *
	 * @var  int
	 * @db
	 */
	protected $counterAmount;

	/**
	 * Counter interval
	 *
	 * @var int
	 * @db
	 */
	protected $counterInterval;

	/**
	 * Recurrence
	 *
	 * @var string
	 * @db
	 */
	protected $recurrence = self::RECURRENCE_NONE;

	/**
	 * Day property
	 *
	 * @var string
	 * @db
	 */
	protected $day = self::DAY_NONE;

	/**
	 * Set type
	 *
	 * @param string $type
	 *
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Get type
	 *
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Set all day
	 *
	 * @param boolean $allDay
	 */
	public function setAllDay($allDay) {
		$this->allDay = $allDay;
	}

	/**
	 * Get all day
	 *
	 * @return boolean
	 */
	public function getAllDay() {
		return (bool)$this->allDay;
	}

	/**
	 * Set end date
	 *
	 * @param \DateTime $endDate
	 */
	public function setEndDate($endDate) {
		$this->endDate = $endDate;
	}

	/**
	 * Get end date
	 *
	 * @return \DateTime
	 */
	public function getEndDate() {
		return $this->endDate;
	}

	/**
	 * Set end time
	 *
	 * @param int $endTime
	 */
	public function setEndTime($endTime) {
		$this->endTime = $endTime;
	}

	/**
	 * Get end time
	 *
	 * @return int
	 */
	public function getEndTime() {
		return $this->endTime;
	}

	/**
	 * Set start date
	 *
	 * @param \DateTime $startDate
	 */
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
	}

	/**
	 * Get start date
	 *
	 * @return \DateTime
	 */
	public function getStartDate() {
		return $this->startDate;
	}

	/**
	 * Set start time
	 *
	 * @param int $startTime
	 */
	public function setStartTime($startTime) {
		$this->startTime = $startTime;
	}

	/**
	 * Get start time
	 *
	 * @return int
	 */
	public function getStartTime() {
		return $this->startTime;
	}

	/**
	 * Set groups
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $groups
	 */
	public function setGroups($groups) {
		$this->groups = $groups;
	}

	/**
	 * Get groups
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
	 */
	public function getGroups() {
		return $this->groups;
	}

	/**
	 * Set frequency
	 *
	 * @param string $frequency
	 */
	public function setFrequency($frequency) {
		$this->frequency = $frequency;
	}

	/**
	 * Get frequency
	 *
	 * @return string
	 */
	public function getFrequency() {
		return $this->frequency;
	}

	/**
	 * Set till date
	 *
	 * @param \DateTime $tillDate
	 */
	public function setTillDate($tillDate) {
		$this->tillDate = $tillDate;
	}

	/**
	 * Get till date
	 *
	 * @return \DateTime
	 */
	public function getTillDate() {
		return $this->tillDate;
	}

	/**
	 * Set counter amount
	 *
	 * @param int $counterAmount
	 */
	public function setCounterAmount($counterAmount) {
		$this->counterAmount = $counterAmount;
	}

	/**
	 * Get counter amount
	 *
	 * @return int
	 */
	public function getCounterAmount() {
		return $this->counterAmount;
	}

	/**
	 * Set counter interval
	 *
	 * @param int $counterInterval
	 */
	public function setCounterInterval($counterInterval) {
		$this->counterInterval = $counterInterval;
	}

	/**
	 * Get counter interval
	 *
	 * @return int
	 */
	public function getCounterInterval() {
		return $this->counterInterval;
	}

	/**
	 * Get external ICS URL
	 *
	 * @return string
	 */
	public function getExternalIcsUrl() {
		return $this->externalIcsUrl;
	}

	/**
	 * Set external ICS URL
	 *
	 * @param string $externalIcsUrl
	 */
	public function setExternalIcsUrl($externalIcsUrl) {
		$this->externalIcsUrl = $externalIcsUrl;
	}

	/**
	 * @return string
	 */
	public function getDay() {
		return $this->day;
	}

	/**
	 * @param string $day
	 */
	public function setDay($day) {
		$this->day = $day;
	}

	/**
	 * @return string
	 */
	public function getRecurrence() {
		return $this->recurrence;
	}

	/**
	 * @param string $recurrence
	 */
	public function setRecurrence($recurrence) {
		$this->recurrence = $recurrence;
	}

}