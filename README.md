Github event parser library
============================

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/4bb32121-6a01-4b8c-9044-8a77e52dfa2c/mini.png)](https://insight.sensiolabs.com/projects/4bb32121-6a01-4b8c-9044-8a77e52dfa2c)

This is a naive PHP library to provide readable representations of json responses from [Github Events Api v3](https://developer.github.com/v3/activity/events/types/).

Thanks to the Github webhooks, any administrator of a repository can access and listen theses events returned into json responses.

The only aim of this library is to parse theses responses, and create simple POPO (Plain Old PHP Object) easy to manipulate, extends or even persist in a database.

A lot of usages are available since you can listen all events:
* make statistics on your repositories
* do some tasks after a successful deployment
* send a "thanks" email for each validated contribution
* and so on ...

## Installation

```bash
$ composer require "lp-digital/github-event-parser"
```

## How to resolve a json response from Github ?

Once your webhook is set up, you should receive POST responses from github each time an event is dispatched by the platform.

For instance, let's consider you have a simple `github-hook.php` file and have installed your dependency through composer:
```php
<?php
include_once('./vendor/autoload.php');
use Lpdigital\Github\Parser\WebhookResolver;

if (isset($_POST)) {
     $decodedJson = json_decode($_POST, true);
     $resolver    = new WebhookResolver();
     $event       = $resolver->resolve($decodedJson); // ex: an instance of `IssueCommentEvent`
     echo($event::name()); // IssueCommentEvent

     /* ... do your own business */
```


## EventTypes

> Note that this library is not complete, so only few events are available for now. But, it's realy easy to implement the missing. If you need them, please make a pull request!

### IssueCommentEvent

> Dispatched when someone comment an issue

You can retrieve the issue, the user and the related comment from this event.

```php
<?php
$issueCommentEvent->issue;    // instance of Lpdigital/Entity/Issue
$issueCommentEvent->user;     // instance of Lpdigital/Entity/User
$issueCommentEvent->comment;  // instance of Lpdigital/Entity/Comment
```

### IssuesEvent

> Dispatched Triggered when an issue is assigned, unassigned, labeled, unlabeled, opened, closed, or reopened.

You can retrieve the action, the repository and the sender from this event. When available, you can also get assignee and label.

```php
<?php
$issuesEvent->action;      // Can be one of "assigned", "unassigned", "labeled", "unlabeled", "opened", "closed", or "reopened".
$issuesEvent->assignee;    // optional: the assignee of the issue(Lpdigital/Entity/User)
$issuesEvent->issue;       // instance of Lpdigital/Entity/Issue
$issuesEvent->label;       // optional: the label of the issue(Lpdigital/Entity/Label)
$issuesEvent->repository;  // instance of Lpdigital/Entity/Repository
$issuesEvent->sender;      // instance of Lpdigital/Entity/User
```

### ForkEvent

> Dispatched when someone fork the repository

You can retrieve the forked repository, the owner, the new repository and the "forker".

```php
<?php
$forkEvent->forkedRepository;  // instance of Lpdigital/Entity/Repository
$forkEvent->owner;             // instance of Lpdigital/Entity/User
$forkEvent->repository;        // instance of Lpdigital/Entity/Repository
$forkEvent->forker;            // instance of Lpdigital/Entity/User
```

### DeploymentStatusEvent

> Dispatched when a deployement's status changes

You can retrieve the deployment, the sender and the related repository.

```php
<?php
$deploymentStatusEvent->deployment;   // instance of Lpdigital/Entity/Deployment
$deploymentStatusEvent->sender;       // instance of Lpdigital/Entity/User
$deploymentStatusEvent->repository;   // instance of Lpdigital/Entity/Repository
```

### PullRequestEvent

> Dispatched when a pull request is assigned, unassigned, labeled, unlabeled, opened, closed, reopened, or synchronized.

```php
$pullRequestEvent->pullRequest;   // instance of Lpdigital/Entity/PullRequest
$pullRequest->action;
/** 
 * Can be one of “assigned”, “unassigned”, “labeled”, “unlabeled”, “opened”, “closed”, or “reopened”, or “synchronize”.
 * If the action is “closed” and the merged key is false, the pull request was closed with unmerged commits.
 * If the action is “closed” and the merged key is true, the pull request was merged.
 */
$pullRequest->number;             // the pull request number
$pullRequest->repository;         // instance of Lpdigital/Entity/Repository
```

### StatusEvent

> Dispatched when the status of a Git commit changes.
  Events of this type are not visible in timelines, they are only used to trigger hooks.

You can retrieve the sha, the status, the committer and the related repository. More others
informations are available.

```php
<?php
$statusEvent->sha;           // something like "9049f1265b7d61be4a8904a9a27120d2064dab3b"
$statusEvent->status;        // Can be one of "success", "failure" or "error".
$statusEvent->commiter;      // instance of Lpdigital/Entity/User
$statusEvent->repository;    // instance of Lpdigital/Entity/Repository
```

### WatchEvent

> The WatchEvent is related to starring a repository, not watching. See this [API blog post](https://developer.github.com/changes/2012-09-05-watcher-api/) for an explanation.
  The event’s actor is the user who starred a repository, and the event’s repository is the repository that was starred.

```php
<?php
$watchEvent->action;        // "started"
$watchEvent->user           // instance of Lpdigital\Entity\User
$watchEvent->repository     // instance of Lpdigital\Entity\Repository
```

### PullRequestReviewCommentEvent

> Dispatched when a comment is created on a portion of the unified diff of a pull request.

```php
<?php
$pullRequestReviewCommentEvent->action          // "created"
$pullRequestReviewCommentEvent->comment         // instance of Lpdigital\Entity\Comment
$pullRequestReviewCommentEvent->pullRequest     // instance of Lpdigital\Entity\PullRequest
$pullRequestReviewCommentEvent->repository      // instance of Lpdigital\Entity\Repository
$pullRequestReviewCommentEvent->sender          // instance of Lpdigital\Entity\User
```

## Entities

Each object from Github API have his PHP class.
* Comment
* Deployment
* Issue
* Label
* PullRequest
* Release
* Repository
* User

## ROADMAP

* Add all missing events
* Add doctrine mapping file for doctrine/dbal

## Contribute

**All features are tested, and all contributions need to be tested in order to be accepted.**

Features from roadmap and bug fixes are prioritized. Fork the repository, create a feature branch and then launch the testsuite:

```bash
$ phpunit
```

Thank you for help, let us know if you use this library ;)
