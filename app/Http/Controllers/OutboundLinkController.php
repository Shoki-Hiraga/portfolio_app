<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutboundLinkController extends Controller
{
    public function redirect($key)
    {
        $links = [
            "shisaly" => "https://shisaly.com/",
            "rabostar" => "https://rabostar.com/",            
            'currentmotor' => 'https://www.currentmotor.co.jp/',
            'qshaoh' => 'https://www.qsha-oh.com/',
            'qshaoh_historia' => 'https://www.qsha-oh.com/historia/',
            'garagecurrent' => 'https://www.garagecurrent.com/',
            'directgarage' => 'https://direct.garagecurrent.com/',
            'campgarage' => 'https://camp.garagecurrent.com/',
            'campgarage_media' => 'https://camp.garagecurrent.com/article/',
            'currenttech' => 'https://www.currenttechcenter.com/',
            'euroauto' => 'https://www.euroauto.jp/',
            'icin' => 'https://www.icin.jp/',
            'drimportcar' => 'https://www.drimportcar.com/',
            'sportscarlab' => 'https://www.sportscar-lab.com/kaitori/',
            'gaishaoh' => 'https://www.gaisha-oh.com/',
        ];

        if (!isset($links[$key])) {
            abort(404);
        }

        $url = $links[$key];
        return redirect()->away($url)->withHeaders([
            'Referrer-Policy' => 'no-referrer',
        ]);
        
    }
}
