<?php include "head.php"; ?>


<body>
    <?php include "navbar.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h2 class="white-text">Formulaire</h2>
            </div>
        </div>
        <!-- FORM CONTACT -->
        <div class="row">

            <form class="col s12" action="traitement.php?action=add" method="post">
                <div class="padding">

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="product" type="text" name="name" class="validate">
                            <label for="product">Product Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="price" type="text" name="price" class="validate">
                            <label for="price">Price</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="quantity" type="number" name="qtt" class="validate">
                            <label for="quantity">Quantity</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s2">
                            <button class="btn waves-effect waves-light blue" type="submit" name="submit">Submit
                            </button>
                        </div>
                        <div class="input-field col s8"></div>
                        <div class="input-field col s2">
                            <button class="btn waves-effect waves-light blue" type="submit" name="submit">Submit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="application.js" async defer></script>
</body>

</html>