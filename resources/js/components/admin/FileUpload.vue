
<template>
    <div class="container">
    <div class="post">
    <div class="postinfotop">
       <h2>Add New item</h2>
        <p id="txt" style="color:green; margin-left:100px;"></p>
    </div>
    <form action="#" class="form newtopic" @submit.prevent="register">
        
        <div class="accsection">
            <div class="topwrap">
                <div class="userinfo pull-left">
                </div>
                <div class="posttext pull-left">
                    <div class="form-group">
                        
                        <div class="col-lg-12 col-md-12">
                         <input type="file" @change='upload_avatar' :class="{ 'is-invalid': form.errors.has('avatar') }" name="avatar">
                        <has-error :form="form" field="avatar"></has-error> 
                        <div class="avatar img-fluid img-circle" style="margin-top:10px">
                           <img :src="get_avatar()" v-bind:style="form.styleObject"/>
                        </div>
                        
                        </div>
                    </div>
                    <div class="form-group">
                            <input v-model="form.name" type="text" placeholder="Name" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" name="name">
                            <has-error :form="form" field="name"></has-error>
                        </div>
                    <div class="form-group">
                        <textarea v-model="form.description" type="text" placeholder="description" class="form-control" :class="{ 'is-invalid': form.errors.has('description') }" name="description"></textarea>
                        <has-error :form="form" field="description"></has-error>
                    </div>
                    <div class= "form-group">
                        <input v-model="form.price" type="number" placeholder="Price" class="form-control" :class="{ 'is-invalid': form.errors.has('price') }" name="price">
                            <has-error :form="form" field="price"></has-error>
                    </div>
                    <div class= "form-group">
                        <input v-model="form.quantity" type="number" placeholder="quantity" class="form-control" :class="{ 'is-invalid': form.errors.has('quantity') }" name="quantity">
                            <has-error :form="form" field="quantity"></has-error>
                    </div>
                    <div class= "form-group">
                        <input v-model="form.tax" type="number" placeholder="tax" class="form-control" :class="{ 'is-invalid': form.errors.has('tax') }" name="tax">
                            <has-error :form="form" field="price"></has-error>
                    </div>
                    <div class="form-group">
                        <input v-model="form.tags" type="tags" placeholder="Tags" class="form-control" :class="{ 'is-invalid': form.errors.has('tags') }" name="tags">
                        <has-error :form="form" field="tags"></has-error>
                    </div>
                </div>
                
            </div>  
        </div>

        <div class="postinfobot">
            <div class="pull-right postreply">
                <div class="pull-left smile"><a href="#"><i class="fa fa-smile-o"></i></a></div>
                <div class="pull-left"><button type="submit" class="btn btn-primary">Add Product</button></div>

            </div>
        </div>
    </form>
    </div>
</div>
</template>

<script>
    export default {

        data () {
            return {
            form: new Form({
               
                username: '',
                avatar: '',
            	email: '',
                styleObject: {
                   width: '300px',
                   height: '300px',
                }

              })
            }
        },

        methods: {

            register () {
                this.form.post('/admin/storeitem')
                    .then(( response ) => { 

                        var attr = document.getElementById("txt");
                        attr.innerHTML = response.data.message;  
                        
                        this.form.reset();

                     })
            },
            upload_avatar(e){
              let file = e.target.files[0];
                let reader = new FileReader();  

                if(file['size'] < 2111775)
                {
                    reader.onloadend = (file) => {
                    //console.log('RESULT', reader.result)
                     this.form.avatar = reader.result;
                    }              
                     reader.readAsDataURL(file);
                }else{
                    alert('File size can not be bigger than 2 MB')
                }
            },
             //For getting Instant Uploaded Photo
            get_avatar(){
               let photo = (this.form.avatar.length > 100) ? this.form.avatar : "/img/"+ this.form.avatar;
               return photo;
            },

        }       
    }
</script> 