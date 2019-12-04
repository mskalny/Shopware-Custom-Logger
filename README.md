# Shopware Custom Logger

This plugin is an example of basic custom logger for Shopware 5.

It will show you, how to create logger with your own name, and in different location than default.

## Getting Started

All you have to do to make the plugin work, is just installing it in your project.

If you want to use your own log file name, please, overwrite first argument of mskalny.custom_logger service in services.xml. Current name is 'custom_logger'.

In case you need to change file directory or extension, you need to change constants values directly in Services\Logger class, but it isn't recommended.

After installation, you can use this Logger wherever you want, by injecting it to your class, using services.xml. Using global Shopware function isn't recommended.

### Prerequisites

```
Shopware 5
```

### Installing

```
bin/console sw:plugin:refresh
```

```
bin/console sw:plugin:install MskalnyCustomLogger
```

```
bin/console sw:plugin:activate MskalnyCustomLogger
```

## Built With

* [Shopware 5](https://www.shopware.com/)
