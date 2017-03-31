<?php


namespace InTimesIT\CalendarBundle\Model;

use DateTime;

interface EventInterface
{
    const STATUS_TENTATIVE = 'TENTATIVE';
    const STATUS_CONFIRMED = 'CONFIRMED';
    const STATUS_CANCELLED = 'CANCELLED';

    const STATUSES = [
        'event.status.tentative' => self::STATUS_TENTATIVE,
        'event.status.confirmed' => self::STATUS_CONFIRMED,
        'event.status.cancelled' => self::STATUS_CANCELLED,
    ];

    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title);

    /**
     * @return DateTime
     */
    public function getStart();

    /**
     * @param DateTime $start
     *
     * @return self
     */
    public function setStart($start);

    /**
     * @return DateTime
     */
    public function getEnd();

    /**
     * @param DateTime $end
     *
     * @return self
     */
    public function setEnd($end);

    /**
     * @return bool
     */
    public function isAllDay();

    /**
     * @param bool $allDay
     *
     * @return self
     */
    public function setAllDay($allDay);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription($description);

    /**
     * @return string
     */
    public function getLocation();

    /**
     * @param string $location
     *
     * @return self
     */
    public function setLocation($location);

    /**
     * @return string
     */
    public function getStatus();

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status);

    /**
     * @return array
     */
    public function getParticipants();

    /**
     * @param array $participants
     *
     * @return self
     */
    public function setParticipants($participants);
}
