func-proc
=========

Process handling functions for executing commands with BASH

Usage
----
```php
$out = run('whoami'); //returns root
```

Reference
----

### run($cmd,&$return=null)
  * $cmd		The command to be ran: slashes are automatically escaped
  * $return		Passed as a reference to store the commands exit code
Returns the full output of the command as a string

