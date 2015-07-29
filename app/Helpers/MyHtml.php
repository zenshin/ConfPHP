<?PHP

namespace App\Helpers;

class MyHtml {


    public function radio($name, $args=[], $label=true)
    {
        $attr = '';

        if(!empty($args))
        {
            foreach($args as $name=>$value)
            {
                if($name == 'name')
                {
                    $radioName = $value;
                    continue;
                }
                if($name == 'title')
                {
                    $title = $value;
                    continue;
                }

                if($name == 'id')
                {
                    $id = $value;
                    continue;
                }

                if($name == 'class')
                {
                    $class = $value;
                    continue;
                }

                $attr .=" $name=\"$value\" ";
            }
        }

        if($label)
        {
            $radioName = (isset($radioName))? $radioName :  ucfirst($name);
            $title = (isset($title))? $title :  ucfirst($name);
            $id = (isset($id))? $id : 'id'.mt_rand(10,99);
            $class = (isset($class))? $class : 'class'.mt_rand(10,99);

            return "<label for=\"$id\" class=\"$class\">
                   <input type=\"radio\" name =\"$radioName\" id=\"$id\" $attr >$title
                   </label><br>";
        }
        return "<input type=\"radio\" name =\"$radioName\" id=\"$id\" $args>"; // {!! App::make('myHtml')->radio() !!}
    }

    public function link($title, $href)
    {
        return '<a href="' . $href . '">' . $title . '</a>';
    }

    public function thumb($class, $src, $alt, $href)
    {
        if (!empty($href))
        {
            return '<a href="' . $href . '"><img class="' . $class. '" src="' . asset('assets/images/confs/'.$src.'') . '" alt="' . $alt .'_image"/></a>';
        }
        return '<img class="' . $class . '" src="' . asset('assets/images/confs/'.$src.'') . '" alt="' . $alt . '_image"/>';
    }
}