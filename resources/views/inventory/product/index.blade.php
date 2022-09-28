@extends('inventory.layout') 
@section('title', 'Products')
@section('content')

	<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-headphones bg-green"></i>
                        <div class="d-inline">
                            <h5>Productos</h5>
                            <span>Ver, eliminar y actualizar productos</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/dashboard"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Productos</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- list layout 1 start -->
            <div class="col-md-12">
				<div class="card">
		            <div class="card-header row">
		                <div class="col col-sm-1">
		                    <div class="card-options d-inline-block">
		                        <div class="dropdown d-inline-block">
		                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-more-horizontal"></i></a>
		                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="moreDropdown">
		                                <a class="dropdown-item" href="#">Delete</a>
		                                <a class="dropdown-item" href="#">More Action</a>
		                            </div>
		                        </div>
		                    </div>
		                    
		                </div>
		                <div class="col col-sm-6">
		                    <div class="card-search with-adv-search dropdown">
		                        <form action="">
		                            <input type="text" class="form-control global_filter" id="global_filter" placeholder="Search.." required="">
		                            <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
		                            <button type="button" id="adv_wrap_toggler_1" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
		                            <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler_1">
		                                <div class="row">
		                                    <div class="col-md-12">
		                                        <div class="form-group">
		                                            <input type="text" class="form-control column_filter" id="col0_filter" placeholder="Titulo" data-column="0">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <input type="text" class="form-control column_filter" id="col1_filter" placeholder="Precio" data-column="1">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <input type="text" class="form-control column_filter" id="col2_filter" placeholder="SKU" data-column="2">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-4">
		                                        <div class="form-group">
		                                            <input type="text" class="form-control column_filter" id="col3_filter" placeholder="Qty" data-column="3">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-4">
		                                        <div class="form-group">
		                                            <input type="text" class="form-control column_filter" id="col4_filter" placeholder="Categoria" data-column="4">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-4">
		                                        <div class="form-group">
		                                            <input type="text" class="form-control column_filter" id="col5_filter" placeholder="Tag" data-column="5">
		                                        </div>
		                                    </div>
		                                </div>
		                                <button class="btn btn-theme">Buscar en</button>
		                            </div>
		                        </form>
		                    </div>
		                </div>
		                <div class="col col-sm-5">
		                    <div class="card-options text-right">
		                        <span class="mr-5" id="top">1 - 50 of 2,500</span>
		                        <a href="#"><i class="ik ik-chevron-left"></i></a>
		                        <a href="#"><i class="ik ik-chevron-right"></i></a>
			                    <a href="{{route('inventory.product.create')}}" class=" btn btn-outline-primary btn-semi-rounded ">Añadir producto</a>
		                    </div>
		                </div>
		            </div>
		            <div class="card-body">
		                <table id="products_table" class="table"> class
		                    <thead>
		                        <tr>
		                            <th class="nosort" width="10">
		                                <label class="custom-control custom-checkbox m-0">
		                                    <input type="checkbox" class="custom-control-input" id="selectall" name="" value="option2">
		                                    <span class="custom-control-label">&nbsp;</span>
		                                </label>
		                            </th>
		                            <th class="nosort">Imagen</th>
		                            <th>Nombre</th>
		                            <th>SKU</th>
		                            <th>Categorias</th>
		                            <th>Precio</th>
		                            <th>Precio de compra</th>
		                            <th>En stock</th>
		                            <th>Action</th>
		                        </tr>
		                    </thead>
		                    <tbody>
		                    	<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/manzana.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Manzana</td>
		                    		<td>MN1F</td>
		                    		<td>
		                    			Frutas,
		                    		</td>
		                    		<td>100</td>
		                    		<td>90</td>
		                    		<td>50</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="#"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
		                    	<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/ipone-6.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Naranja</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Frutas,
		                    		</td>
		                    		<td>5000</td>
		                    		<td>4850</td>
		                    		<td>55</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/2/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
		                    	<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/bag.webp" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Platano</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Frutas,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>10</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/3/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
		                    	<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/camera.webp" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Papaya</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Frutas,
		                    		</td>
		                    		<td>100</td>
		                    		<td>90</td>
		                    		<td>50</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/4/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
		                    	<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/joystick.webp" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Cebolla</td>
		                    		<td>EH1234</td>
		                    		<td>
									    Verduras,
		                    		</td>
		                    		<td>5000</td>
		                    		<td>4850</td>
		                    		<td>10</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/5/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
		                    	<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/jacket.webp" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Tomate</td>
		                    		<td>EH1234</td>
		                    		<td>
									    Verduras,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/6/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
		                    	<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/watch.webp" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Rabanito</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Verduras,
		                    		</td>
		                    		<td>100</td>
		                    		<td>90</td>
		                    		<td>50</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/7/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
		                    	<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/tshirt.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Mantequilla</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Lacteos,
		                    		</td>
		                    		<td>5500</td>
		                    		<td>4850</td>
		                    		<td>10</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/8/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
		                    	<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Leche Evaporada</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Lacteos,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>

								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Yogurt</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Lacteos,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>

								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Pollo</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Carnes,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>

								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Atun en grated</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Carnes,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>

								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Nuggets</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Carnes,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Helados</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Congelados,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>

								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Hamburguesas </td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Congelados,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Alitas</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Congelados,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>

								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Agua cielo de 7L</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Bebidas,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>

								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Gaesosa Guarana 3L</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Bebidas,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>

								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Frujos del Valle chica</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Bebidas,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>

								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Pan molde integral</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Panaderia,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>

								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Torta de chocolate</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Pasteleria,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>

								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Empanada de pollo</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Panaderia,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>

								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Aceite de 1L</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Abarrotes,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Azucar</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Abarrotes,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Arroz</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Abarrotes,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Lejia</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Limpieza,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Escoba</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Limpieza,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Detergente</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Limpieza,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Recogedor</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Limpieza,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Ibuprofeno</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Medicina,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Amoxicilina</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Medicina,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Paracetamol</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Medicina,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Algodon</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Medicina,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Galletas</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Dulceria,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Bombones</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Dulceria,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Chocolates</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Dulceria,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Pañales</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Cuidados de Bebes,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Toallas Humedas</td>
		                    		<td>EH1234</td>
		                    		<td>
									    Cuidados de Bebes,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Formula</td>
		                    		<td>EH1234</td>
		                    		<td>
									Cuidados de Bebes,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Talco</td>
		                    		<td>EH1234</td>
		                    		<td>
									    Cuidados de Bebes,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Filete de Truchas</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Mariscos,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Langostino precocido</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Mariscos,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Filete de Salmon</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Mariscos,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Comida de gatos</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Macotas,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Comida de perros</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Mascotas,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Shampoo antipulgas</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Mascotas,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Collar antipulgas</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Mascotas,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Cuaderno Rayado</td>
		                    		<td>EH1234</td>
		                    		<td>
		                    			Utiles Escolares,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Lapiceros</td>
		                    		<td>EH1234</td>
		                    		<td>
									    Utiles Escolares,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Borrador</td>
		                    		<td>EH1234</td>
		                    		<td>
									    Utiles Escolares,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Mochila</td>
		                    		<td>EH1234</td>
		                    		<td>
									    Utiles Escolares,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>
								<tr>
		                    		<td>
		                    			<label class="custom-control custom-checkbox">
		                    				<input type="checkbox" class="custom-control-input select_all_child" id="" name="" value="option2">
		                    				<span class="custom-control-label">&nbsp;</span>
		                    			</label>
		                    		</td>
		                    		<td>
		                    			<img src="/img/products/helmet.jpg" class="table-user-thumb" alt="">
		                    		</td>
		                    		<td>Cartuchera</td>
		                    		<td>EH1234</td>
		                    		<td>
									    Utiles Escolares,
		                    		</td>
		                    		<td>500</td>
		                    		<td>450</td>
		                    		<td>100</td>
		                    		<td>
		                    			<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye f-16 mr-15"></i></a>
		                    			<a href="/products/9/edit"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
		                    			<a href="#!"><i class="ik ik-trash-2 f-16 text-red"></i></a>
		                    		</td>
		                    	</tr>

		                    </tbody>
		                </table>
		            </div>
		        </div>
		    </div>
		    <!-- list layout 1 end -->
		    <div class="col-md-12"><hr></div>
		    <!-- list layout 2 -->
		    <div class="col-md-12">
                <div class="mb-2 clearfix">
                    <a class="btn pt-0 pl-0 d-md-none d-lg-none" data-toggle="collapse" href="#displayOptions" role="button" aria-expanded="true" aria-controls="displayOptions">
                        Display Options
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
                                <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Orden de
                                    <i class="ik ik-chevron-down mr-0 align-middle"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </div>
                            </div>
                            <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                <form action="">
                                    <input type="text" class="form-control" placeholder="Search.." required="">
                                    <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
                                    <button type="button" id="adv_wrap_toggler" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                    <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nombre Completo">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                        <button class="btn btn-theme">Busque en</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="float-md-right">
                            <span class="text-muted text-small mr-2">Displaying 1-10 of 210 items </span>
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
                            <a href="/products/create" class="btn btn-outline-primary btn-rounded-20">
                            Añadir producto
                            </a>
                        </div>
                    </div>
                </div>
                <div class="separator mb-20"></div>

                <div class="row layout-wrap" id="layout-wrap">
                	
                	<div class="col-xl-3 col-lg-4 col-12 col-sm-6 mb-4 list-item list-item-grid">
                		<div class="card d-flex flex-row mb-3">
                			<a class="d-flex card-img" href="#productView" data-toggle="modal" data-target="#productView">
                				<img src="/img/products/headphone.webp" alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">

                			</a>
                			<div class="d-flex flex-grow-1 min-width-zero card-content">
                				<div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                					<a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#productView" data-toggle="modal" data-target="#productView">
                						<b>Manzana </b><br>
                						SKU: EH1234
                					</a>
                					<p class="mb-1 text-muted text-small category w-15 w-xs-100">
                						Frutas,
                					</p>
                					<p class="mb-1 text-muted text-small date w-15 w-xs-100">$ 100</p>
                					<div class="w-15 w-xs-100">
                						<span class="badge badge-pill badge-secondary">50</span>
                					</div>
                				</div>
                				<div class="list-actions">
                					<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye"></i></a>
                					<a href="/products/1/edit"><i class="ik ik-edit-2"></i></a>
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
                			<a class="d-flex card-img" href="#productView" data-toggle="modal" data-target="#productView">
                				<img src="/img/products/ipone-6.jpg" alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">

                				<span class="badge badge-pill badge-success position-absolute badge-top-left">Offer</span>
                				<span class="badge badge-pill badge-danger position-absolute badge-top-left-2">Stock Alert</span>
                			</a>
                			<div class="d-flex flex-grow-1 min-width-zero card-content">
                				<div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                					<a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#productView" data-toggle="modal" data-target="#productView">
                						<b>Iphone 6 </b><br>
                						SKU: EH1234
                					</a>
                					<p class="mb-1 text-muted text-small category w-15 w-xs-100">
                						Electronics,
                						Others,
                					</p>
                					<p class="mb-1 text-muted text-small date w-15 w-xs-100">$ 5000</p>
                					<div class="w-15 w-xs-100">
                						<span class="badge badge-pill badge-secondary">1</span>
                					</div>
                				</div>
                				<div class="list-actions">
                					<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye"></i></a>
                					<a href="/products/2/edit"><i class="ik ik-edit-2"></i></a>
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
                			<a class="d-flex card-img" href="#productView" data-toggle="modal" data-target="#productView">
                				<img src="/img/products/bag.webp" alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">

                			</a>
                			<div class="d-flex flex-grow-1 min-width-zero card-content">
                				<div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                					<a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#productView" data-toggle="modal" data-target="#productView">
                						<b>Leather Bag </b><br>
                						SKU: EH1234
                					</a>
                					<p class="mb-1 text-muted text-small category w-15 w-xs-100">
                						Fashion,
                					</p>
                					<p class="mb-1 text-muted text-small date w-15 w-xs-100">$ 500</p>
                					<div class="w-15 w-xs-100">
                						<span class="badge badge-pill badge-secondary">100</span>
                					</div>
                				</div>
                				<div class="list-actions">
                					<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye"></i></a>
                					<a href="/products/3/edit"><i class="ik ik-edit-2"></i></a>
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
                			<a class="d-flex card-img" href="#productView" data-toggle="modal" data-target="#productView">
                				<img src="/img/products/camera.webp" alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">

                			</a>
                			<div class="d-flex flex-grow-1 min-width-zero card-content">
                				<div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                					<a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#productView" data-toggle="modal" data-target="#productView">
                						<b>Camera </b><br>
                						SKU: EH1234
                					</a>
                					<p class="mb-1 text-muted text-small category w-15 w-xs-100">
                						Electronics,
                						Computers,
                					</p>
                					<p class="mb-1 text-muted text-small date w-15 w-xs-100">$ 100</p>
                					<div class="w-15 w-xs-100">
                						<span class="badge badge-pill badge-secondary">50</span>
                					</div>
                				</div>
                				<div class="list-actions">
                					<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye"></i></a>
                					<a href="/products/4/edit"><i class="ik ik-edit-2"></i></a>
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
                			<a class="d-flex card-img" href="#productView" data-toggle="modal" data-target="#productView">
                				<img src="/img/products/joystick.webp" alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">

                				<span class="badge badge-pill badge-success position-absolute badge-top-left">Offer</span>
                			</a>
                			<div class="d-flex flex-grow-1 min-width-zero card-content">
                				<div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                					<a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#productView" data-toggle="modal" data-target="#productView">
                						<b>Joystick </b><br>
                						SKU: EH1234
                					</a>
                					<p class="mb-1 text-muted text-small category w-15 w-xs-100">
                						Electronics,
                						Computers,
                					</p>
                					<p class="mb-1 text-muted text-small date w-15 w-xs-100">$ 5000</p>
                					<div class="w-15 w-xs-100">
                						<span class="badge badge-pill badge-secondary">10</span>
                					</div>
                				</div>
                				<div class="list-actions">
                					<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye"></i></a>
                					<a href="/products/5/edit"><i class="ik ik-edit-2"></i></a>
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
                			<a class="d-flex card-img" href="#productView" data-toggle="modal" data-target="#productView">
                				<img src="/img/products/jacket.webp" alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">

                				<span class="badge badge-pill badge-success position-absolute badge-top-left">Offer</span>
                			</a>
                			<div class="d-flex flex-grow-1 min-width-zero card-content">
                				<div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                					<a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#productView" data-toggle="modal" data-target="#productView">
                						<b>Jacket </b><br>
                						SKU: EH1234
                					</a>
                					<p class="mb-1 text-muted text-small category w-15 w-xs-100">
                						Fashion,
                					</p>
                					<p class="mb-1 text-muted text-small date w-15 w-xs-100">$ 500</p>
                					<div class="w-15 w-xs-100">
                						<span class="badge badge-pill badge-secondary">100</span>
                					</div>
                				</div>
                				<div class="list-actions">
                					<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye"></i></a>
                					<a href="/products/6/edit"><i class="ik ik-edit-2"></i></a>
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
                			<a class="d-flex card-img" href="#productView" data-toggle="modal" data-target="#productView">
                				<img src="/img/products/watch.webp" alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">

                			</a>
                			<div class="d-flex flex-grow-1 min-width-zero card-content">
                				<div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                					<a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#productView" data-toggle="modal" data-target="#productView">
                						<b>Smart Watch </b><br>
                						SKU: EH1234
                					</a>
                					<p class="mb-1 text-muted text-small category w-15 w-xs-100">
                						Electronics,
                						Computers,
                					</p>
                					<p class="mb-1 text-muted text-small date w-15 w-xs-100">$ 100</p>
                					<div class="w-15 w-xs-100">
                						<span class="badge badge-pill badge-secondary">50</span>
                					</div>
                				</div>
                				<div class="list-actions">
                					<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye"></i></a>
                					<a href="/products/7/edit"><i class="ik ik-edit-2"></i></a>
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
                			<a class="d-flex card-img" href="#productView" data-toggle="modal" data-target="#productView">
                				<img src="/img/products/tshirt.jpg" alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">

                				<span class="badge badge-pill badge-success position-absolute badge-top-left">Offer</span>
                			</a>
                			<div class="d-flex flex-grow-1 min-width-zero card-content">
                				<div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                					<a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#productView" data-toggle="modal" data-target="#productView">
                						<b>T-shirt </b><br>
                						SKU: EH1234
                					</a>
                					<p class="mb-1 text-muted text-small category w-15 w-xs-100">
                						Electronics,
                						Computers,
                					</p>
                					<p class="mb-1 text-muted text-small date w-15 w-xs-100">$ 5500</p>
                					<div class="w-15 w-xs-100">
                						<span class="badge badge-pill badge-secondary">10</span>
                					</div>
                				</div>
                				<div class="list-actions">
                					<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye"></i></a>
                					<a href="/products/8/edit"><i class="ik ik-edit-2"></i></a>
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
                			<a class="d-flex card-img" href="#productView" data-toggle="modal" data-target="#productView">
                				<img src="/img/products/helmet.jpg" alt="Donec sit amet est at sem iaculis aliquam." class="list-thumbnail responsive border-0">

                			</a>
                			<div class="d-flex flex-grow-1 min-width-zero card-content">
                				<div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                					<a class="list-item-heading mb-1 truncate w-40 w-xs-100" href="#productView" data-toggle="modal" data-target="#productView">
                						<b>Helmet </b><br>
                						SKU: EH1234
                					</a>
                					<p class="mb-1 text-muted text-small category w-15 w-xs-100">
                						Fashion,
                					</p>
                					<p class="mb-1 text-muted text-small date w-15 w-xs-100">$ 500</p>
                					<div class="w-15 w-xs-100">
                						<span class="badge badge-pill badge-secondary">100</span>
                					</div>
                				</div>
                				<div class="list-actions">
                					<a href="#productView" data-toggle="modal" data-target="#productView"><i class="ik ik-eye"></i></a>
                					<a href="/products/9/edit"><i class="ik ik-edit-2"></i></a>
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
            <!-- list layout 2 end -->
		</div>
	</div>
	<div class="modal fade edit-layout-modal pr-0" id="productView" tabindex="-1" role="dialog" aria-labelledby="productViewLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productViewLabel">Iphone 6</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-4">
                        <img src="../img/products/ipone-6.jpg" class="img-fluid" alt="">
                        <div class="other-images">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="../img/widget/p2.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-sm-4">
                                    <img src="../img/widget/p2.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="col-sm-4">
                                    <img src="../img/widget/p2.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <p>
                            </p><div class="badge badge-pill badge-dark">Electronics</div>
                            <div class="badge badge-pill badge-dark">Accesories &amp; Gadgets</div>
                        <p></p>
                        <h3 class="text-danger">
                            $ 1234
                            <del class="text-muted f-16">$ 1250</del>
                        </h3>
                        <p class="text-green">Purchase Price: $ 1000</p>
                        <p>Apple iPhone 6 smartphone. Announced Sep 2014. Features 4.7″ display, Apple A8 chipset, 8 MP primary camera, 1.2 MP front camera, 1810 mAh</p>
                        <p>In Stock: 100</p>
                        <p>Spplier: PZ Tech</p>
                    </div>
                </div>
                <h5><strong>Sales</strong></h5>
                <div id="line_chart" class="chart-shadow"></div>
                        
            </div>
        </div>
    </div>

	@push('script')                
        <script src="{{ asset('plugins/amcharts/amcharts.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/gauge.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/serial.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/themes/light.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/animate.min.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/pie.js') }}"></script>
        <script src="{{ asset('plugins/ammap3/ammap/ammap.js') }}"></script>
        <script src="{{ asset('plugins/ammap3/ammap/maps/js/usaLow.js') }}"></script>
        <script src="{{ asset('js/product.js') }}"></script>
		 @endpush
@endsection
