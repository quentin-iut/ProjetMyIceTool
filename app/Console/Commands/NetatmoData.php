<?php

namespace App\Console\Commands;

require_once __DIR__.'/../../Netatmo/autoload.php';

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

use Netatmo\Clients\NAWSApiClient;
use Netatmo\Exceptions\NAClientException;

use App\Releve;
use App\Zone;

class NetatmoData extends Command {
    /**
     * The name and signature of the console command.
     * @var string
     */
    protected $signature = 'NetatmoData:setData';

    public function getTempVille($lat_ne,$lon_ne,$lat_sw,$lon_sw) {
        $config = array(
                    "client_id" => "5ab22ef62b2b46e43a8b5f94",
                    "client_secret" => "SAdyEUn0AbJJK0lIyhU3Rj3J0UNeVT",
                    "username" => "yannick.bezes@gmail.com",
                    "password" => "oz]9K20DmK{;",
                    "scope" => "read_station read_thermostat"
                );
        $client = new NAWSApiClient($config);
        // Récupération du token
        $tokens = $client->getAccessToken();
        $data = json_decode(file_get_contents("https://api.netatmo.com/api/getpublicdata?access_token=". $tokens['access_token'] . "&lat_ne=" . $lat_ne . "&lon_ne=" . $lon_ne . "&lat_sw=" . $lat_sw . "&lon_sw=" . $lon_sw), true);

		$temp = 0;
		for ($i=0; $i < count($data['body']); $i++) {
			if(count($data['body'][$i]['measures']) >= 2) {
                $measures = array_shift($data['body'][$i]['measures']);
                if(array_key_exists('type', $measures)) {
                    if($measures['type'][0] === "temperature") {
                        $temp += array_shift($measures['res'])[0];
                    }
                }
			}
		}
		$temp =  $temp / count($data['body']);
        return $temp;
    }

    /**
     * The console command description.
     * @var string
     */
    protected $description = 'Met à jour les temperatures des différentes cascades grâce à l\'API Netatmo';

    /**
     * Create a new command instance.
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     * @return mixed
     */
    public function handle() {
        $listeZone = Zone::all();
        foreach ($listeZone as $zone) {
            //recup temperature
            $temperature = $this->getTempVille($zone->latNE,$zone->lngNE,$zone->latSW,$zone->lngSW);
            //algo dangerosite
            $niveau = 0; // gris
            switch ($temperature) {
                case $temperature<0:
                    $niveau = 1; //vert
                    break;
                case $temperature>5:
                    $niveau = 3; //rouge
                    break;
                default:
                    $niveau = 2; //orange
                    break;
            }
            //insertion
            DB::table('releves')->insert([
                'date' => date('Y-m-d H:i:s'),
                'temperature_moyenne' => $temperature,
                'niveau_danger' => $niveau,
                'zone_id' => $zone->id
                ]
            );

            //suppression des releves supperieurs à 3 jours
            $listeReleve = Releve::where('zone_id', $zone->id)->orderBy('date', 'ASC')->get();
            $nombreReleves = count($listeReleve);
            if ($nombreReleves > 36) { // car 1 releve toutes les 2h
                for($i=0; $nombreReleves > 36; $i++) {
                    DB::table('releves')->where('id', $listeReleve[$i]->id)->delete();
                    $nombreReleves--;
                }
            }
        }
    }
}