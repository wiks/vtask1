<!DOCTYPE html>
<?php

require 'Article.class.php';

?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Task1</title>
    </head>
    <body>
        
        <h3>Zadanie 1</h3>
        <p>
            <ol type="a">
                
 <li>Stwórz klasę abstrakcyjną Model. Zaimplementuj w niej właściwość typu string table,
     właściwość typu array fillable. Stwórz w tej klasie gettery i settery do obu tych właściwości.</li>
 
 <li>Stwórz klasę Article, która będzie dziedziczyć po klasie Model. W klasie Article stwórz
 publiczną metodę, która będzie zwracała napis „Tabela {nazwa tabeli}”. W miejsce {nazwa
 tabeli} użyj gettera do właściwości table z klasy rodzica, która uzupełni napis o nazwę tabeli
 danego modelu. Wszystko wedle standardów PHP7, więc z typowaniem zmiennych.</li>
 
 <li>W klasie Article zaimplementuj dwie właściwości prywatne: array tags oraz string category.</li>
            </ol>
        </p>
        
        <?php
        $classes_totest_list = [
            'Article', 'Model', 
        ];
        foreach ($classes_totest_list as $class_totest) {
            if (!class_exists($class_totest)) {
                die("błąd krytyczny: klasa '$class_totest' nie istnieje");
            }
            else{
                echo "klasa '$class_totest' istnieje<br>";
            }
        }
        
        echo 'utworzyłem obiekt Article --> $a, sprawdzam jego metody:<br>';
        $a = new Article();
     
//        var_dump(get_class_methods('Article'));
//        echo '<br>';
        $article_method_totest_list = [
            'tabela', 
            "getTable", "setTable", "getFillable", "setFillable",
        ];
        foreach ($article_method_totest_list as $method_totest) {
            if (!method_exists($a, $method_totest)) {
                die("błąd krytyczny: metoda '$method_totest' nie istnieje w obiekcie ".'$a');
            }
            else{
                echo "metoda '$method_totest' istnieje<br>";
            }
        }
?>
        <p>
            Sprawdzam działanie "echo $a->tabela();"<br>
            ale uzyskuję oczywiście błąd:<br>
<br>            
<code>  thrown in /home/wiks/Pulpit/zadd/zad1/Model.class.php on line 32</code><br>
<code>[Fri Jun  7 10:49:05 2019] ::1:42674 [500]: / - Uncaught TypeError: Return value of Model::getTable() must be of the type string, null returned in /home/wiks/Pulpit/zadd/zad1/Model.class.php:32</code><br>
<code>Stack trace:</code><br>
<code>#0 /home/wiks/Pulpit/zadd/zad1/Article.class.php(44): Model->getTable()</code><br>
<code>#1 /home/wiks/Pulpit/zadd/zad1/index.php(63): Article->tabela()</code><br>
<code>#2 {main}</code><br>
<code>  thrown in /home/wiks/Pulpit/zadd/zad1/Model.class.php on line 32</code><br>
<br>  
ponieważ nie zdefiniowałem właściwości 'table'.
    </p>
<?php
    $val_for_table = "jaka";
    $a->setTable($val_for_table);
?>

    <p>
        gdy zdefiniuję tą wartość jako np "<?php echo $a->getTable(); ?>" mam:
    </p>        
        
<?php        
    echo $a->tabela();        
?>
    </body>
</html>
