<template>
  <div class="p-3 text-center justify-content-center">
    <div id="" class="">
      <div class="col-12">
        <div class="col-xs-12 col-sm-6 col-xl-4 text-left">
          <h1>Empleados</h1>
        </div>
        <div class="col-12">
          <div class="card"> 
            <div class="card-header">
              <h4>Detalles Empleado</h4>
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
                  <dir class="row justify-content-left m-0 p-0">
                    <div class="col-12 m-0 p-0 text-left row">
                      <div class="col-xs-12 col-md-6 col-xl-3">
                        <h4>ID</h4>
                        <div class="w-100">
                          <input
                            type="text"
                            placeholder="ID"
                            class="form-control mb-2 text-left"
                            v-model="employee.id"
                            disabled
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3">
                        <h4>Nombre</h4>
                        <div class="w-100">
                          <input
                            type="text"
                            placeholder="Nombre"
                            class="form-control mb-2 text-left"
                            v-model="employee.user.name"
                            disabled
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3">
                        <h4>Correo</h4>
                        <div class="w-100">
                          <input
                            type="email"
                            placeholder="Correo"
                            class="form-control mb-2 text-left"
                            v-model="employee.user.email"
                            disabled
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3">
                        <h4>Telefono</h4>
                        <div class="w-100">
                          <input
                            type="text"
                            placeholder="telefono"
                            class="form-control text-left"
                            v-model="employee.user.phone"
                            disabled
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3">
                        <h4>RFC</h4>
                        <div class="w-100">
                          <input
                            type="text"
                            placeholder="RFC"
                            class="form-control text-left"
                            v-model="employee.rfc"
                            disabled
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3">
                        <h4>Domicilio</h4>
                        <div class="w-100">
                          <input
                            type="text"
                            placeholder="Domicilio"
                            class="form-control text-left"
                            v-model="employee.address"
                            disabled
                          />
                        </div>
                      </div>
                      <div class="col-xs-12 col-md-6 col-xl-3">
                        <h4>Area</h4>
                        <div class="w-100">
                          <input
                            type="text"
                            placeholder="Area"
                            class="form-control text-left"
                            v-model="employee.workplace"
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
            employee:{}
        },
        data(){
            return {
            }
        },
        created(){
        },
        methods:{
            setEditView(){
                window.location.href="/admin/empleados/editar/"+this.cake.id;
            },
            showList(){
                window.location.href="/admin/empleados/";
            }

        }
        
    }
</script>