<section>
    <h2>Composicion de funciones</h2>

    <p>La composición de funciones es un principio de la programación funcional en el que el resultado de una función se usa como entrada de otra, combinando varias funciones en una sola.</p>

    <pre><code>
    &lt;?php

        function composition($fn1, $fn2){
            return function ($value) use($fn1, $fn2){
                return $fn1($fn2($value)); // primero se ejecuta $fn2 -> $add10 y luego $fn1 -> $mult20
                # fn2 retorna 200 que es el resultado de 10 * 20
                # fn1 retorna 210 que es el resultado de 200 + 10
            };
        }

        $add10 = fn($n) => $n + 10;
        $mult20 = fn($n) => $n * 20;

        $comp = composition($add10, $mult20);

        $result = $comp(10);

        echo $result; // 210

    ?&gt;
    </code></pre>

</section>