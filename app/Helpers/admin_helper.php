<?php


use App\Models\Admin\GroupModel;

if (!function_exists('group')) {
    /**
     * Example:
     * group()->name;
     * group()->id;
     * group()->description;
     *
     * @param mixed $groups
     */
    function group()
    {
        $authenticate = service('authentication');
        $authorize = service('authorization');
        if ($authenticate->check()) {
            $group = (new GroupModel())->getGroupsForName(user()->id);
            return $group;
        }
        return false;
    }
}
