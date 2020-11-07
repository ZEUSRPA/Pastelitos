<template>
    <div class="p-3 text-left">
        <div id="" class="">
                <h1>Detalles Pastel</h1>
                <form @submit.prevent="">
                    <div class="col-sm-4 col-lg-2 text-left m-0 p-0">
                        <button class="btn btn-info form-button m-3" @click="showList()"><i class="el-icon-s-fold"></i></button>
                        <br>
                    </div>
                    <div class="col-12">
                        <dir class="row justify-content-left m-0 p-0">
                            <div class="col-xs-12 col-sm-8 col-xl-6 m-0 p-0 text-left">
                                <div
                                    class="mw-50 col-md-12 col-lg-12 offset-md-2 rounded m-auto"
                                    @dragenter="OnDragEnter"
                                    @dragleave="OnDragLeave"
                                    @dragover.prevent
                                    @drop="onDrop"
                                    :class="{ dragging: isDragging }"
                                >
                                    <form
                                    class="row text-center"
                                    id="camera"
                                    action="/asignar/0"
                                    target="_blank"
                                    method="post"
                                    >
                                    <input type="hidden" name="option" value="picture" />
                                    <input type="hidden" name="_token" :value="csrf" />
                                    </form>
                                    <div class="col-md-12 col-lg-12 text-center">
                                    <img
                                        enctype="multipart/form-data"
                                        class="img-rounded"
                                        id="pic"
                                        height="200px"
                                        :src=cake.image
                                    />
                                    </div>
                                    <div class="row text-center">
                                    </div>
                                </div>
                                <h3>Nombre</h3>
                                <div class="w-100">
                                    <input type="text" placeholder="Nombre" class="form-control mb-2 text-left" v-model="cake.name" disabled>
                                </div>
                                <br>
                                <h3>Descripcion</h3>
                                <div class="w-100">
                                    <input type="text" placeholder="Descripcion" class="form-control mb-2 text-left" v-model="cake.description" disabled>
                                </div>
                                <br>
                                <h3>Precio</h3>
                                <div class="w-100">
                                       <input type="number" step="0.1" placeholder="Precio" class="form-control text-left" v-model="cake.price" disabled>
                                </div>
                                <div class="row col-12">
                                    <div class="col-12 text-center">
                                        <button class="btn btn-secondary form-button m-3 col-sm-12 col-lg-6 border-dark" @click="setEditView()"><i class="el-icon-edit"></i></button>
                                    </div>
                                </div>
                            </div>
                        </dir>
                        <br>
                        <br>
                        <br>
                    </div>
                </form>
        </div>
    </div>
</template>

<script>
    export default{
        props:{
            cake:{}
        },
        data(){
            return {
            }
        },
        created(){
            this.cake.image="../../../../storage/" + this.cake.image;
        },
        methods:{
            setEditView(){
                window.location.href="/pasteles/editar/"+this.cake.id;
            },
            showList(){
                window.location.href="/pasteles/";
            }

        }
        
    }
</script>