@extends('layouts.app')

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between flex-wrap">
            <div>
                <h3 class="mb-1 font-w600 main-text">Bienvenue,Gaston delimond</h3>
                <p>Vous êtes connectés entnt que Comptable .</p>
            </div>
            <div class="mb-sm-0 mb-3">
                <!-- <a href="javascript:void(0);" class="btn btn-primary btn-sm me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">New Invoice</a>
                <a href="javascript:void(0);" class="btn btn-primary light btn-sm">TRANSFER</a> -->
                <div class="card">
                    <div class="card-body p-3">
                        <img src="assets/images/logo-full.png" height="40">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body p-3">
                                <div class="adrees-bx border-0">
									<ul>
										<li class="border-0 fs-16 text-primary-emphasis fw-medium"><a href="#"><i class="flaticon-location"></i>
											</a>03, Bismarck, Q. Golf. Commune de la Gombe
                                        </li>
									</ul>
								</div>
                            </div>
                            <div class="card-body py-3 transaction-details d-flex flex-wrap justify-content-between align-items-center">
                                <div class="user-bx-2 me-3">
                                    <img src="assets/images/avatar/1.jpg" class="" alt="">
                                    <div>
                                        <h5 class="mb-1">Gaston delimond</h5>
                                        <small>@richardmichael</small>
                                    </div>
                                </div>
                                <div class="me-3">
                                    <p class="mb-2">RCCM</p>
                                    <h5 class="mb-0">ABE/2544 KIN RDC</h5>
                                </div>
                                <div class="me-3">
                                    <p class="mb-2">ID NAT</p>
                                    <h5 class="mb-0">5457/DJDZ 94903</h5>
                                </div>
                                <div class="me-3">
                                    <p class="mb-2">STATUT</p>
                                    <h5 class="mb-0">SARL</h5>
                                </div>
                                <div class="amount-bx border mt-xl-0 mt-3">
                                    <i class="fas fa-dollar-sign"></i>
                                    <div>
                                        <div class="mb-0"><input type="text" class="form-control" value="2850"></h>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card text-white text-black">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0 fw-bold">Invitations disponible</span></li>
                                            <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Dr Theodore Handle </span><strong>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
                                                            <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </strong>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header d-sm-flex d-flex border-0">
                                            <div class="me-auto mb-sm-0 mb-4">
                                                <h4 class="card-title">Liste des invitations</h4>
                                                <span class="fs-14">Code de l'entreprise : 142</span>
                                            </div>
                                            <form action="" class="d-flex">
                                                <input type="text" class="form-control me-2" placeholder="Entre le code de l'Entreprise">
                                                <button type="submit" class="btn btn-primary">Envoyer</button>
                                            </form>
                                        </div>
                                        <div class="card-body p-0 pb-4">
                                            @for ($i=0; $i<5; $i++)
                                            <div class="d-flex border-bottom justify-content-between flex-wrap align-items-center card-type">
                                                <div class="d-flex py-1 align-items-center ">
                                                    <div class="me-3">
                                                        <small class="mb-1 d-block">Description</small>
                                                        <h6 class="mb-0 card-title--medium">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h6>
                                                    </div>
                                                </div>
                                                <a href="javascript:void(0);" class="badge badge-success light badge-sm">See Number</a>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
                                                            <svg width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                                    <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                                    <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                                                </g>
                                                            </svg>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                            </div>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection