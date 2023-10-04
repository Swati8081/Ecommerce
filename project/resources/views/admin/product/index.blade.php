<x-admin.layouts.app>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive active-projects style-1">
                    <div class="tbl-caption">
                        <h4 class="heading mb-0">Products</h4>
                        <div>
                            <a class="btn btn-primary btn-sm"  href="{{route('admin.product.create')}}">+ Add Product</a>
                           
                        </div>
                    </div>
                        <table id="empoloyees-tblwrapper" class="table">
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Department</th>
                                    <th>Email Address</th>
                                    <th>Contact Number</th>
                                    <th>Gender</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                           <tbody>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            
                            </tr>
                           

                           </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layouts-app>