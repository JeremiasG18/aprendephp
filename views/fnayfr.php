<section>

    <h2>Función array_filter()</h2>

    <p>
        <b>Array_filter</b> es una función que filtra los elementos de un array usando una función de devolución de llamada (callback). Devuelve un nuevo array con los elementos que cumplen con la condición definida en la función.
    </p>

    <pre><code class="language-php">
    &lt;?php

        // Sintaxis
        
        array_filter(array $array, callable $callback = ?, int $flag = 0): array

    ?&gt;
    </code></pre>

    <p>Ejemplo de uso de array_filter.</p>

    <pre><code class="language-php">
    &lt;?php
        
        require "modelsArray/people.php";
        require "modelsArray/functions.php";

        use ModelsArray\People;

        $people = [
            new People("Juan", 20),
            new People("Maria", 33),
            new People("Miguel",30)
        ];

        $greater25Years = array_filter($people,
            fn ($person) => $person->age >= 25
        );

        show($greater25Years);

    ?&gt;
    </code></pre>

    <p>Como puedes ver probablemente estes pensando que array_map es muy similar a array_filter pero la difencia es que array_filter filtra los valores que cumplen una condición, como con el ejemplo anterior se filtraron solo las personas que son mayores o iguales a 25. Si haces lo mismo con array_map no retornara los valores esperados como lo hace array_filter. Y esto pasa porque array_map solo funciona para modificar todos los elementos del array que se le pasa como parametro.</p>

</section>