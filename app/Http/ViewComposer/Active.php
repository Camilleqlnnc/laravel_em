<?php namespace App\Http\ViewComposer;

use Illuminate\Http\Request;

class Active
{
    protected $request;
    protected $className;

    public function __construct(Request $request, $className = 'active')
    {
        $this->request = $request;
       // $this->className = 'class="'.$className.'"';
    }

    public function isHome()
    {
        if($this->request->is('/'))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function isCategory($id, $pos=2)
    {
        if($this->request->segment($pos)==$id) return $this->className;
    }

    public function __call($name, $arguments)
    {
        if (count($arguments) !=1 || (strpos($name, 'is')==1)){
            throw new \InvalidArgumentException(sprintf('invalid argument %s', $name));
        }
    }
}