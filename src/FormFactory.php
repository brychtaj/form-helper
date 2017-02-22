<?php 

namespace Brychtaj;

class FormFactory
{
    protected static function render($type, $class, $name = null, $value = null)
    {
        return "
            <div class='form-group'>
                <input type='$type' name='$name' value='$value' class='$class'>
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

    public static function label($name, $for = null)
    {
        echo "
            <label for='$for' class='control-llabel'>$name</label>
        ";
    }
}