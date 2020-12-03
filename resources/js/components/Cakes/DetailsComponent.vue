<template>
  <div class="p-3 text-center justify-content-center">
    <div id="" class="">
      <div class="col-12">
        <div class="col-xs-12 col-sm-6 col-xl-4 text-left">
          <h1>Pasteles</h1>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header text-center">
              <h4 >Detalles Pastel</h4>
            </div>
            <div class="card-body">
              <form @submit.prevent="">
                <div class="col-sm-4 col-lg-2 text-left m-0 p-0">
                  <button class="btn btn-info form-button m-3" @click="showList()">
                    <i class="el-icon-s-fold"></i>
                  </button>
                  <br />
                </div>
                <div class="col-12">
                  <dir class=" justify-content-center m-0 p-0">
                    <div class="col-12 m-0 p-0 text-left justify-content-center">
                      <div class="col-xs-12 col-md-6 text-center imagen">
                        <div
                          class="mw-50 col-md-12 col-lg-12 offset-md-2 rounded uploader m-auto"
                          
                        >
                          <div class="col-md-12 col-lg-12 text-center">
                            <img
                              enctype="multipart/form-data"
                              class="img-rounded"
                              id="pic"
                              width="200px"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row mt-5">
                        <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                          <h4>ID</h4>
                          <div class="w-100">
                            <input
                              type="text"
                              placeholder="ID"
                              class="form-control mb-2 text-left"
                              v-model="cake.id"
                              disabled
                            />
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                          <h4>Nombre</h4>
                          <div class="w-100">
                            <input
                              type="text"
                              placeholder="Nombre"
                              class="form-control mb-2 text-left"
                              v-model="cake.name"
                              disabled
                            />
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                          <h4>Descripcion</h4>
                          <div class="w-100">
                            <input
                              type="text"
                              placeholder="Descripcion"
                              class="form-control mb-2 text-left"
                              v-model="cake.description"
                              disabled
                            />
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                          <h4>Precio</h4>
                          <div class="w-100">
                            <input
                              type="number"
                              step="0.5"
                              min="0"
                              placeholder="Precio"
                              class="form-control text-left"
                              v-model="cake.price"
                              disabled
                            />
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                          <h4>Existencia</h4>
                          <div class="w-100">
                            <input
                              type="number"
                              min="0"
                              placeholder="Existencia"
                              class="form-control text-left"
                              v-model="cake.stock"
                              disabled
                            />
                          </div>
                        </div>


                      </div>
                    </div>
                  </dir>
                  <br />
                  <br />
                  <br />
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
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
        mounted(){
          
            document.getElementById("pic").src =
          "../../../../storage/" + this.cake.image;
        },
        methods:{
            setEditView(){
                window.location.href="/admin/pasteles/editar/"+this.cake.id;
            },
            showList(){
                window.location.href="/admin/pasteles/";
            }

        }
        
    }
</script>