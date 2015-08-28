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

namespace Lpdigital\Github\EventType;


class DeploymentStatusEvent extends AbstractEventType
{
    public $deployment;
    public $repository;
    public $sender;

    static public function name()
    {
        return 'DeploymentStatusEvent';
    }

    static public function fields()
    {
        return ['deployment_status', 'deployment', 'repository'];
    }

    public function createFromData($data)
    {
        $this->deployment    = $data['deployment'];
        $this->repository    = $data['repository'];
        $this->sender        = $data['sender'];

        return $this;
    }
}
