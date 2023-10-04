<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li class="menu-title">Concrete</li>
            <li><a href="{{route('dashboard')}}"
                    aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.5 7.49999L10 1.66666L17.5 7.49999V16.6667C17.5 17.1087 17.3244 17.5326 17.0118 17.8452C16.6993 18.1577 16.2754 18.3333 15.8333 18.3333H4.16667C3.72464 18.3333 3.30072 18.1577 2.98816 17.8452C2.67559 17.5326 2.5 17.1087 2.5 16.6667V7.49999Z"
                                stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.5 18.3333V10H12.5V18.3333" stroke="#888888" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="nav-text">Dashboard</span>
                </a>
               
            </li>
           
          
            <li><a class="has-arrow " href="javascript:void(0);"
                    aria-expanded="false">
                    <div class="menu-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.8381 11.7317C15.4566 11.7317 15.9757 12.2422 15.8811 12.853C15.3263 16.4463 12.2502 19.1143 8.54009 19.1143C4.43536 19.1143 1.10834 15.7873 1.10834 11.6835C1.10834 8.30245 3.67693 5.15297 6.56878 4.44087C7.19018 4.28745 7.82702 4.72455 7.82702 5.36429C7.82702 9.69868 7.97272 10.8199 8.79579 11.4297C9.61886 12.0396 10.5867 11.7317 14.8381 11.7317Z"
                                stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M18.8848 8.12229C18.934 5.33755 15.5134 0.848777 11.345 0.92597C11.0208 0.93176 10.7612 1.20194 10.7468 1.52518C10.6416 3.81492 10.7834 6.78202 10.8626 8.12711C10.8867 8.54588 11.2157 8.87492 11.6335 8.89904C13.0162 8.97816 16.0914 9.08623 18.3483 8.74465C18.6552 8.69834 18.88 8.43202 18.8848 8.12229Z"
                                stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="nav-text">Category</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.category.index') }}">All Category</a></li>
                    <li><a href="{{ route('admin.category.create') }}">Add New Category</a></li>
                    
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void(0);"
                aria-expanded="false">
                <div class="menu-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.8381 11.7317C15.4566 11.7317 15.9757 12.2422 15.8811 12.853C15.3263 16.4463 12.2502 19.1143 8.54009 19.1143C4.43536 19.1143 1.10834 15.7873 1.10834 11.6835C1.10834 8.30245 3.67693 5.15297 6.56878 4.44087C7.19018 4.28745 7.82702 4.72455 7.82702 5.36429C7.82702 9.69868 7.97272 10.8199 8.79579 11.4297C9.61886 12.0396 10.5867 11.7317 14.8381 11.7317Z"
                            stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M18.8848 8.12229C18.934 5.33755 15.5134 0.848777 11.345 0.92597C11.0208 0.93176 10.7612 1.20194 10.7468 1.52518C10.6416 3.81492 10.7834 6.78202 10.8626 8.12711C10.8867 8.54588 11.2157 8.87492 11.6335 8.89904C13.0162 8.97816 16.0914 9.08623 18.3483 8.74465C18.6552 8.69834 18.88 8.43202 18.8848 8.12229Z"
                            stroke="#888888" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <span class="nav-text">Products</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('admin.product.index') }}">All Products</a></li>
                <li><a href="{{ route('admin.product.create') }}">Add New Product</a></li>
                
            </ul>
        </li>
   
        </ul>
       
    </div>
</div>