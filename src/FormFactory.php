<?php 

namespace Brychtaj;

class FormFactory
{
    protected static function render($type, $class, $name = null, $value = null)
    {
        $Name = ucfirst($name);

        return "
            <label for='$name' class='control-llabel'>$Name</label>
            <div class='form-group'>
                <input type='$type' id='$name' name='$name' placeholder='$value' class='$class'>
            </div>
        ";
    }

    public static function open($action = null, $method = null)
    {
        echo "<form action='$action' method='$method'>";
    }

    public static function close()
    {
        echo "<form>";
    }
}