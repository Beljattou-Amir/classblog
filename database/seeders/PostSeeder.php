class PostSeeder extends Seeder 


public function run()
{
    DB::table(table:'post')->insert([
        'title'=>'Mon titre'
        
        ])
}