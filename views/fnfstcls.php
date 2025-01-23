<section>
    <h2>¿Qué es una función pura?</h2>

    <p>
        Una <strong>'función de primera clase'</strong> es una función que se trata como cualquier otra variable dentro de un lenguaje de programación. Esto significa que se puede:
    </p>

    <ul>
        <li><strong>Asignar</strong> a una variable.</li>
        <li><strong>Pasar</strong> como argumento a otra función.</li>
        <li><strong>Devolver</strong> como resultado de otra función.</li>
        <li><strong>Almacenar</strong> en estructuras de datos (arrays, objetos, etc.).</li>
    </ul>

    <pre><code class="language-php">
    &lt;?php

        $fn = function (float $a, float $b) : float{
            return $a + $b;
        };

        echo $fn(3,4);

        // aquí guardo la función de primera clase en un arreglo
        $arr = [$fn];

        print_r($arr);

    ?&gt;
    </code></pre>

    <p>
        Este concepto es clave en la programación funcional, ya que permite manejar funciones de manera flexible y reutilizable.
    </p>

</section>