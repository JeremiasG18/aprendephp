<section>
    <h2>Captura de variables externas con 'use'</h2>

    <p>
        Las capturas de variables externas con <b>use</b> es la capacidad que tiene una funcion anonima (closure) de acceder a variables definidas fuera de su ambito (scope) utilizando la palabra clave <b>use</b>.
    </p>

    <pre><code class="language-php">
    &lt;?php

        $tax = 0.1;

        $response = function ($a, $b) use($tax) : float {
            return ($a + $b) * $tax;
        };

        echo $response(3,5); // 0.8

    ?&gt;
    </code></pre>

    <p>
        Solamente las funciones anonimas pueden hacer esto. Tambien hay que tener en cuenta de que las variables externas que son capturadas por use se pasan por valor (copia), por lo que los cambios dentro de la funcion no afectan a la variable original
    </p>

    <pre><code>
    &lt;?php

        $i = 10;

        $increment = function () use($i) {
            $i++;
            return $i;
        };


        echo $increment(); // 11
        echo $i; // 10
        
    ?&gt;
    </code></pre>

</section>