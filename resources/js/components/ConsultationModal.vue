<template>
    <div id="oppoinment" class="modal modal-lg fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">

    <div class="htc__appoinment__form">
        <div class="alert alert-danger" role="alert" v-if="error" >
          اطلاعات وارد شده اشتباه است.
        </div>
        <div class="alert alert-success" role="alert" v-if="success">
          .در خواست شما با موفقیت ثبت شد
        </div>


                                    <form  v-on:submit.prevent="onSubmit" v-if="!success">
                                        <div class="htc__app__box__inner">
                                            <div class="htc__app__box">
                                                <div class="input_inner">
                                                    <input type="text" v-model="data.name" placeholder="نام خود را وارد کنید">
                                                </div>
                                            </div>
                                         </div>
                                        <div class="htc__app__box__inner">
                                            <div class="htc__app__box">
                                                <input type="text" v-model="data.phoneNumber" placeholder="شماره همراه خود را وارد کنید">
                                            </div>
                                        </div>
                                        <div class="htc__app__box__inner">
                                            <div class="htc__app__box">
                                                <input type="email" v-model="data.emailAddress" placeholder="پست الکترونیک">
                                            </div>
                                        </div> 
                                        <div class="htc__app__box__inner">
                                            
                                            <div class="htc__app__box doctor_select">
                                                <div class="doctor_select_inner">
                                                    <select v-model="data.department" >
                                                        <option value="planting hair">کاشت مو</option>
                                                        <option value="Planting beard and mustache" >کاشت ریش و سبیل</option>
                                                        <option value="eyebrow transplant" >کاشت ابرو</option>
                                                        <option value="Mesotherapy" >مزوتراپی</option>
                                                    </select>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="appoinment_message">
                                            <div class="htc__app__box message" >
                                               <textarea name="Message" v-model="data.description" placeholder="توضیحات"></textarea>
                                            </div>
                                            <div class="ht__appoin__btn">
                                                <button type="submit">ثبت درخواست</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>  
                                      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                data: {
                    name: '',
                    tel: '',
                    message: '',
                    email: '',
                    department: ''
                },
                info: '',
                error: false,
                success: false,
                errors: false

            }
        },
        methods: {
            onSubmit(){
                let self = this;
                axios.post('/api/consultation/', this.data).then(response => {
                    this.info = response
                    this.error = false;
                    this.errors = false;
                    this.success = true;
                }).catch(error => {
                    self.error = true;
                    this.success = false;
                    self.errors = error.response.data.errors;
                });

            }
        }
    }
</script>

<style>

</style>
