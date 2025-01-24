<section>

    <h2>Función usort()</h2>

    <p>
        La función <b>usort()</b> ordena un array usando una función de comparación personalizada.
        A diferencia de sort(), que ordena de forma predeterminada, usort() te permite definir tu propia lógica de ordenación.
    </p>
    
    <pre><code class="language-php">
    &lt;?php

        //  Sintaxis
        
        usort(array &$array, callable $value_compare_func): bool

    ?&gt;
    </code></pre>

    <p>Este es el operador nave espacial <=>, es un operador de comparación que devuelve -1, 0 o 1. Este es un pequeño ejemplo:</p>

    <pre><code class="language-php">
    &lt;?php

        echo 1 <=> 2; // 1 es mayor que 2 por eso imprime -1

        echo 2 <=> 1; // 2 es mayor que 1 por eso imprime 1

        echo 1 <=> 1; // 1 es igual a 1 por eso imprime 0

    ?&gt;
    </code></pre>

    <p>Vamos a utilizar este operador para hacer que la función usort() nos devuelva un array con los valores ordenados de menor a mayor. Y como puedes ver este recibe un array por referencia por lo tanto va a hacer un cambio al array $people.</p>

    <pre><code class="language-php">
    &lt;?php

        require "modelsArray/people.php";
        require "modelsArray/functions.php";

        use ModelsArray\People;

        $people = [
            new People("Maria", 25),
            new People("Miguel",30),
            new People("Juan", 20)
        ];

        usort($people, fn ($person1, $person2) => $person1->age <=> $person2->age);

        show($people);

    ?&gt;
    </code></pre>

</section>
