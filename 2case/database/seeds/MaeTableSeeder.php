
<?php

use Illuminate\Database\Seeder;

class MaeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
        public function run()
        {
     
            factory(\App\Mae::class,6)->create()->each(function($mae){
                $mae->bebe()->save(factory(\App\Bebe::class)->create()); 
             });
     
             
            $bebes = \App\Bebe::all();
            foreach($bebes as $bebe){
                $medico = factory(\App\Medico::class)->create();
                $medico->bebe()->save($bebe); 
            }
        }
    
    
}
