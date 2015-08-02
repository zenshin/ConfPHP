<?PHP

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class MyAlert extends Facade
{
    protected static function getFacadeAccessor(){return 'alert';}
}
