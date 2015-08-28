Github event parser library
============================

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

if (isset ($_POST) {
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
$issueCommentEvent->issue; // instance of Lpdigital/Entity/Issue
$issueCommentEvent->user;       // instance of Lpdigital/Entity/User
$issueCommentEvent->comment;       // instance of Lpdigital/Entity/Comment
```

### ForkEvent

> Dispatched when someone for the repository

You can retrieve the forked repository, the owner, the new repository and the "forker".

```php
<?php
$forkEvent->forkedRepository; // instance of Lpdigital/Entity/Repository
$forkEvent->owner;       // instance of Lpdigital/Entity/User
$forkEvent->repository;       // instance of Lpdigital/Entity/Repository
$forkEvent->forker;       // instance of Lpdigital/Entity/User
```

### DeploymentStatusEvent

> Dispatched when a deployement's status changes

You can retrieve the deployment, the sender and the related repository.

```php
<?php
$deploymentStatusEvent->deployment; // instance of Lpdigital/Entity/Deployment
$deploymentStatusEvent->sender;       // instance of Lpdigital/Entity/User
$deploymentStatusEvent->repository;       // instance of Lpdigital/Entity/Repository
```

## Entities

Each object from Github API have his PHP class.
* Comment
* Deployment
* Issue
* Label
* Repository
* User

## ROADMAP

* Add DeploymentStatus Entity
* Add all missing events
* Add doctrine mapping file for doctrine/dbal

## Contribute

**All features are tested, and all contributions need to be tested in order to be accepted.**

Features from roadmap and bug fixes are prioritized. Fork the repository, create a feature branch and then launch the testsuite:

```bash
$ phpunit
```

Thank you for help, let us know if you use this library ;)
