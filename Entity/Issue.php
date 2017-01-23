<?php

/*
 * Copyright (c) 2015 Lp digital system
 *
 * This file is part of Github Parser library.
 *
 * Github Parser is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Github Parser is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Github Parser. If not, see <http://www.gnu.org/licenses/>.
 */

namespace Lpdigital\Github\Entity;

class Issue
{
    private $url;
    private $labelsUrl;
    private $commentsUrl;
    private $eventsUrl;
    private $htmlUrl;
    private $id;
    private $number;
    private $title;

    /**
     * @var User
     */
    private $user;
    private $labels;
    private $state;
    private $isLocked;

    /**
     * @var User|null
     */
    private $assignee;
    private $milestone;
    private $commentsCount;
    private $createdAt;
    private $updatedAt;
    private $closedAt;
    private $body;

    public static function createFromData(array $data)
    {
        return new static($data);
    }

    public function __construct($data)
    {
        $this->url = $data['url'];
        $this->labelsUrl = $data['labels_url'];
        $this->commentsUrl = $data['comments_url'];
        $this->eventsUrl = $data['events_url'];
        $this->htmlUrl = $data['html_url'];
        $this->id = $data['id'];
        $this->number = $data['number'];
        $this->title = $data['title'];
        $this->user = User::createFromData($data['user']);
        $this->labels = $this->buildLabels($data['labels']);
        $this->state = $data['state'];
        $this->isLocked = $data['locked'];
        $this->assignee = isset($data['assignee']) ? User::createFromData($data['assignee']) : null;
        $this->milestone = isset($data['milestone']) ?: null;
        $this->commentsCount = $data['comments'];
        $this->createdAt = $data['created_at'];
        $this->updatedAt = $data['updated_at'];
        $this->closedAt = $data['closed_at'];
        $this->body = $data['body'];
    }

    /**
     * Gets the value of url.
     *
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets the value of url.
     *
     * @param mixed $url the url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Gets the value of labelsUrl.
     *
     * @return mixed
     */
    public function getLabelsUrl()
    {
        return $this->labelsUrl;
    }

    /**
     * Sets the value of labelsUrl.
     *
     * @param mixed $labelsUrl the labels url
     *
     * @return self
     */
    public function setLabelsUrl($labelsUrl)
    {
        $this->labelsUrl = $labelsUrl;

        return $this;
    }

    /**
     * Gets the value of commentsUrl.
     *
     * @return mixed
     */
    public function getCommentsUrl()
    {
        return $this->commentsUrl;
    }

    /**
     * Sets the value of commentsUrl.
     *
     * @param mixed $commentsUrl the comments url
     *
     * @return self
     */
    public function setCommentsUrl($commentsUrl)
    {
        $this->commentsUrl = $commentsUrl;

        return $this;
    }

    /**
     * Gets the value of eventsUrl.
     *
     * @return mixed
     */
    public function getEventsUrl()
    {
        return $this->eventsUrl;
    }

    /**
     * Sets the value of eventsUrl.
     *
     * @param mixed $eventsUrl the events url
     *
     * @return self
     */
    public function setEventsUrl($eventsUrl)
    {
        $this->eventsUrl = $eventsUrl;

        return $this;
    }

    /**
     * Gets the value of htmlUrl.
     *
     * @return mixed
     */
    public function getHtmlUrl()
    {
        return $this->htmlUrl;
    }

    /**
     * Sets the value of htmlUrl.
     *
     * @param mixed $htmlUrl the html url
     *
     * @return self
     */
    public function setHtmlUrl($htmlUrl)
    {
        $this->htmlUrl = $htmlUrl;

        return $this;
    }

    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of number.
     *
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets the value of number.
     *
     * @param mixed $number the number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets the value of title.
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the value of title.
     *
     * @param mixed $title the title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Gets the value of user.
     *
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets the value of user.
     *
     * @param mixed $user the user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Gets the value of labels.
     *
     * @return mixed
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Sets the value of labels.
     *
     * @param mixed $labels the labels
     *
     * @return self
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;

        return $this;
    }

    /**
     * Gets the value of state.
     *
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets the value of state.
     *
     * @param mixed $state the state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Gets the value of isLocked.
     *
     * @return mixed
     */
    public function isLocked()
    {
        return $this->isLocked;
    }

    /**
     * Sets the value of isLocked.
     *
     * @param mixed $isLocked the is locked
     *
     * @return self
     */
    public function setLocked($isLocked)
    {
        $this->isLocked = $isLocked;

        return $this;
    }

    /**
     * Gets the value of assignee.
     *
     * @return mixed
     */
    public function getAssignee()
    {
        return $this->assignee;
    }

    /**
     * Sets the value of assignee.
     *
     * @param mixed $assignee the assignee
     *
     * @return self
     */
    public function setAssignee($assignee)
    {
        $this->assignee = $assignee;

        return $this;
    }

    /**
     * Gets the value of milestone.
     *
     * @return mixed
     */
    public function getMilestone()
    {
        return $this->milestone;
    }

    /**
     * Sets the value of milestone.
     *
     * @param mixed $milestone the milestone
     *
     * @return self
     */
    public function setMilestone($milestone)
    {
        $this->milestone = $milestone;

        return $this;
    }

    /**
     * Gets the value of commentsCount.
     *
     * @return mixed
     */
    public function getCommentsCount()
    {
        return $this->commentsCount;
    }

    /**
     * Sets the value of commentsCount.
     *
     * @param mixed $commentsCount the comments count
     *
     * @return self
     */
    public function setCommentsCount($commentsCount)
    {
        $this->commentsCount = $commentsCount;

        return $this;
    }

    /**
     * Gets the value of createdAt.
     *
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Sets the value of createdAt.
     *
     * @param mixed $createdAt the created at
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Gets the value of updatedAt.
     *
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Sets the value of updatedAt.
     *
     * @param mixed $updatedAt the updated at
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Gets the value of closedAt.
     *
     * @return mixed
     */
    public function getClosedAt()
    {
        return $this->closedAt;
    }

    /**
     * Sets the value of closedAt.
     *
     * @param mixed $closedAt the closed at
     *
     * @return self
     */
    public function setClosedAt($closedAt)
    {
        $this->closedAt = $closedAt;

        return $this;
    }

    /**
     * Gets the value of body.
     *
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets the value of body.
     *
     * @param mixed $body the body
     *
     * @return self
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Set the Label collection from an array.
     *
     * @param array $labels an array of labels
     *
     * @return Label[] the collection of labels
     */
    private function buildLabels($labels)
    {
        $collection = [];
        foreach ($labels as $label) {
            $collection[] = Label::createFromData($label);
        }

        return $collection;
    }
}
