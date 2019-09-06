<template>
    <div class="htc__appoinment__form">
        <div class="alert alert-danger" role="alert" v-if="error" v-for="error in errors">
          {{ error[0] }}
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
                                                <input type="email" v-model="data.emailAddress" placeholder="پست الکترونیک (اختیاری)">
                                            </div>
                                        </div> 
                                        <div class="htc__app__box__inner">
                                            
                                            <div class="htc__app__box doctor_select">
                                                <div class="doctor_select_inner">
                                                    <select v-model="data.rate" >
                                                        <option value="1" >۱</option>
                                                        <option value="2" >۲</option>
                                                        <option value="3" >۳</option>
                                                        <option value="4" >۴</option>
                                                        <option value="5" >۵</option>
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
                    rate: '',
                    message: '',
                    email: ''
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
                axios.post('/api/article/comment', this.data).then(response => {
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
