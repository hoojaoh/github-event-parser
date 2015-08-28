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

class User
{
    private $login;
    private $id;
    private $avatarUrl;
    private $gravatarId;
    private $apiUrl;
    private $htmlUrl;
    private $followersUrl;
    private $followingUrl;
    private $gistsUrl;
    private $starredUrl;
    private $subscriptionsUrl;
    private $organizationsUrl;
    private $repositoriesUrl;
    private $eventsUrl;
    private $receivedEventsUrl;
    private $type;
    private $siteAdmin;

    public static function createFromData(array $data)
    {
        return new static($data);
    }

    public function __construct($data)
    {
        $this->login = $data['login'];
        $this->id = $data['id'];
        $this->avatarUrl = $data['avatar_url'];
        $this->gravatarId = $data['gravatar_id'];
        $this->apiUrl = $data['url'];
        $this->htmlUrl = $data['html_url'];
        $this->followersUrl = $data['followers_url'];
        $this->followingUrl = $data['following_url'];
        $this->gistsUrl = $data['gists_url'];
        $this->starredUrl = $data['starred_url'];
        $this->subscriptionsUrl = $data['subscriptions_url'];
        $this->organizationsUrl = $data['organizations_url'];
        $this->repositoriesUrl = $data['repos_url'];
        $this->eventsUrl = $data['events_url'];
        $this->receivedEventsUrl = $data['received_events_url'];
        $this->type = $data['type'];
        $this->siteAdmin = $data['site_admin'];
    }

    /**
     * Gets the value of login.
     *
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Sets the value of login.
     *
     * @param mixed $login the login
     *
     * @return self
     */
    public function setLogin($login)
    {
        $this->login = $login;

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
     * Gets the value of avatarUrl.
     *
     * @return mixed
     */
    public function getAvatarUrl()
    {
        return $this->avatarUrl;
    }

    /**
     * Sets the value of avatarUrl.
     *
     * @param mixed $avatarUrl the avatar url
     *
     * @return self
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;

        return $this;
    }

    /**
     * Gets the value of gravatarId.
     *
     * @return mixed
     */
    public function getGravatarId()
    {
        return $this->gravatarId;
    }

    /**
     * Sets the value of gravatarId.
     *
     * @param mixed $gravatarId the gravatar id
     *
     * @return self
     */
    public function setGravatarId($gravatarId)
    {
        $this->gravatarId = $gravatarId;

        return $this;
    }

    /**
     * Gets the value of apiUrl.
     *
     * @return mixed
     */
    public function getApiUrl()
    {
        return $this->apiUrl;
    }

    /**
     * Sets the value of apiUrl.
     *
     * @param mixed $apiUrl the api url
     *
     * @return self
     */
    public function setApiUrl($apiUrl)
    {
        $this->apiUrl = $apiUrl;

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
     * Gets the value of followersUrl.
     *
     * @return mixed
     */
    public function getFollowersUrl()
    {
        return $this->followersUrl;
    }

    /**
     * Sets the value of followersUrl.
     *
     * @param mixed $followersUrl the followers url
     *
     * @return self
     */
    public function setFollowersUrl($followersUrl)
    {
        $this->followersUrl = $followersUrl;

        return $this;
    }

    /**
     * Gets the value of followingUrl.
     *
     * @return mixed
     */
    public function getFollowingUrl()
    {
        return $this->followingUrl;
    }

    /**
     * Sets the value of followingUrl.
     *
     * @param mixed $followingUrl the following url
     *
     * @return self
     */
    public function setFollowingUrl($followingUrl)
    {
        $this->followingUrl = $followingUrl;

        return $this;
    }

    /**
     * Gets the value of gistsUrl.
     *
     * @return mixed
     */
    public function getGistsUrl()
    {
        return $this->gistsUrl;
    }

    /**
     * Sets the value of gistsUrl.
     *
     * @param mixed $gistsUrl the gists url
     *
     * @return self
     */
    public function setGistsUrl($gistsUrl)
    {
        $this->gistsUrl = $gistsUrl;

        return $this;
    }

    /**
     * Gets the value of starredUrl.
     *
     * @return mixed
     */
    public function getStarredUrl()
    {
        return $this->starredUrl;
    }

    /**
     * Sets the value of starredUrl.
     *
     * @param mixed $starrredUrl the starrred url
     *
     * @return self
     */
    public function setStarredUrl($starredUrl)
    {
        $this->starredUrl = $starredUrl;

        return $this;
    }

    /**
     * Gets the value of organizationsUrl.
     *
     * @return mixed
     */
    public function getOrganizationsUrl()
    {
        return $this->organizationsUrl;
    }

    /**
     * Sets the value of organizationsUrl.
     *
     * @param mixed $organizationsUrl the organizations url
     *
     * @return self
     */
    public function setOrganizationsUrl($organizationsUrl)
    {
        $this->organizationsUrl = $organizationsUrl;

        return $this;
    }

    /**
     * Gets the value of subscriptionsUrl.
     *
     * @return mixed
     */
    public function getSubscriptionsUrl()
    {
        return $this->subscriptionsUrl;
    }

    /**
     * Sets the value of subscriptionsUrl.
     *
     * @param mixed $subscriptionsUrl the subscriptions url
     *
     * @return self
     */
    public function setSubscriptionsUrl($subscriptionsUrl)
    {
        $this->subscriptionsUrl = $subscriptionsUrl;

        return $this;
    }

    /**
     * Gets the value of repositoriesUrl.
     *
     * @return mixed
     */
    public function getRepositoriesUrl()
    {
        return $this->repositoriesUrl;
    }

    /**
     * Sets the value of repositoriesUrl.
     *
     * @param mixed $repositoriesUrl the repositories url
     *
     * @return self
     */
    public function setRepositoriesUrl($repositoriesUrl)
    {
        $this->repositoriesUrl = $repositoriesUrl;

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
     * Gets the value of receivedEventsUrl.
     *
     * @return mixed
     */
    public function getReceivedEventsUrl()
    {
        return $this->receivedEventsUrl;
    }

    /**
     * Sets the value of receivedEventsUrl.
     *
     * @param mixed $receivedEventsUrl the received events url
     *
     * @return self
     */
    public function setReceivedEventsUrl($receivedEventsUrl)
    {
        $this->receivedEventsUrl = $receivedEventsUrl;

        return $this;
    }

    /**
     * Gets the value of type.
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the value of type.
     *
     * @param mixed $type the type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets the value of siteAdmin.
     *
     * @return mixed
     */
    public function getSiteAdmin()
    {
        return $this->siteAdmin;
    }

    /**
     * Sets the value of siteAdmin.
     *
     * @param mixed $siteAdmin the site admin
     *
     * @return self
     */
    public function setSiteAdmin($siteAdmin)
    {
        $this->siteAdmin = $siteAdmin;

        return $this;
    }
}
