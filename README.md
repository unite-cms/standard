unite cms - standard installation
=========

## General project info and development

This is just the standard configuration of unite cms. **Please see [github.com/unite-cms/unite-cms](https://github.com/unite-cms/unite-cms) for more information.**

## Start a new project 

    composer create-project unite-cms/standard u --stability dev

    # Now create the databse schema.
    bin/console doctrine:schema:update --force

To get started create your first organization and a platform admin user:

    bin/console united:organization:create
    
    bin/console united:user:create 
    
If you want to use the PHP development server execute: 

    bin/console serve:run

To run unite cms content in production mode, execute:

    bin/console assets:install --env=prod
    bin/console doctrine:schema:update --force --env=prod
    bin/console cache:clear --env=prod    