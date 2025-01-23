<section>
    <h2>¿Qué es una función de orden superior?</h2>
    <p>
        Una <strong>'función de orden superior'</strong> es una función que puede recibir otras funciones como argumentos y/o devolver una función como resultado.
    </p>

    <pre><code class="language-php">
    &lt;?php

        $fn = function (float $a, float $b) : float{ // función de primera clase
            return $a + $b;
        };

        function show(callable $fn, float $a, float $b){ // función de orden superior, recibe una función y devuelve una funcion como resultado
            echo $fn($a, $b);
        }
        
        show($fn, 3, 4); // 12
        
    ?&gt;
    </code></pre>

    <p>
        <b>Callable</b> es una palabra reservada que se usa para tipar en una función que va a recibir como parametro otra función como lo hacemos en el codigo de arriba.
    </p>

    <pre><code class="language-php">
    &lt;?php

        function mult(float $a, float $b) : float{
            return $a * $b;
        }

        function show(callable $fn, float $a, float $b){
            echo $fn($a, $b);
        }
        
        show("mult", 3, 4); // 12

    ?&gt;
    </code></pre>

    <p>
        De esta forma nosotros podemos crear una funcion sin necesidad de que sea de <b>primera clase</b> para ser usada en una de <b>orden superior</b>.
    </p>

</section>