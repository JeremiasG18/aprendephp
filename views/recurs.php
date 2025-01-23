<section>
    <h2>¿Qué es la recursividad?</h2>
    <p>
        La <strong>'recursividad'</strong> es un concepto que se refiere a una función que se llama a sí misma dentro de su propio cuerpo. Es una técnica útil para resolver problemas que pueden dividirse en subproblemas más pequeños de la misma naturaleza.
    </p>

    <pre><code class="language-php">
    &lt;?php

        function show($n){

            if($n < 1){ // caso base
                return;
            }

            echo "Hola $n \n";

            show($n - 1); // se llama a si mismo, mientras se resta hasta llegar al caso base
        }

        show(10);
        
    ?&gt;
    </code></pre>

    <h3>Consideraciones importantes sobre la recursividad</h3>
    <ul>
        <li>
            <strong>Caso base:</strong> Es fundamental tener un caso base que detenga las llamadas recursivas para evitar un bucle infinito.
        </li>
        <li>
            <strong>Desempeño:</strong> La recursividad puede ser menos eficiente que las soluciones iterativas debido a la sobrecarga de llamadas de función. En casos donde las funciones recursivas consumen mucha memoria, puede ser recomendable optimizar o usar enfoques iterativos.
        </li>
    </ul>

    <p>La recursividad nos puede servir en momentos en donde no queramos usar un for o un while y queremos ser mas declarativos en recorrer por ejemplo una estructura de datos mas propenso por asi decirlo.</p>

</section>