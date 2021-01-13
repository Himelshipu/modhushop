@extends('layouts.admin.main')
@section('content')

<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i>Products</h1>
        <p></p>
      </div>
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active"><a href="#">All products</a></li>
      </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th style="width:10%">Serial</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td><img src="" alt="" height="60"></td>
                          <td>Edinburgh</td>
                          <td>Premium</td>
                          <td>Active</td>
                          <td>
                             <a href="{{ 'product-details' }}">  <i class="fa fa-eye" aria-hidden="true"></i> </a> &nbsp; &nbsp;
                             <a href="{{'featured-products'}}" class="demoSwal"> <i class="fa fa-trash text-danger" aria-hidden="true"></i></a>  &nbsp; &nbsp;
                              <a href="{{ 'product-details' }}">  <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                          </td>
                       </tr>

                       <tr>
                          <td>1</td>
                          <td><img src="" alt="" height="60"></td>
                          <td>Edinburgh</td>
                          <td>Premium</td>
                          <td>Active</td>
                          <td>
                             <a href="{{ 'product-details' }}">  <i class="fa fa-eye" aria-hidden="true"></i> </a> &nbsp; &nbsp;
                             <a href="{{'featured-products'}}" class="demoSwal"> <i class="fa fa-trash text-danger" aria-hidden="true"></i></a>  &nbsp; &nbsp;
                              <a href="{{ 'product-details' }}">  <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                          </td>
                       </tr>

                       <tr>
                          <td>1</td>
                          <td><img src="" alt="" height="60"></td>
                          <td>Edinburgh</td>
                          <td>Premium</td>
                          <td>Active</td>
                          <td>
                             <a href="{{ 'product-details' }}">  <i class="fa fa-eye" aria-hidden="true"></i> </a> &nbsp; &nbsp;
                             <a href="{{'featured-products'}}" class="demoSwal"> <i class="fa fa-trash text-danger" aria-hidden="true"></i></a>  &nbsp; &nbsp;
                              <a href="{{ 'product-details' }}">  <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                          </td>
                       </tr>

                       <tr>
                          <td>1</td>
                          <td><img src="" alt="" height="60"></td>
                          <td>Edinburgh</td>
                          <td>Premium</td>
                          <td>Active</td>
                          <td>
                             <a href="{{ 'product-details' }}">  <i class="fa fa-eye" aria-hidden="true"></i> </a> &nbsp; &nbsp;
                             <a href="{{'featured-products'}}" class="demoSwal"> <i class="fa fa-trash text-danger" aria-hidden="true"></i></a>  &nbsp; &nbsp;
                              <a href="{{ 'product-details' }}">  <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                          </td>
                       </tr>


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>


@endsection
