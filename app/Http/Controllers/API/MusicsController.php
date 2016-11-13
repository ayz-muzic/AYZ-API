<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class MusicsController extends Controller
{
    public function genres()
    {
        $genres = [
            '1' => 'Ардын уламжлалт',
            '2' => 'Хип Хоп',
            '3' => 'Жазз',
            '4' => 'Рок Поп',
            '5' => 'R&B',
            '6' => 'Алтернатив',
            '7' => 'Электро'
        ];

        return $genres;
    }

    public function artists()
    {
        $artists = [
            '1' => [
                'name'  => 'Tupac Shakur',
                'about' => 'Tupac Amaru Shakur born Lesane Parish Crooks; June 16, 1971 – September 13, 1996), also known by his stage names 2Pac and Makaveli, was an American rapper, record producer, and actor. As of 2007, Shakur has sold over 75 million records worldwide.',
                'genre' => 2
            ],
            '2' => [
                'name'  => 'Haranga',
                'about' => 'Харанга нь Монголын рок хамтлаг юм. Хамтлагийн гишүүд 1977 онд Ардын Армид татагдан танилцаж "Соёмбо" хамтлагт хамт тоглох болсон. Үүнээс хойш 10 гаран жил хамтдаа тоглож байгаад цэргээс халагдаж 1989 онд Драмын театрын дэргэд "Харанга" хамтлагийг байгуулжээ. 2016 онд "Алдрын Од" шагналыг хүртсэн юм.',
                'genre' => 4
            ],
            '3' => [
                'name'  => 'Намжилын Норовбанзад',
                'about' => 'Намжилын Норовбанзад (1931 - 2002 оны 12 сарын 21) нь Дундговь аймгийн Дэрэн сумын уугуул, Монгол улсын хөдөлмөрийн баатар, Ардын жүжигчин цолтой уртын дуучин юм. Тэрээр 1957 онд Дэлхийн оюутан залуучуудын их наадмаас алтан медаль хүртэж байсан. 1993 онд Фүкүокагийн "Азийн соёлын шагнал"-ыг хүртсэн.',
                'genre' => 1
            ],
        ];

        return $artists;
    }

    public function musicList(Request $request)
    {
        $musics = [
            '1' => [
                'name'   => 'Уяхан замбуу тивийн наран',
                'artist' => 'Норовбанзад',
                'genre'  => 1
            ],
            '2' => [
                'name'   => 'Жаахан шарга',
                'artist' => 'Норовбанзад',
                'genre'  => 1
            ],
            '3' => [
                'name'   => 'Эргэх учрал',
                'artist' => 'Харанга',
                'genre'  => 4
            ],
            '4' => [
                'name'   => 'Амьдрал',
                'artist' => 'Харанга',
                'genre'  => 4
            ],
            '5' => [
                'name'   => 'Life Goes On',
                'artist' => 'Tupac Shakur',
                'genre'  => 2
            ],
            '6' => [
                'name'   => 'Tupac Keep Ya Head Up',
                'artist' => 'Tupac Shakur',
                'genre'  => 2
            ]
        ];

        return $musics;
    }

    public function getMusic($id)
    {
        $musics = [
            '1' => 'Norovbanzad-Jaahan_sharga.mp3',
            '2' => 'Norovbanzed-Uyhan_zambuu_tiviin_naran.mp3',
            '3' => 'Haranga-Ergeh_uchral.mp3',
            '4' => 'Haranga-Zuudendee_bi.mp3',
            '5' => '2pac-Life_goes_on.mp3',
            '6' => 'Tupac-Keep_ya_head_up.mp3'
        ];

        $file = Storage::get('musics/'.$musics[$id]);
        return (new Response($file, 200))->header('Content-Type', '');
    }

    public function getLyric($id)
    {
        $lyrics = [
            '1' => 'Жаахан шаргын шогшоонд нь|Томоо нь муухай даслаа даа|Жаахан түүнийхээ аашинд нь|Сэтгэл муухай гунихарлаа|Хоёр морьтой гарлаа даа|Хонгорын ширээг дамжлаа даа',
            '2' => 'Зээ, уяхан замбуу тивийн наран нь|Энэхэн бүх дэлхий даяхнаараа|Мөхдөлгүй мандсаар байдаг л билүү зээ, та мину зээ|Уяхан замбуу тивийн наран|Жаа, Энэ сайхан замбуу тивийн наран|Илхэн бүхий дэлхий дээгүүр|Мөхдөлгүй дэлгэрч түгэн|Мандаж мандсаар байдаг л билүү зээ, та мину зээ|Жаа, Тэр лугаа адил',
            '3' => 'Эргэх учрал дууны үг',
            '4' => 'Баяр хөөр гомдол гуниг адил тэнцүү хосолсон хорвоод..',
            '5' => 'Life Goes on...',
            '6' => 'Keep Ya Head Up!!!...'
        ];

        return ['lyric' => $lyrics[$id]];
    }

}
