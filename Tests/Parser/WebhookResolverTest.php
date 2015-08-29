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

namespace Lpdigital\Github\Parser\Tests;

use Lpdigital\Github\Parser\WebhookResolver;

class WebhookResolverTest extends \PHPUnit_Framework_TestCase
{
    private $webhookResolver;
    private $jsonDataFolder;

    public function setUp()
    {
        $this->webhookResolver = new WebhookResolver();
        $this->jsonDataFolder = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'json-data'.DIRECTORY_SEPARATOR;
    }

    public function tearDown()
    {
        $this->webhookResolver = null;
    }

    public function testResolveIssuesEvent()
    {
        $jsonReceived = json_decode(file_get_contents($this->jsonDataFolder.'issue_event.json'), true);
        $event = $this->webhookResolver->resolve($jsonReceived);

        $this->assertInstanceOf("Lpdigital\Github\EventType\IssuesEvent", $event);

        $this->assertEquals('opened', $event->action);
        $this->assertEquals('Spelling error in the README file', $event->issue->getTitle());
        $this->assertEquals('35129377', $event->repository->getId());
    }

    public function testResolveIssueCommitEvent()
    {
        $jsonReceived = json_decode(file_get_contents($this->jsonDataFolder.'issue_commit_event.json'), true);
        $event = $this->webhookResolver->resolve($jsonReceived);

        $this->assertInstanceOf("Lpdigital\Github\EventType\IssueCommentEvent", $event);

        $this->assertEquals('Spelling error in the README file', $event->issue->getTitle());
        $this->assertEquals('baxterthehacker', $event->user->getLogin());
        $this->assertEquals("You are totally right! I'll get this fixed right away.", $event->comment->getBody());
    }

    public function testResolveForkEvent()
    {
        $jsonReceived = json_decode(file_get_contents($this->jsonDataFolder.'fork_event.json'), true);
        $event = $this->webhookResolver->resolve($jsonReceived);

        $this->assertInstanceOf("Lpdigital\Github\EventType\ForkEvent", $event);

        $this->assertEquals('baxterandthehackers/public-repo', $event->forkedRepository->getFullName());
        $this->assertEquals('7649605', $event->owner->getId());
        $this->assertEquals('https://api.github.com/repos/baxterthehacker/public-repo', $event->repository->getUrl());
    }

    public function testResolveDeploymentStatusEvent()
    {
        $jsonReceived = json_decode(file_get_contents($this->jsonDataFolder.'deployment_status_event.json'), true);
        $event = $this->webhookResolver->resolve($jsonReceived);

        $this->assertInstanceOf("Lpdigital\Github\EventType\DeploymentStatusEvent", $event);

        $this->assertEquals('production', $event->deployment->getEnvironment());
        $this->assertEquals('public-repo', $event->repository->getName());
        $this->assertEquals('User', $event->sender->getType());
    }
}
