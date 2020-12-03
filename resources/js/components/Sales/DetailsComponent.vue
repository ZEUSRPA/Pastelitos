<template>
  <div class="p-3 text-center justify-content-center">
    <div id="" class="">
      <div class="card">
        <div class="card-header">
          <h1>Detalles Venta</h1>
          <br />
        </div>
        <div class="card-body">
          <form @submit.prevent="">
            <div class="col-sm-4 col-lg-2 text-left m-0 p-0">
              <button class="btn btn-info form-button m-3" @click="showList()">
                <i class="el-icon-s-fold"></i>
              </button>
              <br />
            </div>
            <div class="card">

            </div>
            <div class="row">
              <dir class="row justify-content-left m-0 p-0">
                <div class="col-xs-12 m-0 p-0 text-left row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header"> 
                        <h4>Informacion General</h4>
                      </div>
                      <div class="card-body row">
                        <div class="row col-12">
                          <div class="col-xs-12 col-md-6 m-0">
                            <h4>Folio: {{sale.id}}</h4>
                          </div>
                          <div class="col-xs-12 col-md-6 m-0">
                            <h4>Fecha: {{sale.date}}</h4>
                          </div>
                          <div class="col-xs-12 col-md-6 m-0">
                            <h4>ID Empleado:</h4>
                          </div>
                          <div class="col-xs-12 col-md-6 m-0">
                            <h4>Empleado:</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>
                  <!-- <div class="col-12 mt-5">
                    <div class="card">
                      <div class="card-header">
                        <h4>Seleccion de Pastel</h4>
                      </div>
                      <div class="card-body row">
                        <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                          <h4>ID Pastel</h4>
                          <div class="col-12 m-0 p-0">
                            <input
                              type="number"
                              placeholder="ID Pastel"
                              class="form-control mb-2 text-left"
                              v-model="cake.id"
                              v-on:keyup="checkit"
                            />
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                          <h4>Nombre Pastel</h4>
                          <div class="col-12 m-0 p-0">
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
                          <div class="col-12 m-0 p-0">
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
                          <div class="col-12 m-0 p-0">
                            <input
                              type="number"
                              step="0.1"
                              min="0"
                              placeholder="Precio"
                              class="form-control text-left"
                              v-model="cake.price"
                              disabled
                            />
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                          <h4>Cantidad</h4>
                          <div class="col-12 m-0 p-0">
                            <input
                              type="number"
                              step="1"
                              min="0"
                              max="2"
                              onkeydown="return false"
                              placeholder="Cantidad"
                              class="form-control text-left"
                              v-model="cake.quantity"
                            />
                          </div>
                        </div>
                        <div
                          class="col-sm-12 text-center"
                          v-if="selectedView === 'addView'"
                        >
                          <button
                            class="btn btn-success form-button m-3 col-sm-6 col-lg-4"
                            @click="setProcedure()"
                          >Agregar Pastel
                          </button>
                        </div>

                      </div>

                    </div>
                  </div> -->
                  <br>
                  <br>
                  <div class="col-12 m-0 mt-5">
                      <div class="card">
                        <div class="card-header">
                          <h4>Pasteles en la Venta</h4>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive m-0 p-0">
                                <table class="table table-hover table-striped table-bordered bg-white">
                                    <thead class="thead-dark">
                                        <tr class="text-center">
                                            <th @click="sortTable('id')">ID</th>
                                            <th @click="sortTable('name')" class="w-25">PASTEL</th>
                                            <th @click="sortTable('description')" class="w-25">DESCRIPCION</th>
                                            <th @click="sortTable('price')">PRECIO</th>
                                            <th @click="sortTable('quantity')">CANTIDAD</th>
                                            <th @click="sortTable('importe')">IMPORTE</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(item,index) in sales" :key="index" class="text-center">
                                            <td>{{item.id}}</td>
                                            <td class="w-25">{{item.name}}</td>
                                            <td class="w-25">{{item.description}}</td>
                                            <td >{{item.price}}</td>
                                            <td >{{item.quantity}}</td>
                                            <td >{{item.importe}}</td>
                                            <!-- <td class="m-0 p-0">
                                                <div class="col-12 m-0 p-0">
                                                    <button class="btn btn-danger m-1 col-xl-3 col-xs-12" @click="unSetProcedure(item)"><i class="el-icon-delete"></i></button>
                                                </div>

                                            </td> -->
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12 m-0 ">
                              <h5>Subtotal</h5>
                              <div class="w-25">
                              <input
                                  type="number"
                                  step="0.1"
                                  min="0"
                                  placeholder="Subtotal"
                                  class="form-control text-left"
                                  v-model="sale.sub"
                                  disabled
                              />
                              </div>
                            </div>
                            <div class="col-12">
                              <h5>IVA</h5>
                              <div class="w-25">
                              <input
                                  type="number"
                                  step="0.1"
                                  min="0"
                                  placeholder="IVA"
                                  class="form-control text-left"
                                  v-model="sale.iva"
                                  disabled
                              />
                              </div>
                            </div>
                            <div class="col-12">
                              <h5>Total</h5>
                              <div class="w-25">
                              <input
                                  type="number"
                                  step="0.1"
                                  min="0"
                                  placeholder="Subtotal"
                                  class="form-control text-left"
                                  v-model="sale.total"
                                  disabled
                              />
                              </div>
                            </div>
                        </div>

                      </div>

                    </div>

                  <div class="col-12 m-0 mt-5">
                    
                    <!-- <div
                      class="col-sm-12 text-center"
                      v-if="selectedView === 'updateView'"
                    >
                      <button
                        class="btn btn-success form-button m-3 col-sm-12 col-lg-6"
                        @click="setProcedure()"
                      >
                        <i class="el-icon-finished"></i>Agregar Pastel
                      </button>
                    </div> -->
                    
                      <div class="card">
                        <div class="card-header">
                          <h4>Informacion de Venta</h4>
                        </div>
                        <div class="card-body row">
                          <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                            <h4>ID Cliente</h4>
                            <div class="w-100">
                            <input
                                type="number"
                                placeholder="ID Cliente"
                                class="form-control mb-2 text-left"
                                v-model="sale.id_client"
                                v-on:keyup="searchClient"
                                disabled
                            />
                            </div>
                          </div>
                          <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                            <h4>Nombre Cliente</h4>
                            <div class="w-100">
                            <input
                                type="text"
                                placeholder="Nombre Cliente"
                                class="form-control mb-2 text-left"
                                v-model="sale.client"
                                disabled
                            />
                            </div>
                          </div>
                          <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                            <h4>ID Cupon</h4>
                            <div class="w-100">
                            <input
                                type="number"
                                placeholder="ID Cupon"
                                class="form-control mb-2 text-left"
                                v-model="sale.id_coupon"
                                v-on:keyup="searchCoupon"
                                disabled
                            />
                            </div>
                          </div>
                          <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                            <h4>Cupon</h4>
                            <div class="w-100">
                            <input
                                type="text"
                                placeholder="Cupon"
                                class="form-control mb-2 text-left"
                                v-model="sale.coupon"
                                disabled
                            />
                            </div>
                          </div >
                          
                          <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                            <h4>Metodo de pago</h4>
                            <div class="w-100">
                                <select v-model="sale.paymethod" class="browser-default custom-select" disabled>
                                  <option value="Efectivo">Efectivo</option>
                                  <option value="Tarjeta">Tarjeta</option>
                                </select>
                            </div>
                          </div>

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
</template>

<script>
    export default{
        props:{
            sale:{}
        },
        data(){
            return {
                sales:[],
                cake:{}
            }
        },
        created(){
            this.sale.image="../../../../storage/" + this.sale.image;
            this.cake.id=1;
            this.cake.name='Pastel de chocolate';
            this.cake.price=500;
            this.sales.push(this.cake);
        },
        methods:{
            setEditView(){
                window.location.href="/admin/ventas/editar/"+this.sale.id;
            },
            showList(){
                window.location.href="/admin/ventas/";
            }

        }
        
    }
</script>