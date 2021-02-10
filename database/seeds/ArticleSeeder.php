<?php

use App\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articleTitles = [
            "Pantai Kuta, Bali", 
            "Gunung Merapi, Yogyakarta",
            "Hutan Wonorejo, Semarang"
        ];

        $articleDescriptions = [
            "Pantai Kuta adalah sebuah tempat pariwisata yang terletak kecamatan Kuta, sebelah selatan Kota Denpasar, Bali, Indonesia. Daerah ini merupakan sebuah tujuan wisata turis mancanegara dan telah menjadi objek wisata andalan Pulau Bali sejak awal tahun 1970-an. Pantai Kuta sering pula disebut sebagai pantai matahari terbenam (sunset beach) sebagai lawan dari pantai Sanur. Selain itu, Lapangan Udara I Gusti Ngurah Rai terletak tidak jauh dari Kuta.",
            "Gunung Merapi (ketinggian puncak 2.930 mdpl, per 2010) (Hanacaraka:ꦒꦸꦤꦸꦁ​ꦩꦼꦫꦥꦶ) adalah gunung berapi di bagian tengah Pulau Jawa dan merupakan salah satu gunung api teraktif di Indonesia. Lereng sisi selatan berada dalam administrasi Kabupaten Sleman, Daerah Istimewa Yogyakarta, dan sisanya berada dalam wilayah Provinsi Jawa Tengah, yaitu Kabupaten Magelang di sisi barat, Kabupaten Boyolali di sisi utara dan timur, serta Kabupaten Klaten di sisi tenggara. Kawasan hutan di sekitar puncaknya menjadi kawasan Taman Nasional Gunung Merapi sejak tahun 2004.",
            "Terletak dekat dengan Bandara Juanda, Mangrove Wonorejo akan menjadi pilihan yang bagus untuk kunjungan singkat ke Semarang. Jauh dari hiruk pikuk kehidupan kota, dengan luas kurang lebih 200 hektar, tempat ini menawarkan suasana yang tenang dan damai dengan pemandangan pepohonan bakau yang memikat. Jalan setapak kayu membawa Anda ke paviliun di dekat dermaga di mana Anda dapat menemukan perahu untuk membawa Anda ke jantung kawasan hutan bakau.

            Anda juga bisa melihat satwa liar, seperti burung yang mengobrol dengan gembira dan kera pemakan kepiting yang bergelantungan di dahan pohon. Selain menikmati panorama, Anda juga bisa belajar cara menanam mangrove."
        ];

        $articleImages = [
            "Beach/kuta.jpg",
            "Mountain/merapi.jpg",
            "Forest/wonorejo.jpg"
        ];

        for ($i = 0; $i < 3; $i++) {
            $article = new Article;
            $article->fill(["title" => $articleTitles[$i],"description" => $articleDescriptions[$i], "image" => $articleImages[$i], "user_id" => 2, "category_id" => $i+1 ]);
            $article->save();
        }
    }
}
