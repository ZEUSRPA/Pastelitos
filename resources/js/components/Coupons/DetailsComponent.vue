<template>
  <div class="p-3 text-center justify-content-center">
    <div id="" class="">
      <div class="col-12">
        <div class="col-xs-12 col-sm-6 col-xl-4 text-left">
          <h1>Cupones</h1>
        </div>
        <div class="col-12">
          <div class="card">
            <div class="card-header text-center">
              <h4 v-if="selectedView === 'addView'">Agregar Cupon</h4>
              <h4 v-else>Editar Cupon</h4>
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
                      <div class="row mt-5">
                        <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                          <h4>ID</h4>
                          <div class="w-100">
                            <input
                              type="text"
                              placeholder="ID"
                              class="form-control mb-2 text-left"
                              v-model="coupon.id"
                              disabled
                            />
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                          <h4>Porcentaje de Descuento</h4>
                          <div class="w-100">
                            <input
                              type="number"
                              step="1"
                              min="1"
                              max="100"
                              placeholder="Porcentaje de descuento"
                              class="form-control text-left"
                              v-model="coupon.percentage"
                              disabled
                            />
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                            <h4>Fecha de Expiracion</h4>
                            <div class="w-100">
                                <el-date-picker type="date" v-model="coupon.expiration" placeholder="Seleccione una fecha" class="w-100 p-1 date" disabled></el-date-picker>
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
            coupon:{}
        },
        data(){
            return {
            }
        },
        created(){
            this.coupon.image="../../../../storage/" + this.coupon.image;
        },
        methods:{
            setEditView(){
                window.location.href="/admin/cupones/editar/"+this.coupon.id;
            },
            showList(){
                window.location.href="/admin/cupones/";
            }

        }
        
    }
</script>