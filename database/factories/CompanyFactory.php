<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>"ООО NANO  IT GROUP",
            'email'=>'admin@srv.uz',
            'address'=> "НАКШБАНДИ, GEOFIZIKA MFY SHARQ  KO`CHASI",
            'phone'=>998914446827,
            'inn'=>305705731,
            'head_nm'=>'ЮЛДАШЕВ ИЗАТУЛЛО ЮНУСОВИЧ',
            'head_tin'=>451612087,
            'province_id'=>3,
            'region_id'=>16,
        ];
    }
}
