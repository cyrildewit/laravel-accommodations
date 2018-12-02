<?php

namespace App\Domain\Listings\Enums;

use BenSampo\Enum\Enum;

final class ListingType extends Enum
{
    const Apartment = 0;
    const BedAndBreakfast = 1;
    const Hotel = 2;
    const HolidayHome = 3;
    const Homestay = 4;
    const GuestHouse = 5;
    const Hostel = 6;
    const Boat = 7;
    const Chalet = 8;
    const HolidayPark = 9;
    const Villa = 10;
    const LuxuryTent = 11;
    const Lodge = 12;
    const Campsite = 13;
    const CountryHouse = 14;
    const Resort = 15;
    const FarmStay = 16;
}
