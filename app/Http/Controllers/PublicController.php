<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function home () {
        return view('welcome');
    }
    
    public function anime () {
        $animes = [
            [
                'title' => "Neon genesis",
                'trama' => "Mega robot che fanno a botte",
                'img' => "/img/anime.jpg"
            ],
            [
                'title' => "Slam dunk",
                'trama' => "Basket liceale",
                'img' => "/img/anime1.jpg"
            ]
        ];
        return view('anime' , compact('animes'));
    }

    public function manga () {
        $mangas = [
            [
                'title' => "Attacco dei giganti",
                'trama' => "Genta chiusa in mura contro giganti",
                'img' => "/img/manga.jpg"
            ],
            [
                'title' => "Dragonball",
                'trama' => "Goku è il migliore",
                'img' => "/img/manga1.jpg"
            ]
        ];   
        return view('manga' , compact('mangas'));
    }

    public function statuette (){

        return view('statuette');
    }

    public function detAnime($title){

        $animes = [
            [
                'title' => "Neon genesis",
                'trama' => "Mega robot che fanno a botte",
                'img' => "/img/anime.jpg"
            ],
            [
                'title' => "Slam dunk",
                'trama' => "Basket liceale",
                'img' => "/img/anime1.jpg"
            ]
        ];

        foreach ($animes as $anime){
            if ($anime['title'] == $title) {
                return view('dettaglioAnime' , compact('anime'));
            }
        }    
        
    }

    public function detManga($title){
        $mangas = [
            [
                'title' => "Attacco dei giganti",
                'trama' => "Genta chiusa in mura contro giganti",
                'img' => "/img/manga.jpg"
            ],
            [
                'title' => "Dragonball",
                'trama' => "Goku è il migliore",
                'img' => "/img/manga1.jpg"
            ]
        ]; 
        
        foreach ($mangas as $manga) { 
            if ($manga ['title'] == $title){
                return view('dettaglioManga' , compact('manga'));
            }
           
        }
    }
}
