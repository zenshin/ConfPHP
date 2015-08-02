<?PHP

namespace App\Helpers;

class Alert

{
    public function message($message,$type)
    {
        return '<p class="alert alert-'.$type.'">'.$message.'</p>';
    }
}