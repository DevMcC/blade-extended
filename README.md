# BladeExtended
Expands the blade functionality of the Laravel framework with additional directives. 



# Installation
Install this package with the following command from the root directory of your project:
```
composer require devmcc/blade-extended
```


## ServiceProvider
After you have required this package and updated composer, add the ServiceProvider to the providers array in app/config.php
```
DevMcC\BladeExtended\ServiceProvider::class,
```



# Contents
The following is a list of directives that this package adds to blade.


## @block
If your project doesn't permit the use of the else statement and it's a struggle to do this with blade without writing some else-in-disguise or some hacky ternary with includes, then the ```@block``` directive might come in handy.  
With this directive, you can define codeblocks, the contents of this block will simply work like everything else, with one exception and that is that you can kill this block with a ```@break```.

```
@block
    @if ($results->isEmpty())
        No results!
        @break
    @endif

    // Showing all results
@endblock
```


## @ifadd
Echoes a string whether the condition is met.

```
@ifadd($iNeedToEcho, 'sanitized output (")')

@ifadd($iNeedToEcho, 'unsanitized output (")', false)
```
