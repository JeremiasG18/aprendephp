<section>

    <h2>Función array_udiff()</h2>

    <p>
        La función <b>array_udiff()</b> se usa para encontrar la diferencia entre arrays, pero permite definir una función de comparación personalizada.
    </p>

    <pre><code class="language-php">
    &lt;?php

        // Sintaxis

        array_udiff(
            array $array1,
            array $array2,
            array $... = ?,
            callable $value_compare_func
        ): array

    ?&gt;
    </code></pre>

    <p>
        Vamos a hacer un ejercicio, pero primero tenemos que ver como funciona el operador nave espacial para cadenas de texto.
    </p>

    <pre><code class="language-php">
    &lt;?php

    echo "Marcos" <=> "Enrick"; // 1 -> son diferentes
    echo "Juan" <=> "Juan"; // 0 -> son iguales
    echo "azul" <=> "zapatilla"; // -1 -> son diferente

    // En cadena de caracteres o string esto funciona asi
    // porque PHP usa la comparación ASCII en las cadenas.

    ?&gt;
    </code></pre>

    <p>Ya dado por entendido lo anterior vamos a ver <b>array_udiff()</b>.</p>

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

        $people2 = [
            new People("Sandra", 40),
            new People("Ignacio", 23),
            new People("Guillermo", 34)
        ];

        $differences = array_udiff($people, $people2, fn ($people, $people2) => 1);

    ?&gt;
    </code></pre>

    <p></p>

</section>