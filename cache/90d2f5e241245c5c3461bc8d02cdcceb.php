

<?php $__env->startSection("content"); ?>
<div class="content-body">
    <div class="container-fluid">
        <form class="row" id="AppFac">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-4 ">
                            <div class="col-xl-7 col-sm-7">
                                <div class="mb-4">
                                    <a href="/factures" class="btn btn-outline-primary"> <i class="fa fa-arrow-left"></i> Retour </a>
                                </div>
                            </div>
                            <div class="col-xl-5 col-sm-5">
                                <div class="mb-3">
                                    <label for="client">Client</label>
                                    <select name="client" id="client" class="form-select">
                                        <option value=""></option>
                                        <?php $__currentLoopData = $comptes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($c->numero_cpte); ?>" data-info='<?php echo json_encode($c, 15, 512) ?>'>
                                                <?php echo e($c->libelle2); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <input type="text" hidden>
                                </div>
                                <div class="mb-3">
                                    <label for="client">Adresse</label>
                                    <input type="text" v-model="fac.adresse" class="form-control solid" id="exampleFormControlInput2" placeholder="Adresse client" readonly>
                                </div>
                                <div class="mb-3 mb-0">
                                    <span class="me-4 fw-bold text-dark">TVA : </span>
                                    <div class="form-check form-check-inline">
                                        <input v-model="fac.tva" class="form-check-input" id="yes" value="1" type="radio" name="gridRadios" value="option1" checked="">
                                        <label class="form-check-label" for="yes">
                                            OUI
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input v-model="fac.tva" class="form-check-input" value="0" type="radio" id="no" name="gridRadios" value="option2" checked="">
                                        <label class="form-check-label" for="no">
                                            NON
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-xl-4 col-sm-4">
                                <div class="form-group invoice">
                                    <label class="form-label required">FAC NO</label>
                                    <input type="text" class="form-control" placeholder="#INV-123124124">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-4">
                                <div class="form-group invoice">
                                    <label class="form-label required">REMISE</label>
                                    <input type="number" v-model="fac.remise" class="form-control" placeholder="0 %">
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-4">
                                <div class="form-group invoice">
                                    <label class="form-label required">DATE</label>
                                    <div class="input-hasicon mb-sm-0 mb-3">
                                        <input name="datepicker" class="form-control bt-datepicker">
                                        <div class="icon"><i class="far fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <colgroup>
                                    <col style="width: 1%;"> <!-- # -->
                                    <col style="width: 30%;"> <!-- Désignation -->
                                    <col style="width: 30%;"> <!-- Description -->
                                    <col style="width: 12%;"> <!-- PU -->
                                    <col style="width: 12%;"> <!-- QTE -->
                                    <col style="width: 10%;"> <!-- REMISE -->
                                    <col style="width: 5%;"> <!-- Devise -->
                                    <col style="width: 10%;"> <!-- S/Total -->
                                    <col style="width: 5%;"> <!-- Actions -->
                                </colgroup>
                                <thead>
                                    <tr class="fw-bold">
                                        <th class="center">#</th>
                                        <th>Designation</th>
                                        <th>Description</th>
                                        <th class="right">PU</th>
                                        <th class="center">QTE</th>
                                        <th class="center">Devise</th>
                                        <th class="right">S/Total</th>
                                        <th class="right"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in fac.items">
                                        <td class="center">{{ index+1 }}</td>
                                        <td class="left strong">
                                            <input type="text" v-model="item.designation" class="form-control shadow-sm bg-transparent m-0" placeholder="Designation...">
                                        </td>
                                        <td class="left">
                                            <input type="text" v-model="item.description" class="form-control shadow-sm bg-transparent m-0" placeholder="Description...">
                                        </td>
                                        <td class="right">
                                            <input type="number" v-model="item.pu" class="form-control shadow-sm bg-transparent m-0" placeholder="PU...">
                                        </td>
                                        <td class="center">
                                            <input type="number" v-model="item.qte" class="form-control shadow-sm bg-transparent m-0" placeholder="QTE...">
                                        </td>
                                        <td class="right">
                                            <select class="form-control m-0 shadow-sm" v-model="item.devise">
                                                <option value="USD">USD</option>
                                                <option value="CDF">CDF</option>
                                            </select>
                                        </td>
                                        <td class="right">{{ subtotal(item.pu,item.qte) }} {{ item.devise==='USD' ? '$':'F' }}</td>
                                        <td class="right">
                                            <a v-if="index===0" href="javascript:void(0)" @click="addItem" class="btn btn-primary btn-xs sharp"><i class="fa fa-plus"></i></a>
                                            <a v-else href="javascript:void(0)" @click="removeItem(index)" class="btn btn-danger btn-xs sharp"><i class="fa fa-close"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5"> </div>
                            <div class="col-lg-4 col-sm-5 ms-auto">
                                <table class="table table-clear">
                                    <tbody>
                                        <tr>
                                            <td class="left"><strong class="text-dark">Sous Total</strong></td>
                                            <td class="right">{{ totHt }} $</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong class="text-dark">Remise ({{ fac.remise }}%)</strong></td>
                                            <td class="right">{{ discount }} $</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong class="text-dark">TVA (16%)</strong></td>
                                            <td class="right">{{ tva }} $</td>
                                        </tr>
                                        <tr>
                                            <td class="left"><strong class="text-dark">Total NET</strong></td>
                                            <td class="right"><strong class="text-dark">{{ totNet }} $</strong><br>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <a href="javascript:void(0);" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" class="me-2" id="Object" viewBox="0 0 32 32" width="18" height="18">
                                <path fill="#FFFFFF" d="M30.71,7.29l-6-6A1,1,0,0,0,24,1H4A3,3,0,0,0,1,4V28a3,3,0,0,0,3,3H28a3,3,0,0,0,3-3V8A1,1,0,0,0,30.71,7.29ZM20,3V9H12V3ZM8,29V22a1,1,0,0,1,1-1H23a1,1,0,0,1,1,1v7Zm21-1a1,1,0,0,1-1,1H26V22a3,3,0,0,0-3-3H9a3,3,0,0,0-3,3v7H4a1,1,0,0,1-1-1V4A1,1,0,0,1,4,3h6V9a2,2,0,0,0,2,2h8a2,2,0,0,0,2-2V3h1.59L29,8.41Z" />
                            </svg>
                            Enregister & imprimer
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("scripts"); ?>

<script>
    new Vue({
        el:"#AppFac",
        data(){
            return{
                fac:{
                    remise:0,
                    tva:'0',
                    client:'',
                    adresse:'',
                    date:new Date().toISOString().split("T")[0],
                    items:[
                        {
                            designation:'',
                            description:'',
                            pu:'',
                            qte:'1',
                            devise:'USD'
                        }
                    ]
                }
                
            }
        },

        mounted() {
            const self = this;
            if ($(".bt-datepicker").length > 0) {
                $(".bt-datepicker")
                    .datepicker({
                        autoclose: true,
                        todayHighlight: true,
                    })
                    .datepicker("update", new Date())
                    .on("changeDate", function(e) {
                        self.fac.date = $(this).val(); 
                    });
            }
            $("#client").select2({
                placeholder: 'Sélectionnez un client',
                allowClear: true,
                language: {
                    searching: function() {
                        return "Recherchez un client...";
                    }
                }
            }).on("select2:open", function() {
                $(".select2-search__field").attr("placeholder", "Recherchez un client...");
            }).on("select2:select", function(e){
                let selectedOption = $("#client option:selected");
                let clientData = JSON.parse(selectedOption.attr("data-info"));
                self.fac.adresse = clientData.adresse
            });
        },

        methods:{
            addItem(){
                this.fac.items.push({
                    designation:'',
                    description:'',
                    pu:'',
                    qte:'1',
                    devise:'USD'
                });
            },
            removeItem(index){
                this.fac.items.splice(index,1);
            }
        },

        computed:{
            subtotal() {
                return (pu, qte) => {
                    const price = parseFloat(pu);
                    const quantity = parseInt(qte);
                    return isNaN(price) || isNaN(quantity) ? 0 : Math.round( price * quantity);
                }
            },

            totHt(){
                return this.fac.items.reduce((total, e) => {
                    const price = parseFloat(e.pu);
                    const quantity = parseInt(e.qte);
                    const subtotal = isNaN(price) || isNaN(quantity) ? 0 : price * quantity;
                    return Math.round(total + subtotal);
                }, 0);
            },

            discount() {
                const remise = parseInt(this.fac.remise);
                return isNaN(remise) ? 0 : Math.round(this.totHt * (remise / 100));
            },

            tva() {
                return this.fac.tva !== '0' ? Math.round(this.totHt * 0.16) : 0; 
            },

            totNet() {
                return Math.round(this.totHt - this.discount + this.tva);
            }
        }
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.app", array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Delimond\Documents\DEVFOLDER\PHP\erpa-v2\src\Views/pages/fac/facCreate.blade.php ENDPATH**/ ?>