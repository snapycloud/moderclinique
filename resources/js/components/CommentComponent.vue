<template>
                               <div class="comment_box_form">
                                <div class="comment_box_title text-right">
                                    <h3>پیام بگذارید</h3>
                                    <p v-if="error">لطفا موارد زیر را پر کنید *</p>
                                </div>
                                <div class="leave_comment_form">
                                    <form action="#">
                                        <div class="text-areabox">
                                            <textarea placeholder="Type Your Comment *"></textarea>
                                        </div>
                                        <div class="input_box half_left">
                                            <input type="text" placeholder="Your Name *" >
                                            
                                        </div>
                                        <div class="input_box half_right">
                                            <input type="email" placeholder="Your Email *" >
                                        </div>
                                        <div class="input_box">
                                            <input type="text" placeholder="Your Website" >
                                        </div>
                                        <div class="submit_button_inner">
                                            <button type="submit">Submit Comment</button>
                                        </div>
                                    </form>
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
