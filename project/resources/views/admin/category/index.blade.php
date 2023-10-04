<x-admin.layouts.app>
    <x-slot name="head_tag">
        <title>Category</title>
    </x-slot>


    <div class="element-area">
        <div class="demo-view">
            <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                <div class="row">
                    <!-- Column starts -->
                    <div class="col-xl-12">
                        <div class="card dz-card" id="accordion-one">
                            <div class="card-header flex-wrap">
                                <div>
                                    <h4 class="card-title">Basic Datatable</h4>
                                    <p class="m-0 subtitle">Default datatables. Add <code>datatables</code> class in root
                                    </p>
                                </div>
                               
                            </div>
                            <!--tab-content-->
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="Preview" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="card-body pt-0">
                                        <div class="table-responsive">
                                            <table id="example" class="display table" style="min-width: 845px">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Parent Id</th>
                                                        <th>Image</th>
                                                        <th>Slug</th>
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $item)
                                                        
                                                    
                                                    <tr>
                                                        <td>{{$item->id}}</td>
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->parent_id}}</td>
                                                        <td> <img src="{{$item->image}}" alt="" width="50"> </td>
                                                        <td>{{$item->slug}}</td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <a href="{{route('admin.category.edit',$item->id)}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                                            </div>												
                                                        </td>
                                                        
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                               
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /Default accordion -->
                                </div>
                               
                            </div>
                            <!--/tab-content-->
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
       
    </div>

</x-admin.layouts.app>
