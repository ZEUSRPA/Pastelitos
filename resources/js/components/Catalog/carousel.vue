<template>
  <div>
    <h1 class="font-weight-bold text-center awesome">
      Pastelería "Pastelitos"
    </h1>
    <br />
    <h2 class="font-weight-bold text-center">
      Pasteles que deleitarán sus sentidos en los momentos más especiales...
      <img class="imgmax" src="/storage/love.gif" />
    </h2>

    <br />
    <br />

    <el-carousel indicator-position="outside">
      <el-carousel-item>
        <img src="/storage/uwpaste.png" class="w-100" />
      </el-carousel-item>
      <el-carousel-item>
        <img src="/storage/uwpaste2.png" class="w-100" />
      </el-carousel-item>
      <el-carousel-item>
        <img src="/storage/uwpaste3.png" class="w-100" />
      </el-carousel-item>
    </el-carousel>
    <div class="row mt-3">
      <div class="col-sm-12 col-lg-6 col-md-6 p-4">
        <div class="card marg2 p-2">
          <div class="card-body marg text-center h5 p-4 pb-5">
            Misión <br /><br />
            Somos una empresa familiar dedica a la elaboración de pasteles y
            productos relacionados a la repostería, y las bases de nuestro
            trabajo son brindar un servicio óptimo, satisfactorio y económico al
            cliente.
            <br />
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6 col-md-6 p-4">
        <div class="card marg2 p-2">
          <div class="card-body marg text-center h5 p-4 pb-5">
            Visión <br /><br />
            Nuestro propósito es ser una de las mejores panaderías ofreciendo lo
            mejor que tenemos. Así cumpliendo con una de las empresas de la
            mejor calidad junto con trabajadores eficaces de sacar la empresa a
            delante.
          </div>
        </div>
      </div>
      <div class="col-sm-6"></div>
    </div>
    <div class="row mt-3">
      <div class="col-sm-12 col-lg-6 col-md-6 p-4">
        <div class="card marg2 p-2">
          <div class="card-body marg text-left h5 p-4 pb-5">
            <center>Objetivos</center> <br /><br />
            <ul>
            <li>Ser una de las mejores panadería por destacarnos en la suavidad y
            calidad de nuestros productos. </li>
            <li>Ser destacados por la entrega puntual
            de los pedidos a domicilio y satisfacer la necesidad de nuestros.</li>
            clientes.
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6 col-md-6 p-4">
        <div class="card marg2 p-2">
          <div class="card-body marg text-left h5 p-4 pb-5">
            <center>Valores </center><br /><br />
            <ul> 
                <li>Respeto</li>
                <li>Honestidad</li>
                <li>Cordialidad</li>
                <li>Solidaridad</li>
                <li>Tolerancia</li>
                </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-6"></div>
    </div>
  </div>
</template>

<style>
.el-carousel__item h3 {
  color: #475669;
  font-size: 18px;
  opacity: 0.75;
  line-height: 300px;
  margin: 0;
}

.el-carousel__item:nth-child(2n) {
  background-color: rgb(255, 219, 225);
}

.el-carousel__item:nth-child(2n + 1) {
  background-color: rgb(255, 219, 225);
}
.imgmax {
  max-height: 50px;
}
.marg {
  border: 1px solid rgb(245, 150, 166);
}
.marg2 {
  border: 2px solid deeppink;
}
.awesome {
  color: deeppink;
}
</style>
