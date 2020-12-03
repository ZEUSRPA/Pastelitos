<template>
  <div class="p-3 text-center justify-content-center">
    <div id="" class="">
      <div class="col-12">
        <div class="col-xs-12 col-sm-6 col-xl-4 text-center">
          <h1 >Detalles de Devolucion</h1>
          <br />
        </div>
        <form @submit.prevent="">
          <div class="col-sm-4 col-lg-2 text-left m-0 p-0">
            <button class="btn btn-info form-button m-3" @click="showList()">
              <i class="el-icon-s-fold"></i>
            </button>
            <br />
          </div>
          <div class="col-12">
            <dir class="row justify-content-left m-0 p-0">
              <div class="col-xs-12 col-sm-8 col-xl-6 m-0 p-0 text-left">
                <h3>Folio: {{devolution.id}}</h3>
                <br>
                <br>
                <h3>ID Venta</h3>
                <div class="w-100">
                <input
                    type="number"
                    placeholder="ID Ventfa"
                    class="form-control mb-2 text-left"
                    v-model="devolution.id_sale"
                    disabled
                />
                </div>
                <div class="table-responsive m-0 p-0">
                        <table class="table table-hover table-striped table-bordered bg-white">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <th @click="sortTable('id')">ID</th>
                                    <th @click="sortTable('name')">PASTEL</th>
                                    <th @click="sortTable('price')">PRECIO</th>
                                    <th>OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item,index) in devolutions" :key="index" class="text-center">
                                    <td>{{item.id}}</td>
                                    <td class="w-50">{{item.name}}</td>
                                    <td class="w-25">{{item.price}}</td>
                                    <td class="m-0 p-0">

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br />
                <div class="row col-12">
                  
                    <h3>Subtotal</h3>
                    <div class="w-100">
                    <input
                        type="number"
                        step="0.1"
                        min="0"
                        placeholder="Subtotal"
                        class="form-control text-left"
                        v-model="devolution.sub"
                        disabled
                    />
                    </div>
                    <br />
                    <h3>IVA</h3>
                    <div class="w-100">
                    <input
                        type="number"
                        step="0.1"
                        min="0"
                        placeholder="IVA"
                        class="form-control text-left"
                        v-model="devolution.iva"
                        disabled
                    />
                    </div>
                    <br />
                    <h3>Total Devolucion</h3>
                    <div class="w-100">
                    <input
                        type="number"
                        step="0.1"
                        min="0"
                        placeholder="Subtotal"
                        class="form-control text-left"
                        v-model="devolution.total"
                        disabled
                    />
                    </div>
                    <br>
                    <h3>ID Cliente</h3>
                    <div class="w-100">
                    <input
                        type="number"
                        placeholder="ID Cliente"
                        class="form-control mb-2 text-left"
                        v-model="devolution.id_client"
                        disabled
                    />
                    </div>
                    <br />
                    <h3>Nombre Cliente</h3>
                    <div class="w-100">
                    <input
                        type="text"
                        placeholder="Nombre Cliente"
                        class="form-control mb-2 text-left"
                        v-model="devolution.client"
                        disabled
                    />
                    </div>
                    <br>
                    <h3>ID Empleado</h3>
                    <div class="w-100">
                    <input
                        type="number"
                        placeholder="ID Empleado"
                        class="form-control mb-2 text-left"
                        v-model="devolution.id_employee"
                        disabled
                    />
                    </div>
                    <br />
                    <h3>Nombre Empleado</h3>
                    <div class="w-100">
                    <input
                        type="text"
                        placeholder="Descripcion"
                        class="form-control mb-2 text-left"
                        v-model="devolution.employee"
                        disabled
                    />
                    </div>
                    
                    <br />
                    <h3>Codigo de Aprobacion</h3>
                    <div class="w-100">
                    <input
                        type="password"
                        placeholder="Codigo de Aprobacion"
                        class="form-control mb-2 text-left"
                        v-model="devolution.approbation"
                        disabled
                    />
                    </div>
                    <div
                    class="col-sm-12 text-center"
                  >
                    <button
                      class="btn btn-success form-button m-3 col-sm-12 col-lg-6"
                      @click="addProcedure()"
                    >
                      <i class="el-icon-finished w-100"></i>
                    </button>
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
</template>

<script>
    export default{
        props:{
            devolution:{}
        },
        data(){
            return {
                devolutions:[],
                cake:{}
            }
        },
        created(){
            this.cake.id=1;
            this.cake.name='Pastel de chocolate';
            this.cake.price=500;
            this.devolutions.push(this.cake);
        },
        methods:{
            setEditView(){
                window.location.href="/admin/devoluciones/editar/"+this.devolution.id;
            },
            showList(){
                window.location.href="/admin/devoluciones/";
            }

        }
        
    }
</script>