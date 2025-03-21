<ul class="metismenu menu-section" id="menu-facturation">
    <li class="menu-title border-top-0 pt-2">TABLEAUX DE BORD</li>
    <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
            <i class="flaticon-layout"></i>
            <span class="nav-text">Gestion des proforma</span>
        </a>
        <ul aria-expanded="false" class="left">
            <li><a class="dz-active" href="#">Nouveau Proforma Client</a></li>
            <li><a class="dz-active" href="#">Nouveau Proforma Fournisseur</a></li>
            <li class="">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Liste des proforma</a>
                <ul aria-expanded="false" class="left mm-collapse">
                    <li><a class="dz-active" href="#">Clients</a></li>
                    <li><a class="dz-active" href="#">Fournisseurs</a></li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="{{ isActive(["/factures", "/facture_create"]) ? 'mm-active' : '' }}"><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">
            <i class="flaticon-layout"></i>
            <span class="nav-text">Gestion des factures</span>
        </a>
        <ul aria-expanded="false" class="left">
            <li><a class="dz-active" href="index-3.html">Nouvelle Facture Client</a></li>
            <li><a class="dz-active" href="index-2.html">Nouvelle Facture Fournisseur</a></li>
            <li class="">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Liste des factures</a>
                <ul aria-expanded="false" class="left mm-collapse">
                    <li><a class="dz-active" href="/factures">Clients</a></li>
                    <li><a class="dz-active" href="#">Fournisseurs</a></li>
                </ul>
            </li>
        </ul>
    </li>
   
    <li><a href="widget-basic.html" class="" aria-expanded="false">
            <i class="flaticon-app"></i>
            <span class="nav-text">Validation factures</span>
        </a>
    </li>
    <li><a href="widget-basic.html" class="" aria-expanded="false">
            <i class="flaticon-app"></i>
            <span class="nav-text">Reglèment factures</span>
        </a>
    </li>
    <li><a href="widget-basic.html" class="" aria-expanded="false">
            <i class="flaticon-app"></i>
            <span class="nav-text">Gestion des clients</span>
        </a>
    </li>

</ul>