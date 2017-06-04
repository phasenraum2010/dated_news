<?php
namespace FalkRoder\DatedNews\Domain\Model;

/***
 *
 * This file is part of the "Dated News" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017
 *
 ***/

/**
 * NewsRecurrence
 */
class NewsRecurrence extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * eventstart
     *
     * @var \DateTime
     */
    protected $eventstart = null;

    /**
     * eventend
     *
     * @var \DateTime
     */
    protected $eventend = null;

    /**
     * eventlocation
     *
     * @var string
     */
    protected $eventlocation = '';

    /**
     * bodytext
     *
     * @var string
     */
    protected $bodytext = '';

    /**
     * teaser
     *
     * @var string
     */
    protected $teaser = '';

    /**
     * parentEvent
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\FalkRoder\DatedNews\Domain\Model\News>
     * @cascade remove
     */
    protected $parentEvent = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->parentEvent = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the eventstart
     *
     * @return \DateTime $eventstart
     */
    public function getEventstart()
    {
        return $this->eventstart;
    }

    /**
     * Sets the eventstart
     *
     * @param \DateTime $eventstart
     * @return void
     */
    public function setEventstart(\DateTime $eventstart)
    {
        $this->eventstart = $eventstart;
    }

    /**
     * Returns the eventend
     *
     * @return \DateTime $eventend
     */
    public function getEventend()
    {
        return $this->eventend;
    }

    /**
     * Sets the eventend
     *
     * @param \DateTime $eventend
     * @return void
     */
    public function setEventend(\DateTime $eventend)
    {
        $this->eventend = $eventend;
    }

    /**
     * Returns the eventlocation
     *
     * @return string $eventlocation
     */
    public function getEventlocation()
    {
        return $this->eventlocation;
    }

    /**
     * Sets the eventlocation
     *
     * @param string $eventlocation
     * @return void
     */
    public function setEventlocation($eventlocation)
    {
        $this->eventlocation = $eventlocation;
    }

    /**
     * Returns the bodytext
     *
     * @return string $bodytext
     */
    public function getBodytext()
    {
        return $this->bodytext;
    }

    /**
     * Sets the bodytext
     *
     * @param string $bodytext
     * @return void
     */
    public function setBodytext($bodytext)
    {
        $this->bodytext = $bodytext;
    }

    /**
     * Returns the teaser
     *
     * @return string $teaser
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * Sets the teaser
     *
     * @param string $teaser
     * @return void
     */
    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;
    }

    /**
     * Adds a News
     *
     * @param \FalkRoder\DatedNews\Domain\Model\News $parentEvent
     * @return void
     */
    public function addParentEvent(\FalkRoder\DatedNews\Domain\Model\News $parentEvent)
    {
        $this->parentEvent->attach($parentEvent);
    }

    /**
     * Removes a News
     *
     * @param \FalkRoder\DatedNews\Domain\Model\News $parentEventToRemove The News to be removed
     * @return void
     */
    public function removeParentEvent(\FalkRoder\DatedNews\Domain\Model\News $parentEventToRemove)
    {
        $this->parentEvent->detach($parentEventToRemove);
    }

    /**
     * Returns the parentEvent
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\FalkRoder\DatedNews\Domain\Model\News> $parentEvent
     */
    public function getParentEvent()
    {
        return $this->parentEvent;
    }

    /**
     * Sets the parentEvent
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\FalkRoder\DatedNews\Domain\Model\News> $parentEvent
     * @return void
     */
    public function setParentEvent(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $parentEvent)
    {
        $this->parentEvent = $parentEvent;
    }
}
