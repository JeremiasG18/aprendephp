<section>

    <h2>¿Qué es la memoization?</h2>

    <p>
        La memoization es una técnica de optimización que almacena en caché los resultados de funciones costosas para evitar cálculos repetidos y mejorar el rendimiento.
    </p>

    <pre><code>
    &lt;?php

        function memoization(){

            $datos = []; // aqui se almacena los calculos

            return function(float $a, float $b) use(&$datos): float{ // se pasa como referencia el array $datos
                
                $index = $a . " - " . $b;

                if (isset($datos[$index])) { // verificamos que no se haya hecho aun el calculo
                    echo "Ya se definio $index";
                    return $datos[$index];
                }

                // si no se cumple lo de arriba agregamos el calculo al array $datos con su respectivo indice
                $datos[$index] = $a - $b;
                echo "No se encontro ";
                return $datos[$index];

            };
        }

        $memo = memoization();
        $result = $memo(13,4); // No se encontro -> entonces esto se agrego al array $datos
        $result = $memo(13,4); // Se encontro -> esto no se agrego porque ya esta en el arreglo
        $result = $memo(15,5); // No se encontro -> esto tambien se agrego

    ?&gt;
    </code></pre>
    
    <h3>¿Cuando usar memoization?</h3>

    <p>
        -   Cálculos repetitivos y costosos (como factorial, Fibonacci, combinaciones). <br>
        -   Funciones recursivas con los mismos valores de entrada en múltiples llamadas. <br>
        -   Evitar consultas o peticiones innecesarias a bases de datos o APIs.
    </p>

</section>