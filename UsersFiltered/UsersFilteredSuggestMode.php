<?php
/**
 * @author Rémy M. Böhler
 */

namespace Statamic\Addons\UsersFiltered;

use Statamic\Addons\Suggest\Modes\AbstractMode;
use Statamic\API\User;

/**
 * Class UsersFilteredSuggestMode
 * @package Statamic\Addons\UsersFiltered
 */
class UsersFilteredSuggestMode extends AbstractMode
{
    /**
     * @return array
     */
    public function suggestions()
    {
        $users = User::all();

        $role = $this->request->input('role');
        if ($role) {
            $users = $users->filter(function ($user) use ($role) {
                /** @var \Statamic\Data\Users\User $user */
                return $user->hasRole($role);
            });
        }

        $group = $this->request->input('group');
        if ($group) {
            $users = $users->filter(function ($user) use ($group) {
                /** @var \Statamic\Data\Users\User $user */
                return $user->inGroup($group);
            });
        }

        // required to pass the instance to the map method for the label method
        $mode = $this;
        return $users
            ->map(function ($user) use($mode) {
                /** @var \Statamic\Data\Users\User $user */
                return ['value' => $user->id(), 'text' => $mode->label($user, 'username')];
            })
            ->values()
            ->all();
    }
}
