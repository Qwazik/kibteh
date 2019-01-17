import Vue from 'vue'
//import VeeValidate from 'vee-validate';
import swiper from 'swiper'
import Inputmask from "inputmask"

//Vue.use(VeeValidate);

//window.$ = window.jQuery = $;
window.Vue = Vue; 

Vue.component('vue-lang', {
    data: function(){
        return{
            isActive: false,
            closeTimeout: null
        }
    },
    props: ['current', 'other'],
    template: '#vue-lang',
    methods: {
        close: function(){
            this.isActive = false;
        },
        mouseenter: function(){
            clearTimeout(this.closeTimeout);
        },
        mouseleave: function($event){
            var that = this;
            this.closeTimeout = setTimeout(function(){
                that.close();
            },300)
        }
    }
});

Vue.component('vue-input', {
    props: ['type', 'title', 'placeholder', 'error-text', 'mask', 'validation', 'name'],
    data: function(){
        return{
            text: '',
            isFocus: false,
            isError: false
        }
    },
    methods: {
        blur: function(){
            if(this.text.length<1){
                this.isFocus=false
            }
        }
    },
    template: '#vue-input',
    directives: {
        masked: {
            inserted: function(el, binding){
                if(binding.value){
                    var inputmask = new Inputmask("+7(999) 999-99-99");
                    inputmask.mask(el);
                }
            }
        }
    }
})


var vm = new Vue({
    el: '#app'
});