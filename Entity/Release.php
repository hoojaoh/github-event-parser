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

class Release
{
    private $url;
    private $assetsUrl;
    private $uploadUrl;
    private $htmlUrl;
    private $id;
    private $tagName;
    private $targetCommitish;
    private $name;
    private $isDraft;
    private $author;
    private $isPreRelease;
    private $createdAt;
    private $publishedAt;
    private $assets;
    private $tarballUrl;
    private $zipballUrl;
    private $body;
    private $repository;
    private $sender;

    public static function createFromData(array $data)
    {
        return new static($data);
    }

    public function __construct($data)
    {
        $this->url = $data['url'];
    }

    /**
     * @return mixed
     */
    public function getAssetsUrl()
    {
        return $this->assetsUrl;
    }

    /**
     * @param mixed $assetsUrl
     */
    public function setAssetsUrl($assetsUrl)
    {
        $this->assetsUrl = $assetsUrl;
    }

    /**
     * @return mixed
     */
    public function getUploadUrl()
    {
        return $this->uploadUrl;
    }

    /**
     * @param mixed $uploadUrl
     */
    public function setUploadUrl($uploadUrl)
    {
        $this->uploadUrl = $uploadUrl;
    }

    /**
     * @return mixed
     */
    public function getHtmlUrl()
    {
        return $this->htmlUrl;
    }

    /**
     * @param mixed $htmlUrl
     */
    public function setHtmlUrl($htmlUrl)
    {
        $this->htmlUrl = $htmlUrl;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * @param mixed $tagName
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;
    }

    /**
     * @return mixed
     */
    public function getTargetCommitish()
    {
        return $this->targetCommitish;
    }

    /**
     * @param mixed $targetCommitish
     */
    public function setTargetCommitish($targetCommitish)
    {
        $this->targetCommitish = $targetCommitish;
    }

    /**
     * @return mixed
     */
    public function isDraft()
    {
        return $this->isDraft;
    }

    /**
     * @param mixed $isDraft
     */
    public function setDraft($isDraft)
    {
        $this->isDraft = $isDraft;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function isPreRelease()
    {
        return $this->isPreRelease;
    }

    /**
     * @param mixed $isPreRelease
     */
    public function setPreRelease($isPreRelease)
    {
        $this->isPreRelease = $isPreRelease;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * @param mixed $publishedAt
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }

    /**
     * @return mixed
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * @param mixed $assets
     */
    public function setAssets($assets)
    {
        $this->assets = $assets;
    }

    /**
     * @return mixed
     */
    public function getTarballUrl()
    {
        return $this->tarballUrl;
    }

    /**
     * @param mixed $tarballUrl
     */
    public function setTarballUrl($tarballUrl)
    {
        $this->tarballUrl = $tarballUrl;
    }

    /**
     * @return mixed
     */
    public function getZipballUrl()
    {
        return $this->zipballUrl;
    }

    /**
     * @param mixed $zipballUrl
     */
    public function setZipballUrl($zipballUrl)
    {
        $this->zipballUrl = $zipballUrl;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param mixed $repository
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param mixed $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
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
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
