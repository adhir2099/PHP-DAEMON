![PHP](https://img.shields.io/badge/php-8-brightgreen)

# PHP DAEMON
Need to run a PHP “service” or script in the background? Send out emails, free memory, or monitor something? An easy alternative way to do all of those things is a PHP daemon directly executed on CMD/CLI.

# Config parameters
Run in the command line –> php fileName.PHP

If you have issue running the php command, add php to your path on system environment variables.

If you want the script to run infinitely:

```php
    while (true) { /* DO SOMETHING */ sleep(1); }
```
Wait 5s between cycles, here you can edit the time the script has to be executed <b>if the script is enabled to run infinitely</b>.

```php
    define("CYCLE_PAUSE", 5);
```

Here is the basic use:

```php
// include CMD/CLI script, if not included this wont work by CMD/CLI
require "cli.php";
// pause between cycles
define("CYCLE_PAUSE", 5);
// do something code
while (true) {
  echo "PHP rules!" . PHP_EOL;
  sleep(CYCLE_PAUSE);
}
```

## Contributing

1. Fork it!
2. Create your feature branch: `git checkout -b your-branch`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin your-branch`
5. Submit a PR

## Creator
* <a href="https://github.com/adhirsaurio">Yomerengues</a>

## Maintenance
![Maintenance](https://img.shields.io/badge/Maintenance-Yes-brightgreen)