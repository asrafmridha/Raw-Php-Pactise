<?php
// interface segregation 

// This is not interface segregation 

// interface Vehicle{
//     function hasTwoTires();
//     function hasFourTires();
//     function hasSixTires();
//     function isDiselCompatible();
//     function isPetrolCompatible();
//     function getMileage();
// }

// ছোট ছোট ইন্টারফেস যেটুকু দরকার এরকম মাল্টিপুল ইন্টারফেস বানানো উচিত..

interface Vehicle
{

    function getName();
    function getPrice();
    function getMileage();
}

interface TwoWheelers
{
}

interface FourWheelers
{
}
interface SixWheelers
{
}

class Motorcycle implements Vehicle, TwoWheelers
{
    function getName(){}
    function getPrice(){}
    function getMileage(){}
}


class Truck implements Vehicle,FourWheelers
{
    function getName(){}
    function getPrice(){}
    function getMileage(){}
}
