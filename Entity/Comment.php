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

class Comment
{
    private $url;
    private $htmlUrl;
    private $id;

    /**
     * @var User
     */
    private $user;
    private $position;
    private $line;
    private $path;
    private $commitId;
    private $createdAt;
    private $updatedAt;
    private $body;

    public static function createFromData(array $data)
    {
        return new static($data);
    }

    public function __construct($data)
    {
        $this->url = $data['url'];
        $this->htmlUrl = $data['html_url'];
        $this->id = $data['id'];
        $this->user = User::createFromData($data['user']);
        $this->position = isset($data['position']) ?: null;
        $this->line = isset($data['line']) ?: null;
        $this->path = isset($data['path']) ?: null;
        $this->commitId = isset($data['commit_id']) ?: null;
        $this->createdAt = $data['created_at'];
        $this->updatedAt = $data['updated_at'];
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
     * Gets the value of user.
     *
     * @return Lpdigital\Github\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

     /**
      * Gets the author of comment.
      *
      * @return string
      */
     public function getUserLogin()
     {
         return $this->user->getLogin();
     }

    /**
     * Sets the value of user.
     *
     * @param Lpdigital\Github\Entity\User $user the user
     *
     * @return self
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Gets the value of position.
     *
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets the value of position.
     *
     * @param mixed $position the position
     *
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Gets the value of line.
     *
     * @return mixed
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Sets the value of line.
     *
     * @param mixed $line the line
     *
     * @return self
     */
    public function setLine($line)
    {
        $this->line = $line;

        return $this;
    }

    /**
     * Gets the value of path.
     *
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Sets the value of path.
     *
     * @param mixed $path the path
     *
     * @return self
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Gets the value of commitId.
     *
     * @return mixed
     */
    public function getCommitId()
    {
        return $this->commitId;
    }

    /**
     * Sets the value of commitId.
     *
     * @param mixed $commitId the commit id
     *
     * @return self
     */
    public function setCommitId($commitId)
    {
        $this->commitId = $commitId;

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
     * Get an human readable description of Comment object: the comment.
     *
     * @return string the comment
     */
    public function __toString()
    {
        return $this->body;
    }
}
