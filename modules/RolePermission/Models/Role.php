<?php

namespace RolePermission\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends \Spatie\Permission\Models\Role
{

    const ROLE_SUPER_ADMIN = 'super admin';
    const ROLE_DOCTOR = 'doctor';
    const ROLE_ADMIN = 'admin';
    const ROLE_PATIENT = 'patient';

    public static $roles = [
        self::ROLE_SUPER_ADMIN => [

            Permission::PERMISSION_VIEW_USERS,
            Permission::PERMISSION_MANAGE_USERS,
            Permission::PERMISSION_SEARCH_USERS,

            Permission::PERMISSION_MANAGE_ROLE_PERMISSIONS,
            Permission::PERMISSION_VIEW_ROLE_PERMISSIONS,

            /** @model User */

            Permission::PERMISSION_MANAGE_PATIENTS,
            Permission::PERMISSION_VIEW_PATIENTS,
            Permission::PERMISSION_MANAGE_OWN_PATIENTS,
            Permission::PERMISSION_VIEW_OWN_PATIENTS,


            Permission::PERMISSION_MANAGE_OWN_PROFILE,
            Permission::PERMISSION_VIEW_OWN_PROFILE,


            /** model permission */

            /** @model Comment */
            Permission::PERMISSION_MANAGE_COMMENTS,
            Permission::PERMISSION_VIEW_COMMENTS,
            Permission::PERMISSION_MANAGE_OWN_COMMENT,
            Permission::PERMISSION_VIEW_OWN_COMMENT,

            /** @model Category */
            Permission::PERMISSION_MANAGE_CATEGORIES,
            Permission::PERMISSION_VIEW_CATEGORIES,
            Permission::PERMISSION_MANAGE_OWN_CATEGORY,
            Permission::PERMISSION_VIEW_OWN_CATEGORY,

            /** @model Service */
            Permission::PERMISSION_MANAGE_SERVICES,
            Permission::PERMISSION_VIEW_SERVICES,
            Permission::PERMISSION_MANAGE_OWN_SERVICE,
            Permission::PERMISSION_VIEW_OWN_SERVICE,

            /** @model Ticket */
            Permission::PERMISSION_MANAGE_TICKETS,
            Permission::PERMISSION_VIEW_TICKETS,
            Permission::PERMISSION_MANAGE_OWN_TICKET,
            Permission::PERMISSION_VIEW_OWN_TICKET,

            /** @model Appointment */
            Permission::PERMISSION_MANAGE_APPOINTMENTS,
            Permission::PERMISSION_VIEW_APPOINTMENTS,
            Permission::PERMISSION_MANAGE_OWN_APPOINTMENT,
            Permission::PERMISSION_VIEW_OWN_APPOINTMENT,

        ],
        self::ROLE_PATIENT => [
            Permission::PERMISSION_MANAGE_OWN_APPOINTMENT,
            Permission::PERMISSION_VIEW_OWN_APPOINTMENT,
            Permission::PERMISSION_MANAGE_OWN_TICKET,
            Permission::PERMISSION_VIEW_OWN_TICKET,
            Permission::PERMISSION_MANAGE_OWN_PROFILE,
            Permission::PERMISSION_VIEW_OWN_PROFILE,
            Permission::PERMISSION_VIEW_COMMENTS,
            Permission::PERMISSION_MANAGE_OWN_COMMENT,
        ],
    ];
}
