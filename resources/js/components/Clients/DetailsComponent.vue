<template>
  <div class="p-3 text-center justify-content-center">
    <div id="" class="">
      <div class="col-12">
        <div class="col-xs-12 col-sm-6 col-xl-4 text-left">
          <h1 >Clientes</h1>
          <br />
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 v-if="selectedView === 'addView'">Agregar Cliente</h4>
              <h4 v-else>Detalles Cliente</h4>
            </div>
            <div class="card-body">
              <form @submit.prevent="">
                <div class="col-sm-4 col-lg-2 text-left m-0 p-0">
                  <button class="btn btn-info form-button m-3" @click="showList()">
                    <i class="el-icon-s-fold"></i>
                  </button>
                </div>
                <div class="col-12">
                  <dir class="row justify-content-left m-0 p-0">
                    <div class="col-12 m-0 p-0 text-left row">
                      <div class="col-xs-12 col-md-6 col-xl-3 m-0">
                        <h4>Nombre</h4>
                        <div class="w-100">
                          <input
                            type="text"
                            placeholder="Nombre"
                            class="form-control mb-2 text-left"
                            v-model="client.name"
                            disabled
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3 m-0">
                        <h4>Correo</h4>
                        <div class="w-100">
                          <input
                            type="email"
                            placeholder="Correo"
                            class="form-control mb-2 text-left"
                            v-model="client.email"
                            disabled
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3 m-0">
                        <h4>Contraseña</h4>
                        <div class="w-100">
                          <input
                            type="password"
                            placeholder="Contraseña"
                            class="form-control mb-2 text-left"
                            v-model="client.password"
                            disabled
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3 m-0">
                        <h4>Repetir Contraseña</h4>
                        <div class="w-100">
                          <input
                            type="password"
                            placeholder="Confirmar Contraseña"
                            class="form-control mb-2 text-left"
                            v-model="client.confirm"
                            disabled
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3 m-0">
                        <h4>Telefono</h4>
                        <div class="w-100">
                          <input
                            type="text"
                            placeholder="telefono"
                            class="form-control text-left"
                            v-model="client.phone"
                            disabled
                          />
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
            client:{}
        },
        data(){
            return {
            }
        },
        created(){
            this.client.image="../../../../storage/" + this.client.image;
        },
        methods:{
            setEditView(){
                window.location.href="/admin/clientes/editar/"+this.client.id;
            },
            showList(){
                window.location.href="/admin/clientes/";
            }

        }
        
    }
</script>