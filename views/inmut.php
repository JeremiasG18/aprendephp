<section>

    <h2>¿Qué es la inmutabilidad?</h2>

    <p>La <strong>'inmutabilidad'</strong> es la propiedad de un objeto o estructura de datos que no puede ser modificado después de su creación. En lugar de alterar un objeto existente, se crea una nueva versión con los cambios aplicados. Esto ayuda a evitar efectos secundarios, mejorar la seguridad y facilitar el control del estado en la programación funcional y concurrente.</p>

    <pre><code class="language-php">
    &lt;?php

        class Location{
            private float $x;
            private float $y;

            public function __construct(float $x, float $y){
                $this->x = $x;
                $this->y = $y;
            }

            public function getX(): float{
                return $this->x;
            }

            public function getY(): float{
                return $this->y;
            }

            public function move(float $x, float $y) : Location{
                $location = new Location($this->x + $x, $this->y + $y);
                return $location;
            }

        }

        $location = new Location(20, 10);
        $newLocation = $location->move(10, 20);
        echo "origin: " . $location->getX() . " " . $location->getY() . "\n";
        echo "actually: " . $newLocation->getX() . " " . $newLocation->getY() . "\n";
        
    ?&gt;
    </code></pre>

    <p>En el codigo anterior se aplico la inmutabilidad porque no estamos modificando al objeto sino que dentro de la misma clase se crea un metodo que utiliza las propiedades del objeto para crear otro objeto apartir de las propiedades que ya tiene y los parametros que le pasamos. Vamos a ver un ejemplo mas facil de entender.</p>

    <pre><code class="language-php">
    &lt;?php

        $array = [1,2,3,4,5];

        $array2 = $array;

        $array2[] = 6;

        print_r($array);
        print_r($array2);

    ?&gt;
    </code></pre>

    <p>Aqui como podemos <strong>$array</strong> va a ser la estructura de datos inmutable porque no va a cambiar y para aplicar este concepto guardamos a <strong>$array</strong> dentro de <strong>$array2</strong> al cual si lo modificamos o mutamos.</p>

</section>