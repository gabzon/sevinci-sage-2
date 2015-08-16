<?php

function get_source_type($id){
   //echo get_post_meta($id,'source_type_select');
}

function display_book($author,$title,$location,$publisher,$year,$website,$isbn){
   echo '<a href="'.$website.'" target="_blank">';
      echo $title;
   echo '</a><br>';
   echo $author . ", « " . $title . "», " . $location . ", " . $publisher. ", ". $year;
}

function display_chapter(){}

function display_article($author, $title, $publisher, $volume, $number, $year, $pages, $website){
   echo '<a href="'.$website.'" target="_blank">';
      echo $title;
   echo '</a><br>';
   echo $author . ", « " . $title . "», " . $publisher . ", " . $volume. ", " . $number . ", " . $year . "," . $pages;
}

function display_news_article(){}

function display_website($author,$title,$publisher,$year,$website,$date){
   echo '<a href="'.$website.'">';
      echo $title;
   echo '</a><br>';
   echo $author . ", «" . $title ."», " .$publisher . ", " . $year . "<br>";
   echo $website . " (" . __('accessed on ','roots') . $date .")";
}

function display_source($id){
   $source_type = get_post_meta($id,'source_type_select');
   switch ($source_type[0]) {
      case 'BK':
         $book = get_post_meta($id,'source_book_group');
         $author = $book[0]['source_author'];
         $title = $book[0]['source_title'];
         $location = $book[0]['source_publication_location'];
         $publisher = $book[0]['source_publisher'];
         $publication_year = $book[0]['source_publication_year'];
         $website = $book[0]['source_online_source_title'];
         $isbn = $book[0]['source_online_source_title'];
         display_book($author[0],$title[0],$location[0],$publisher[0],$publication_year[0],$website[0],$isbn[0]);
         break;
      case 'CH':
         $chapter = get_post_meta($di,'source_chapter_group');
         $author = get_post_meta($di,'source_author');
         $title = get_post_meta($di,'source_title');
         $location = get_post_meta($di,'');
         $publisher = get_post_meta($di,'');
         $year = get_post_meta($di,'');
         $pages = get_post_meta($di,'');
         $website = get_post_meta($di,'');
         echo '<pre>';
         print_r($chapter);
         echo '</pre>';
         display_chapter();
         break;
      case 'AR':
         $article = get_post_meta($di,'source_article_group');
         $author = $article[0]['source_author'];
         $title = $article[0]['source_title'];
         $publisher = $article[0]['source_author'];
         $volume = $article[0]['source_author'];
         $number = $article[0]['source_author'];
         $year = $article[0]['source_author'];
         $pages = $article[0]['source_author'];
         $website = $article[0]['source_author'];
         display_article($author[0], $title[0], $publisher[0], $volume[0], $number[0], $year[0], $pages[0], $website[0]);
         break;
      case 'NA':
         $news_article = get_post_meta($di,'source_news_article_group');
         //display_news_article();
         break;
      case 'ON':
         $online_source = get_post_meta($id,'source_online_source_group');
         $author = $online_source[0]['source_author'];
         $title = $online_source[0]['source_title'];
         $publisher = $online_source[0]['source_publisher'];
         $year = $online_source[0]['source_publication_year'];
         $website = $online_source[0]['source_online_source_title'];
         $visited = $online_source[0]['source_online_source_visitation'];
         display_website($author[0],$title[0],$publisher[0],$year[0],$website[0],$visited[0]);
         break;
   }
}

//
// Citer ses sources
//
// Chapitres ou parties tirés d’un livre :
// •	Nom, Prénom, « Titre du chapitre », in Nom de famille, prénom (de l’auteur ou éditeur du livre), Titre du livre, lieu de publication : maison d’édition, année de parution, pages.
// •	Exemple :
// o	Godet, François, « La Politique Suisse en matière d’exportation de matériel de guerre », in Riklin, Alois; Haug, Hans; Probst, Raymond (ed.), Neues Handbuch der schweizerischen Aussenpolitik, Bern, Stuttgart, Wien: Verlag Paul Haupt, 1992, pp. 973-987.
//
// Articles :
// •	Nom, Prénom, « Titre de l’article », in Titre de la revue, volume, numéro, année, pages.
// •	Exemple :
// o	Ganser, Daniele, “The British Secret Service in Neutral Switzerland: An Unfinished Debate on NATO’s Cold War Stay-behind Armies”, in Intelligence & National Security, Vol. 20, No. 4, December 2005, pp. 553-580.
//
// Articles de presse:
// •	Nom, Prénom, « Titre de l’article », in Titre du journal, numéro, date, pages.
// •	Exemple :
// o	Elsener, R., „Keine Einigung im Sicherheitsrat“, in Neue Zürcher Zeitung, Nr. 194, 21.08.2008, p. 3.
