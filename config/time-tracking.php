<?php

return [
    'table_names' => [
        'intervals' => 'intervals'

        // /*
        //  * When using the "HasRoles" trait from this package, we need to know which
        //  * table should be used to retrieve your roles. We have chosen a basic
        //  * default value but you may easily change it to any table you like.
        //  */

        // 'roles' => 'roles',

        // /*
        //  * When using the "HasPermissions" trait from this package, we need to know which
        //  * table should be used to retrieve your permissions. We have chosen a basic
        //  * default value but you may easily change it to any table you like.
        //  */

        // 'permissions' => 'permissions',

        // /*
        //  * When using the "HasPermissions" trait from this package, we need to know which
        //  * table should be used to retrieve your models permissions. We have chosen a
        //  * basic default value but you may easily change it to any table you like.
        //  */

        // 'model_has_permissions' => 'model_has_permissions',

        // /*
        //  * When using the "HasRoles" trait from this package, we need to know which
        //  * table should be used to retrieve your models roles. We have chosen a
        //  * basic default value but you may easily change it to any table you like.
        //  */

        // 'model_has_roles' => 'model_has_roles',

        // /*
        //  * When using the "HasRoles" trait from this package, we need to know which
        //  * table should be used to retrieve your roles permissions. We have chosen a
        //  * basic default value but you may easily change it to any table you like.
        //  */

        // 'role_has_permissions' => 'role_has_permissions',
    ],

    'column_names' => [

        /*
         * Change this if you want to name the related model primary key other than
         * `model_id`.
         *
         * For example, this would be nice if your primary keys are all UUIDs. In
         * that case, name this `model_uuid`.
         */

        'model_morph_key' => 'model_id',
    ],

];
