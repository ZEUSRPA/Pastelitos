<template>
  <div class="p-3 text-center justify-content-center" >
    <div id="" class="">
      <div class="card">
        <div class="card-header">
          <h1 v-if="selectedView === 'addView'">Registrar Pedido</h1>
          <h1 v-else>Editar Pedido</h1>
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
                            <h4>Folio: {{order.id}}</h4>
                          </div>
                          <div class="col-xs-12 col-md-6 m-0">
                            <h4>Fecha: {{order.orderDate}}</h4>
                          </div>
                          <div class="col-xs-12 col-md-6 m-0">
                            <h4>ID Empleado:{{order.idEmployee}}</h4>
                          </div>
                          <div class="col-xs-12 col-md-6 m-0">
                            <h4>Empleado:{{order.employee.user.name}}</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>
                  <div class="col-12 mt-5">
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
                              v-on:keyup.enter="checkit"
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
                              max="10"
                              placeholder="Cantidad"
                              class="form-control text-left"
                              v-model="cake.quantity"
                            />
                          </div>
                        </div>
                        <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                          <div class="col-12 m-0 p-0">
                            <button class="btn btn-info" v-on:click="checkit()">Verificar</button>
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
                  </div>
                  <br>
                  <br>
                  <div class="col-12 m-0 mt-5">
                      <div class="card">
                        <div class="card-header">
                          <h4>Pasteles en el Pedido</h4>
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
                                            <th>OPCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(item,index) in cakesInOrder" :key="index" class="text-center">
                                            <td>{{item.idCake}}</td>
                                            <td class="w-25">{{item.name}}</td>
                                            <td class="w-25">{{item.description}}</td>
                                            <td class="">{{item.price}}</td>
                                            <td class="">{{item.quantity}}</td>
                                            <td class="">{{item.import}}</td>
                                            <td class="m-0 p-0">
                                                <div class="col-12 m-0">
                                                    <button class="btn btn-danger m-1 col-xl-3 col-xs-12" @click="unSetProcedure(item)"><i class="el-icon-delete"></i></button>
                                                </div>

                                            </td>
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
                                  v-model="subTotal"
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
                                  v-model="iva"
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
                                  v-model="total"
                                  disabled
                              />
                              </div>
                            </div>
                        </div>

                      </div>

                    </div>

                  <div class="col-12 m-0 mt-5" >
                    
                      <div class="card">
                        <div class="card-header">
                          <h4>Informacion de Pedido</h4>
                        </div>
                        <div class="card-body row">
                          <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                            <h4>ID Cliente</h4>
                            <div class="w-100">
                            <input
                                type="number"
                                placeholder="ID Cliente"
                                class="form-control mb-2 text-left"
                                v-model="order.idUser"
                                
                            />
                            <button class="btn btn-info" @click="searchClient()">Buscar</button>
                            </div>
                          </div>
                          <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                            <h4>Nombre Cliente</h4>
                            <div class="w-100">
                            <input
                                type="text"
                                placeholder="Nombre Cliente"
                                class="form-control mb-2 text-left"
                                v-model="client.name"
                                disabled
                            />
                            </div>
                          </div>
                          <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                            <h4>Fecha de Entrega</h4>
                            <div class="w-100">
                                <input type="date" v-model="order.dueDate" placeholder="Seleccione una fecha" class="w-100 p-1 date"/>
                            </div>
                          </div>
                          <!-- <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                            <h4>ID Cupon</h4>
                            <div class="w-100">
                            <input
                                type="number"
                                placeholder="ID Cupon"
                                class="form-control mb-2 text-left"
                                v-model="order.idCoupon"
                            />
                            <button class="btn btn-info" @click="searchCoupon()">Aplicar</button>
                            </div>
                          </div> -->
                          
                          <!-- <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                            <h4>Cupon</h4>
                            <div class="w-100">
                            <input
                                type="text"
                                placeholder="Cupon"
                                class="form-control mb-2 text-left"
                                v-model="coupon.percentage"
                                disabled
                            />
                            </div>
                          </div > -->
                          <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                            <h4>Metodo de pago</h4>
                            <div class="w-100">
                                <select v-model="order.payMethod" class="browser-default custom-select">
                                  <option value="1">Efectivo</option>
                                  <option value="2">Tarjeta</option>
                                </select>
                            </div>
                          </div>

                        </div>

                      </div>
                      <div
                      class="col-sm-12 text-center"
                    >
                      <button
                        class="btn btn-success form-button m-3 col-sm-12 col-lg-6"
                        @click="addProcedure()"
                      >
                        <i class="el-icon-finished w-100"></i>Finalizar Venta
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
  </div>
</template>

<script>
export default {
  props: {
    order: {},
  },
  data() {
    return {
      cakesInOrder: [],
      allcakes:[],
      import:0,
      subTotal:0,
      iva:0,
      total:0,
      cake:{id:0,name:'',price:0.0,description:'',quantity:0,import:0.0},
      selectedView: "addView",
      auxiliar:{},
      allemployees:[],
      employee:{},
      allcoupons:[],
      coupon:{},
      allclients:[],
      client:{},
      orderDate:null
    };
  },
  created() {
    axios.get("/admin/empleados").then((res) => {
      this.allemployees = res.data;
    });
    axios.get("/admin/pasteles").then((res) => {
      this.allcakes = res.data;
    });
    axios.get("/admin/cupones").then((res) => {
      this.allcoupons = res.data;
    });
    axios.get("/admin/clientes").then((res) => {
      this.allclients = res.data;
    });

    console.log(this.order);
    if(this.order.idUser===-1){
      this.selectedView = "addView";
      this.order.idUser=0;
    }else{
      this.selectedView="updateView";

    }
  },
  methods: {
    setParams() {
      var $params = new FormData();
      $params.append("orderDate",this.order.orderDate);
      $params.append("payMethod",this.order.payMethod);
      $params.append("dueDate",this.order.dueDate);
      $params.append("idEmployee",this.order.idEmployee);
      $params.append("idUser",this.order.idUser);
      $params.append("cakesinOrder",this.cakesInOrder);
      return $params;
      
    },
    addProcedure() {
      if(this.cakesInOrder.length==0){
        this.showErrorNotification(
          "No hay pasteles en el Pedido",
          "Debe existir por lo menos un pastel en el pedido"
        );
        return;
      }
      if(this.client.id=0){
        this.showErrorNotification(
          "No Se ha registrado al Cliente",
          "Se requiere el cliente en el pedido"
        );
        return;
      }
      if(this.order.dueDate < new Date()){
        this.showErrorNotification(
          "La fecha de entrega no es valida",
          "Debe ser posterior a la fecha actual"
        );
        return;
      }
      if(this.order.payMethod = 0){
        this.showErrorNotification(
          "El metodo de pago no es valido",
          "Se debe seleccionar un metodo de pago"
        );
        return;
      }
      var params=this.setParams();
      axios.post("/admin/pedidos", params).then((res) => {
          console.log(res.data.id);
          for(let i=0;i<this.cakesInOrder.length;i++){
            var par=new FormData();
            par.append("idCake",this.cakesInOrder[i].id);
            par.append("price",this.cakesInOrder[i].price);
            par.append("quantity",this.cakesInOrder[i].quantity);
            par.append("idOrder",res.data.id);
            axios.post("/admin/pedidos/detalle", par).then((res) => {
            });
          }
        });
      this.showSuccessNotification("Pedido registrado","Se ha registrado el pedido con exito")
      console.log(this.cakesInOrder);
      this.showList();
      
      
      
    },
    searchClient(){
        for(var $x of this.allclients){
          if($x.id==this.order.idUser){
              this.client=$x;
              return;
            }
        }
        this.client.name='';
    },
    searchEmployee(){
        if(this.order.id_employee!=0){
            this.order.employee='Juan';
            this.order.employee='';
        }
    },
    searchCoupon(){
      this.coupon.percentage=0;
        for(var $xs of this.allcoupons){
          if($xs.id==this.order.idCoupon){
              this.coupon.id=$xs.id;
              this.coupon.percentage=$xs.percentage;
              return;
            }
        }
        
    },
    setProcedure(){
      if(this.cake.name != '' && this.cake.quantity>0){
        var $ind=this.cakesInOrder.findIndex(item=>item.id===this.cake.id);
        if($ind!=-1){
          var $tem=this.cakesInOrder[$ind].quantity;
          $tem=parseInt($tem);
          this.cakesInOrder[$ind].quantity=+this.cake.quantity+$tem
        }else{
          let $co={id:0,name:'',price:0.0,description:'',quantity:0,import:0.0};
          $co.id=this.cake.id;
          $co.name=this.cake.name;
          $co.description=this.cake.description;
          $co.price=this.cake.price;
          $co.import=this.cake.import;
          $co.quantity=this.cake.quantity;
          

          this.cakesInOrder.push($co);
        }
        this.subTotal=0;
        for(var $x of this.cakesInOrder){
          $x.import=$x.price*$x.quantity;
          this.subTotal+=$x.import;
        }
        this.iva=this.subTotal*.16;
        this.total=this.iva+this.subTotal;
        this.resetFields();
        this.cake.id=0;
        this.cake.quantity=0;
      }

    },
    unSetProcedure(item){
        this.cakesInOrder.splice(this.cakesInOrder.findIndex(a=>a.id === item.id),1);
        this.subTotal=0;
        for(var $x of this.cakesInOrder){
          $x.import=$x.price*$x.quantity;
          this.subTotal+=$x.import;
        }
        this.iva=this.subTotal*.16;
        this.total=this.iva+this.subTotal;
    },
    showSuccessNotification(title, text) {
      this.$notify({
        title: title,
        message: text,
        type: "success",
      });
    },
    showErrorNotification(title, text) {
      this.$notify({
        title: title,
        message: text,
        type: "error",
      });
    },
    updateProcedure() {
    },
    showList() {
      window.location.href = "/admin/pedidos/";
    },
    resetFields() {
      this.cake.name = "";
      this.cake.description = "";
      this.cake.price = 0.0;
      this.cake.image = "";
    },
    cancelUpdate() {
      window.history.go(-1);
    },
    checkit(){
      this.resetFields();
      var $aux=this.cake.id;
      for(var x of this.allcakes){
        if(x.id==this.cake.id){
          this.cake.name=x.name;
          this.cake.description=x.description;
          this.cake.price=x.price;
          this.cake.id=$aux;
        }
      }
    },
  },
};
</script>