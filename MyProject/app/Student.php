<?php 

namespace App;

class Student 
{
    public function first($username, $password)
    {
        if ($username == "admin" && $password == "123456")
        {
            return new Student();
        }

        return null;
    }
}