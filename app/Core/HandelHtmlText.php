<?php
namespace App\Core;
class HandelHtmlText
{
    public static function headerTabel()
    {
        return sprintf(
              `<thead>`

        );
    }
    public static  function bodyTable($attribute)
    {
        return sprintf(
            `
              <tr>
                    <th>%s</th>
                </tr>
            `,
            $attribute

        );
    }
}
