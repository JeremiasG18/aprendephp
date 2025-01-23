<section>
    <h2>¿Qué es una función pura?</h2>
    <p>
        Una <strong>'función pura'</strong> es una función que siempre produce el mismo resultado para los mismos valores de entrada y no tiene efectos secundarios. Esto significa que no modifica variables globales, archivos, bases de datos ni interactúa con el entorno externo. Su salida depende únicamente de sus argumentos, lo que facilita su prueba, depuración y reutilización en la programación funcional.
    </p>

    <p>
        Esto no es una funcion pura porque se modifica la propiedad <strong>$count</strong> de la clase <strong>Counter</strong>, osea que la funcion modifico algo externo, algo que estaba fuera de la funcion.
    </p>
    <pre><code class="language-php">
    &lt;?php

        class Counter{
            public int $count = 0;
        }

        $counter = new Counter;

        function show(Counter $count){
            $count->count++;
            echo $count->count;
        }

        show($counter); // 1
        show($counter); // 2
        show($counter); // 3
        show($counter); // 4
        
    ?&gt;
    </code></pre>

    <p>
        Esto si es una funcion pura ya que respeto las caracteristicas de una funcion pura, porque dado los mismos datos de entrada siempre da el mismo resultado.
    </p>

    <pre><code class="language-php">
    &lt;?php

        function add(float $a, float $b):float{
            return $a + $b;
        }

        echo add(1, 4); // 5
        echo add(1, 4); // 5
        echo add(1, 4); // 5
        echo add(1, 4); // 5

    ?&gt;
    </code></pre>

</section>