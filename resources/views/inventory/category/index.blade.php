@extends('inventory.layout') 
@section('title', 'Categories')
@section('content')
    <!-- push external head elements to head --> 
    <div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-list bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Categorias')}}</h5>
                            <span>Aqui se muestras nuestros productos</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">{{ __('Categorias')}}</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- start message area-->
            @include('include.message')
            <!-- end message area-->
            <div class="col-md-12">
                <div class="mb-2 clearfix">
                    <a class="btn pt-0 pl-0 d-md-none d-lg-none" data-toggle="collapse" href="#displayOptions" role="button" aria-expanded="true" aria-controls="displayOptions">
                        {{ __('Display Options')}}
                        <i class="ik ik-chevron-down align-middle"></i>
                    </a>
                    <div class="collapse d-md-block display-options" id="displayOptions">
                        <span class="mr-3 d-inline-block float-md-left dispaly-option-buttons">
                            <a href="#" class="mr-1 view-thumb ">
                                <i class="ik ik-list view-icon"></i>
                            </a>
                            <a href="#" class="mr-1 view-grid active">
                                <i class="ik ik-grid view-icon"></i>
                            </a>
                        </span>
                        <div class="d-block d-md-inline-block">
                            <div class="btn-group float-md-left mr-1 mb-1">
                                <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('
                                    Ordenar por')}} 
                                    <i class="ik ik-chevron-down mr-0 align-middle"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">{{ __('DESC')}}</a>
                                    <a class="dropdown-item" href="#">{{ __('ASC')}}</a>
                                </div>
                            </div>
                            <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                <form action="">
                                    <input type="text" class="form-control" placeholder="Buscar..." required>
                                    <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                                    <button type="button" id="adv_wrap_toggler" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Título de la categoría">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Código de categoría">
                                        </div>
                                        <button class="btn btn-theme">{{ __('Buscar en')}}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="float-md-right">
                            <span class="text-muted text-small mr-2">{{ __('Displaying 1-10 of 210 items')}} </span>
                            <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                20
                                <i class="ik ik-chevron-down mr-0 align-middle"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">10</a>
                                <a class="dropdown-item" href="#">20</a>
                                <a class="dropdown-item" href="#">30</a>
                                <a class="dropdown-item" href="#">50</a>
                                <a class="dropdown-item" href="#">100</a>
                            </div>
                            <button class="btn btn-outline-primary btn-rounded-20" href="#categoryAdd" data-toggle="modal" data-target="#categoryAdd">
                            Añadir categoría
                            </button>
                        </div>
                    </div>
                </div>
                <div class="separator mb-20"></div>

                <div class="row layout-wrap" id="layout-wrap">
                    
                    <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4 list-item list-item-grid">
                        <div class="card d-flex flex-row mb-3">
                            <a class="d-flex card-img" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                <img src=" ../img/portfolio-2.jpg " alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">
                                
                                
                                <span class="badge badge-pill badge-success position-absolute badge-top-left">71 items</span>
                            </a>
                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center mb-0">
                                    <a class="mb-1 list-item-heading  truncate w-40 w-xs-100" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                        <b>Frutas
                                        </b> 
                                        <span class="text-muted">
                                        </span>
                                        
                                    </a>
                                    <p class="mb-1 text-muted text-small date w-15 w-xs-100">
                                        CAT1
                                    </p>
                                    <div class="w-15 w-xs-100">
                                        <span class="badge badge-pill badge-secondary">51</span>
                                    </div>
                                </div>
                                <div class="list-actions">
                                    <a href="#categoryView" data-toggle="modal" data-target="#categoryView"><i class="ik ik-edit-2"></i></a>
                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                </div>
                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4 list-item list-item-grid">
                        <div class="card d-flex flex-row mb-3">
                            <a class="d-flex card-img" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                <img src=" ../img/portfolio-3.jpg " alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">
                                
                                
                                <span class="badge badge-pill badge-success position-absolute badge-top-left">60 items</span>
                            </a>
                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center mb-0">
                                    <a class="mb-1 list-item-heading  truncate w-40 w-xs-100" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                        <b>Verduras
                                        </b> 
                                        
                                    </a>
                                    <p class="mb-1 text-muted text-small date w-15 w-xs-100">
                                        CAT2
                                    </p>
                                    <div class="w-15 w-xs-100">
                                        <span class="badge badge-pill badge-secondary">71</span>
                                    </div>
                                </div>
                                <div class="list-actions">
                                    <a href="#categoryView" data-toggle="modal" data-target="#categoryView"><i class="ik ik-edit-2"></i></a>
                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                </div>
                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4 list-item list-item-grid">
                        <div class="card d-flex flex-row mb-3">
                            <a class="d-flex card-img" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                <img src=" ../img/portfolio-3.jpg " alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">
                                
                                
                                <span class="badge badge-pill badge-success position-absolute badge-top-left">60 items</span>
                            </a>
                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center mb-0">
                                    <a class="mb-1 list-item-heading  truncate w-40 w-xs-100" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                        <b>Lacteos
                                        </b> 
                                       
                                        
                                    </a>
                                    <p class="mb-1 text-muted text-small date w-15 w-xs-100">
                                        CAT3
                                    </p>
                                    <div class="w-15 w-xs-100">
                                        <span class="badge badge-pill badge-secondary">71</span>
                                    </div>
                                </div>
                                <div class="list-actions">
                                    <a href="#categoryView" data-toggle="modal" data-target="#categoryView"><i class="ik ik-edit-2"></i></a>
                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                </div>
                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    
                    <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4 list-item list-item-grid">
                        <div class="card d-flex flex-row mb-3">
                            <a class="d-flex card-img" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                <img src=" ../img/portfolio-3.jpg " alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">
                                
                                
                                <span class="badge badge-pill badge-success position-absolute badge-top-left">99 items</span>
                            </a>
                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center mb-0">
                                    <a class="mb-1 list-item-heading  truncate w-40 w-xs-100" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                        <b>Carnes 
                                        </b> 
                                        <span class="text-muted">
                                        </span>
                                        
                                    </a>
                                    <p class="mb-1 text-muted text-small date w-15 w-xs-100">
                                        CAT4
                                    </p>
                                    <div class="w-15 w-xs-100">
                                        <span class="badge badge-pill badge-secondary">27</span>
                                    </div>
                                </div>
                                <div class="list-actions">
                                    <a href="#categoryView" data-toggle="modal" data-target="#categoryView"><i class="ik ik-edit-2"></i></a>
                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                </div>
                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4 list-item list-item-grid">
                        <div class="card d-flex flex-row mb-3">
                            <a class="d-flex card-img" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                <img src=" ../img/portfolio-3.jpg " alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">
                                
                                
                                <span class="badge badge-pill badge-success position-absolute badge-top-left">99 items</span>
                            </a>
                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center mb-0">
                                    <a class="mb-1 list-item-heading  truncate w-40 w-xs-100" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                        <b>Congelados
                                        </b> 
                                        <span class="text-muted">
                                        </span>
                                        
                                    </a>
                                    <p class="mb-1 text-muted text-small date w-15 w-xs-100">
                                        CAT5
                                    </p>
                                    <div class="w-15 w-xs-100">
                                        <span class="badge badge-pill badge-secondary">27</span>
                                    </div>
                                </div>
                                <div class="list-actions">
                                    <a href="#categoryView" data-toggle="modal" data-target="#categoryView"><i class="ik ik-edit-2"></i></a>
                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                </div>
                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4 list-item list-item-grid">
                        <div class="card d-flex flex-row mb-3">
                            <a class="d-flex card-img" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                <img src=" ../img/portfolio-3.jpg " alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">
                                
                                
                                <span class="badge badge-pill badge-success position-absolute badge-top-left">99 items</span>
                            </a>
                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center mb-0">
                                    <a class="mb-1 list-item-heading  truncate w-40 w-xs-100" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                        <b>Bebidas
                                        </b> 
                                        <span class="text-muted">
                                        </span>
                                        
                                    </a>
                                    <p class="mb-1 text-muted text-small date w-15 w-xs-100">
                                        CAT6
                                    </p>
                                    <div class="w-15 w-xs-100">
                                        <span class="badge badge-pill badge-secondary">27</span>
                                    </div>
                                </div>
                                <div class="list-actions">
                                    <a href="#categoryView" data-toggle="modal" data-target="#categoryView"><i class="ik ik-edit-2"></i></a>
                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                </div>
                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4 list-item list-item-grid">
                        <div class="card d-flex flex-row mb-3">
                            <a class="d-flex card-img" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                <img src=" ../img/portfolio-1.jpg " alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">
                                
                                
                                <span class="badge badge-pill badge-success position-absolute badge-top-left">99 items</span>
                            </a>
                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center mb-0">
                                    <a class="mb-1 list-item-heading  truncate w-40 w-xs-100" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                        <b>Panaderia
                                        </b> 
                                        <span class="text-muted">
                                        </span>
                                        
                                    </a>
                                    <p class="mb-1 text-muted text-small date w-15 w-xs-100">
                                        CAT7
                                    </p>
                                    <div class="w-15 w-xs-100">
                                        <span class="badge badge-pill badge-secondary">27</span>
                                    </div>
                                </div>
                                <div class="list-actions">
                                    <a href="#categoryView" data-toggle="modal" data-target="#categoryView"><i class="ik ik-edit-2"></i></a>
                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                </div>
                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4 list-item list-item-grid">
                        <div class="card d-flex flex-row mb-3">
                            <a class="d-flex card-img" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                <img src=" ../img/portfolio-3.jpg " alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">
                                
                                
                                <span class="badge badge-pill badge-success position-absolute badge-top-left">99 items</span>
                            </a>
                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center mb-0">
                                    <a class="mb-1 list-item-heading  truncate w-40 w-xs-100" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                        <b>Abarrotes
                                        </b> 
                                        <span class="text-muted">
                                        </span>
                                        
                                    </a>
                                    <p class="mb-1 text-muted text-small date w-15 w-xs-100">
                                        CAT8
                                    </p>
                                    <div class="w-15 w-xs-100">
                                        <span class="badge badge-pill badge-secondary">27</span>
                                    </div>
                                </div>
                                <div class="list-actions">
                                    <a href="#categoryView" data-toggle="modal" data-target="#categoryView"><i class="ik ik-edit-2"></i></a>
                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                </div>
                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4 list-item list-item-grid">
                        <div class="card d-flex flex-row mb-3">
                            <a class="d-flex card-img" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                <img src=" ../img/portfolio-3.jpg " alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">
                                
                                
                                <span class="badge badge-pill badge-success position-absolute badge-top-left">38 items</span>
                            </a>
                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center mb-0">
                                    <a class="mb-1 list-item-heading  truncate w-40 w-xs-100" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                        <b>Limpieza
                                        </b> 
                                        
                                    </a>
                                    <p class="mb-1 text-muted text-small date w-15 w-xs-100">
                                        CAT9
                                    </p>
                                    <div class="w-15 w-xs-100">
                                        <span class="badge badge-pill badge-secondary">29</span>
                                    </div>
                                </div>
                                <div class="list-actions">
                                    <a href="#categoryView" data-toggle="modal" data-target="#categoryView"><i class="ik ik-edit-2"></i></a>
                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                </div>
                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4 list-item list-item-grid">
                        <div class="card d-flex flex-row mb-3">
                            <a class="d-flex card-img" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                <img src=" ../img/portfolio-3.jpg " alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">
                                
                                
                                <span class="badge badge-pill badge-success position-absolute badge-top-left">53 items</span>
                            </a>
                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center mb-0">
                                    <a class="mb-1 list-item-heading  truncate w-40 w-xs-100" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                        <b>Medicina
                                        </b> 
                                        <span class="text-muted">
                                        </span>
                                        
                                    </a>
                                    <p class="mb-1 text-muted text-small date w-15 w-xs-100">
                                        CAT10
                                    </p>
                                    <div class="w-15 w-xs-100">
                                        <span class="badge badge-pill badge-secondary">4</span>
                                    </div>
                                </div>
                                <div class="list-actions">
                                    <a href="#categoryView" data-toggle="modal" data-target="#categoryView"><i class="ik ik-edit-2"></i></a>
                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                </div>
                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4 list-item list-item-grid">
                        <div class="card d-flex flex-row mb-3">
                            <a class="d-flex card-img" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                <img src=" ../img/portfolio-3.jpg " alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">
                                
                                
                                <span class="badge badge-pill badge-success position-absolute badge-top-left">96 items</span>
                            </a>
                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center mb-0">
                                    <a class="mb-1 list-item-heading  truncate w-40 w-xs-100" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                        <b>Dulceria
                                        </b> 
                                        <span class="text-muted">
                                        </span>
                                        
                                    </a>
                                    <p class="mb-1 text-muted text-small date w-15 w-xs-100">
                                        CAT11
                                    </p>
                                    <div class="w-15 w-xs-100">
                                        <span class="badge badge-pill badge-secondary">53</span>
                                    </div>
                                </div>
                                <div class="list-actions">
                                    <a href="#categoryView" data-toggle="modal" data-target="#categoryView"><i class="ik ik-edit-2"></i></a>
                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                </div>
                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4 list-item list-item-grid">
                        <div class="card d-flex flex-row mb-3">
                            <a class="d-flex card-img" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                <img src=" ../img/portfolio-3.jpg " alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">
                                
                                
                                <span class="badge badge-pill badge-success position-absolute badge-top-left">30 items</span>
                            </a>
                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center mb-0">
                                    <a class="mb-1 list-item-heading  truncate w-40 w-xs-100" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                        <b>Cuidados de Bebes
                                        </b> 
                                        <span class="text-muted">
                                        </span>
                                        
                                    </a>
                                    <p class="mb-1 text-muted text-small date w-15 w-xs-100">
                                        CAT12
                                    </p>
                                    <div class="w-15 w-xs-100">
                                        <span class="badge badge-pill badge-secondary">54</span>
                                    </div>
                                </div>
                                <div class="list-actions">
                                    <a href="#categoryView" data-toggle="modal" data-target="#categoryView"><i class="ik ik-edit-2"></i></a>
                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                </div>
                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4 list-item list-item-grid">
                        <div class="card d-flex flex-row mb-3">
                            <a class="d-flex card-img" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                <img src=" ../img/portfolio-3.jpg " alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">
                                
                                
                                <span class="badge badge-pill badge-success position-absolute badge-top-left">84 items</span>
                            </a>
                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center mb-0">
                                    <a class="mb-1 list-item-heading  truncate w-40 w-xs-100" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                        <b>Mariscos
                                        </b> 
                                        <span class="text-muted">
                                        </span>
                                        
                                    </a>
                                    <p class="mb-1 text-muted text-small date w-15 w-xs-100">
                                        CAT13
                                    </p>
                                    <div class="w-15 w-xs-100">
                                        <span class="badge badge-pill badge-secondary">65</span>
                                    </div>
                                </div>
                                <div class="list-actions">
                                    <a href="#categoryView" data-toggle="modal" data-target="#categoryView"><i class="ik ik-edit-2"></i></a>
                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                </div>
                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4 list-item list-item-grid">
                        <div class="card d-flex flex-row mb-3">
                            <a class="d-flex card-img" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                <img src=" ../img/portfolio-3.jpg " alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">
                                
                                
                                <span class="badge badge-pill badge-success position-absolute badge-top-left">65 items</span>
                            </a>
                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center mb-0">
                                    <a class="mb-1 list-item-heading  truncate w-40 w-xs-100" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                        <b>Mascotas
                                        </b> 
                                      
                                    </a>
                                    <p class="mb-1 text-muted text-small date w-15 w-xs-100">
                                        CAT14
                                    </p>
                                    <div class="w-15 w-xs-100">
                                        <span class="badge badge-pill badge-secondary">65</span>
                                    </div>
                                </div>
                                <div class="list-actions">
                                    <a href="#categoryView" data-toggle="modal" data-target="#categoryView"><i class="ik ik-edit-2"></i></a>
                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                </div>
                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4 list-item list-item-grid">
                        <div class="card d-flex flex-row mb-3">
                            <a class="d-flex card-img" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                <img src=" ../img/portfolio-3.jpg " alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">
                                
                                
                                <span class="badge badge-pill badge-success position-absolute badge-top-left">65 items</span>
                            </a>
                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center mb-0">
                                    <a class="mb-1 list-item-heading  truncate w-40 w-xs-100" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                        <b>Bebidas Alcoholicas
                                        </b> 
                                      
                                    </a>
                                    <p class="mb-1 text-muted text-small date w-15 w-xs-100">
                                        CAT15
                                    </p>
                                    <div class="w-15 w-xs-100">
                                        <span class="badge badge-pill badge-secondary">65</span>
                                    </div>
                                </div>
                                <div class="list-actions">
                                    <a href="#categoryView" data-toggle="modal" data-target="#categoryView"><i class="ik ik-edit-2"></i></a>
                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                </div>
                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4 list-item list-item-grid">
                        <div class="card d-flex flex-row mb-3">
                            <a class="d-flex card-img" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                <img src=" ../img/portfolio-3.jpg " alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">
                                
                                
                                <span class="badge badge-pill badge-success position-absolute badge-top-left">38 items</span>
                            </a>
                            <div class="d-flex flex-grow-1 min-width-zero card-content">
                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center mb-0">
                                    <a class="mb-1 list-item-heading  truncate w-40 w-xs-100" href="#categoryView" data-toggle="modal" data-target="#categoryView">
                                        <b>Utiles Escolares
                                        </b>
                                        
                                    </a>
                                    <p class="mb-1 text-muted text-small date w-15 w-xs-100">
                                        CAT16
                                    </p>
                                    <div class="w-15 w-xs-100">
                                        <span class="badge badge-pill badge-secondary">29</span>
                                    </div>
                                </div>
                                <div class="list-actions">
                                    <a href="#categoryView" data-toggle="modal" data-target="#categoryView"><i class="ik ik-edit-2"></i></a>
                                    <a href="#" class="list-delete"><i class="ik ik-trash-2"></i></a>
                                </div>
                                <div class="custom-control custom-checkbox pl-1 align-self-center">
                                    <label class="custom-control custom-checkbox mb-0">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-label"></span>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>

    
    <!-- category add modal-->
    <div class="modal fade edit-layout-modal pr-0 " id="categoryAdd" tabindex="-1" role="dialog" aria-labelledby="categoryAddLabel" aria-hidden="true">
        <div class="modal-dialog w-300" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoryAddLabel">{{ __('Añadir categoría')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="d-block">Categoría Imagen</label>
                        <input type="file" name="category_image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="d-block">Título de la categoría</label>
                        <input type="text" name="category_title" class="form-control" placeholder="Enter Category Title">
                    </div>
                    <div class="form-group">
                        <label class="d-block">Código de categoría</label>
                        <input type="text" name="category_code" class="form-control" placeholder="Enter Category Code">
                    </div>
                    <div class="form-group">
                        
                        <label class="d-block">Categoría principal</label>
                        <select class="form-control select2 ">
                            <option selected="selected" value="" data-select2-id="3">Seleccione la categoría</option>
                            <option value="1">Frutas</option>
                            <option value="2">Verduras</option>
                            <option value="3">Lacteos</option>
                            <option value="4">Carnes</option>
                            <option value="5">Congelados</option>
                            <option value="6">Bebidas</option>
                            <option value="7">Panaderia</option>
                            <option value="8">Abarrotes</option>
                            <option value="9">Limpieza</option>
                            <option value="10">Medicina</option>
                            <option value="11">Dulceria</option>
                            <option value="12">Cuidados de Bebes</option>
                            <option value="13">Mariscos</option>
                            <option value="14">Mascotas</option>
                            <option value="15">Bebidas Alcoholicas</option>
                            <option value="16">Utiles Escolares</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="Save" value="Save">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- category edit modal -->
    <div class="modal fade edit-layout-modal pr-0 " id="categoryView" tabindex="-1" role="dialog" aria-labelledby="categoryViewLabel" aria-hidden="true">
        <div class="modal-dialog w-300" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoryViewLabel">{{ __('Editar categoría')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label class="d-block">Categoría Imagen</label>
                        <input type="file" name="category_image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="d-block">Título de la categoría</label>
                        <input type="text" name="category_title" class="form-control" placeholder="Enter Category Title" value="Computer" >
                    </div>
                    <div class="form-group">
                        <label class="d-block">Código de categoría</label>
                        <input type="text" name="category_code" class="form-control" placeholder="Enter Category Code" value="CAT12">
                    </div>
                    <div class="form-group">
                
                        {<label class="d-block">Categoría principal</label>
                        <select class="form-control select2 ">
                            <option selected="selected" value="" data-select2-id="5">Seleccione la categoría</option>
                            <option value="1">Frutas</option>
                            <option value="2">Verduras</option>
                            <option value="3">Lacteos</option>
                            <option value="4">Carnes</option>
                            <option value="5">Congelados</option>
                            <option value="6">Bebidas</option>
                            <option value="7">Panaderia</option>
                            <option value="8">Abarrotes</option>
                            <option value="9">Limpieza</option>
                            <option value="10">Medicina</option>
                            <option value="11">Dulceria</option>
                            <option value="12">Cuidados de Bebes</option>
                            <option value="13">Mariscos</option>
                            <option value="14">Mascotas</option>
                            <option value="15">Bebidas Alcoholicas</option>
                            <option value="16">Utiles Escolares</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="Update" value="Update">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection