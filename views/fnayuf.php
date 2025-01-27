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

    <p>Este es un ejemplo de uso de la funcion array_udiff(). Estoy usando el operador de comparación <a href="#" class="link">nave espacial</a> que compara ambos arreglos con su propiedad age y devuelve los elementos del primer array que se diferencia del segundo array.</p>

    <pre><code class="language-php">
    &lt;?php

        require "modelsArray/functions.php";
        require "modelsArray/people.php";

        use ModelsArray\People;

        $people = [
            new People("Juan", 20),
            new People("Pedro", 30),
            new People("Maria", 25)
        ];

        $people2 = [
            new People("Juan", 29),
            new People("Jazmine", 27),
            new People("Maria", 20)
        ];

        $people3res = array_udiff($people, $people2, fn ($people, $people2) => $people->name <=> $people2->name);

        show($people3res);

    ?&gt;
    </code></pre>

    <p>
        Como podemos ver el resultado solo nos devuelve Pedro y esto pasa porque Pedro no se encuentra en el segudo array y los demas datos se repiten en el segundo, tambien deberia devolver Jazmine no? pero este solo devuelve el primer array, si cambiamos direccion y le pasamos primero $people2, y luego $people veras que devuelve Jazmine y su edad.
    </p>

</section>