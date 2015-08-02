<?PHP

namespace App\Helpers;

class MyAlert

{
    public function message($message,$type)
    {
        return '<p class="alert alert-'.$type.'">'.$message.'</p>';
    }
}