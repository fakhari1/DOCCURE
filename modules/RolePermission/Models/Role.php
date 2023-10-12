<?php

namespace RolePermission\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends \Spatie\Permission\Models\Role
{
    const STATUS_ACTIVE = 'active';

    const STATUS_INACTIVE = 'inactive';

    public static $statuses = [
        self::STATUS_ACTIVE,
        self::STATUS_INACTIVE,
    ];

    const ROLE_SUPER_ADMIN = 'super admin';

    const ROLE_CLIENT = 'client';

    const ROLE_STAFF = 'staff';

    const ROLE_MANAGER = 'manager';

    public static $roles = [
        self::ROLE_SUPER_ADMIN => [
            /** @model Project */
            Permission::PERMISSION_MANAGE_PROJECTS,
            Permission::PERMISSION_VIEW_PROJECTS,
            Permission::PERMISSION_MANAGE_OWN_PROJECT,
            Permission::PERMISSION_VIEW_OWN_PROJECT,

            /** @model Board */
            Permission::PERMISSION_MANAGE_BOARDS,
            Permission::PERMISSION_VIEW_BOARDS,
            Permission::PERMISSION_MANAGE_OWN_BOARD,
            Permission::PERMISSION_VIEW_OWN_BOARD,

            /** @model Column */
            Permission::PERMISSION_MANAGE_COLUMNS,
            Permission::PERMISSION_VIEW_COLUMNS,
            Permission::PERMISSION_MANAGE_OWN_COLUMN,
            Permission::PERMISSION_VIEW_OWN_COLUMN,

            /** @model Task */
            Permission::PERMISSION_MANAGE_TASKS,
            Permission::PERMISSION_VIEW_TASKS,
            Permission::PERMISSION_MANAGE_OWN_TASK,
            Permission::PERMISSION_VIEW_OWN_TASK,

            /** @model Service */
            Permission::PERMISSION_MANAGE_SERVICES,
            Permission::PERMISSION_VIEW_SERVICES,
            Permission::PERMISSION_MANAGE_OWN_SERVICE,
            Permission::PERMISSION_VIEW_OWN_SERVICE,

            /** @model Office */
            Permission::PERMISSION_MANAGE_OFFICES,
            Permission::PERMISSION_VIEW_OFFICES,
            Permission::PERMISSION_MANAGE_OWN_OFFICE,
            Permission::PERMISSION_VIEW_OWN_OFFICE,

            /** @model Invoice */
            Permission::PERMISSION_MANAGE_INVOICES,
            Permission::PERMISSION_VIEW_INVOICES,
            Permission::PERMISSION_MANAGE_OWN_INVOICE,
            Permission::PERMISSION_VIEW_OWN_INVOICE,

            /** @model Package */
            Permission::PERMISSION_MANAGE_PACKAGES,
            Permission::PERMISSION_VIEW_PACKAGES,
            Permission::PERMISSION_MANAGE_OWN_PACKAGE,
            Permission::PERMISSION_VIEW_OWN_PACKAGE,

            /** @model Price */
            Permission::PERMISSION_MANAGE_PRICES,
            Permission::PERMISSION_VIEW_PRICES,
            Permission::PERMISSION_MANAGE_OWN_PRICE,
            Permission::PERMISSION_VIEW_OWN_PRICE,

            /** @model Wage */
            Permission::PERMISSION_MANAGE_WAGES,
            Permission::PERMISSION_VIEW_WAGES,
            Permission::PERMISSION_MANAGE_OWN_WAGE,
            Permission::PERMISSION_VIEW_OWN_WAGE,

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

            /** @model Assignment */
            Permission::PERMISSION_MANAGE_ASSIGNMENTS,
            Permission::PERMISSION_VIEW_ASSIGNMENTS,
            Permission::PERMISSION_MANAGE_OWN_ASSIGNMENT,
            Permission::PERMISSION_VIEW_OWN_ASSIGNMENT,

            /** @model Authorization */
            Permission::PERMISSION_MANAGE_AUTHORIZATIONS,
            Permission::PERMISSION_VIEW_AUTHORIZATIONS,
            Permission::PERMISSION_MANAGE_OWN_AUTHORIZATION,
            Permission::PERMISSION_VIEW_OWN_AUTHORIZATION,

            /** @model OfficeAvailability */
            Permission::PERMISSION_MANAGE_OFFICE_AVAILABILITIES,
            Permission::PERMISSION_VIEW_OFFICE_AVAILABILITIES,
            Permission::PERMISSION_MANAGE_OWN_OFFICE_AVAILABILITY,
            Permission::PERMISSION_VIEW_OWN_OFFICE_AVAILABILITY,

            /** @model StaffAvailability */
            Permission::PERMISSION_MANAGE_STAFF_AVAILABILITIES,
            Permission::PERMISSION_VIEW_STAFF_AVAILABILITIES,
            Permission::PERMISSION_MANAGE_OWN_STAFF_AVAILABILITY,
            Permission::PERMISSION_VIEW_OWN_STAFF_AVAILABILITY,

            /** @model StaffTimeoff */
            Permission::PERMISSION_MANAGE_STAFF_TIMEOFFS,
            Permission::PERMISSION_VIEW_STAFF_TIMEOFFS,
            Permission::PERMISSION_MANAGE_OWN_STAFF_TIMEOFF,
            Permission::PERMISSION_VIEW_OWN_STAFF_TIMEOFF,

            /** @model Discount */
            Permission::PERMISSION_MANAGE_DISCOUNTS,
            Permission::PERMISSION_VIEW_DISCOUNTS,
            Permission::PERMISSION_MANAGE_OWN_DISCOUNT,
            Permission::PERMISSION_VIEW_OWN_DISCOUNT,

            /** @model Course */
            Permission::PERMISSION_MANAGE_COURSES,
            Permission::PERMISSION_VIEW_COURSES,
            Permission::PERMISSION_MANAGE_OWN_COURSE,
            Permission::PERMISSION_VIEW_OWN_COURSE,

            /** @model Comment */
            Permission::PERMISSION_MANAGE_COMMENTS,
            Permission::PERMISSION_VIEW_COMMENTS,
            Permission::PERMISSION_MANAGE_OWN_COMMENT,
            Permission::PERMISSION_VIEW_OWN_COMMENT,

            /** @model Profile */
            //index
            Permission::PERMISSION_VIEW_STAFFS,
            Permission::PERMISSION_VIEW_OWN_STAFFS,
            Permission::PERMISSION_VIEW_CLIENTS,
            Permission::PERMISSION_VIEW_OWN_CLIENTS,
            Permission::PERMISSION_VIEW_USERS,
            Permission::PERMISSION_SEARCH_USERS,
            //show
            Permission::PERMISSION_VIEW_OWN_PROFILE,
            //Manage
            Permission::PERMISSION_MANAGE_OWN_PROFILE,
            Permission::PERMISSION_MANAGE_USERS,

        ],
        self::ROLE_MANAGER => [
            /** @model Project */
            Permission::PERMISSION_MANAGE_PROJECTS,
            Permission::PERMISSION_VIEW_PROJECTS,
            Permission::PERMISSION_MANAGE_OWN_PROJECT,
            Permission::PERMISSION_VIEW_OWN_PROJECT,

            /** @model Board */
            Permission::PERMISSION_MANAGE_BOARDS,
            Permission::PERMISSION_VIEW_BOARDS,
            Permission::PERMISSION_MANAGE_OWN_BOARD,
            Permission::PERMISSION_VIEW_OWN_BOARD,

            /** @model Column */
            Permission::PERMISSION_MANAGE_COLUMNS,
            Permission::PERMISSION_VIEW_COLUMNS,
            Permission::PERMISSION_MANAGE_OWN_COLUMN,
            Permission::PERMISSION_VIEW_OWN_COLUMN,

            /** @model Task */
            Permission::PERMISSION_MANAGE_TASKS,
            Permission::PERMISSION_VIEW_TASKS,
            Permission::PERMISSION_MANAGE_OWN_TASK,
            Permission::PERMISSION_VIEW_OWN_TASK,

            /** @model Service */
            Permission::PERMISSION_MANAGE_SERVICES,
            Permission::PERMISSION_VIEW_SERVICES,
            Permission::PERMISSION_MANAGE_OWN_SERVICE,
            Permission::PERMISSION_VIEW_OWN_SERVICE,

            /** @model Office */
            Permission::PERMISSION_MANAGE_OFFICES,
            Permission::PERMISSION_VIEW_OFFICES,
            Permission::PERMISSION_MANAGE_OWN_OFFICE,
            Permission::PERMISSION_VIEW_OWN_OFFICE,

            /** @model Invoice */
            Permission::PERMISSION_MANAGE_INVOICES,
            Permission::PERMISSION_VIEW_INVOICES,
            Permission::PERMISSION_MANAGE_OWN_INVOICE,
            Permission::PERMISSION_VIEW_OWN_INVOICE,

            /** @model Package */
            Permission::PERMISSION_MANAGE_PACKAGES,
            Permission::PERMISSION_VIEW_PACKAGES,
            Permission::PERMISSION_MANAGE_OWN_PACKAGE,
            Permission::PERMISSION_VIEW_OWN_PACKAGE,

            /** @model Price */
            Permission::PERMISSION_MANAGE_PRICES,
            Permission::PERMISSION_VIEW_PRICES,
            Permission::PERMISSION_MANAGE_OWN_PRICE,
            Permission::PERMISSION_VIEW_OWN_PRICE,

            /** @model Wage */
            Permission::PERMISSION_MANAGE_WAGES,
            Permission::PERMISSION_VIEW_WAGES,
            Permission::PERMISSION_MANAGE_OWN_WAGE,
            Permission::PERMISSION_VIEW_OWN_WAGE,

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

            /** @model Assignment */
            Permission::PERMISSION_MANAGE_ASSIGNMENTS,
            Permission::PERMISSION_VIEW_ASSIGNMENTS,
            Permission::PERMISSION_MANAGE_OWN_ASSIGNMENT,
            Permission::PERMISSION_VIEW_OWN_ASSIGNMENT,

            /** @model Authorization */
            Permission::PERMISSION_MANAGE_AUTHORIZATIONS,
            Permission::PERMISSION_VIEW_AUTHORIZATIONS,
            Permission::PERMISSION_MANAGE_OWN_AUTHORIZATION,
            Permission::PERMISSION_VIEW_OWN_AUTHORIZATION,

            /** @model OfficeAvailability */
            Permission::PERMISSION_MANAGE_OFFICE_AVAILABILITIES,
            Permission::PERMISSION_VIEW_OFFICE_AVAILABILITIES,
            Permission::PERMISSION_MANAGE_OWN_OFFICE_AVAILABILITY,
            Permission::PERMISSION_VIEW_OWN_OFFICE_AVAILABILITY,

            /** @model StaffAvailability */
            Permission::PERMISSION_MANAGE_STAFF_AVAILABILITIES,
            Permission::PERMISSION_VIEW_STAFF_AVAILABILITIES,
            Permission::PERMISSION_MANAGE_OWN_STAFF_AVAILABILITY,
            Permission::PERMISSION_VIEW_OWN_STAFF_AVAILABILITY,

            /** @model StaffTimeoff */
            Permission::PERMISSION_MANAGE_STAFF_TIMEOFFS,
            Permission::PERMISSION_VIEW_STAFF_TIMEOFFS,
            Permission::PERMISSION_MANAGE_OWN_STAFF_TIMEOFF,
            Permission::PERMISSION_VIEW_OWN_STAFF_TIMEOFF,

            /** @model Discount */
            Permission::PERMISSION_MANAGE_DISCOUNTS,
            Permission::PERMISSION_VIEW_DISCOUNTS,
            Permission::PERMISSION_MANAGE_OWN_DISCOUNT,
            Permission::PERMISSION_VIEW_OWN_DISCOUNT,

            /** @model Course */
            Permission::PERMISSION_MANAGE_COURSES,
            Permission::PERMISSION_VIEW_COURSES,
            Permission::PERMISSION_MANAGE_OWN_COURSE,
            Permission::PERMISSION_VIEW_OWN_COURSE,

            /** @model Comment */
            Permission::PERMISSION_MANAGE_COMMENTS,
            Permission::PERMISSION_VIEW_COMMENTS,
            Permission::PERMISSION_MANAGE_OWN_COMMENT,
            Permission::PERMISSION_VIEW_OWN_COMMENT,

            /** @model Profile */
            //index
            Permission::PERMISSION_VIEW_STAFFS,
            Permission::PERMISSION_VIEW_OWN_STAFFS,
            Permission::PERMISSION_VIEW_CLIENTS,
            Permission::PERMISSION_VIEW_OWN_CLIENTS,
            Permission::PERMISSION_VIEW_USERS,
            Permission::PERMISSION_SEARCH_USERS,
            //show
            Permission::PERMISSION_VIEW_OWN_PROFILE,
            //Manage
            Permission::PERMISSION_MANAGE_OWN_PROFILE,
            Permission::PERMISSION_MANAGE_USERS,

        ],
        self::ROLE_STAFF => [
            Permission::PERMISSION_VIEW_OWN_APPOINTMENT,
            Permission::PERMISSION_VIEW_OWN_TICKET,
            Permission::PERMISSION_VIEW_OWN_ASSIGNMENT,
            Permission::PERMISSION_MANAGE_OWN_TICKET,
            Permission::PERMISSION_VIEW_OWN_CLIENTS,
            Permission::PERMISSION_VIEW_OWN_PROFILE,
            Permission::PERMISSION_MANAGE_OWN_PROFILE,
            Permission::PERMISSION_MANAGE_OWN_APPOINTMENT,
            Permission::PERMISSION_MANAGE_OWN_PROJECT,

            Permission::PERMISSION_VIEW_OWN_PROJECT,
            Permission::PERMISSION_MANAGE_OWN_BOARD,
            Permission::PERMISSION_VIEW_OWN_BOARD,
            Permission::PERMISSION_MANAGE_OWN_COLUMN,
            Permission::PERMISSION_VIEW_OWN_COLUMN,
            Permission::PERMISSION_MANAGE_OWN_TASK,
            Permission::PERMISSION_VIEW_OWN_TASK,

        ],
        self::ROLE_CLIENT => [
            Permission::PERMISSION_VIEW_OWN_APPOINTMENT,
            Permission::PERMISSION_VIEW_OWN_ASSIGNMENT,
            Permission::PERMISSION_VIEW_OWN_AUTHORIZATION,
            Permission::PERMISSION_VIEW_OWN_TICKET,
            Permission::PERMISSION_MANAGE_TICKETS,
            Permission::PERMISSION_VIEW_PACKAGES,
            Permission::PERMISSION_VIEW_OWN_INVOICE,
            Permission::PERMISSION_MANAGE_OWN_TICKET,
            Permission::PERMISSION_VIEW_STAFFS,
            Permission::PERMISSION_VIEW_OWN_PROFILE,
            Permission::PERMISSION_MANAGE_OWN_PROFILE,
            Permission::PERMISSION_MANAGE_OWN_APPOINTMENT,
            Permission::PERMISSION_VIEW_OWN_PROJECT,
            Permission::PERMISSION_VIEW_OWN_BOARD,
            Permission::PERMISSION_VIEW_OWN_COLUMN,
            Permission::PERMISSION_VIEW_OWN_TASK,

        ],
    ];

    protected $appends = ['statuses'];

    public function getStatusesAttribute()
    {
        return self::$statuses;
    }

    //    public function courses(): BelongsToMany
    //    {
    //        return $this->belongsToMany(Course::class, 'course_role');
    //    }
}
