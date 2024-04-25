<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Product;
use App\Models\Storage;
use App\Models\Allergy;
use App\Models\Contact;
use App\Models\Supplier;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Allergy::insert([
            [
                'name' => 'Gluten',
                'description' => 'Gluten is a protein found in wheat, barley, and rye. It is a common food allergy that causes symptoms like bloating, diarrhea, and stomach pain.',
            ],
            [
                'name' => 'Gelatine',
                'description' => 'Gelatine is a protein derived from animal collagen. It is commonly used as a gelling agent in food products like gummy candies and marshmallows.',
            ],
            [
                'name' => 'AZO-colorants',
                'description' => 'AZO-colorants are synthetic dyes that are commonly used to color food products. Some people may be allergic to these dyes, leading to symptoms like hives and itching.',
            ],
            [
                'name' => 'Lactose',
                'description' => 'Lactose is a sugar found in milk and dairy products. People with lactose intolerance lack the enzyme needed to digest lactose, leading to symptoms like bloating and diarrhea.',
            ],
            [
                'name' => 'Soja',
                'description' => 'Soja is a legume that is commonly used as a meat substitute in vegetarian and vegan diets. It is a common food allergy that can cause symptoms like hives, itching, and swelling.',
            ],
        ]);

        Product::insert([
            [
                'name' => 'Mintnopjes',
                'description' => 'Mintnopjes are a type of hard candy that is flavored with mint. They are a popular treat in the Netherlands and are often enjoyed after a meal.',
                'barcode' => '8713800130001',
            ],
            [
                'name' => 'Schoolkrijt',
                'description' => 'Schoolkrijt is a type of licorice candy that is shaped like a piece of chalk. It has a sweet and salty flavor and is a popular treat in the Netherlands.',
                'barcode' => '8713800130018',
            ],
            [
                'name' => 'Honingdrop',
                'description' => 'Honingdrop is a type of licorice candy that is flavored with honey. It has a sweet and rich taste and is a popular treat in many countries.',
                'barcode' => '8713800130025',
            ],
            [
                'name' => 'Zure Beren',
                'description' => 'Zure Beren are gummy bear candies that have a sour taste. They are coated with a sour sugar layer and are loved by those who enjoy sour candies.',
                'barcode' => '8713800130032',
            ],
            [
                'name' => 'Cola flesjes',
                'description' => 'Cola flesjes are cola-flavored gummy candies that are shaped like small bottles. They have a sweet and fizzy taste, reminiscent of cola drinks.',
                'barcode' => '8713800130049',
            ],
            [
                'name' => 'Turtles',
                'description' => 'Turtles are chocolate candies that are filled with caramel and pecans. They are named after their turtle-like shape and are a popular treat in many countries.',
                'barcode' => '8713800130056',
            ],
            [
                'name' => 'Witte Muizen',
                'description' => 'Witte Muizen are white chocolate candies that are shaped like mice. They have a creamy and sweet taste and are often enjoyed as a fun and whimsical treat.',
                'barcode' => '8713800130063',
            ],
            [
                'name' => 'Reuze Slangen',
                'description' => 'Reuze Slangen are large gummy snake candies that are loved by candy enthusiasts. They have a fruity flavor and are a popular choice for those who enjoy chewy candies.',
                'barcode' => '8713800130070',
            ],
            [
                'name' => 'Zoute Rijen',
                'description' => 'Zoute Rijen are licorice candies that have a salty taste. They are long and thin in shape and are a favorite among licorice lovers.',
                'barcode' => '8713800130087',
            ],
            [
                'name' => 'Winegums',
                'description' => 'Winegums are chewy candies that come in various fruit flavors. They are often shaped like small wine bottles and are a classic treat in many countries.',
                'barcode' => '8713800130094',
            ],
            [
                'name' => 'Drop munten',
                'description' => 'Drop munten are licorice candies that are shaped like coins. They have a strong and distinctive licorice flavor and are a popular choice for licorice enthusiasts.',
                'barcode' => '8713800130100',
            ],
            [
                'name' => 'Kruis Drop',
                'description' => 'Kruis Drop is a type of licorice candy that is shaped like a cross. It has a strong and intense licorice flavor and is a favorite among licorice lovers.',
                'barcode' => '8713800130117',
            ],
            [
                'name' => 'Zoute Ruitjes',
                'description' => 'Zoute Ruitjes are licorice candies that have a salty taste. They are shaped like small diamonds and are a popular choice for those who enjoy salty licorice.',
                'barcode' => '8713800130124',
            ],
            [
                'name' => 'Drop Ninjas',
                'description' => 'Drop Ninjas are licorice candies that are shaped like small ninja figures. They have a strong and intense licorice flavor and are a fun and whimsical treat for licorice enthusiasts.',
                'barcode' => '8713800130131',
            ]
        ]);

        Storage::insert([
            [
                'product_id' => 1,
                'package_unit' => 5,
                'in_storage' => 453,
            ],
            [
                'product_id' => 2,
                'package_unit' => 2.5,
                'in_storage' => 400,
            ],
            [
                'product_id' => 3,
                'package_unit' => 5,
                'in_storage' => 1,
            ],
            [
                'product_id' => 4,
                'package_unit' => 1,
                'in_storage' => 800,
            ],
            [
                'product_id' => 5,
                'package_unit' => 3,
                'in_storage' => 234,
            ],
            [
                'product_id' => 6,
                'package_unit' => 2,
                'in_storage' => 354,
            ],
            [
                'product_id' => 7,
                'package_unit' => 1,
                'in_storage' => 795,
            ],
            [
                'product_id' => 8,
                'package_unit' => 10,
                'in_storage' => 233,
            ],
            [
                'product_id' => 9,
                'package_unit' => 2.5,
                'in_storage' => 123,
            ],
            [
                'product_id' => 10,
                'package_unit' => 3,
                'in_storage' => null,
            ],
            [
                'product_id' => 11,
                'package_unit' => 2,
                'in_storage' => 367,
            ],
            [
                'product_id' => 12,
                'package_unit' => 1,
                'in_storage' => 467,
            ],
            [
                'product_id' => 13,
                'package_unit' => 5,
                'in_storage' => 20,
            ],
            [
                'product_id' => 14,
                'package_unit' => 1,
                'in_storage' => 300,
            ]
        ]);

        Allergy::find(1)->products()->attach([1, 13]);
        Allergy::find(2)->products()->attach([1, 9, 10]);
        Allergy::find(3)->products()->attach([1]);
        Allergy::find(4)->products()->attach([3, 12, 13]);
        Allergy::find(5)->products()->attach([6, 9, 13, 14]);

        Contact::insert([
            [
                'name' => 'Bert van Linge',
                'phone' => '06-12345678',
            ],
            [
                'name' => 'Jasper del Monte',
                'phone' => '06-87654321',
            ],
            [
                'name' => 'Sven Stalman',
                'phone' => '06-23456789',
            ],
            [
                'name' => 'Joyce Stelterberg',
                'phone' => '06-98765432',
            ],
            [
                'name' => 'Remco Veenstra',
                'phone' => '06-34567890',
            ],
            [
                'name' => 'Johan Nooij',
                'phone' => '06-87654321',
            ],
            [
                'name' => 'Hom Ken',
                'phone' => '06-45678901',
            ]
        ]);

        Address::insert([
            [
                'street' => 'Van Gilslaan',
                'number' => '34',
                'zip' => '1045CB',
                'city' => 'Hilvarenbeek',
            ],
            [
                'street' => 'Den Dolderpad',
                'number' => '2',
                'zip' => '1067RC',
                'city' => 'Utrecht',
            ],
            [
                'street' => 'Fredo Raalteweg',
                'number' => '257',
                'zip' => '1236OP',
                'city' => 'Nijmegen',
            ],
            [
                'street' => 'Bertrand Russellhof',
                'number' => '21',
                'zip' => '2034AP',
                'city' => 'Den Haag',
            ],
            [
                'street' => 'Leon van Bonstraat',
                'number' => '213',
                'zip' => '3456GH',
                'city' => 'Lunteren',
            ],
            [
                'street' => 'Bea van Lingenlaan',
                'number' => '234',
                'zip' => '2197FG',
                'city' => 'Sint Pancras',
            ]
        ]);

        Supplier::insert([
            [
                'name' => 'Venco',
                'contact_id' => 1,
                'address_id' => 1,
                'supplier_number' => 'L1029384719',
            ],
            [
                'name' => 'Astra Sweets',
                'contact_id' => 2,
                'address_id' => 2,
                'supplier_number' => 'L1029384720',
            ],
            [
                'name' => 'Haribo',
                'contact_id' => 3,
                'address_id' => 3,
                'supplier_number' => 'L1029384721',
            ],
            [
                'name' => 'Basset',
                'contact_id' => 4,
                'address_id' => 4,
                'supplier_number' => 'L1029384722',
            ],
            [
                'name' => 'De Bron',
                'contact_id' => 5,
                'address_id' => 5,
                'supplier_number' => 'L1029384723',
            ],
            [
                'name' => 'Quality Street',
                'contact_id' => 6,
                'address_id' => 6,
                'supplier_number' => 'L1029384724',
            ],
            [
                'name' => 'Hom Ken Food',
                'contact_id' => 7,
                'address_id' => null,
                'supplier_number' => 'L1029384725',
            ]
        ]);

        DB::table('product_supplier')->insert([
            [
                'supplier_id' => 1,
                'product_id' => 1,
                'last_delivery' => '2023-04-09',
                'amount_deliverd' => 23,
                'next_delivery' => '2023-04-16',
            ],
            [
                'supplier_id' => 1,
                'product_id' => 1,
                'last_delivery' => '2023-04-18',
                'amount_deliverd' => 21,
                'next_delivery' => '2023-04-25',
            ],
            [
                'supplier_id' => 1,
                'product_id' => 2,
                'last_delivery' => '2023-04-09',
                'amount_deliverd' => 12,
                'next_delivery' => '2023-04-16',
            ],
            [
                'supplier_id' => 1,
                'product_id' => 3,
                'last_delivery' => '2023-04-10',
                'amount_deliverd' => 11,
                'next_delivery' => '2023-04-17',
            ],
            [
                'supplier_id' => 2,
                'product_id' => 4,
                'last_delivery' => '2023-04-14',
                'amount_deliverd' => 16,
                'next_delivery' => '2023-04-21',
            ],
            [
                'supplier_id' => 2,
                'product_id' => 4,
                'last_delivery' => '2023-04-21',
                'amount_deliverd' => 23,
                'next_delivery' => '2023-04-28',
            ],
            [
                'supplier_id' => 2,
                'product_id' => 5,
                'last_delivery' => '2023-04-14',
                'amount_deliverd' => 45,
                'next_delivery' => '2023-04-21',
            ],
            [
                'supplier_id' => 2,
                'product_id' => 6,
                'last_delivery' => '2023-04-14',
                'amount_deliverd' => 30,
                'next_delivery' => '2023-04-21',
            ],
            [
                'supplier_id' => 3,
                'product_id' => 7,
                'last_delivery' => '2023-04-12',
                'amount_deliverd' => 12,
                'next_delivery' => '2023-04-19',
            ],
            [
                'supplier_id' => 3,
                'product_id' => 7,
                'last_delivery' => '2023-04-19',
                'amount_deliverd' => 23,
                'next_delivery' => '2023-04-26',
            ],
            [
                'supplier_id' => 3,
                'product_id' => 8,
                'last_delivery' => '2023-04-10',
                'amount_deliverd' => 12,
                'next_delivery' => '2023-04-17',
            ],
            [
                'supplier_id' => 3,
                'product_id' => 9,
                'last_delivery' => '2023-04-11',
                'amount_deliverd' => 1,
                'next_delivery' => '2023-04-18',
            ],
            [
                'supplier_id' => 4,
                'product_id' => 10,
                'last_delivery' => '2023-04-16',
                'amount_deliverd' => 24,
                'next_delivery' => '2023-04-30',
            ],
            [
                'supplier_id' => 5,
                'product_id' => 11,
                'last_delivery' => '2023-04-10',
                'amount_deliverd' => 47,
                'next_delivery' => '2023-04-17',
            ],
            [
                'supplier_id' => 5,
                'product_id' => 11,
                'last_delivery' => '2023-04-19',
                'amount_deliverd' => 60,
                'next_delivery' => '2023-04-26',
            ],
            [
                'supplier_id' => 5,
                'product_id' => 12,
                'last_delivery' => '2023-04-11',
                'amount_deliverd' => 45,
                'next_delivery' => null,
            ],
            [
                'supplier_id' => 5,
                'product_id' => 13,
                'last_delivery' => '2023-04-12',
                'amount_deliverd' => 23,
                'next_delivery' => null,
            ],
            [
                'supplier_id' => 7,
                'product_id' => 14,
                'last_delivery' => '2023-04-14',
                'amount_deliverd' => 20,
                'next_delivery' => null,
            ]
        ]);
    }
}
