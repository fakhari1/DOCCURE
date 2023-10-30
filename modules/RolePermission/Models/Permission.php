<?php

namespace RolePermission\Models;

use Illuminate\Support\Str;
use User\Models\User;

class Permission extends \Spatie\Permission\Models\Permission
{
    const PERMISSION_VIEW_USERS = 'view users';
    const PERMISSION_MANAGE_USERS = 'manage users';
    const PERMISSION_SEARCH_USERS = 'search users';

    const PERMISSION_MANAGE_ROLE_PERMISSIONS = 'manage role_permissions';
    const PERMISSION_VIEW_ROLE_PERMISSIONS = 'view role_permissions';

    /** @model User */

    const PERMISSION_MANAGE_PATIENTS = 'manage patients';
    const PERMISSION_VIEW_PATIENTS = 'view patients';
    const PERMISSION_MANAGE_OWN_PATIENTS = 'manage own patients';
    const PERMISSION_VIEW_OWN_PATIENTS = 'view own patients';


    const PERMISSION_MANAGE_OWN_PROFILE = 'manage own profile';
    const PERMISSION_VIEW_OWN_PROFILE = 'view own profile';


    /** model permission */

    /** @model Comment */
    const PERMISSION_MANAGE_COMMENTS = 'manage comments';
    const PERMISSION_VIEW_COMMENTS = 'view comments';
    const PERMISSION_MANAGE_OWN_COMMENT = 'manage own comment';
    const PERMISSION_VIEW_OWN_COMMENT = 'view own comment';

    /** @model Category */
    const PERMISSION_MANAGE_CATEGORIES = 'manage categories';
    const PERMISSION_VIEW_CATEGORIES = 'view categories';
    const PERMISSION_MANAGE_OWN_CATEGORY = 'manage own category';
    const PERMISSION_VIEW_OWN_CATEGORY = 'view own category';

    /** @model Service */
    const PERMISSION_MANAGE_SERVICES = 'manage services';
    const PERMISSION_VIEW_SERVICES = 'view services';
    const PERMISSION_MANAGE_OWN_SERVICE = 'manage own service';
    const PERMISSION_VIEW_OWN_SERVICE = 'view own service';

    /** @model Ticket */
    const PERMISSION_MANAGE_TICKETS = 'manage tickets';
    const PERMISSION_VIEW_TICKETS = 'view tickets';
    const PERMISSION_MANAGE_OWN_TICKET = 'manage own ticket';
    const PERMISSION_VIEW_OWN_TICKET = 'view own ticket';

    /** @model Appointment */
    const PERMISSION_MANAGE_APPOINTMENTS = 'manage appointments';
    const PERMISSION_VIEW_APPOINTMENTS = 'view appointments';
    const PERMISSION_MANAGE_OWN_APPOINTMENT = 'manage own appointment';
    const PERMISSION_VIEW_OWN_APPOINTMENT = 'view own appointment';


    /** model permission */
    public static $permissions = [
        self::PERMISSION_VIEW_USERS,
        self::PERMISSION_MANAGE_USERS,
        self::PERMISSION_SEARCH_USERS,
        self::PERMISSION_MANAGE_ROLE_PERMISSIONS,
        self::PERMISSION_VIEW_ROLE_PERMISSIONS,
        self::PERMISSION_MANAGE_PATIENTS,
        self::PERMISSION_VIEW_PATIENTS,
        self::PERMISSION_MANAGE_OWN_PATIENTS,
        self::PERMISSION_VIEW_OWN_PATIENTS,
        self::PERMISSION_MANAGE_OWN_PROFILE,
        self::PERMISSION_VIEW_OWN_PROFILE,
        self::PERMISSION_MANAGE_COMMENTS,
        self::PERMISSION_VIEW_COMMENTS,
        self::PERMISSION_MANAGE_OWN_COMMENT,
        self::PERMISSION_VIEW_OWN_COMMENT,
        self::PERMISSION_MANAGE_CATEGORIES,
        self::PERMISSION_VIEW_CATEGORIES,
        self::PERMISSION_MANAGE_OWN_CATEGORY,
        self::PERMISSION_VIEW_OWN_CATEGORY,
        self::PERMISSION_MANAGE_SERVICES,
        self::PERMISSION_VIEW_SERVICES,
        self::PERMISSION_MANAGE_OWN_SERVICE,
        self::PERMISSION_VIEW_OWN_SERVICE,
        self::PERMISSION_MANAGE_TICKETS,
        self::PERMISSION_VIEW_TICKETS,
        self::PERMISSION_MANAGE_OWN_TICKET,
        self::PERMISSION_VIEW_OWN_TICKET,
        self::PERMISSION_MANAGE_APPOINTMENTS,
        self::PERMISSION_VIEW_APPOINTMENTS,
        self::PERMISSION_MANAGE_OWN_APPOINTMENT,
        self::PERMISSION_VIEW_OWN_APPOINTMENT,
    ];

}
