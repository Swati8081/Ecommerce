<x-admin.layouts.app>
    <x-slot name="head_tag">
        <title></title>
        
    </x-slot>
    <div class="row">
        <div class="col-xl-12">
            <x-admin.form.form1 :action="route('admin.product.update', $data->id)">
                @method('patch')
                <x-admin.form.input1 name="name" label="Title" :value="$data->title" />
                <x-admin.form.input1 name="sku" label="SKU" :value="$data->sku" />
                <x-admin.form.input1 name="category_id" label="Category" type="select" :options="$categories" :value="$data->category_id"/>
                <x-admin.form.input1 name="mrp" type="number" label="Mrp" :value="$data->mrp" />
                <x-admin.form.input1 name="sale_price" type="number" label="Sale Price" :value="$data->sale_price" />
                <x-admin.form.input1 name="specification" label="Spectification" :value="$data->specification" />
                <x-admin.form.input1 name="description" label="Description" type="editor" :value="$data->description" />
                <x-admin.form.input1 name="short_description" label="Short Description" type="editor" :value="$data->short_description" />
                <x-admin.form.input1 name="tags" label="Tags" :value="$data->tags" />
                <x-admin.form.input1 name="brand" label="Brand" :value="$data->brand" />
                <x-admin.form.input1 name="high_lights" label="Highlights" :value="$data->high_lights" />
            </x-admin.form.form1>
        </div>
    </div>

    
</x-admin.layouts.app>