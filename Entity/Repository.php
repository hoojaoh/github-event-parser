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

class Repository
{
    private $id;
    private $name;
    private $fullName;

    /**
     * @var User
     */
    private $owner;
    private $isPrivate;
    private $htmlUrl;
    private $description;
    private $isFork;
    private $url;
    private $forksUrl;
    private $keysUrl;
    private $collaboratorsUrl;
    private $teamsUrl;
    private $hooksUrl;
    private $issueEventsUrl;
    private $eventsUrl;
    private $assigneesUrl;
    private $branchesUrl;
    private $tagsUrl;
    private $blobsUrl;
    private $gitTagsUrl;
    private $gitRefsUrl;
    private $treesUrl;
    private $statusesUrl;
    private $languagesUrl;
    private $stargazersUrl;
    private $contributorsUrl;
    private $subscribersUrl;
    private $subscriptionUrl;
    private $commitsUrl;
    private $gitCommitsUrl;
    private $commentsUrl;
    private $issueCommentUrl;
    private $contentsUrl;
    private $compareUrl;
    private $mergesUrl;
    private $archiveUrl;
    private $downloadsUrl;
    private $issuesUrl;
    private $pullsUrl;
    private $milestonesUrl;
    private $notificationsUrl;
    private $labelsUrl;
    private $releasesUrl;
    private $createdAt;
    private $updatedAt;
    private $pushedAt;
    private $gitUrl;
    private $sshUrl;
    private $cloneUrl;
    private $svnUrl;
    private $homepage;
    private $size;
    private $stargazersCount;
    private $watchersCount;
    private $language;
    private $hasIssues;
    private $hasDownloads;
    private $hasWiki;
    private $hasPages;
    private $forksCount;
    private $mirrorUrl;
    private $openIssues;
    private $watchers;
    private $defaultBranch;
    private $isPublic;

    public static function createFromData(array $data)
    {
        return new static($data);
    }

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->fullName = $data['full_name'];
        $this->owner = User::createFromData($data['owner']);
        $this->isPrivate = $data['private'];
        $this->htmlUrl = $data['html_url'];
        $this->description = $data['description'];
        $this->isFork = $data['fork'];
        $this->url = $data['url'];
        $this->forksUrl = $data['forks_url'];
        $this->keysUrl = $data['keys_url'];
        $this->collaboratorsUrl = $data['collaborators_url'];
        $this->teamsUrl = $data['teams_url'];
        $this->hooksUrl = $data['hooks_url'];
        $this->issueEventsUrl = $data['issue_events_url'];
        $this->eventsUrl = $data['events_url'];
        $this->assigneesUrl = $data['assignees_url'];
        $this->branchesUrl = $data['branches_url'];
        $this->tagsUrl = $data['tags_url'];
        $this->blobsUrl = $data['blobs_url'];
        $this->gitTagsUrl = $data['git_tags_url'];
        $this->gitRefsUrl = $data['git_refs_url'];
        $this->treesUrl = $data['trees_url'];
        $this->statusesUrl = $data['statuses_url'];
        $this->languagesUrl = $data['languages_url'];
        $this->stargazersUrl = $data['stargazers_url'];
        $this->contributorsUrl = $data['contributors_url'];
        $this->subscribersUrl = $data['subscribers_url'];
        $this->subscriptionUrl = $data['subscription_url'];
        $this->commitsUrl = $data['commits_url'];
        $this->gitCommitsUrl = $data['git_commits_url'];
        $this->commentsUrl = $data['comments_url'];
        $this->issueCommentUrl = $data['issue_comment_url'];
        $this->contentsUrl = $data['contents_url'];
        $this->compareUrl = $data['compare_url'];
        $this->mergesUrl = $data['merges_url'];
        $this->archiveUrl = $data['archive_url'];
        $this->downloadsUrl = $data['downloads_url'];
        $this->issuesUrl = $data['issues_url'];
        $this->pullsUrl = $data['pulls_url'];
        $this->milestonesUrl = $data['milestones_url'];
        $this->notificationsUrl = $data['notifications_url'];
        $this->labelsUrl = $data['labels_url'];
        $this->releasesUrl = $data['releases_url'];
        $this->createdAt = $data['created_at'];
        $this->updatedAt = $data['updated_at'];
        $this->pushedAt = $data['pushed_at'];
        $this->gitUrl = $data['git_url'];
        $this->sshUrl = $data['ssh_url'];
        $this->cloneUrl = $data['clone_url'];
        $this->svnUrl = $data['svn_url'];
        $this->homepage = $data['homepage'];
        $this->size = $data['size'];
        $this->stargazersCount = $data['stargazers_count'];
        $this->watchersCount = $data['watchers_count'];
        $this->language = $data['language'];
        $this->hasIssues = $data['has_issues'];
        $this->hasDownloads = $data['has_downloads'];
        $this->hasWiki = $data['has_wiki'];
        $this->hasPages = $data['has_pages'];
        $this->forksCount = $data['forks_count'];
        $this->mirrorUrl = $data['mirror_url'];
        $this->openIssues = $data['open_issues'];
        $this->watchers = $data['watchers'];
        $this->defaultBranch = $data['default_branch'];
        $this->isPublic = isset($data['public']) ?: null;
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

    /**
     * Gets the value of fullName.
     *
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Sets the value of fullName.
     *
     * @param mixed $fullName the full name
     *
     * @return self
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Gets the value of owner.
     *
     * @return User
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets the value of owner.
     *
     * @param User $owner the owner
     *
     * @return self
     */
    public function setOwner(User $owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Gets the value of isPrivate.
     *
     * @return mixed
     */
    public function isPrivate()
    {
        return $this->isPrivate;
    }

    /**
     * Sets the value of isPrivate.
     *
     * @param mixed $isPrivate the is private
     *
     * @return self
     */
    public function setPrivate($isPrivate)
    {
        $this->isPrivate = $isPrivate;

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
     * Gets the value of description.
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the value of description.
     *
     * @param mixed $description the description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets the value of isFork.
     *
     * @return mixed
     */
    public function isFork()
    {
        return $this->isFork;
    }

    /**
     * Sets the value of isFork.
     *
     * @param mixed $isFork the is fork
     *
     * @return self
     */
    public function setFork($isFork)
    {
        $this->isFork = $isFork;

        return $this;
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
     * Gets the value of forksUrl.
     *
     * @return mixed
     */
    public function getForksUrl()
    {
        return $this->forksUrl;
    }

    /**
     * Sets the value of forksUrl.
     *
     * @param mixed $forksUrl the forks url
     *
     * @return self
     */
    public function setForksUrl($forksUrl)
    {
        $this->forksUrl = $forksUrl;

        return $this;
    }

    /**
     * Gets the value of keysUrl.
     *
     * @return mixed
     */
    public function getKeysUrl()
    {
        return $this->keysUrl;
    }

    /**
     * Sets the value of keysUrl.
     *
     * @param mixed $keysUrl the keys url
     *
     * @return self
     */
    public function setKeysUrl($keysUrl)
    {
        $this->keysUrl = $keysUrl;

        return $this;
    }

    /**
     * Gets the value of collaboratorsUrl.
     *
     * @return mixed
     */
    public function getCollaboratorsUrl()
    {
        return $this->collaboratorsUrl;
    }

    /**
     * Sets the value of collaboratorsUrl.
     *
     * @param mixed $collaboratorsUrl the collaborators url
     *
     * @return self
     */
    public function setCollaboratorsUrl($collaboratorsUrl)
    {
        $this->collaboratorsUrl = $collaboratorsUrl;

        return $this;
    }

    /**
     * Gets the value of teamsUrl.
     *
     * @return mixed
     */
    public function getTeamsUrl()
    {
        return $this->teamsUrl;
    }

    /**
     * Sets the value of teamsUrl.
     *
     * @param mixed $teamsUrl the teams url
     *
     * @return self
     */
    public function setTeamsUrl($teamsUrl)
    {
        $this->teamsUrl = $teamsUrl;

        return $this;
    }

    /**
     * Gets the value of hooksUrl.
     *
     * @return mixed
     */
    public function getHooksUrl()
    {
        return $this->hooksUrl;
    }

    /**
     * Sets the value of hooksUrl.
     *
     * @param mixed $hooksUrl the hooks url
     *
     * @return self
     */
    public function setHooksUrl($hooksUrl)
    {
        $this->hooksUrl = $hooksUrl;

        return $this;
    }

    /**
     * Gets the value of issueEventsUrl.
     *
     * @return mixed
     */
    public function getIssueEventsUrl()
    {
        return $this->issueEventsUrl;
    }

    /**
     * Sets the value of issueEventsUrl.
     *
     * @param mixed $issueEventsUrl the issue events url
     *
     * @return self
     */
    public function setIssueEventsUrl($issueEventsUrl)
    {
        $this->issueEventsUrl = $issueEventsUrl;

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
     * Gets the value of assigneesUrl.
     *
     * @return mixed
     */
    public function getAssigneesUrl()
    {
        return $this->assigneesUrl;
    }

    /**
     * Sets the value of assigneesUrl.
     *
     * @param mixed $assigneesUrl the assignees url
     *
     * @return self
     */
    public function setAssigneesUrl($assigneesUrl)
    {
        $this->assigneesUrl = $assigneesUrl;

        return $this;
    }

    /**
     * Gets the value of branchesUrl.
     *
     * @return mixed
     */
    public function getBranchesUrl()
    {
        return $this->branchesUrl;
    }

    /**
     * Sets the value of branchesUrl.
     *
     * @param mixed $branchesUrl the branches url
     *
     * @return self
     */
    public function setBranchesUrl($branchesUrl)
    {
        $this->branchesUrl = $branchesUrl;

        return $this;
    }

    /**
     * Gets the value of tagsUrl.
     *
     * @return mixed
     */
    public function getTagsUrl()
    {
        return $this->tagsUrl;
    }

    /**
     * Sets the value of tagsUrl.
     *
     * @param mixed $tagsUrl the tags url
     *
     * @return self
     */
    public function setTagsUrl($tagsUrl)
    {
        $this->tagsUrl = $tagsUrl;

        return $this;
    }

    /**
     * Gets the value of blobsUrl.
     *
     * @return mixed
     */
    public function getBlobsUrl()
    {
        return $this->blobsUrl;
    }

    /**
     * Sets the value of blobsUrl.
     *
     * @param mixed $blobsUrl the blobs url
     *
     * @return self
     */
    public function setBlobsUrl($blobsUrl)
    {
        $this->blobsUrl = $blobsUrl;

        return $this;
    }

    /**
     * Gets the value of gitTagsUrl.
     *
     * @return mixed
     */
    public function getGitTagsUrl()
    {
        return $this->gitTagsUrl;
    }

    /**
     * Sets the value of gitTagsUrl.
     *
     * @param mixed $gitTagsUrl the git tags url
     *
     * @return self
     */
    public function setGitTagsUrl($gitTagsUrl)
    {
        $this->gitTagsUrl = $gitTagsUrl;

        return $this;
    }

    /**
     * Gets the value of gitRefsUrl.
     *
     * @return mixed
     */
    public function getGitRefsUrl()
    {
        return $this->gitRefsUrl;
    }

    /**
     * Sets the value of gitRefsUrl.
     *
     * @param mixed $gitRefsUrl the git refs url
     *
     * @return self
     */
    public function setGitRefsUrl($gitRefsUrl)
    {
        $this->gitRefsUrl = $gitRefsUrl;

        return $this;
    }

    /**
     * Gets the value of treesUrl.
     *
     * @return mixed
     */
    public function getTreesUrl()
    {
        return $this->treesUrl;
    }

    /**
     * Sets the value of treesUrl.
     *
     * @param mixed $treesUrl the trees url
     *
     * @return self
     */
    public function setTreesUrl($treesUrl)
    {
        $this->treesUrl = $treesUrl;

        return $this;
    }

    /**
     * Gets the value of statusesUrl.
     *
     * @return mixed
     */
    public function getStatusesUrl()
    {
        return $this->statusesUrl;
    }

    /**
     * Sets the value of statusesUrl.
     *
     * @param mixed $statusesUrl the statuses url
     *
     * @return self
     */
    public function setStatusesUrl($statusesUrl)
    {
        $this->statusesUrl = $statusesUrl;

        return $this;
    }

    /**
     * Gets the value of languagesUrl.
     *
     * @return mixed
     */
    public function getLanguagesUrl()
    {
        return $this->languagesUrl;
    }

    /**
     * Sets the value of languagesUrl.
     *
     * @param mixed $languagesUrl the languages url
     *
     * @return self
     */
    public function setLanguagesUrl($languagesUrl)
    {
        $this->languagesUrl = $languagesUrl;

        return $this;
    }

    /**
     * Gets the value of stargazersUrl.
     *
     * @return mixed
     */
    public function getStargazersUrl()
    {
        return $this->stargazersUrl;
    }

    /**
     * Sets the value of stargazersUrl.
     *
     * @param mixed $stargazersUrl the stargazers url
     *
     * @return self
     */
    public function setStargazersUrl($stargazersUrl)
    {
        $this->stargazersUrl = $stargazersUrl;

        return $this;
    }

    /**
     * Gets the value of contributorsUrl.
     *
     * @return mixed
     */
    public function getContributorsUrl()
    {
        return $this->contributorsUrl;
    }

    /**
     * Sets the value of contributorsUrl.
     *
     * @param mixed $contributorsUrl the contributors url
     *
     * @return self
     */
    public function setContributorsUrl($contributorsUrl)
    {
        $this->contributorsUrl = $contributorsUrl;

        return $this;
    }

    /**
     * Gets the value of subscribersUrl.
     *
     * @return mixed
     */
    public function getSubscribersUrl()
    {
        return $this->subscribersUrl;
    }

    /**
     * Sets the value of subscribersUrl.
     *
     * @param mixed $subscribersUrl the subscribers url
     *
     * @return self
     */
    public function setSubscribersUrl($subscribersUrl)
    {
        $this->subscribersUrl = $subscribersUrl;

        return $this;
    }

    /**
     * Gets the value of subscriptionUrl.
     *
     * @return mixed
     */
    public function getSubscriptionUrl()
    {
        return $this->subscriptionUrl;
    }

    /**
     * Sets the value of subscriptionUrl.
     *
     * @param mixed $subscriptionUrl the subscription url
     *
     * @return self
     */
    public function setSubscriptionUrl($subscriptionUrl)
    {
        $this->subscriptionUrl = $subscriptionUrl;

        return $this;
    }

    /**
     * Gets the value of commitsUrl.
     *
     * @return mixed
     */
    public function getCommitsUrl()
    {
        return $this->commitsUrl;
    }

    /**
     * Sets the value of commitsUrl.
     *
     * @param mixed $commitsUrl the commits url
     *
     * @return self
     */
    public function setCommitsUrl($commitsUrl)
    {
        $this->commitsUrl = $commitsUrl;

        return $this;
    }

    /**
     * Gets the value of gitCommitsUrl.
     *
     * @return mixed
     */
    public function getGitCommitsUrl()
    {
        return $this->gitCommitsUrl;
    }

    /**
     * Sets the value of gitCommitsUrl.
     *
     * @param mixed $gitCommitsUrl the git commits url
     *
     * @return self
     */
    public function setGitCommitsUrl($gitCommitsUrl)
    {
        $this->gitCommitsUrl = $gitCommitsUrl;

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
     * Gets the value of issueCommentUrl.
     *
     * @return mixed
     */
    public function getIssueCommentUrl()
    {
        return $this->issueCommentUrl;
    }

    /**
     * Sets the value of issueCommentUrl.
     *
     * @param mixed $issueCommentUrl the issue comment url
     *
     * @return self
     */
    public function setIssueCommentUrl($issueCommentUrl)
    {
        $this->issueCommentUrl = $issueCommentUrl;

        return $this;
    }

    /**
     * Gets the value of contentsUrl.
     *
     * @return mixed
     */
    public function getContentsUrl()
    {
        return $this->contentsUrl;
    }

    /**
     * Sets the value of contentsUrl.
     *
     * @param mixed $contentsUrl the contents url
     *
     * @return self
     */
    public function setContentsUrl($contentsUrl)
    {
        $this->contentsUrl = $contentsUrl;

        return $this;
    }

    /**
     * Gets the value of compareUrl.
     *
     * @return mixed
     */
    public function getCompareUrl()
    {
        return $this->compareUrl;
    }

    /**
     * Sets the value of compareUrl.
     *
     * @param mixed $compareUrl the compare url
     *
     * @return self
     */
    public function setCompareUrl($compareUrl)
    {
        $this->compareUrl = $compareUrl;

        return $this;
    }

    /**
     * Gets the value of mergesUrl.
     *
     * @return mixed
     */
    public function getMergesUrl()
    {
        return $this->mergesUrl;
    }

    /**
     * Sets the value of mergesUrl.
     *
     * @param mixed $mergesUrl the merges url
     *
     * @return self
     */
    public function setMergesUrl($mergesUrl)
    {
        $this->mergesUrl = $mergesUrl;

        return $this;
    }

    /**
     * Gets the value of archiveUrl.
     *
     * @return mixed
     */
    public function getArchiveUrl()
    {
        return $this->archiveUrl;
    }

    /**
     * Sets the value of archiveUrl.
     *
     * @param mixed $archiveUrl the archive url
     *
     * @return self
     */
    public function setArchiveUrl($archiveUrl)
    {
        $this->archiveUrl = $archiveUrl;

        return $this;
    }

    /**
     * Gets the value of downloadsUrl.
     *
     * @return mixed
     */
    public function getDownloadsUrl()
    {
        return $this->downloadsUrl;
    }

    /**
     * Sets the value of downloadsUrl.
     *
     * @param mixed $downloadsUrl the downloads url
     *
     * @return self
     */
    public function setDownloadsUrl($downloadsUrl)
    {
        $this->downloadsUrl = $downloadsUrl;

        return $this;
    }

    /**
     * Gets the value of issuesUrl.
     *
     * @return mixed
     */
    public function getIssuesUrl()
    {
        return $this->issuesUrl;
    }

    /**
     * Sets the value of issuesUrl.
     *
     * @param mixed $issuesUrl the issues url
     *
     * @return self
     */
    public function setIssuesUrl($issuesUrl)
    {
        $this->issuesUrl = $issuesUrl;

        return $this;
    }

    /**
     * Gets the value of pullsUrl.
     *
     * @return mixed
     */
    public function getPullsUrl()
    {
        return $this->pullsUrl;
    }

    /**
     * Sets the value of pullsUrl.
     *
     * @param mixed $pullsUrl the pulls url
     *
     * @return self
     */
    public function setPullsUrl($pullsUrl)
    {
        $this->pullsUrl = $pullsUrl;

        return $this;
    }

    /**
     * Gets the value of milestonesUrl.
     *
     * @return mixed
     */
    public function getMilestonesUrl()
    {
        return $this->milestonesUrl;
    }

    /**
     * Sets the value of milestonesUrl.
     *
     * @param mixed $milestonesUrl the milestones url
     *
     * @return self
     */
    public function setMilestonesUrl($milestonesUrl)
    {
        $this->milestonesUrl = $milestonesUrl;

        return $this;
    }

    /**
     * Gets the value of notificationsUrl.
     *
     * @return mixed
     */
    public function getNotificationsUrl()
    {
        return $this->notificationsUrl;
    }

    /**
     * Sets the value of notificationsUrl.
     *
     * @param mixed $notificationsUrl the notifications url
     *
     * @return self
     */
    public function setNotificationsUrl($notificationsUrl)
    {
        $this->notificationsUrl = $notificationsUrl;

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
     * Gets the value of releasesUrl.
     *
     * @return mixed
     */
    public function getReleasesUrl()
    {
        return $this->releasesUrl;
    }

    /**
     * Sets the value of releasesUrl.
     *
     * @param mixed $releasesUrl the releases url
     *
     * @return self
     */
    public function setReleasesUrl($releasesUrl)
    {
        $this->releasesUrl = $releasesUrl;

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
     * Gets the value of pushedAt.
     *
     * @return mixed
     */
    public function getPushedAt()
    {
        return $this->pushedAt;
    }

    /**
     * Sets the value of pushedAt.
     *
     * @param mixed $pushedAt the pushed at
     *
     * @return self
     */
    public function setPushedAt($pushedAt)
    {
        $this->pushedAt = $pushedAt;

        return $this;
    }

    /**
     * Gets the value of gitUrl.
     *
     * @return mixed
     */
    public function getGitUrl()
    {
        return $this->gitUrl;
    }

    /**
     * Sets the value of gitUrl.
     *
     * @param mixed $gitUrl the git url
     *
     * @return self
     */
    public function setGitUrl($gitUrl)
    {
        $this->gitUrl = $gitUrl;

        return $this;
    }

    /**
     * Gets the value of sshUrl.
     *
     * @return mixed
     */
    public function getSshUrl()
    {
        return $this->sshUrl;
    }

    /**
     * Sets the value of sshUrl.
     *
     * @param mixed $sshUrl the ssh url
     *
     * @return self
     */
    public function setSshUrl($sshUrl)
    {
        $this->sshUrl = $sshUrl;

        return $this;
    }

    /**
     * Gets the value of cloneUrl.
     *
     * @return mixed
     */
    public function getCloneUrl()
    {
        return $this->cloneUrl;
    }

    /**
     * Sets the value of cloneUrl.
     *
     * @param mixed $cloneUrl the clone url
     *
     * @return self
     */
    public function setCloneUrl($cloneUrl)
    {
        $this->cloneUrl = $cloneUrl;

        return $this;
    }

    /**
     * Gets the value of svnUrl.
     *
     * @return mixed
     */
    public function getSvnUrl()
    {
        return $this->svnUrl;
    }

    /**
     * Sets the value of svnUrl.
     *
     * @param mixed $svnUrl the svn url
     *
     * @return self
     */
    public function setSvnUrl($svnUrl)
    {
        $this->svnUrl = $svnUrl;

        return $this;
    }

    /**
     * Gets the value of homepage.
     *
     * @return mixed
     */
    public function getHomepage()
    {
        return $this->homepage;
    }

    /**
     * Sets the value of homepage.
     *
     * @param mixed $homepage the homepage
     *
     * @return self
     */
    public function setHomepage($homepage)
    {
        $this->homepage = $homepage;

        return $this;
    }

    /**
     * Gets the value of size.
     *
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets the value of size.
     *
     * @param mixed $size the size
     *
     * @return self
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Gets the value of stargazersCount.
     *
     * @return mixed
     */
    public function getStargazersCount()
    {
        return $this->stargazersCount;
    }

    /**
     * Sets the value of stargazersCount.
     *
     * @param mixed $stargazersCount the stargazers count
     *
     * @return self
     */
    public function setStargazersCount($stargazersCount)
    {
        $this->stargazersCount = $stargazersCount;

        return $this;
    }

    /**
     * Gets the value of watchersCount.
     *
     * @return mixed
     */
    public function getWatchersCount()
    {
        return $this->watchersCount;
    }

    /**
     * Sets the value of watchersCount.
     *
     * @param mixed $watchersCount the watchers count
     *
     * @return self
     */
    public function setWatchersCount($watchersCount)
    {
        $this->watchersCount = $watchersCount;

        return $this;
    }

    /**
     * Gets the value of language.
     *
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets the value of language.
     *
     * @param mixed $language the language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Gets the value of hasIssues.
     *
     * @return mixed
     */
    public function getHasIssues()
    {
        return $this->hasIssues;
    }

    /**
     * Sets the value of hasIssues.
     *
     * @param mixed $hasIssues the has issues
     *
     * @return self
     */
    public function setHasIssues($hasIssues)
    {
        $this->hasIssues = $hasIssues;

        return $this;
    }

    /**
     * Gets the value of hasDownloads.
     *
     * @return mixed
     */
    public function getHasDownloads()
    {
        return $this->hasDownloads;
    }

    /**
     * Sets the value of hasDownloads.
     *
     * @param mixed $hasDownloads the has downloads
     *
     * @return self
     */
    public function setHasDownloads($hasDownloads)
    {
        $this->hasDownloads = $hasDownloads;

        return $this;
    }

    /**
     * Gets the value of hasWiki.
     *
     * @return mixed
     */
    public function getHasWiki()
    {
        return $this->hasWiki;
    }

    /**
     * Sets the value of hasWiki.
     *
     * @param mixed $hasWiki the has wiki
     *
     * @return self
     */
    public function setHasWiki($hasWiki)
    {
        $this->hasWiki = $hasWiki;

        return $this;
    }

    /**
     * Gets the value of hasPages.
     *
     * @return mixed
     */
    public function getHasPages()
    {
        return $this->hasPages;
    }

    /**
     * Sets the value of hasPages.
     *
     * @param mixed $hasPages the has pages
     *
     * @return self
     */
    public function setHasPages($hasPages)
    {
        $this->hasPages = $hasPages;

        return $this;
    }

    /**
     * Gets the value of forksCount.
     *
     * @return mixed
     */
    public function getForksCount()
    {
        return $this->forksCount;
    }

    /**
     * Sets the value of forksCount.
     *
     * @param mixed $forksCount the forks count
     *
     * @return self
     */
    public function setForksCount($forksCount)
    {
        $this->forksCount = $forksCount;

        return $this;
    }

    /**
     * Gets the value of mirrorUrl.
     *
     * @return mixed
     */
    public function getMirrorUrl()
    {
        return $this->mirrorUrl;
    }

    /**
     * Sets the value of mirrorUrl.
     *
     * @param mixed $mirrorUrl the mirror url
     *
     * @return self
     */
    public function setMirrorUrl($mirrorUrl)
    {
        $this->mirrorUrl = $mirrorUrl;

        return $this;
    }

    /**
     * Gets the value of openIssues.
     *
     * @return mixed
     */
    public function getOpenIssues()
    {
        return $this->openIssues;
    }

    /**
     * Sets the value of openIssues.
     *
     * @param mixed $openIssues the open issues
     *
     * @return self
     */
    public function setOpenIssues($openIssues)
    {
        $this->openIssues = $openIssues;

        return $this;
    }

    /**
     * Gets the value of watchers.
     *
     * @return mixed
     */
    public function getWatchers()
    {
        return $this->watchers;
    }

    /**
     * Sets the value of watchers.
     *
     * @param mixed $watchers the watchers
     *
     * @return self
     */
    public function setWatchers($watchers)
    {
        $this->watchers = $watchers;

        return $this;
    }

    /**
     * Gets the value of defaultBranch.
     *
     * @return mixed
     */
    public function getDefaultBranch()
    {
        return $this->defaultBranch;
    }

    /**
     * Sets the value of defaultBranch.
     *
     * @param mixed $defaultBranch the default branch
     *
     * @return self
     */
    public function setDefaultBranch($defaultBranch)
    {
        $this->defaultBranch = $defaultBranch;

        return $this;
    }

    /**
     * Gets the value of isPublic.
     *
     * @return mixed
     */
    public function isPublic()
    {
        return $this->isPublic;
    }

    /**
     * Sets the value of isPublic.
     *
     * @param mixed $isPublic the is public
     *
     * @return self
     */
    public function setPublic($isPublic)
    {
        $this->isPublic = $isPublic;

        return $this;
    }
}
