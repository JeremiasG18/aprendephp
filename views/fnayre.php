<section>

    <h2>Función array_reduce()</h2>

    <p>
        <b>Array_reduce</b> es una función que reduce un array a un solo valor, aplicando una función de acumulación a cada elemento del array.
    </p>

    <pre><code class="language-php">
    &lt;?php

        // Sintaxis

        array_reduce(array $array, callable $callback, mixed $initial = null): mixed

    ?&gt;
    </code></pre>

    <p>Este es un ejemplo de uso de array_reduce(). Lo que hace array_reduce() es devolver un solo valor, agarra todos los valores de un array y lo reduce a un valor. Current en este caso es un acumulador, donde se van acumulando por cada iteracion del array la suma de $current y la edad de la persona ($person->age).</p>

    <pre><code class="language-php">
    &lt;?php

        require "modelsArray/people.php";

        use ModelsArray\People;

        $people = [
            new People("Juan", 20),
            new People("Maria", 33),
            new People("Miguel",30)
        ];

        $res = array_reduce($people,
            fn ($current, $person) => $current + $person->age,
            0
        );

        echo $res; // 83

    ?&gt;
    </code></pre>

</section>