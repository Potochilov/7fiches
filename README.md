# 7fiches
7fiches
В этой библиотеке вы сможете наглядно с примерами рассмотреть новые фичи php 7
Для отображения информации по фиче нужно создать екземпляр класа ShowFiche и передать ему строку с желаемой фичей для презентации.
Доступно 6 фич:
 
 * Argon2
 * array_key_first
 * array_key_last
 * Assigning_Union_Operator
 * Arrow_functions
 * is_countable
 
 пример использования:
 
```
declare(strict_types=1);	

require_once __DIR__ . '/vendor/autoload.php';	

$fiche = new \classes\ShowFiche('is_countable');	
echo $fiche->showFiche(); 
```
