<template>
    <div class="p-3 text-center">
        <div id="" class="">
            <div class="m-19">
                <div class="">
                    <h1>Listado de empleados</h1><br><br>
                </div>
                <div class="row col-12">
                    <div class="row col-12 m-0 p-0">
                        <div class="text-left col-sm-3 col-lg-2 col-xl-1 m-0 p-0">
                            <button class="btn btn-success col-12 m-0 pl-0 pr-0" @click="setAddView()"><i class="el-icon-plus"></i>Añadir</button>
                        </div>
                        <div class="text-right col-sm-9 col-lg-10 col-xl-11 m-0 p-0">
                            <input type="text" class="form-control col-lg-4 col-sm-8 d-inline m-0 mt-1 mb-1" placeholder="Buscar" v-model="search" v-on:keyup="searching(1)" >
                            <button class="btn btn-primary col-sm-2 col-lg-1 m-0 mb-1" @click="searching(1)"><i class="el-icon-search"></i></button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-striped table-bordered bg-white">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <th @click="sortTable('id')">ID</th>
                                    <th @click="sortTable('name')">NOMBRE</th>
                                    <th @click="sortTable('price')">CORREO</th>
                                    <th>OPCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(item,index) in empleados" :key="index" class="text-center">
                                    <td>{{item.id}}</td>
                                    <td class="w-50">{{item.user.name}}</td>
                                    <td class="w-25">{{item.user.email}}</td>
                                    <td class="m-0 p-0">
                                        <div class="col-12 m-0">
                                            <button class="btn btn-info m-1 col-xl-3 col-xs-12" @click="setDetailsView(item)"><i class="el-icon-view"></i></button>

                                            <button class="btn btn-secondary m-1 col-xl-3 col-xs-12 border-dark" @click="setEditView(item)"><i class="el-icon-edit"></i></button>

                                            <button class="btn btn-danger m-1 col-xl-3 col-xs-12" @click="deletecake(item,index)"><i class="el-icon-delete"></i></button>
                                        </div>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h3 class="bg-red" v-if="selectedemployees.length == 0">NO SE ENCONTRARON REGISTROS!!!</h3>
                    
                    <div class="pagination col-12">
                        <div class="text-left col-4">
                            <button class="btn btn-default p-0 mr-2" @click="updateTable(-1)" :disabled="actualPage==0"><i class="el-icon-arrow-left"></i></button>
                            <span class="">{{actualPage+1}} de {{totalPages}}</span>
                            <button class="btn btn-default p-0 ml-2" @click="updateTable(1)" :disabled="actualPage+1==totalPages"><i class="el-icon-arrow-right"></i></button>
                        </div>
                        <div class="text-right col-8">
                            <h5 class="text-info ml-5">{{selectedemployees.length}} registros encontrados</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        data(){
            return {
                empleados:[],
                order:0,
                auxi:{},
                allemployees:[],
                pagination:10.0,
                selectedemployees:[],
                employee:{name: ''},
                actualPage:0,
                totalPages:0,
                search:'',
                editing: false
            }
        },
        created:function(){
            axios.get('/admin/empleados').then(res=>{
                this.allemployees=res.data;
                
                console.log(this.allemployees);
                this.selectedemployees=this.allemployees;
                this.totalPages=Math.ceil(this.selectedemployees.length/this.pagination);
                this.searching(2);
            });
            

        },
        methods:{
            reloadPage(){
                window.location.reload(true);
            },
            searching(value){
                if(this.search.trim() === ''){
                    if(value==1){
                        this.actualPage=0;
                    }
                    this.selectedemployees=this.allemployees;
                    this.updateTotalPages();
                    this.updateTable(0);
                }else{
                    this.selectedemployees=[];
                    for(let l of this.allemployees){
                        if(l.user.name.toLowerCase().indexOf(this.search.toLowerCase().trim())>-1){
                            this.selectedemployees.push(l);
                        }else if(l.id.toString().indexOf(this.search.toLowerCase().trim())>-1){
                            this.selectedemployees.push(l);
                        }else if(l.user.email.toString().indexOf(this.search.trim())>-1){
                            this.selectedemployees.push(l);
                        }
                    }
                    if(value === 1){
                        this.actualPage=0;
                    }
                    this.updateTotalPages();
                    this.updateTable(0);
                }
            },
            updateTable(change){
                this.actualPage+=change;
                if(this.totalPages<this.actualPage+1){
                    this.actualPage--;
                }
                this.empleados=this.selectedemployees.slice(this.actualPage*this.pagination,this.actualPage*this.pagination+this.pagination);
            },
            updateTotalPages(){
                this.totalPages = Math.ceil(this.selectedemployees.length/this.pagination);
            },
            deletecake(item,index){
                this.$confirm('Realmente desea eliminar el pastel','Alerta',{
                    confirmButtonText:'Continuar',
                    cancelButtonText: 'Cancelar',
                    type:'warning'
                }).then(()=>{
                    console.log(item.id);
                    axios.delete(`/admin/empleados/${item.id}`).then(res=>{
                        if(res.data['information'] === 'good'){
                            this.allemployees.splice(this.allemployees.findIndex(a=>a.id === item.id),1);
                            this.searching(2);
                            this.showSuccessNotification('Pastel eliminado','El pastel fue eliminado exitosamente');
                        }else{
                            this.showErrorNotification('Error al eliminar','El pastel se encuentra asignado en un pedido');
                        }

                    });

                }).catch(()=>{
                    this.$notify({
                        type: 'info',
                        title: 'Eliminacion cancelada',
                        message: 'La eliminación ha sido cancelada'
                    });
                });
            },
            showSuccessNotification(title,text){
                this.$notify({
                    title: title,
                    message:text,
                    type: 'success'
                });
            },
            showErrorNotification(title,text){
                this.$notify({
                    title:title,
                    message: text,
                    type: 'error'
                })
            },
            setAddView(){
                window.location.href="/admin/empleados/agregar";
            },
            setDetailsView(item){
                window.location.href="/admin/empleados/"+item.id;

            },
            setEditView(item){
                this.editing=true;
                window.location.href="/admin/empleados/editar/"+item.id;
            },
            sortTable(value){
                if(this.order === 1){
                    this.order=2;
                }else{
                    this.order=1;
                }
                if(value ==='id'){
                    if(this.order===1){
                        this.selectedemployees.sort(function(a,b){return a.id<b.id?-1:a.id>b.id});
                    }else{
                        this.selectedemployees.sort(function(a,b){return a.id>b.id?-1:a.id<b.id});
                    }
                }else if(value === 'name'){
                    if(this.order===1){
                        this.selectedemployees.sort(function(a,b){return a.name<b.name?-1:a.name>b.name});
                    }else{
                        this.selectedemployees.sort(function(a,b){return a.name>b.name?-1:a.name<b.name});
                    }
                }else if(value === 'price'){
                    this.selectedemployees.sort(function(a,b){return a.price>b.price?-1:a.price<b.price});
                }
                this.updateTable(0);
            }
        }

    }
</script>
