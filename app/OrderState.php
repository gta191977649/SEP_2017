<?php
namespace App;
class OrderState
{
    const ORDER_COMFIRMED = 1;
    const ORDER_SHOPCOMFIRMED = 2;
    const ORDER_INDELIVER = 3;
    const ORDER_FINISHED = 4;
    const ORDER_CANCELED = 5;
    const ORDER_CANCELEDBYSELLER = 6;
}

