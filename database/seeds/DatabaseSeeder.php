<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryPermissionTableSeeder::class);
        $this->call(CategoryRoadMarkingsTableSeeder::class);
        $this->call(CategorySingsTableSeeder::class);
        $this->call(FaultlistTableSeeder::class);
        $this->call(ItemsPddTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(RoadMarkings2TableSeeder::class);
        $this->call(RoadMarkingsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        
        $this->call(Sings1TableSeeder::class);
        $this->call(Sings2TableSeeder::class);
        $this->call(Sings3TableSeeder::class);
        $this->call(Sings4TableSeeder::class);
        $this->call(Sings5TableSeeder::class);
        $this->call(Sings6TableSeeder::class);
        $this->call(Sings7TableSeeder::class);
        $this->call(Sings8TableSeeder::class);
        $this->call(SubItems10TableSeeder::class);
        $this->call(SubItems11TableSeeder::class);
        $this->call(SubItems12TableSeeder::class);
        $this->call(SubItems13TableSeeder::class);
        $this->call(SubItems14TableSeeder::class);
        $this->call(SubItems15TableSeeder::class);
        $this->call(SubItems16TableSeeder::class);
        $this->call(SubItems17TableSeeder::class);
        $this->call(SubItems18TableSeeder::class);
        $this->call(SubItems19TableSeeder::class);
        
        $this->call(SubItems1TableSeeder::class);
        $this->call(SubItems20TableSeeder::class);
        $this->call(SubItems21TableSeeder::class);
        $this->call(SubItems22TableSeeder::class);
        $this->call(SubItems23TableSeeder::class);
        $this->call(SubItems24TableSeeder::class);
        $this->call(SubItems25TableSeeder::class);
        $this->call(SubItems2TableSeeder::class);
        $this->call(SubItems3TableSeeder::class);
        $this->call(SubItems4TableSeeder::class);
        $this->call(SubItems5TableSeeder::class);
        $this->call(SubItems6TableSeeder::class);
        $this->call(SubItems7TableSeeder::class);
        $this->call(SubItems8TableSeeder::class);
        $this->call(SubItems9TableSeeder::class);

    }
}
