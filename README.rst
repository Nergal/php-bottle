PHP Bottle Web Framework
========================
PHP Bottle - PHP micro-framework inspired by minimalistic PyBottle

Exampe
------
::

    <?php
        require_once "bottle.php";

        /**
         * @route /hello/:name
         */
        function hello($name) {
            return "<h1>Hello, {$name}!</h1>";
        }

        /**
         * @route /mul/:num
         * @view /views/mul.html
         */
        function mul($num) {
            return array('result' => $num * $num);
        }


Licence (MIT)
-------------

    Copyright (c) 2010, Marcel Hellkamp.

    Permission is hereby granted, free of charge, to any person obtaining a copy
    of this software and associated documentation files (the "Software"), to deal
    in the Software without restriction, including without limitation the rights
    to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
    copies of the Software, and to permit persons to whom the Software is
    furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included in
    all copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
    IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
    FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
    AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
    LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
    OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
    THE SOFTWARE.}
