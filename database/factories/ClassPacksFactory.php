<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ClassPack;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
$dummy_arr = [
    [            
        "pack_id"=>"20c59fd5-d327-4540-bee4-ec2f0ca4d3fa",
        "disp_order"=>1,
        "pack_name"=>"Single Class",
        "pack_description"=>"Single Class desc",
        "pack_type"=>"non_shareable",
        "total_credit"=>1,
        "tag_name"=>null,
        "validity_month"=>0,
        "pack_price"=>32.1,
        "newbie_first_attend"=>true,
        "newbie_addition_credit"=>0,
        "newbie_note"=>"Newbie can attend a class and pay later",
        "pack_alias"=>"single-pack",
        "estimate_price"=>32.1,
        "mem_tier"=>"newbie"
    ],
    [            
        "pack_id"=>"20c59fd5-d327-4540-bee4-6a2f0ca4d3ee",
        "disp_order"=>2,
        "pack_name"=>"20 Class Pack",
        "pack_description"=>"20 Class Pack desc",
        "pack_type"=>"non_shareable",
        "total_credit"=>10,
        "tag_name"=>"Popular",
        "validity_month"=>3,
        "pack_price"=>235.4,
        "newbie_first_attend"=>false,
        "newbie_addition_credit"=> 1,
        "newbie_note"=>"Newbie get an additional Free class",
        "pack_alias"=>"pack-20",
        "estimate_price"=> 23.54,
        "mem_tier"=>"newbie"
    ],
    [
        "pack_id"=>"20c59fd5-d327-4540-bee4-6a2f0ca4d3fa",
        "disp_order"=>3,
        "pack_name"=>"10 Class Pack",
        "pack_description"=>"10 Class Pack desc",
        "pack_type"=>"non_shareable",
        "total_credit"=>10,
        "tag_name"=>"Limited",
        "validity_month"=> 3,
        "pack_price"=>235.4,
        "newbie_first_attend"=>false,
        "newbie_addition_credit"=> 1,
        "newbie_note"=>"Newbie get an additional Free class",
        "pack_alias"=>"pack-10",
        "estimate_price"=>23.54,
        "mem_tier"=>"newbie"
    ],
    [
        "pack_id"=> "20c59fd5-d327-4540-bee4-6a2f0caad3fa",
        "disp_order"=> 4,
        "pack_name"=> "30 Class Pack",
        "pack_description"=>"30 Class Pack desc",
        "pack_type"=>"non_shareable",
        "total_credit"=>10,
        "tag_name"=>"New",
        "validity_month"=>3,
        "pack_price"=>235.4,
        "newbie_first_attend"=>false,
        "newbie_addition_credit"=>1,
        "newbie_note"=>"Newbie get an additional Free class",
        "pack_alias"=>"pack-30",
        "estimate_price"=>23.54,
        'mem_tier'=>'newbie'
    ],
    [
        "pack_id"=>"20c59fd5-d327-4540-bee4-ec2f0ca4461a",
        "disp_order"=>5,
        "pack_name"=>"50 Share Class",
        "pack_description"=>"50 Share Class desc",
        "pack_type"=>"shareable",
        "total_credit"=>50,
        "tag_name"=>null,
        "validity_month"=>12,
        "pack_price"=>941.6,
        "newbie_first_attend"=>false,
        "newbie_addition_credit"=>0,
        "newbie_note"=>null,
        "pack_alias"=>"share-pack-50",
        "estimate_price"=>18.83,
        'mem_tier'=>'newbie'
    ],
    [            
        "pack_id"=>"20c59fd5-d327-4540-bee4-ec2f0ca44cae",
        "disp_order"=>6,
        "pack_name"=>"Unlimited Class",
        "pack_description"=>"Unlimited Class desc",
        "pack_type"=>"unlimited",
        "total_credit"=>0,
        "tag_name"=>null,
        "validity_month"=>24,
        "pack_price"=>941.6,
        "newbie_first_attend"=>false,
        "newbie_addition_credit"=>0,
        "newbie_note"=>null,
        "pack_alias"=>"unlimited-pack",
        "estimate_price"=>0,
        'mem_tier'=>'newbie'
    ]
];
$getCurrentData = currentDataIndex($dummy_arr);
$factory->define(ClassPack::class, function (Faker $faker) use($getCurrentData) {
   
    $CurrentData = $getCurrentData->current();
    \Log::debug($CurrentData);
    $getCurrentData->next();
    return [
                   
            "pack_id"=>$CurrentData["pack_id"],
            "disp_order"=>$CurrentData["disp_order"],
            "pack_name"=>$CurrentData["pack_name"],
            "pack_description"=>$CurrentData["pack_description"],
            "pack_type"=>$CurrentData["pack_type"],
            "total_credit"=>$CurrentData["total_credit"],
            "tag_name"=>$CurrentData["tag_name"],
            "validity_month"=>$CurrentData["validity_month"],
            "pack_price"=>$CurrentData["pack_price"],
            "newbie_first_attend"=>$CurrentData["newbie_first_attend"],
            "newbie_addition_credit"=>$CurrentData["newbie_addition_credit"],
            "newbie_note"=>$CurrentData["newbie_note"],
            "pack_alias"=>$CurrentData["pack_alias"],
            "estimate_price"=>$CurrentData["estimate_price"],
            "mem_tier"=>"newbie"
       
    ];
});

function currentDataIndex($dummy_arr)
{
    for ($i = 0; $i < 6; $i++) {
        yield $dummy_arr[$i];
    }
    
}


// $autoIncrement = autoIncrement();
// $pack_type = ["non_shareable","shareable","unlimited"];
// $factory->define(ClassPack::class, function (Faker $faker)  use ($autoIncrement,$pack_type){
//     $autoIncrement->next();
//     return [
                    
//             "pack_id"=> Str::uuid()->toString(),
//             "disp_order"=>$autoIncrement->current(),
//             "pack_name"=>$faker->name,
//             "pack_description"=>$faker->text(),
//             "pack_type"=>$faker->randomElement($pack_type),
//             "total_credit"=>rand(0,50),
//             "tag_name"=>null,
//             "validity_month"=>rand(0,24),
//             "pack_price"=>mt_rand(32*10, 1000*10) / 10,
//             "newbie_first_attend"=>$this->faker->boolean(),
//             "newbie_addition_credit"=>$this->faker->boolean(),
//             "newbie_note"=>$faker->text(),
//             "pack_alias"=>"pack-".rand(0,24),
//             "estimate_price"=>32.1,
//             "mem_tier"=>"newbie"
//     ];
    
// });

// function autoIncrement()
// {
//     for ($i = 1; $i < 7; $i++) {
//         yield $i;
//     }
// }
