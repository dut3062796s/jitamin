<?php

/*
 * This file is part of Jitamin.
 *
 * Copyright (C) 2016 Jitamin Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jitamin\Core\Security;

/**
 * Pre-Authentication Provider Interface.
 */
interface PreAuthenticationProviderInterface extends AuthenticationProviderInterface
{
    /**
     * Get user object.
     *
     * @return \Jitamin\Core\User\UserProviderInterface
     */
    public function getUser();
}
