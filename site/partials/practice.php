<?php
/**
 * Single source of truth for practice contact facts rendered by every template.
 * Every value here is PENDING PRACTICE CONFIRMATION — see docs/PRACTICE_APPROVALS.md (P0 "Office contact facts").
 */
defined('ABSPATH') || exit;
return [
    'name' => 'Raina Dental Care',
    'street' => '2323 Naperville Road',
    'suite' => 'Suite 110',
    'city' => 'Naperville',
    'region' => 'IL',
    'postal' => '60563',
    'phone_display' => '(630) 381-4021',
    'phone_tel' => '+16303814021',
    'directions' => 'https://www.google.com/maps/search/?api=1&query=2323+Naperville+Road+Suite+110+Naperville+IL+60563',
    'facebook' => 'https://www.facebook.com/Raina-Dental-Care-1453073548128969',
    // [label, display, schema.org day codes, opens, closes] — null opens = closed.
    'hours' => [
        ['Monday', 'Noon–6 pm', ['Mo'], '12:00', '18:00'],
        ['Tuesday', '9 am–5 pm', ['Tu'], '09:00', '17:00'],
        ['Wednesday', 'Closed', ['We'], null, null],
        ['Thursday', '9 am–5 pm', ['Th'], '09:00', '17:00'],
        ['Friday', '9 am–5 pm', ['Fr'], '09:00', '17:00'],
        // Weekend hours are not published; keep the previous source wording until the office confirms.
        ['Saturday–Sunday', 'Call for information', ['Sa', 'Su'], null, null],
    ],
    'asset_version' => '2026.11.06-rc2',
];
