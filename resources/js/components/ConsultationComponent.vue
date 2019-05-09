<template>
    <div class="htc__appoinment__form">
                                    <form  v-on:submit.prevent="onSubmit">
                                        <div class="htc__app__box__inner">
                                            <div class="htc__app__box">
                                                <div class="input_inner">
                                                    <input type="text" v-model="data.name" placeholder="نام خود را وارد کنید">
                                                </div>
                                            </div>
                                         </div>
                                        <div class="htc__app__box__inner">
                                            <div class="htc__app__box">
                                                <input type="email" v-model="data.email" placeholder="شماره همراه خود را وارد کنید">
                                            </div>
                                        </div>
                                        <div class="htc__app__box__inner">
                                            <div class="htc__app__box">
                                                <input type="text" v-model="data.tel" placeholder="مشاوره موضوع">
                                            </div>
                                        </div> 
                                        <div class="htc__app__box__inner">
                                            
                                            <div class="htc__app__box doctor_select">
                                                <div class="doctor_select_inner">
                                                    <select v-model="data.department">
                                                        <option value="1" selected>کاشت مو</option>
                                                        <option value="2" >کاشت ریش و سبیل</option>
                                                        <option value="3" >کاشت ابرو</option>
                                                        <option value="4" >مزوتراپی</option>
                                                    </select>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="appoinment_message">
                                            <div class="htc__app__box message" >
                                               <textarea name="Message" v-model="data.message" placeholder="توضیحات"></textarea>
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
                    tel: '',
                    message: '',
                    email: '',
                    department: ''
                },
                info: ''

            }
        },
        methods: {
            onSubmit(){
                console.log(this.data);
                axios.post('/api/consultation/', this.data).then(response => (this.info = response));

            }
        }
    }
</script>
