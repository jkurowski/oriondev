<?php

namespace App\Helpers;

class PropertyAreaTypes {
    const ROOM_APARTMENT = 1;
    const STORAGE = 2;
    const PARKING = 3;
    const GARDEN = 4;
    const SHOP = 5;
    const PARKING_STORAGE = 6;
    const PARKING_SURFACE = 7;

    // === DZIAŁKI / GRUNTY ===
    const BUILDING_PLOT = 8;        // działka_budowlana
    const RECREATIONAL_PLOT = 9;    // działka_rekreacyjna
    const INVESTMENT_PLOT = 10;     // działka_inwestycyjna
    const AGRICULTURAL_LAND = 11;   // grunt_rolny
    const FOREST_LAND = 12;         // grunt_leśny
    const INDUSTRIAL_LAND = 13;     // grunt_przemysłowy
    const SERVICE_LAND = 14;        // grunt_usługowy

    private const STATUS_MAP = [
        self::ROOM_APARTMENT => 'Mieszkanie / Apartament',
        self::STORAGE => 'Komórka lokatorska',
        self::PARKING => 'Miejsce parkingowe w garażu',
        self::PARKING_SURFACE => 'Miejsce parkingowe naziemne',
        self::GARDEN => 'Ogródek',
        self::SHOP => 'Dom',
        self::PARKING_STORAGE => 'Miejsce parkingowe z komórką lokatorską',

        // === DZIAŁKI / GRUNTY ===
        self::BUILDING_PLOT => 'Działka budowlana',
        self::RECREATIONAL_PLOT => 'Działka rekreacyjna',
        self::INVESTMENT_PLOT => 'Działka inwestycyjna',
        self::AGRICULTURAL_LAND => 'Grunt rolny',
        self::FOREST_LAND => 'Grunt leśny',
        self::INDUSTRIAL_LAND => 'Grunt przemysłowy',
        self::SERVICE_LAND => 'Grunt usługowy',
    ];

    public static function getStatusText(int $statusValue): ?string
    {
        return self::STATUS_MAP[$statusValue] ?? null;
    }

    public static function getAll(): array
    {
        return self::STATUS_MAP;
    }

    public static function getOthers(): array
    {
        return array_intersect_key(self::STATUS_MAP, [
            self::STORAGE => true,
            self::PARKING => true,
            self::PARKING_SURFACE => true,
            self::GARDEN => true,
            self::PARKING_STORAGE => true,
        ]);
    }

    // 🔹 Opcjonalnie: tylko działki / grunty
    public static function getLandTypes(): array
    {
        return array_intersect_key(self::STATUS_MAP, [
            self::BUILDING_PLOT => true,
            self::RECREATIONAL_PLOT => true,
            self::INVESTMENT_PLOT => true,
            self::AGRICULTURAL_LAND => true,
            self::FOREST_LAND => true,
            self::INDUSTRIAL_LAND => true,
            self::SERVICE_LAND => true,
        ]);
    }
}
