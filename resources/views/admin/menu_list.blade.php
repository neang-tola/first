@extends('layout.master_admin')
@section('main_content')
              <!--overview start-->
          <div class="row">
            <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-th-list"></i>Manage Menu</li>
            </ol>
            </div>
          </div>
              
             <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Responsive tables
                          </header>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Table heading</th>
                                  <th>Table heading</th>
                                  <th>Table heading</th>
                                  <th>Table heading</th>
                                  <th>Table heading</th>
                                  <th>Table heading</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Table cell</td>
                                  <td>Table cell</td>
                                  <td>Table cell</td>
                                  <td>Table cell</td>
                                  <td>Table cell</td>
                                  <td>Table cell</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td>Table cell</td>
                                  <td>Table cell</td>
                                  <td>Table cell</td>
                                  <td>Table cell</td>
                                  <td>Table cell</td>
                                  <td>Table cell</td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Table cell</td>
                                  <td>Table cell</td>
                                  <td>Table cell</td>
                                  <td>Table cell</td>
                                  <td>Table cell</td>
                                  <td>Table cell</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                      </section>
                  </div>
              </div>
@endsection