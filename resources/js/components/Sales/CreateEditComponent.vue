<template>
  <div class="p-3 text-center justify-content-center">
    <div id="" class="">
      <div class="card">
        <div class="card-header">
          <h1 v-if="selectedView === 'addView'">Registrar Venta</h1>
          <h1 v-else>Editar Venta</h1>
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
            <div class="card"></div>
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
                            <h4>Folio: {{ sale.id }}</h4>
                          </div>
                          <div class="col-xs-12 col-md-6 m-0">
                            <h4>Fecha: {{ sale.date }}</h4>
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
                  <br />
                  <br />
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
                              v-on:change="checkit"
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
                          >
                            Agregar Pastel
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br />
                  <br />
                  <div class="col-12 m-0 mt-5">
                    <div class="card">
                      <div class="card-header">
                        <h4>Pasteles en la Venta</h4>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive m-0 p-0">
                          <table
                            class="table table-hover table-striped table-bordered bg-white"
                          >
                            <thead class="thead-dark">
                              <tr class="text-center">
                                <th @click="sortTable('id')">ID</th>
                                <th @click="sortTable('name')" class="w-25">
                                  PASTEL
                                </th>
                                <th
                                  @click="sortTable('description')"
                                  class="w-25"
                                >
                                  DESCRIPCION
                                </th>
                                <th @click="sortTable('price')">PRECIO</th>
                                <th @click="sortTable('quantity')">CANTIDAD</th>
                                <th @click="sortTable('importe')">IMPORTE</th>
                                <th>OPCIONES</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr
                                v-for="(item, index) in sales"
                                :key="index"
                                class="text-center"
                              >
                                <td>{{ item.id }}</td>
                                <td class="w-25">{{ item.name }}</td>
                                <td class="w-25">{{ item.description }}</td>
                                <td>{{ item.price }}</td>
                                <td>{{ item.quantity }}</td>
                                <td>{{ item.importe }}</td>
                                <td class="m-0 p-0">
                                  <div class="col-12 m-0 p-0">
                                    <button
                                      class="btn btn-danger m-1 col-xl-3 col-xs-12"
                                      @click="unSetProcedure(item)"
                                    >
                                      <i class="el-icon-delete"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="col-12 m-0">
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
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-3 m-0">
                          <h4>Metodo de pago</h4>
                          <div class="w-100">
                            <select
                              v-model="sale.paymethod"
                              class="browser-default custom-select"
                            >
                              <option value="Efectivo">Efectivo</option>
                              <option value="Tarjeta">Tarjeta</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 text-center">
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
    sale: {},
  },
  data() {
    return {
      allsales: [],
      isValidPastel: true,
      sales: [],
      isDragging: false,
      array: [],
      cake: { id: 0 },
      allcakes: [],
      selectedView: "addView",
      csrf: document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content"),
    };
  },
  created() {
    axios.get("/admin/ventas").then((res) => {
      this.allsales = res.data;
    });
    axios.get("/admin/pasteles").then((res) => {
      this.allcakes = res.data;
    });
    if (this.sale.id == 0) {
      this.sale.paymethod = "Efectivo";
      this.selectedView = "addView";
      this.sale.id = this.allsales.length + 1;
      var x = { name: "Pastel de chocolate", id: 1, price: 245.0 };
      this.allsales.append(x);
    }
  },
  methods: {
    setParams() {
      if (document.getElementById("deleteImg").style.visibility === "visible") {
        let img = document.getElementById("pic");
        let canvas = document.createElement("canvas");
        canvas.width = img.naturalWidth;
        canvas.height = img.naturalHeight;
        let context = canvas.getContext("2d");
        context.drawImage(img, 0, 0);
        var url = canvas.toDataURL();
        var blobBin = atob(url.split(",")[1]);
        this.array = [];
        for (var i = 0; i < blobBin.length; i++) {
          this.array.push(blobBin.charCodeAt(i));
        }

        var file2 = new Blob([new Uint8Array(this.array)], {
          type: "image/png",
        });
        var params = new FormData();
        params.append("name", this.cake.name);
        params.append("description", this.cake.description);
        params.append("price", this.cake.price);
        params.append("image", file2);
        return params;
      }
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
        this.allsales.push(res.data);
        this.showSuccessNotification(
          "Venta agregado",
          "Venta agregado exitosamente."
        );
        this.resetFields();
        window.location.href = "/admin/ventas/";
      });
    },
    searchClient() {
      if (this.sale.id_client != "0") {
        this.sale.client = "Zeus";
      } else {
        this.sale.client = "";
      }
    },
    searchEmployee() {
      if (this.sale.id_employee != 0) {
        this.sale.employee = "Juan";
        this.sale.employee = "";
      }
    },
    searchCoupon() {
      if (this.sale.id_coupon != 0) {
        this.sale.coupon = 50;
      }
    },
    setProcedure() {
      var x={
        id:this.cake.id,
        name:this.cake.name,
        price:this.cake.price,
        description:this.cake.description
      };
      this.sales.push(x);
      this.sale.sub += 245.0 * 0.55;
      this.sale.iva = this.sale.sub * 0.16;
      this.sale.total = this.sale.iva + this.sale.sub;
    },
    unSetProcedure(item) {
      this.sales.splice(
        this.sales.findIndex((a) => a.id === item.id),
        1
      );
      this.sale.sub -= 500;
      this.sale.iva = this.sale.sub * 0.16;
      this.sale.total = this.sale.iva + this.sale.sub;
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
        const index = this.allsales.findIndex(
          (search) => search.id === res.data.id
        );
        this.allsales[index] = res.data;
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
    checkit() {
      this.cake.id = Number(this.cake.id);
      console.log(this.cake);
      var id = this.allcakes.findIndex(
        (a) => a.id.toString() === this.cake.id.toString()
      );
      // console.log(id);
      if (id == -1) {
        this.cake.name = "";
        this.cake.description = "";
        this.cake.price = 0;
        return;
      }
      console.log(this.allcakes[id]);
      this.cake.name = this.allcakes[id].name;
      this.cake.description = this.allcakes[id].description;
      this.cake.price = this.allcakes[id].price;
      this.cake.id = this.allcakes[id].id;
      console.log(this.cake);
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