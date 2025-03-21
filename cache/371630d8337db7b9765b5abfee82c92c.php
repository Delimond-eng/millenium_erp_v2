<!DOCTYPE html>
<html lang="en">

<head>
    <!-- PAGE TITLE HERE -->
    <title>Millenium ERP | Database</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="index, follow">

    <meta name="keywords" content="admin, admin dashboard, admin template, analytics, bootstrap, bootstrap5, bootstrap 5 admin template, modern, responsive admin dashboard, sales dashboard, Invoicing, ui kit, web app, Kubayar Billing, User Interface (UI), User Experience (UX), Dashboard Design, Invoice Management, Web Application, Data Visualization, Analytics, Customization, Responsive Design, Bootstrap Framework, Charts and Graphs, Data Management, Reporting, Dark Mode, Mobile-Friendly, Dashboard Components, Integrations, Analytics Dashboard, API Integration, User Authentication">


    <meta name="description" content="Streamline your invoicing tasks with the Kubayar Invoicing Admin Dashboard. This user-friendly interface offers robust features and customizable options, making it ideal for managing your data efficiently. With intuitive controls for transactions and insightful reporting, Kubayar enhances productivity, ensuring smooth invoicing operations for your business.">

    <meta property="og:title" content="Kubayar Invoicing Admin Dashboard | DexignZone">
    <meta property="og:description" content="Streamline your invoicing tasks with the Kubayar Invoicing Admin Dashboard. This user-friendly interface offers robust features and customizable options, making it ideal for managing your data efficiently. With intuitive controls for transactions and insightful reporting, Kubayar enhances productivity, ensuring smooth invoicing operations for your business.">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    <meta name="twitter:title" content="Kubayar Invoicing Admin Dashboard | DexignZone">
    <meta name="twitter:description" content="Streamline your invoicing tasks with the Kubayar Invoicing Admin Dashboard. This user-friendly interface offers robust features and customizable options, making it ideal for managing your data efficiently. With intuitive controls for transactions and insightful reporting, Kubayar enhances productivity, ensuring smooth invoicing operations for your business.">
    <meta name="twitter:image" content="social-image.png">
    <meta name="twitter:card" content="summary_large_image">

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <link href="assets/vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div class="item1"></div>
            <div class="item2"></div>
            <div class="item3"></div>
            <div class="item4"></div>
        </div>
        <h3 class="dz-loader-h">Millenium <span class="text-dark fw-bold">ERP</span></h3>
    </div>

    <div class="d-flex flex-column h-100 w-100 justify-content-center align-content-center position-fixed">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-5">
                <div class="d-flex mb-1 search-filter justify-content-center align-items-center">
                    <div class="mb-2 text-center">
                        <h6 class="text-black fs-20 text-center font-w600 mb-1">Sélectionnez une base de données</h6>
                        <span class="fs-14 text-center">Cliquez sur le bouton à droite pour sélectionner !</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="d-flex flex-wrap search-row bg-white py-3 mb-3 rounded justify-content-between align-items-center">
                            <div class="d-flex flex-fill align-items-center">
                                <svg class="me-3" width="60" height="60" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"></path>
                                    <path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#F35F31"></path>
                                    <path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.6549 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="white"></path>
                                    <path d="M59.0073 59.0077C53.917 64.098 47.0131 66.9576 39.8144 66.9576C32.6157 66.9576 25.7118 64.098 20.6215 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6215 20.6219L30.2179 30.2183C27.6728 32.7635 26.243 36.2154 26.243 39.8148C26.243 43.4142 27.6728 46.8661 30.2179 49.4112C32.7631 51.9564 36.215 53.3862 39.8144 53.3862C43.4138 53.3862 46.8657 51.9564 49.4108 49.4112L59.0073 59.0077Z" fill="#FFCF23"></path>
                                </svg>
                                <div>
                                    <h2 class="card-title--medium mb-1"><a href="app-profile.html" class="text-black">Millenium Horizon</a></h2>
                                    <span class="text-primary">Highspeed Studios</span>
                                </div>
                            </div>

                            <div class="mt-3">
                                <a href="/" class="btn btn-sm btn-primary rounded me-2">Acceder</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="d-flex flex-wrap search-row bg-white py-3 mb-3 rounded justify-content-between align-items-center">
                            <div class="d-flex flex-fill align-items-center">
                                <svg class="me-3" width="60" height="60" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"></path>
                                    <path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#3144F3"></path>
                                    <path d="M20.6216 20.6219C23.142 18.1015 26.1342 16.1022 29.4273 14.7381C32.7205 13.374 36.25 12.672 39.8145 12.672C43.3789 12.672 46.9085 13.374 50.2016 14.7381C53.4947 16.1022 56.4869 18.1015 59.0074 20.6219C61.5278 23.1424 63.5271 26.1346 64.8912 29.4277C66.2552 32.7208 66.9573 36.2504 66.9573 39.8148C66.9573 43.3793 66.2552 46.9088 64.8912 50.202C63.5271 53.4951 61.5278 56.4873 59.0074 59.0077L49.4109 49.4113C50.6711 48.1511 51.6708 46.6549 52.3528 45.0084C53.0348 43.3618 53.3859 41.5971 53.3859 39.8148C53.3859 38.0326 53.0348 36.2678 52.3528 34.6213C51.6708 32.9747 50.6711 31.4786 49.4109 30.2184C48.1507 28.9582 46.6546 27.9585 45.008 27.2765C43.3615 26.5944 41.5967 26.2434 39.8145 26.2434C38.0322 26.2434 36.2675 26.5944 34.6209 27.2765C32.9743 27.9585 31.4782 28.9582 30.218 30.2184L20.6216 20.6219Z" fill="#8FD7FF"></path>
                                    <path d="M20.6214 59.0077C15.5312 53.9174 12.6715 47.0135 12.6715 39.8148C12.6715 32.6161 15.5312 25.7122 20.6214 20.6219C25.7117 15.5316 32.6156 12.6719 39.8143 12.6719C47.0131 12.6719 53.9169 15.5316 59.0072 20.6219L49.4108 30.2183C46.8656 27.6732 43.4137 26.2434 39.8143 26.2434C36.215 26.2434 32.763 27.6732 30.2179 30.2183C27.6727 32.7635 26.2429 36.2154 26.2429 39.8148C26.2429 43.4141 27.6727 46.8661 30.2179 49.4112L20.6214 59.0077Z" fill="white"></path>
                                </svg>
                                <div>
                                    <h2 class="card-title--medium mb-1"><a href="app-profile.html" class="text-black">Castor Network RDC</a></h2>
                                    <span class="text-primary">Highspeed Studios</span>
                                </div>
                            </div>

                            <div class="mt-3">
                                <a href="/" class="btn btn-sm btn-primary rounded me-2">Acceder</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="d-flex flex-wrap search-row bg-white py-3 mb-3 rounded justify-content-between align-items-center">
                            <div class="d-flex flex-fill align-items-center">
                                <svg class="me-3" width="60" height="60" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#D3D3D3"></path>
                                    <path d="M0 11.6364C0 5.20978 5.20978 0 11.6364 0H68.3636C74.7902 0 80 5.20978 80 11.6364V68.3636C80 74.7902 74.7902 80 68.3636 80H11.6364C5.20978 80 0 74.7902 0 68.3636V11.6364Z" fill="#EFF331"></path>
                                    <path d="M66.9572 39.8148C66.9572 43.3792 66.2551 46.9088 64.8911 50.2019C63.527 53.495 61.5277 56.4872 59.0073 59.0077C56.4868 61.5281 53.4946 63.5275 50.2015 64.8915C46.9084 66.2556 43.3788 66.9576 39.8144 66.9576C36.2499 66.9576 32.7204 66.2556 29.4272 64.8915C26.1341 63.5275 23.1419 61.5281 20.6215 59.0077C18.101 56.4872 16.1017 53.495 14.7376 50.2019C13.3736 46.9088 12.6715 43.3792 12.6715 39.8148L26.2429 39.8148C26.2429 41.597 26.594 43.3618 27.276 45.0083C27.958 46.6549 28.9577 48.151 30.2179 49.4112C31.4781 50.6714 32.9742 51.6711 34.6208 52.3531C36.2674 53.0352 38.0321 53.3862 39.8144 53.3862C41.5966 53.3862 43.3614 53.0352 45.0079 52.3531C46.6545 51.6711 48.1506 50.6715 49.4108 49.4112C50.671 48.151 51.6707 46.6549 52.3527 45.0083C53.0348 43.3618 53.3858 41.597 53.3858 39.8148L66.9572 39.8148Z" fill="#F0FF49"></path>
                                    <path d="M12.6717 39.8148C12.6717 32.616 15.5314 25.7121 20.6216 20.6219C25.7119 15.5316 32.6158 12.6719 39.8145 12.6719C47.0133 12.6719 53.9172 15.5316 59.0074 20.6219C64.0977 25.7121 66.9574 32.616 66.9574 39.8147L53.386 39.8148C53.386 36.2154 51.9561 32.7634 49.411 30.2183C46.8659 27.6732 43.4139 26.2433 39.8145 26.2433C36.2152 26.2433 32.7632 27.6732 30.2181 30.2183C27.673 32.7635 26.2431 36.2154 26.2431 39.8148L12.6717 39.8148Z" fill="#1E1E1E"></path>
                                </svg>
                                <div>
                                    <h2 class="card-title--medium mb-1"><a href="app-profile.html" class="text-black">FISCO SARL</a></h2>
                                    <span class="text-primary">Highspeed Studios</span>
                                </div>
                            </div>

                            <div class="mt-3">
                                <a href="/" class="btn btn-sm btn-primary rounded me-2">Acceder</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required vendors -->
    <script src="assets/vendor/global/global.min.js"></script>
    <script src="assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/js/custom.min.js"></script>
    <script src="assets/js/deznav-init.js"></script>
    <script src="assets/js/demo.js"></script>


</body>

</html><?php /**PATH C:\Users\Delimond\Documents\DEVFOLDER\PHP\erpa-v2\src\Views/dbselect.blade.php ENDPATH**/ ?>