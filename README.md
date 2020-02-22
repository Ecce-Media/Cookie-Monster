# GDPR Cookie Monster plugin for Craft CMS 3.x

A Craft CMS plugin the unleashes a monster that eats cookies for GDPR

![Screenshot](resources/img/plugin-logo.png)

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require ecce-media/gdpr-cookie-monster

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for hello world.

## GDPR Cookie Monster Overview

-Insert text here-

## Configuring GDPR Cookie Monster

-Insert text here-

## Using GDPR Cookie Monster

-Insert text here-

## GDPR Cookie Monster Roadmap

Some things to do, and ideas for potential features:

* Release it

Brought to you by [ecce](https://ecce.uk)

## Testing

Testing is provided by codeception to run it:

    composer test
    

## Developing the Plugin

You will need docker and docker compose to be able to run the plugin in development mode.

First create an `.env` file from the `.env.example` file then run:

    docker-compose run web php craft setup
    
once all the steps are complete you can start docker to access the craft installation:

    docker-compose up

Login with your details and goto settings->plugins to enable the plugin.  
