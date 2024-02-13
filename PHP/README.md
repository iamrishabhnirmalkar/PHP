## Super Global Variables

In PHP, superglobal variables are predefined variables that are always accessible, regardless of the scope of the script. They are available in all scopes throughout a script, including functions, classes, and even included files.

Here are some commonly used superglobal variables in PHP:

$_GET: Contains variables passed to the current script via URL parameters (HTTP GET method).
$\_POST: Contains variables passed to the current script via HTTP POST method when submitting a form.
$_REQUEST: Contains variables passed to the current script via both GET and POST methods, as well as cookies.
$\_SERVER: Contains information about the server and execution environment.
$\_SESSION: Contains session variables available to the current script.
$\_COOKIE: Contains variables passed to the current script via HTTP cookies.
$_FILES: Contains information about uploaded files via HTTP POST method.
$\_ENV: Contains environment variables.

## Die&Exit

In PHP, both die() and exit() functions are used to immediately terminate the execution of a script. They are often used interchangeably for the same purpose.

# die()

The die() function is a language construct in PHP that is used to end script execution. It displays a message and terminates the script at the point where die() is called.

die(string $message = '');

# exit()

The exit() function is identical to die() in its functionality. It also terminates the execution of the script immediately.

exit(string $message = '');

# Common Usage

Both die() and exit() are commonly used in situations where you want to stop script execution based on certain conditions, display an error message, or handle exceptional cases.
