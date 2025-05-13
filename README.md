### Deployment Instructions

1. Make sure you have the Cloud Foundry CLI installed and you're logged in:
   ```
   cf login -a API_ENDPOINT -u USERNAME -p PASSWORD -o ORGANIZATION -s SPACE
   ```

2. Navigate to your project directory:
   ```
   cd path/to/my-cf-php-app
   ```

3. Deploy your application:
   ```
   cf push
   ```

4. Check the status of your app:
   ```
   cf apps
   ```

### PHP Buildpack Specifics

The PHP buildpack in Cloud Foundry:
- Uses Apache by default (you can also configure it to use Nginx)
- Automatically processes the composer.json file to install dependencies
- Runs on a default document root of `htdocs` (but this is configurable)

### Advanced Configuration Options

To configure the PHP buildpack more extensively, you can add these to your manifest.yml:

```yaml
  env:
    BP_PHP_VERSION: 8.0                  # PHP version
    BP_PHP_SERVER: nginx                 # Use Nginx instead of Apache
    BP_PHP_WEB_DIR: public               # Custom document root
    COMPOSER_VENDOR_DIR: vendor          # Custom vendor directory
    BP_PHP_EXTRA_CONFIG_TEMPLATE: nginx-custom.conf  # Custom Nginx config
```

### Troubleshooting

If your deployment fails, check the logs:
```
cf logs my-php-app --recent
```

Common issues with PHP apps:
- Composer dependencies failing to install
- PHP version compatibility issues
- Apache/Nginx configuration problems