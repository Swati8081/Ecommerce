<x-admin.layouts.app>
    <x-slot name="head_tag">
        <title></title>
        
    </x-slot>
   
    <div class="row">
        <div class="col-12">
            <x-admin.form.form1 :action="route('admin.product.store')">
                <x-admin.form.input1 name="name" label="Title" />
                <x-admin.form.input1 name="sku" label="SKU" />
                <x-admin.form.input1 name="category_id" label="Category" type="select" :options="$categories"/>
                <x-admin.form.input1 name="mrp" type="number" label="Mrp" />
                <x-admin.form.input1 name="sale_price" type="number" label="Sale Price" />
                <x-admin.form.input1 name="specification" label="Spectification" />
                <x-admin.form.input1 name="description" label="Description" type="editor"/>
                <x-admin.form.input1 name="short_description" label="Short Description" type="editor" />
                <x-admin.form.input1 name="tags" label="Tags" />
                <x-admin.form.input1 name="brand" label="Brand" />
                <x-admin.form.input1 name="high_lights" label="Highlights" />
                <x-admin.form.input1 name="image" label="Upload Image" type="file" isMultiple="1"/>
            </x-admin.form.form1>
        </div>
    </div>
    
</x-admin.layouts.app>