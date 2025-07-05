<?php
// Gaperlu bikin property nya secara manual.

class Film
{
    public function __construct(
        public $judul,
        public string $sutradara,
        protected $genre = 'Horror'
    ) {}
}

$film = new Film(judul: 'Avatar', sutradara: 'James Cameron', genre: 'Sci-Fi');
echo $film->sutradara;