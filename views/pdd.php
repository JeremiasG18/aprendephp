<section>

    <h2>Patrón de Diseño Estructural - Decorator</h2>

    <p>
        Un patrón de diseño <b>Estructural</b> es un tipo de patrón de diseño que se enfoca en la composición y organización de clases y objetos para formar estructuras más grandes y eficientes. Estos patrones permiten que las partes de un sistema trabajen juntas de manera flexible y extensible, sin necesidad de modificar mucho el código existente. <br>
        Existen varios patrones de diseño de tipo estructural pero nosotros hablaremos de <b>Decorator</b>.
    </p>

    <p>
        El patrón Decorator es un patrón de diseño estructural que permite añadir funcionalidades a un objeto de manera dinámica, sin modificar su estructura original. <br>
        Se basa en el principio de composición y proporciona una alternativa flexible a la herencia.
    </p>

    <pre><code class="language-php">
    &lt;?php

        // Interfaz Común
        interface Text {
            public function render(): string;
        }

        // Clase Base (Componente Concreto)
        class SimpleText implements Text {
            private string $text;

            public function __construct(string $text) {
                $this->text = $text;
            }

            public function render(): string {
                return $this->text;
            }
        }

        // Decorador Base
        class TextDecorator implements Text {
            protected Text $text;

            public function __construct(Text $text) {
                $this->text = $text;
            }

            public function render(): string {
                return $this->text->render();
            }
        }

        // Decoradores Concretos
        class BoldText extends TextDecorator {
            public function render(): string {
                return "<b>" . parent::render() . "</b>";
            }
        }

        class UnderlineText extends TextDecorator {
            public function render(): string {
                return "<u>" . parent::render() . "</u>";
            }
        }

        // Uso del Patrón Decorator
        $simpleText = new SimpleText("Hola, mundo!");
        echo $simpleText->render(); // Salida: Hola, mundo!

        $boldText = new BoldText($simpleText);
        echo $boldText->render(); // Salida: <b>Hola, mundo!</b>

        $underlineText = new UnderlineText($boldText);
        echo $underlineText->render(); // Salida: <u><b>Hola, mundo!</b></u>

    ?&gt;
    </code></pre>

    <p>
        El codigo de arriba funciona de la siguiente manera:
    </p>

    <ol>
        <li>
            <b>Interfaz Común (Text)</b>: Se define una interfaz que garantiza que todas las clases que la implementen tendrán el método render(). Esto permite que los diferentes objetos puedan ser usados de manera intercambiable.
        </li>
        <li>
            <b>Clase Base (SimpleText)</b>: Esta es la implementación base del texto simple. Recibe un string en su constructor y lo devuelve sin modificaciones cuando se llama al método render().
        </li>
        <li>
            <b>Decorador Base (TextDecorator)</b>: Esta clase implementa la interfaz Text y almacena una referencia a un objeto de tipo Text. Su propósito es actuar como una envoltura alrededor del objeto original, permitiendo agregarle funcionalidades adicionales sin modificar su estructura interna. El método render() simplemente delega la ejecución al objeto decorado.
        </li>
        <li>
            <b>Decoradores Concretos (BoldText y UnderlineText)</b>: Estas clases extienden TextDecorator y añaden funcionalidades específicas: BoldText envuelve el texto con la etiqueta &lt;b&gt; para hacerlo negrita. UnderlineText envuelve el texto con la etiqueta &lt;u&gt; para subrayarlo.
        </li>
    </ol>
    <ul>
        <b>Uso del Patrón Decorator:</b>
        <li>
            Se crea un objeto SimpleText con el mensaje "Hola, mundo!".
        </li>
        <li>
            Se decora este texto con BoldText, lo que genera <b>Hola, mundo!</b>.
        </li>
        <li>
            Luego, el objeto ya decorado se envuelve con UnderlineText, resultando en <u><b>Hola, mundo!</b></u>.
        </li>
    </ul>

    <img src="./assets/img/decorator.png" alt="patron estructural -> decorator">

</section>