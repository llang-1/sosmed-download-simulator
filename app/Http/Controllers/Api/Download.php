<?php 

namespace App\Http\Controllers\Api;
use Faker\Factory as Faker;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Download extends Controller{
    
    public $link;
    public $faker;
    public $nameUser;

    public function __construct(Request $request) {
        $this->faker = Faker::create('id_ID');
        $this->link = $request->query('url');
        $this->nameUser = $this->faker->name();
        
    }

    public function apiDownload() {
        $validate = $this->validateQuery();
        if ($validate) return $validate;
        return response()->json([
            'status' => 200,
            'url_download' => $this->link . '/downloaded',
            'name_account' => $this->nameUser 
        ], 200, [], JSON_PRETTY_PRINT);
    }

    public function validateQuery() {
        if (!$this->link) {
            return response()->json([
                'status' => 403,
                'message' => 'please insert url query!'
            ], 403, [], JSON_PRETTY_PRINT);
        }

        return null;
    }
}