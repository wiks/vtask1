<?php

/*
 * Zadanie 1
 * ---------
 * a. Stwórz klasę abstrakcyjną Model. Zaimplementuj w niej właściwość typu string table,
 * właściwość typu array fillable. Stwórz w tej klasie gettery i settery do obu tych właściwości.
 * b. Stwórz klasę Article, która będzie dziedziczyć po klasie Model. W klasie Article stwórz
 * publiczną metodę, która będzie zwracała napis „Tabela {nazwa tabeli}”. W miejsce {nazwa
 * tabeli} użyj gettera do właściwości table z klasy rodzica, która uzupełni napis o nazwę tabeli
 * danego modelu. Wszystko wedle standardów PHP7, więc z typowaniem zmiennych.
 * c. W klasie Article zaimplementuj dwie właściwości prywatne: array tags oraz string category.
 */

declare(strict_types=1);

require 'Model.class.php';

/**
 * b. Stwórz klasę Article, która będzie dziedziczyć po klasie Model. W klasie Article stwórz
 * publiczną metodę, która będzie zwracała napis „Tabela {nazwa tabeli}”. W miejsce {nazwa
 * tabeli} użyj gettera do właściwości table z klasy rodzica, która uzupełni napis o nazwę tabeli
 * danego modelu. Wszystko wedle standardów PHP7, więc z typowaniem zmiennych.
 * c. W klasie Article zaimplementuj dwie właściwości prywatne: array tags oraz string category.
 * @author wiks
 */
class Article extends Model
{
    
    /** @var array $tags */
    private $tags; 
    
    /** @var string $category */
    private $category; 
    
    /** 
     * W klasie Article stwórz
     * publiczną metodę, która będzie zwracała napis „Tabela {nazwa tabeli}”. W miejsce {nazwa
     * tabeli} użyj gettera do właściwości table z klasy rodzica, która uzupełni napis o nazwę tabeli
     * danego modelu
     */
    public function tabela(): string
    {
        return "Tabela ".$this->getTable();
    }
}
