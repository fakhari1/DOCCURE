<?php

namespace RolePermission\Models;

use Illuminate\Support\Str;
use User\Models\User;

class Permission extends \Spatie\Permission\Models\Permission
{

    const PERMISSION_MANAGE_ROLE_PERMISSIONS = 'manage role_permissions';

    const PERMISSION_VIEW_ROLE_PERMISSIONS = 'view role_permissions';

    //view  plural name means index & view singular name means show
    /** @model User */
    //index
    const PERMISSION_VIEW_STAFFS = 'view staffs';

    const PERMISSION_VIEW_OWN_STAFFS = 'view own staffs';

    const PERMISSION_VIEW_CLIENTS = 'view clients';

    const PERMISSION_VIEW_OWN_CLIENTS = 'view own clients';

    const PERMISSION_VIEW_USERS = 'view users';

    //show
    const PERMISSION_VIEW_OWN_PROFILE = 'view own profile';

    //Manage
    const PERMISSION_MANAGE_OWN_PROFILE = 'view manage own profile';

    const PERMISSION_MANAGE_USERS = 'view manage users';

    const PERMISSION_SEARCH_USERS = 'searchUsers';

    /** model permission */

    /** @model Discount */
    const PERMISSION_MANAGE_DISCOUNTS = 'manage discounts';

    const PERMISSION_VIEW_DISCOUNTS = 'view discounts';

    const PERMISSION_MANAGE_OWN_DISCOUNT = 'manage own discount';

    const PERMISSION_VIEW_OWN_DISCOUNT = 'view own discount';

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

    /** @model Office */
    const PERMISSION_MANAGE_OFFICES = 'manage offices';

    const PERMISSION_VIEW_OFFICES = 'view offices';

    const PERMISSION_MANAGE_OWN_OFFICE = 'manage own office';

    const PERMISSION_VIEW_OWN_OFFICE = 'view own office';

    /** @model Invoice */
    const PERMISSION_MANAGE_INVOICES = 'manage invoices';

    const PERMISSION_VIEW_INVOICES = 'view invoices';

    const PERMISSION_MANAGE_OWN_INVOICE = 'manage own invoice';

    const PERMISSION_VIEW_OWN_INVOICE = 'view own invoice';

    /** @model Package */
    const PERMISSION_MANAGE_PACKAGES = 'manage packages';

    const PERMISSION_VIEW_PACKAGES = 'view packages';

    const PERMISSION_MANAGE_OWN_PACKAGE = 'manage own package';

    const PERMISSION_VIEW_OWN_PACKAGE = 'view own package';

    /** @model Price */
    const PERMISSION_MANAGE_PRICES = 'manage prices';

    const PERMISSION_VIEW_PRICES = 'view prices';

    const PERMISSION_MANAGE_OWN_PRICE = 'manage own price';

    const PERMISSION_VIEW_OWN_PRICE = 'view own price';

    /** @model Wage */
    const PERMISSION_MANAGE_WAGES = 'manage wages';

    const PERMISSION_VIEW_WAGES = 'view wages';

    const PERMISSION_MANAGE_OWN_WAGE = 'manage own wage';

    const PERMISSION_VIEW_OWN_WAGE = 'view own wage';

    /** @model Discount */
    const PERMISSION_MANAGE_PAYROLLS = 'manage payrolls';

    const PERMISSION_VIEW_PAYROLLS = 'view payrolls';

    const PERMISSION_MANAGE_OWN_PAYROLL = 'manage own payroll';

    const PERMISSION_VIEW_OWN_PAYROLL = 'view own payroll';

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

    /** @model Assignment */
    const PERMISSION_MANAGE_ASSIGNMENTS = 'manage assignments';

    const PERMISSION_VIEW_ASSIGNMENTS = 'view assignments';

    const PERMISSION_MANAGE_OWN_ASSIGNMENT = 'manage own assignment';

    const PERMISSION_VIEW_OWN_ASSIGNMENT = 'view own assignment';

    /** @model Authorization */
    const PERMISSION_MANAGE_AUTHORIZATIONS = 'manage authorizations';

    const PERMISSION_VIEW_AUTHORIZATIONS = 'view authorizations';

    const PERMISSION_MANAGE_OWN_AUTHORIZATION = 'manage own authorization';

    const PERMISSION_VIEW_OWN_AUTHORIZATION = 'view own authorization';

    /** @model OfficeAvailability */
    const PERMISSION_MANAGE_OFFICE_AVAILABILITIES = 'manage officeAvailabilities';

    const PERMISSION_VIEW_OFFICE_AVAILABILITIES = 'view officeAvailabilities';

    const PERMISSION_MANAGE_OWN_OFFICE_AVAILABILITY = 'manage own officeAvailability';

    const PERMISSION_VIEW_OWN_OFFICE_AVAILABILITY = 'view own officeAvailability';

    /** @model StaffAvailability */
    const PERMISSION_MANAGE_STAFF_AVAILABILITIES = 'manage staffAvailabilities';

    const PERMISSION_VIEW_STAFF_AVAILABILITIES = 'view staffAvailabilities';

    const PERMISSION_MANAGE_OWN_STAFF_AVAILABILITY = 'manage own staffAvailability';

    const PERMISSION_VIEW_OWN_STAFF_AVAILABILITY = 'view own StaffAvailability';

    /** @model StaffTimeoff */
    const PERMISSION_MANAGE_STAFF_TIMEOFFS = 'manage staffTimeoffs';

    const PERMISSION_VIEW_STAFF_TIMEOFFS = 'view staffTimeoffs';

    const PERMISSION_MANAGE_OWN_STAFF_TIMEOFF = 'manage own staffTimeoff';

    const PERMISSION_VIEW_OWN_STAFF_TIMEOFF = 'view own  staffTimeoff';

    /** @model Course */
    const PERMISSION_MANAGE_COURSES = 'manage courses';

    const PERMISSION_VIEW_COURSES = 'view courses';

    const PERMISSION_MANAGE_OWN_COURSE = 'manage own course';

    const PERMISSION_VIEW_OWN_COURSE = 'view own course';

    /** @model Project */
    const PERMISSION_MANAGE_PROJECTS = 'manage projects';

    const PERMISSION_VIEW_PROJECTS = 'view projects';

    const PERMISSION_MANAGE_OWN_PROJECT = 'manage own project';

    const PERMISSION_VIEW_OWN_PROJECT = 'view own project';

    /** @model Board */
    const PERMISSION_MANAGE_BOARDS = 'manage boards';

    const PERMISSION_VIEW_BOARDS = 'view boards';

    const PERMISSION_MANAGE_OWN_BOARD = 'manage own board';

    const PERMISSION_VIEW_OWN_BOARD = 'view own board';

    /** @model Column */
    const PERMISSION_MANAGE_COLUMNS = 'manage columns';

    const PERMISSION_VIEW_COLUMNS = 'view columns';

    const PERMISSION_MANAGE_OWN_COLUMN = 'manage own column';

    const PERMISSION_VIEW_OWN_COLUMN = 'view own column';

    /** @model Task */
    const PERMISSION_MANAGE_TASKS = 'manage tasks';

    const PERMISSION_VIEW_TASKS = 'view tasks';

    const PERMISSION_MANAGE_OWN_TASK = 'manage own task';

    const PERMISSION_VIEW_OWN_TASK = 'view own task';

    /** @model Lesson */
    const PERMISSION_MANAGE_LESSONS = 'manage lessons';

    const PERMISSION_VIEW_LESSONS = 'view lessons';

    const PERMISSION_MANAGE_LESSON = 'manage own lesson';

    const PERMISSION_VIEW_OWN_LESSON = 'view own  lesson';

    /** @model Season */
    const PERMISSION_MANAGE_SEASONS = 'manage seasons';

    const PERMISSION_VIEW_SEASONS = 'view seasons';

    const PERMISSION_MANAGE_OWN_SEASON = 'manage own season';

    const PERMISSION_VIEW_OWN_SEASON = 'view own season';

    /** @model Payment */
    const PERMISSION_MANAGE_PAYMENTS = 'manage payments';

    const PERMISSION_VIEW_PAYMENTS = 'view payments';

    const PERMISSION_MANAGE_OWN_PAYMENT = 'manage own payment';

    const PERMISSION_VIEW_OWN_PAYMENT = 'view own payment';

    /** @model Settlement */
    const PERMISSION_MANAGE_SETTLEMENTS = 'manage settlements';

    const PERMISSION_VIEW_SETTLEMENTS = 'view settlements';

    const PERMISSION_MANAGE_OWN_SETTLEMENT = 'manage own settlement';

    const PERMISSION_VIEW_OWN_SETTLEMENT = 'view own settlement';

    /** model permission */
    public static $permissions = [
        self::PERMISSION_MANAGE_PROJECTS,
        self::PERMISSION_VIEW_PROJECTS,
        self::PERMISSION_MANAGE_OWN_PROJECT,
        self::PERMISSION_VIEW_OWN_PROJECT,

        self::PERMISSION_MANAGE_BOARDS,
        self::PERMISSION_VIEW_BOARDS,
        self::PERMISSION_MANAGE_OWN_BOARD,
        self::PERMISSION_VIEW_OWN_BOARD,

        self::PERMISSION_MANAGE_COLUMNS,
        self::PERMISSION_VIEW_COLUMNS,
        self::PERMISSION_MANAGE_OWN_COLUMN,
        self::PERMISSION_VIEW_OWN_COLUMN,

        self::PERMISSION_MANAGE_TASKS,
        self::PERMISSION_VIEW_TASKS,
        self::PERMISSION_MANAGE_OWN_TASK,
        self::PERMISSION_VIEW_OWN_TASK,

        self::PERMISSION_SUPER_ADMIN,
        self::PERMISSION_MANAGER,
        self::PERMISSION_MANAGE_CATEGORIES,
        self::PERMISSION_MANAGE_ROLE_PERMISSIONS,
        self::PERMISSION_VIEW_ROLE_PERMISSIONS,

        self::PERMISSION_VIEW_STAFFS,
        self::PERMISSION_VIEW_OWN_STAFFS,
        self::PERMISSION_VIEW_CLIENTS,
        self::PERMISSION_VIEW_OWN_CLIENTS,
        self::PERMISSION_VIEW_USERS,
        //show
        self::PERMISSION_VIEW_OWN_PROFILE,
        //Manage
        self::PERMISSION_MANAGE_OWN_PROFILE,
        self::PERMISSION_MANAGE_USERS,
        self::PERMISSION_SEARCH_USERS,

        /** @model User */

        /** @model Category */
        self::PERMISSION_MANAGE_CATEGORIES,
        self::PERMISSION_VIEW_CATEGORIES,
        self::PERMISSION_MANAGE_OWN_CATEGORY,
        self::PERMISSION_VIEW_OWN_CATEGORY,

        /** @model Service */
        self::PERMISSION_MANAGE_SERVICES,
        self::PERMISSION_VIEW_SERVICES,
        self::PERMISSION_MANAGE_OWN_SERVICE,
        self::PERMISSION_VIEW_OWN_SERVICE,

        /** @model Office */
        self::PERMISSION_MANAGE_OFFICES,
        self::PERMISSION_VIEW_OFFICES,
        self::PERMISSION_MANAGE_OWN_OFFICE,
        self::PERMISSION_VIEW_OWN_OFFICE,

        /** @model Invoice */
        self::PERMISSION_MANAGE_INVOICES,
        self::PERMISSION_VIEW_INVOICES,
        self::PERMISSION_MANAGE_OWN_INVOICE,
        self::PERMISSION_VIEW_OWN_INVOICE,

        /** @model Package */
        self::PERMISSION_MANAGE_PACKAGES,
        self::PERMISSION_VIEW_PACKAGES,
        self::PERMISSION_MANAGE_OWN_PACKAGE,
        self::PERMISSION_VIEW_OWN_PACKAGE,

        /** @model Price */
        self::PERMISSION_MANAGE_PRICES,
        self::PERMISSION_VIEW_PRICES,
        self::PERMISSION_MANAGE_OWN_PRICE,
        self::PERMISSION_VIEW_OWN_PRICE,

        /** @model Wage */
        self::PERMISSION_MANAGE_WAGES,
        self::PERMISSION_VIEW_WAGES,
        self::PERMISSION_MANAGE_OWN_WAGE,
        self::PERMISSION_VIEW_OWN_WAGE,

        /** @model Ticket */
        self::PERMISSION_MANAGE_TICKETS,
        self::PERMISSION_VIEW_TICKETS,
        self::PERMISSION_MANAGE_OWN_TICKET,
        self::PERMISSION_VIEW_OWN_TICKET,

        /** @model Appointment */
        self::PERMISSION_MANAGE_APPOINTMENTS,
        self::PERMISSION_VIEW_APPOINTMENTS,
        self::PERMISSION_MANAGE_OWN_APPOINTMENT,
        self::PERMISSION_VIEW_OWN_APPOINTMENT,

        /** @model Assignment */
        self::PERMISSION_MANAGE_ASSIGNMENTS,
        self::PERMISSION_VIEW_ASSIGNMENTS,
        self::PERMISSION_MANAGE_OWN_ASSIGNMENT,
        self::PERMISSION_VIEW_OWN_ASSIGNMENT,

        /** @model Authorization */
        self::PERMISSION_MANAGE_AUTHORIZATIONS,
        self::PERMISSION_VIEW_AUTHORIZATIONS,
        self::PERMISSION_MANAGE_OWN_AUTHORIZATION,
        self::PERMISSION_VIEW_OWN_AUTHORIZATION,

        /** @model OfficeAvailability */
        self::PERMISSION_MANAGE_OFFICE_AVAILABILITIES,
        self::PERMISSION_VIEW_OFFICE_AVAILABILITIES,
        self::PERMISSION_MANAGE_OWN_OFFICE_AVAILABILITY,
        self::PERMISSION_VIEW_OWN_OFFICE_AVAILABILITY,

        /** @model StaffAvailability */
        self::PERMISSION_MANAGE_STAFF_AVAILABILITIES,
        self::PERMISSION_VIEW_STAFF_AVAILABILITIES,
        self::PERMISSION_MANAGE_OWN_STAFF_AVAILABILITY,
        self::PERMISSION_VIEW_OWN_STAFF_AVAILABILITY,

        /** @model StaffTimeoff */
        self::PERMISSION_MANAGE_STAFF_TIMEOFFS,
        self::PERMISSION_VIEW_STAFF_TIMEOFFS,
        self::PERMISSION_MANAGE_OWN_STAFF_TIMEOFF,
        self::PERMISSION_VIEW_OWN_STAFF_TIMEOFF,

        /** @model Discount */
        self::PERMISSION_MANAGE_DISCOUNTS,
        self::PERMISSION_VIEW_DISCOUNTS,
        self::PERMISSION_MANAGE_OWN_DISCOUNT,
        self::PERMISSION_VIEW_OWN_DISCOUNT,

        /** @model Comment */
        self::PERMISSION_MANAGE_COMMENTS,
        self::PERMISSION_VIEW_COMMENTS,
        self::PERMISSION_MANAGE_OWN_COMMENT,
        self::PERMISSION_VIEW_OWN_COMMENT,

        /** @model Course */
        self::PERMISSION_MANAGE_COURSES,
        self::PERMISSION_VIEW_COURSES,
        self::PERMISSION_MANAGE_OWN_COURSE,
        self::PERMISSION_VIEW_OWN_COURSE,

        /** @model Lesson */
        self::PERMISSION_MANAGE_LESSONS,
        self::PERMISSION_VIEW_LESSONS,
        self::PERMISSION_MANAGE_LESSON,
        self::PERMISSION_VIEW_OWN_LESSON,

        /** @model Season */
        self::PERMISSION_MANAGE_SEASONS,
        self::PERMISSION_VIEW_SEASONS,
        self::PERMISSION_MANAGE_OWN_SEASON,
        self::PERMISSION_VIEW_OWN_SEASON,

        /** @model Payment */
        self::PERMISSION_MANAGE_PAYMENTS,
        self::PERMISSION_VIEW_PAYMENTS,
        self::PERMISSION_MANAGE_OWN_PAYMENT,

        self::PERMISSION_VIEW_OWN_PAYMENT,

        /** @model Settlement */
        self::PERMISSION_MANAGE_SETTLEMENTS,
        self::PERMISSION_VIEW_SETTLEMENTS,
        self::PERMISSION_MANAGE_OWN_SETTLEMENT,
        self::PERMISSION_VIEW_OWN_SETTLEMENT,

    ];

    const PERMISSION_SUPER_ADMIN = 'super admin';

    const PERMISSION_MANAGER = 'manager';


}
