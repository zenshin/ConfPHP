<?PHP

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class MyHtml extends Facade
{
    protected static function getFacadeAccessor(){return 'myHtml';}
}