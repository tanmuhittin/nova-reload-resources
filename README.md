# Laravel Nova Reload Resources Button Card
## Installation
``` composer require tanmuhittin/nova-reload-resources ```

Add to the cards method of the resource

```
use Tanmuhittin\ReloadResources\ReloadResources;

/**
 * Get the cards available for the resource.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return array
 */
public function cards(Request $request)
{
    return [new ReloadResources];
}
```

<img src="http://muhittintan.com/nova-reload-resources.png" alt="nova-reload-resources" />