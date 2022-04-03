<template>
    <div>
        <h3 class="text-center">Edit Item</h3>
        <p id="txt" style="color:green; margin-left:100px;"></p>
        <div class="row">
            
                <form @submit.prevent="updateItem" class="col-lg-12 col-md-12" >
                    <div class="row">
                        <div class="col-lg-6 col-md-6" >
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" v-model="item.name">
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" class="form-control" name="price" v-model="item.price">
                            </div>
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="number" class="form-control" name="quantity" v-model="item.quantity">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" v-model="item.description"> </textarea>
                            </div>
                            <div class="form-group">
                                <label>Tags</label>
                                <input type="text" class="form-control" name="tags" v-model="item.tags">
                            </div>
                           
                        </div>

                        <div class="col-lg-4 col-md-4">
                             <input type="file" @change='upload_avatar' :class="{ 'is-invalid': form.errors.has('avatar') }" name="avatar">
                            <has-error :form="form" field="avatar"></has-error> 
                            <div class="avatar img-fluid img-circle" style="margin-top:10px">
                               <img :src="get_avatar()" v-bind:style="form.styleObject"/>
                            </div>
                            
                        </div>
                         <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            

        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                item: [],
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
        created() {
            axios
                .get(`/admin/viewitem/${this.$route.params.id}`)
                .then(res => {
                    this.item = res.data;
                });
        },
        methods: {
            updateItem() {
                axios
                    .post(`/admin/updateitem/${this.$route.params.id}`, this.item)
                    .then(( res ) => { 

                        var attr = document.getElementById("txt");
                        attr.innerHTML = res.data.message;  
                        
                        this.form.reset();

                     })
            },
            get_avatar(){
               let photo = (this.form.avatar.length > 100) ? this.form.avatar : "/img/"+ this.item.image;
               return photo;
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
        }
    }
</script>