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
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.product.create') }}">+ Add
                                    Product</a>

                            </div>
                        </div>
                        <table id="empoloyees-tblwrapper" class="table">
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Image</th>
                                    <th>Product Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $i)
                                    <tr>
                                        <td>{{ $i->id }}</td>
                                        <td> <img src="{{ asset($i['images'][0]->small_img ?? 'images/products/small_img/dummy.jpg') }}" width="50" alt=""> </td>
                                        <td>{{ $i->title }}</td>
                                        <td>{{ $i['category']->name }}</td>
                                        <td>{{ $i->sale_price }}</td>
                                        <td>{{ $i->sale_price }}</td>
                                        <td>
                                            <a href="{{ route('admin.product.edit', $i->id) }}" class="btn btn-info">
                                                Edit</a>
                                            <a href="{{ route('admin.product.show', $i->id) }}" class="btn btn-info">
                                                view</a>
                                        </td>

                                    </tr>
                                @empty
                                @endforelse



                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </x-admin-layouts-app>
