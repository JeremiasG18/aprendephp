<section>

    <h2>Patrón de Diseño Creaciónal - Factory Method</h2>

    <p>
        Un patrón de diseño creacional es un tipo de patrón que se enfoca en la creación de objetos de manera flexible y eficiente. Su objetivo es abstraer el proceso de instanciación y proporcionar mecanismos para crear objetos sin acoplar directamente el código a clases específicas. <br>
        Estos patrones son útiles cuando la creación de objetos es compleja, costosa o debe ser gestionada de manera centralizada.
    </p>

    <p>
        El <b>Factory Method</b> es un patrón de diseño creacional que proporciona una interfaz para la creación de objetos, pero permite que las subclases decidan qué clase concreta instanciar.
    </p>
    <p>
        Su objetivo es desacoplar la creación de objetos del código principal, haciendo que el código sea más flexible y fácil de extender.
    </p>

    <h3>Ejemplo: Sistema de trasporte</h3>

    <p>
        Supongamos que tenemos una aplicación de logística donde necesitamos diferentes medios de transporte (Camión, Barco). <br>
        ➡️ Sin el patrón Factory Method, el código tendría que usar new Camion() o new Barco() directamente, lo que lo haría menos flexible. <br>
        ➡️ Con Factory Method, encapsulamos la lógica de creación y solo usamos una interfaz común.

    </p>

    <h4>Paso1: Definir una Interfaz Común</h4>
    <p>Creamos una interfaz que define un método común para todos los transportes:</p>

    <pre><code class="language-php">
    &lt;?php

        interface Transporte {
            public function entregar();
        }

    </code></pre>

    <h4>Paso2: Crear Clases Concretas</h4>
    <p>Definimos las clases Camion y Barco, que implementan la interfaz Transporte:</p>

    <pre><code class="language-php">

        class Camion implements Transporte {
            public function entregar() {
                return "Entrega por tierra en camión.";
            }
        }

        class Barco implements Transporte {
            public function entregar() {
                return "Entrega por mar en barco.";
            }
        }

    </code></pre>

    <h4>Paso3: Crear la Fabrica Base</h4>
    <p>
        Creamos una clase abstracta que define el método crearTransporte(), pero deja que las subclases decidan qué tipo de transporte devolver:
    </p>

    <pre><code class="language-php">

        abstract class Logistica {
            abstract public function crearTransporte(): Transporte;

            public function planificarEntrega() {
                $transporte = $this->crearTransporte();
                return $transporte->entregar();
            }
        }

    </code></pre>

    <ul>
        <p><b>Nota:</b></p>
        <li>crearTransporte() es abstracto, lo que obliga a las subclases a implementarlo.</li>
        <li>planificarEntrega() crea el objeto y llama a su método entregar() sin conocer su tipo exacto.</li>
    </ul>

    <h4>Paso 4: Implementar las Subclases de la Fábrica</h4>

    <p>Cada subclase define su propio método crearTransporte() para devolver la instancia correspondiente:</p>

    <pre><code class="language-php">

        class LogisticaTerrestre extends Logistica {
            public function crearTransporte(): Transporte {
                return new Camion();
            }
        }

        class LogisticaMaritima extends Logistica {
            public function crearTransporte(): Transporte {
                return new Barco();
            }
        }

    </code></pre>

    <h4>Paso 5: Uso del Factory Method</h4>

    <p>Ahora podemos usar la fábrica sin preocuparnos por qué tipo de transporte se está creando:</p>

    <pre><code class="language-php">

        function cliente(Logistica $logistica) {
            echo $logistica->planificarEntrega() . PHP_EOL;
        }

        // Crear una logística terrestre
        $logistica1 = new LogisticaTerrestre();
        cliente($logistica1); // "Entrega por tierra en camión."

        // Crear una logística marítima
        $logistica2 = new LogisticaMaritima();
        cliente($logistica2); // "Entrega por mar en barco."

    ?&gt;
    </code></pre>

    <h3>Beneficios del Factory Method</h3>

    <p>
        ✅ Desacoplamiento: El código cliente (cliente()) no necesita saber qué tipo de transporte está usando. <br>
        ✅ Facilidad de mantenimiento: Si queremos agregar otro tipo de transporte (Avión), solo creamos otra subclase sin tocar el código existente. <br>
        ✅ Principio de Abierto/Cerrado: Podemos extender el código sin modificarlo.


    </p>

</section>