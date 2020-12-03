<template>
  <div class="p-3 text-center justify-content-center" v-if="false">
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
                              max="10"
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
                                        <tr v-for="(item,index) in orders.details" :key="index" class="text-center">
                                            <td>{{item.idCake}}</td>
                                            <td class="w-25">{{}}</td>
                                            <td class="w-25">{{}}</td>
                                            <td class="">{{}}</td>
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
                                v-model="order.idClient"
                                v-on:keyup="searchClient"
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
                                v-model="order.client.name"
                                disabled
                            />
                            </div>
                          </div>
                          <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                            <h4>Fecha de Entrega</h4>
                            <div class="w-100">
                                <el-date-picker type="date" v-model="date_start" placeholder="Seleccione una fecha" class="w-100 p-1 date"></el-date-picker>
                            </div>
                          </div>
                          <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                            <h4>ID Cupon</h4>
                            <div class="w-100">
                            <input
                                type="number"
                                placeholder="ID Cupon"
                                class="form-control mb-2 text-left"
                                v-model="order.idCoupon"
                                v-on:keyup="searchCoupon"
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
                                v-model="order.coupon.percentage"
                                disabled
                            />
                            </div>
                          </div >
                          <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                            <h4>Metodo de pago</h4>
                            <div class="w-100">
                                <select v-model="order.payMethod" class="browser-default custom-select">
                                  <option value="Efectivo">Efectivo</option>
                                  <option value="Tarjeta">Tarjeta</option>
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
      allorders: [],
      isValidPastel:true,
      orders:[],
      isDragging: false,
      array: [],
      import:0,
      subTotal:0,
      iva:0,
      total:0,
      cake:{id:0},
      selectedView: "addView",
      auxiliar:{},
      allemployees:{}
    };
  },
  created() {
    axios.get("/admin/empleados").then((res) => {
      this.allemployees = res.data;
    });
    console.log(this.order);
    if(this.order.idEmployee===-1){
      this.order.paymethod="Efectivo";
      this.selectedView = "addView";
      this.order.id=this.allorders.length+1;
      this.order.idEmployee=0;
      this.order.employee={};
      this.order.employee.user={};
      this.order.employee.user.name='';

    }else{
      this.selectedView="updateView";

    }
  },
  methods: {
    setParams() {
      
      
    },
    addProcedure() {
      this.showSuccessNotification(
          "Venta registrada",
          "Venta registrada exitosamente."
        );
        return;
      this.cake.name = this.cake.name.trim();

      if (
        this.cake.name === "" ||
        document.getElementById("deleteImg").style.visibility != "visible" ||
        this.cake.price < 0 ||
        this.cake.description === ""
      ) {
        this.showErrorNotification(
          "Campos incompletos",
          "Debe llenar todos los campos"
        );
        return;
      }
      var params = this.setParams();

      axios.post("/admin/ventas", params).then((res) => {
        this.allorders.push(res.data);
        this.showSuccessNotification(
          "Venta agregado",
          "Venta agregado exitosamente."
        );
        this.resetFields();
        window.location.href = "/admin/ventas/";
      });
    },
    searchClient(){
        if(this.order.id_client!='0'){
            this.order.client='Zeus';
        }else{
            this.order.client='';
        }
    },
    searchEmployee(){
        if(this.order.id_employee!=0){
            this.order.employee='Juan';
            this.order.employee='';
        }
    },
    searchCoupon(){
        if(this.order.id_coupon!=0){
            this.order.coupon=50;
        }
    },
    setProcedure(){
      this.cake.id=1;
      this.cake.name="Pastel de chocolate";
      this.cake.price=245.00*.55;
        if(this.cake.id==1){
            this.orders.push(this.cake);
            this.order.sub+=245.00*.55;
            this.order.iva=this.order.sub*.16;
            this.order.total=this.order.iva+this.order.sub;
        }
    },
    unSetProcedure(item){
        this.orders.splice(this.orders.findIndex(a=>a.id === item.id),1);
        this.order.sub-=500;
        this.order.iva=this.order.sub*.16;
        this.order.total=this.order.iva+this.order.sub;
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
      this.cake.name = this.cake.name.trim();
      if (
        this.cake.name === "" ||
        document.getElementById("deleteImg").style.visibility != "visible" ||
        this.cake.price < 0 ||
        this.cake.description === ""
      ) {
        this.showErrorNotification(
          "Campos incompletos",
          "Debe llenar todos los campos y el precio debe ser mayor o igual a 0"
        );
        return;
      }
      var params = this.setParams();
      params.append("edit", this.cake.id);
      axios.post("/admin/ventas/", params).then((res) => {
        const index = this.allorders.findIndex(
          (search) => search.id === res.data.id
        );
        this.allorders[index] = res.data;
        this.showSuccessNotification(
          "Venta editado",
          "Se ha editado el pastel exitosamente"
        );
        window.location.href = "/admin/ventas/";
      });
    },
    showList() {
      window.location.href = "/admin/ventas/";
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
    OnDragEnter(e) {
      e.preventDefault();
      this.dragCount++;
      this.isDragging = true;
    },
    OnDragLeave(e) {
      e.preventDefault();
      this.dragCount--;
      if (this.dragCount <= 0) {
        this.isDragging = false;
      }
    },
    checkit(){
        // if(this.cake.id==10 || this.cake.id==100){
        //     this.cake.name="Pastel de chocolate";
        //     this.cake.description= "Pastel para 5 personas sabor chocolate";
        //     this.cake.price = 500;
        // }else{
        //     this.cake.name="";
        //     this.cake.description= "";
        //     this.cake.price = 0;
        // }
    },
    onDrop(e) {
      e.preventDefault();
      e.stopPropagation();
      this.dragCount = 0;
      this.isDragging = false;
      const files = e.dataTransfer.files;
      Array.from(files).forEach((file) => this.addImage(file));
    },
    onInputChange(e) {
      const files = e.target.files;
      Array.from(files).forEach((file) => this.addImage(file));
    },
    addImage(file) {
      if (!file.type.match("image.*")) {
        console.log(`${file.name} no es una imagen`);
        this.showErrorNotification("Añadir Imagen", "No es una imagen");
        return;
      }
      document.getElementById("deleteImg").style.visibility = "visible";
      var im = document.getElementById("pic");
      document.getElementById("pic").style.visibility = "visible";
      const img = new Image(),
        reader = new FileReader();
      reader.onload = (e) => (im.src = e.target.result);
      reader.readAsDataURL(file);
    },
    deleteImg() {
      document.getElementById("deleteImg").style.visibility = "hidden";
      document.getElementById("pic").style.visibility = "hidden";
    },
  },
};
</script>