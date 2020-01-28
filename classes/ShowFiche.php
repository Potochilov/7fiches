<?php
//src: classes/GenerateImage.php
namespace classes;

use classes\GenerateImage;

class ShowFiche {
	private string $fiche;
	public string $showData;
	private string $img;

	public function __construct( $fiche ) {
		$this->fiche = $fiche;
	}

	public function showFiche() {

		if ( $this->fiche === 'Argon2' ) {
			$imgpp          = new GenerateImage( 'Argon2' );
			$this->showData = $imgpp->img;
			$this->showData .= "<div><br><br>Argon2 — это современный простой алгоритм, направленный на высокую скорость заполнения памяти и эффективное использование нескольких вычислительных блоков.</div>";
			$this->showData .= "<div><br><br>Рассмотрим на примере:<br><br></div>";
			$this->showData .= "<code>echo password_hash('rasmuslerdorf', PASSWORD_ARGON2I)</code>";
			$this->showData .= "<div><br><br>Результатом выполнения будет: " . password_hash( 'rasmuslerdorf', PASSWORD_ARGON2I ) . "</div>";

			return $this->showData;
		} else if ( $this->fiche === 'array_key_first' ) {
			$imgpp          = new GenerateImage( 'array_key_first' );
			$this->showData = $imgpp->img;
			$this->showData .= "<div><br><br>В PHP существует 75 различных функций для работы с массивами, но до сих пор не было простого способа получить первый ключ массива без изменения указателя массива или перебора всех ключей (через array_keys()) и затем получения первого значения</div>";
			$this->showData .= "<div><br><br>Теперь у PHP есть <strong>array_key_first</strong></div>";
			$this->showData .= "<div><br><br>Рассмотрим на примере:<br><br></div>";
			$this->showData .= "<code>\$example_arr = ['first_key' => 'firsst_value', 'middle_key' => 'middle_value', 'last_key' => 'last_value']; <br>echo array_key_first(\$example_arr);</code>";

			$example_arr = [
				'first_key'  => 'firsst_value',
				'middle_key' => 'middle_value',
				'last_key'   => 'last_value'
			];

			$this->showData .= "<code>\$example_arr = ['first_key' => 'firsst_value', 'middle_key' => 'middle_value', 'last_key' => 'last_value']; <br>echo array_key_first(\$example_arr);</code>";
			$this->showData .= "<div><br><br>Результатом выполнения будет: " . array_key_first( $example_arr ) . "</div>";

			return $this->showData;
		} else if ( $this->fiche === 'array_key_last' ) {
			$imgpp          = new GenerateImage( 'array_key_last' );
			$this->showData = $imgpp->img;
			$this->showData .= "<div><br><br>В PHP существует 75 различных функций для работы с массивами, но до сих пор не было простого способа получить последний ключ массива без изменения указателя массива или перебора всех ключей (через array_keys()) и затем получения последнего значения</div>";
			$this->showData .= "<div><br><br>Теперь у PHP есть <strong>array_key_last</strong></div>";
			$this->showData .= "<div><br><br>Рассмотрим на примере:<br><br></div>";

			$example_arr = [
				'first_key'  => 'firsst_value',
				'middle_key' => 'middle_value',
				'last_key'   => 'last_value'
			];

			$this->showData .= "<code>\$example_arr = ['first_key' => 'firsst_value', 'middle_key' => 'middle_value', 'last_key' => 'last_value']; <br>echo array_key_last(\$example_arr);</code>";
			$this->showData .= "<div><br><br>Результатом выполнения будет: " . array_key_last( $example_arr ) . "</div>";

			return $this->showData;
		} else if ( $this->fiche === 'Assigning_Union_Operator' ) {
			$imgpp          = new GenerateImage( 'Assigning Union Operator' );
			$this->showData = $imgpp->img;
			$this->showData .= "<div><br><br><h2>Присваивающий оператор объединения с null</h2></div>";
			$this->showData .= "<div><br><br>Вместо такой длинной записи: </div>";
			$this->showData .= "<div><br<code>\$data = \$data ?? new DateTime();</code></div>";
			$this->showData .= "<div><br><br>Теперь можно будет написать так: </div>";
			$this->showData .= "<div><br<code>\$data ??= new DateTime();</code></div>";
			$this->showData .= "<div><br><br>Рассмотрим на примере:<br><br></div>";
			$this->showData .= "<code>\$data = new DateTime();<br>\$data ??= new DateTime();<br>echo \$data;</code>";
			$data           = "true";
			$data           ??= "true";
			$this->showData .= "<div><br><br>Результатом данного примера будет: $data</div>";

			return $this->showData;
		} else if ( $this->fiche === 'Arrow_functions' ) {
			$imgpp          = new GenerateImage( 'Arrow functions' );
			$this->showData = $imgpp->img;
			$this->showData .= "<div><br><br><h2>Стрелочные функции</h2></div>";
			$this->showData .= "<div>Стрелочные функции позволяют делать более короткую запись анонимных функций.</div>";
			$this->showData .= "<div>Синтаксис: fn(список_параметров) => возвращаемое_выражение</div>";
			$this->showData .= "<div>Они могут получить доступ к parent области, таким образом, нет необходимости использовать ключевое слово use.</div>";
			$this->showData .= "<div>\$this тоже доступна, как и в обычных анонимных функциях.</div>";
			$this->showData .= "<div><br><br>Рассмотрим на примере:<br><br></div>";

			$timesTwo = fn( $x ) => $x * 2;

			$this->showData .= "<code>\$timesTwo = fn(\$x) => \$x * 2; <br> \$timesTwo(3);</code>";

			$this->showData .= "<div><br><br>Результатом данного примера будет:" . $timesTwo( 3 ) . "</div>";

			return $this->showData;
		} else if ( $this->fiche === 'is_countable' ) {
			$imgpp          = new GenerateImage( 'is_countable' );
			$this->showData = $imgpp->img;
			$this->showData .= "<div><br><br>Если вы в PHP 7.2. вызываете count() с использованием не-countable переменной, то PHP выведет предупреждение об этом. <br>В общих правках было предложение проверять получаемую переменную на countable до ее использования в count(). <br>countable-переменной является массив или объект реализующий \Countable интерфейс. Так как при проверке будет использоваться много шаблонного кода, в PHP 7.3 появилась новая функция is_countable(), проверяющая переменную на… ну… возможность использования с count():</div>";
			$this->showData .= "<div><br><br>Рассмотрим на примере:<br><br></div>";
			$this->showData .= "<code>\$example_arr = ['one', 'two', 'three']; <br>if (is_countable(\$example_arr)) { <br> return count(\$example_arr); <br>}  else { <br>return \$example_arr . 'is not countable';<br>} </code>";
			$example_arr = ['one', 'two', 'three'];
			$check_countable = is_countable($example_arr) ? count($example_arr) : $example_arr;
            $this->showData .= "<div><br><br>Результатом данного примера будет: " . $check_countable . "</div>";

			return $this->showData;
		} else {
			$this->showData = "not a fiche";
			$imgpp          = new GenerateImage( 'not a fiche' );
			$this->showData = $imgpp->img;

			return $this->showData;
		}

	}
}