{{--<footer class="page-footer mt-3 pb-3 border border-bottom-0 border-left-0 border-right-0 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="widget block block-static-block">
                    <ul class="footer links">
                        <li class="nav item">
                            <a href="#">About us</a>
                        </li>
                        <li class="nav item">
                            <a href="#">Contact us</a>
                        </li>
                        <li class="nav item">
                            <a href="#">Customer Service</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <ul class="footer links">
                    <li class="nav item">
                        <a href="#">Privacy & Cookie Policy</a>
                    </li>
                    <li class="nav item">
                        <a href="#">Orders</a>
                    </li>
                    <li class="nav item">
                        <a href="#">Returns</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
                <!-- SUBSCRIBE FORM GOES HERE  -->
                @include('avored-subscribe::subscribe.form')
            </div>
        </div>
    </div>
</footer>--}}
<style>
    h4 {
        color:white;
        margin-left:40px;
        position:relative;
        top:40px;
        font-size:10pt;
    }

    .transparent_text {
        color:transparent;
    }

</style>

<footer class="row">
    <div class="col-12 col-md-12">
    <div class="container-fluid bg-dark">

        <div class="col-12 col-md-3">
            <h4>Moyen de paiement</h4>
            <div class="rectangle_white">
                <ul>
                    <li>
                        <a class="CategoriesListItem">
                            <img src="vendor/tsdc-default/images/icones/cb.png" alt="Carte bancaire" />
                            <p class="paiementListItem_text">Carte bancaire</p>
                        </a>
                    </li>

                    <li>
                        <a class="CategoriesListItem">
                            <img src="vendor/tsdc-default/images/icones/mc.png" alt="MasterCard" />
                            <p class="paiementListItem_text">MasterCard</p>
                        </a>
                    </li>

                    <li>
                        <a class="CategoriesListItem">
                            <img src="vendor/tsdc-default/images/icones/pp.png" alt="PayPal" />
                            <p class="paiementListItem_text">PayPal</p>
                        </a>
                    </li>

                    <li>
                        <a class="CategoriesListItem">
                            <img src="vendor/tsdc-default/images/icones/visa.png" alt="Visa" />
                            <p class="paiementListItem_text">Visa</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>



        <div class="col-12 col-md-3">
            <h4>Service client</h4>
            <div class="rectangle_white">
                <img class="serviceClient_image" src="vendor/tsdc-default/images/icones/sc.png" alt="Service client" />
                <p class="serviceclient_text"><br/>Une question ?<br/>Veuillez contacter notre service client ou consulter l'onglet Contact</p>
            </div>
        </div>


        <div class="col-12 col-md-3">
            <h4>Livraison</h4>
            <div class="rectangle_white">
                <img class="serviceLivraison_image" src="vendor/tsdc-default/images/icones/livraison.png" alt="Livraison" />
                <p class="servicelivraison_text"><br/>Livraison offerte à partir de 10 € d’achat en France métropolitaine</p>
            </div>
        </div>


        <div class="col-12 col-md-3">
            <h4 class="transparent_text">Undefined</h4>
            <div class="rectangle_transparent">
                <ul class="align_image">
                    <li>
                        <a href="#" target="_blank">
                            <img src="vendor/tsdc-default/images/icones/sn.png" alt="Suivez-nous" />
                        </a>
                    </li>

                    <li>
                        <a href="#" target="_blank">
                            <img src="vendor/tsdc-default/images/icones/insta.png" alt="Instagram" />
                        </a>
                    </li>

                    <li>
                        <a href="#" target="_blank">
                            <img src="vendor/tsdc-default/images/icones/youtube.png" alt="Youtube" />
                        </a>
                    </li>

                    <li>
                        <a href="#" target="_blank">
                            <img src="vendor/tsdc-default/images/icones/twitter.png" alt="Twitter" />
                        </a>
                    </li>

                    <li>
                        <a href="#" target="_blank">
                            <img src="vendor/tsdc-default/images/icones/fb.png" alt="Facebook" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-12 col-md-12" id="border">
            <div class="footer_txt">
                <p>
                    <a href="#" target="_blank">CGU</a> • <a href="#" target="_blank" rel="publisher">FAQ</a> • <a href="#" target="_blank">Confidentialité</a> • <a href="#">Mentions légales</a> • <a href="#">Contactez-nous</a>
                </p>
            </div>
        </div>
    </div>
    </div>
</footer>