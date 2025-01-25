<section>

    <h2>Función array_walk()</h2>

    <p>
        La función <b>array_walk()</b> permite aplicar una función de callback a cada elemento de un array.
    </p>

    <pre><code class="language-php">
    &lt;?php

        // Sintaxis

        array_walk(array &$array, callable $callback, mixed $userdata = null): bool

    ?&gt;
    </code></pre>

    <p>En este ejemplo podemos ver que array_walk nos sirve para recorrer un arreglo como lo hacemos con un foreach, pero esto es apartir de una funcion. Array_walk no devulve un valor como lo haria array_map que devuelve un array nuevo.</p>

    <pre><code class="language-php">
    &lt;?php

    require "modelsArray/functions.php";

    $numbers = [1, 2, 3, 4, 5];

    array_walk($numbers, function($num){
        echo $num . "<br>";
    });

    ?&gt;
    </code></pre>

    <p>En este ejemplo podemos ver tambien que con array_walk() podemos pasar por referencia al array que queremos modificar.</p>

    <pre><code class="language-php">
    &lt;?php

        require "modelsArray/functions.php";

        $numbers = [1, 2, 3, 4, 5];

        array_walk($numbers, fn (&$num) => $num *= 2);

        show($numbers); // [2, 4, 6, 8, 10]

    ?&gt;
    </code></pre>

</section>