<x-admin.layouts.app>
    <x-slot name="head_tag">
        <title></title>
        
    </x-slot>
    <div class="row">
        <div class="col-xl-12">
           <x-admin.form.form1 :action="route('admin.category.store')" submit="Add Category" >
            
            
                <x-admin.form.input1 name="name" label="Full Name" />
                <x-admin.form.input1 name="slug" label="Slug" />
                <x-admin.form.input1 name="parent_id" label="Parent Id" type="select" :options="$data"/>
                <x-admin.form.input1 name="image" label="Image" type="file" required="0"/>
                
           </x-admin.form.form1>
        </div>
    </div>

    
</x-admin.layouts.app>