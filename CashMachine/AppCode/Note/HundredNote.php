<?php
/**
 * Created by PhpStorm.
 * User: Amirali
 * Date: 6/13/2016
 * Time: 10:53 AM
 */

namespace AppCode\Note;


class HundredNote implements INote
{
    public function GetNoteValue()
    {
        return 100;
    }
}