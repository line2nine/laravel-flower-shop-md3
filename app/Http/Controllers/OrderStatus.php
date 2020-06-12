<?php


namespace App\Http\Controllers;


interface OrderStatus
{
    const PENDING = 0;
    const DOING = 1;
    const COMPLETED = 2;
}
