unite cms - standard installation
=========

## General project info and development

This is just the standard configuration of unite cms. **Please see [github.com/unite-cms/unite-cms](https://github.com/unite-cms/unite-cms) for more information.**

## Start a new project in development mode

This package requires sroze/companienv in dev mode, that will ask you for missing .env variables and automatically 
creates a .env file during installation.

    composer create-project unite-cms/standard unitecms --stability dev
    
    cd unitecms

    # Now create the databse schema.
    bin/console doctrine:schema:update --force

To get started create your first organization and a platform admin user:

    bin/console united:organization:create
    
    bin/console united:user:create 
    
If you want to use the Symfony development server execute: 

    bin/console serve:run
    
## Install unite cms for production

Before installing unite cms for production, make sure that all environment variables, defined in .env.dist are set.

    composer create-project unite-cms/standard unitecms --stability dev --no-dev --no-scripts
    
    cd unitecms
    
    bin/console assets:install --env=prod
    bin/console doctrine:schema:update --force --env=prod
    bin/console cache:clear --env=prod    
