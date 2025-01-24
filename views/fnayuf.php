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

</section>