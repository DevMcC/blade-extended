<?php

namespace DevMcC\BladeExtended;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

/**
 * Class ServiceProvider
 *
 * @author DevMcC <sinbox.c@gmail.com>
 *
 * @package DevMcC\BladeExtended
 */
class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Perform post-0registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        foreach (glob(__DIR__.'/Functions/*.php') as $file) {
            require_once($file);
        }

        Blade::directive('ifadd', function ($expression) {
            return "<?php echo __runIfAdd($expression); ?>";
        });

        Blade::directive('block', function ($expression) {
            return "<?php do { ?>";
        });

        Blade::directive('endblock', function ($expression) {
            return "<?php } while (0); ?>";
        });
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
