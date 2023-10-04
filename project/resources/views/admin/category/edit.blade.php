<x-admin.layouts.app>
    <x-slot name="head_tag">
        <title></title>
        
    </x-slot>
    <div class="row">
        <div class="col-xl-12">
           <x-admin.form.form1 :action="route('admin.category.update',$category->id)" submit="Update Category" >
            @method('put')
                <x-admin.form.input1 name="name" label="Full Name" :value="$category->name" />
                <x-admin.form.input1 name="slug" label="Slug" :value="$category->slug" />
                <x-admin.form.input1 name="parent_id" label="Parent Id" type="select" :value="$data"/>
                <x-admin.form.input1 name="image" label="Image" type="file" :value="$category->image" />
                
           </x-admin.form.form1>
        </div>
    </div>

    
</x-admin.layouts.app>